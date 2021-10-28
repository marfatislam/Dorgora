<?php

/**
 *
 * @package Duplicator
 * @copyright (c) 2021, Snapcreek LLC
 *
 */

namespace Duplicator\Libs\Snap;

defined('ABSPATH') || defined('DUPXABSPATH') || exit;

/**
 * Wordpress utility functions
 *
 * old: SnapWP
 */
class SnapWP
{
    const PATH_FULL     = 0;
    const PATH_RELATIVE = 1;
    const PATH_AUTO     = 2;

    private static $corePathList = null;
    private static $safeAbsPath  = null;

    /**
     *
     * @var string if not empty alters isWpCore's operation
     */
    private static $wpCoreRelativePath = '';

    /**
     * return safe ABSPATH without last /
     * perform safe function only one time
     *
     * @return string
     */
    public static function getSafeAbsPath()
    {
        if (is_null(self::$safeAbsPath)) {
            if (defined('ABSPATH')) {
                self::$safeAbsPath = SnapIO::safePathUntrailingslashit(ABSPATH);
            } else {
                self::$safeAbsPath = '';
            }
        }

        return self::$safeAbsPath;
    }

    /**
     *
     * @param string $folder
     * @return boolean  // return true if folder is wordpress home folder
     *
     */
    public static function isWpHomeFolder($folder)
    {
        $indexPhp = SnapIO::trailingslashit($folder) . 'index.php';
        if (!file_exists($indexPhp)) {
            return false;
        }

        if (($indexContent = file_get_contents($indexPhp)) === false) {
            return false;
        }

        return (preg_match('/require\s*[\s\(].*[\'"].*wp-blog-header.php[\'"]\s*\)?/', $indexContent) === 1);
    }

    /**
     * This function is the equivalent of the get_home_path function but with various fixes
     *
     * @staticvar string $home_path
     * @return string
     */
    public static function getHomePath()
    {
        static $home_path = null;

        if (is_null($home_path)) {
            // outside wordpress this function makes no sense
            if (!defined('ABSPATH')) {
                $home_path = false;
                return $home_path;
            }

            if (isset($_SERVER['SCRIPT_FILENAME']) && is_readable($_SERVER['SCRIPT_FILENAME'])) {
                $scriptFilename = $_SERVER['SCRIPT_FILENAME'];
            } else {
                $files          = get_included_files();
                $scriptFilename = array_shift($files);
            }

            $realScriptDirname = SnapIO::safePathTrailingslashit(dirname($scriptFilename), true);
            $realAbsPath       = SnapIO::safePathTrailingslashit(ABSPATH, true);

            if (strpos($realScriptDirname, $realAbsPath) === 0) {
                // normalize URLs without www
                $home    = SnapURL::wwwRemove(set_url_scheme(get_option('home'), 'http'));
                $siteurl = SnapURL::wwwRemove(set_url_scheme(get_option('siteurl'), 'http'));

                if (!empty($home) && 0 !== strcasecmp($home, $siteurl)) {
                    if (stripos($siteurl, $home) === 0) {
                        $wp_path_rel_to_home = str_ireplace($home, '', $siteurl); /* $siteurl - $home */
                        $pos                 = strripos(str_replace('\\', '/', $scriptFilename), SnapIO::trailingslashit($wp_path_rel_to_home));
                        $home_path           = substr($scriptFilename, 0, $pos);
                        $home_path           = SnapIO::trailingslashit($home_path);
                    } else {
                        $home_path = ABSPATH;
                    }
                } else {
                    $home_path = ABSPATH;
                }
            } else {
                // On frontend the home path is the folder of index.php
                $home_path = SnapIO::trailingslashit(dirname($scriptFilename));
            }

            // make sure the folder exists or consider ABSPATH
            if (!file_exists($home_path)) {
                $home_path = ABSPATH;
            }

            $home_path = str_replace('\\', '/', $home_path);
        }
        return $home_path;
    }

    /**
     * Return admin url, if is multisite return network_admin_url
     *
     * @param string $path   Optional. Path relative to the admin URL. Default 'admin'.
     * @param string $scheme The scheme to use. Default is 'admin', which obeys force_ssl_admin() and is_ssl().
     *                       'http' or 'https' can be passed to force those schemes.
     * @return string Admin  URL link with optional path appended.
     */
    public static function getAdminUrl($path, $scheme = 'admin')
    {
        if (is_multisite()) {
            return network_admin_url($path, $scheme);
        } else {
            return admin_url($path, $scheme);
        }
    }


    public static function setWpCoreRelativeAbsPath($string = '')
    {
        self::$wpCoreRelativePath = (string) $string;
    }

    /**
     * check if path is in wordpress core list
     *
     * @param string $path
     * @param int $fullPath // if PATH_AUTO check if is a full path or relative path
     *                         if PATH_FULL remove ABSPATH len without check
     *                         if PATH_RELATIVE consider path a relative path
     * @param bool $isSafe // if false call rtrim(SnapIO::safePath( PATH ), '/')
     *                        if true consider path a safe path without check
     *
     *  PATH_FULL and PATH_RELATIVE is better optimized and perform less operations
     *
     * @return boolean
     */
    public static function isWpCore($path, $fullPath = self::PATH_AUTO, $isSafe = false)
    {
        if ($isSafe == false) {
            $path = rtrim(SnapIO::safePath($path), '/');
        }

        switch ($fullPath) {
            case self::PATH_FULL:
                $absPath = self::getSafeAbsPath();
                if (strlen($path) < strlen($absPath)) {
                    return false;
                }
                $relPath = ltrim(substr($path, strlen($absPath)), '/');
                break;
            case self::PATH_RELATIVE:
                if (($relPath = SnapIO::getRelativePath($path, self::$wpCoreRelativePath)) === false) {
                    return false;
                }
                break;
            case self::PATH_AUTO:
            default:
                $absPath = self::getSafeAbsPath();
                if (strpos($path, $absPath) === 0) {
                    $relPath = ltrim(substr($path, strlen($absPath)), '/');
                } else {
                    $relPath = ltrim($path, '/');
                }
        }

        // if rel path is empty is consider root path so is a core folder.
        if (strlen($relPath) === 0) {
            return true;
        }

        $pExploded = explode('/', $relPath);
        $corePaths = self::getCorePathsList();

        foreach ($pExploded as $current) {
            if (!isset($corePaths[$current])) {
                return false;
            }

            if (is_scalar($corePaths[$current])) {
                // is file so don't have childs
                $corePaths = array();
            } else {
                $corePaths = $corePaths[$current];
            }
        }
        return true;
    }

    /**
     *
     * @param string $relPath // if empty is consider abs root path
     * @return array    // [ 'dirs' => [] , 'files' => [] ]
     */
    public static function getWpCoreFilesListInFolder($relPath = '')
    {
        $corePaths = self::getCorePathsList();
        if (strlen($relPath) > 0) {
            $pExploded = explode('/', $relPath);
            foreach ($pExploded as $current) {
                if (!isset($corePaths[$current])) {
                    $corePaths = array();
                    break;
                }

                if (is_scalar($corePaths[$current])) {
                    // is file so don't have childs
                    $corePaths = array();
                } else {
                    $corePaths = $corePaths[$current];
                }
            }
        }

        $result = array(
            'dirs'  => array(),
            'files' => array()
        );

        foreach ($corePaths as $name => $content) {
            if (is_array($content)) {
                $result['dirs'][] = $name;
            } else {
                $result['files'][] = $name;
            }
        }

        return $result;
    }

    /**
     * get core path list from relative abs path
     * [
     *      'folder' => [
     *          's-folder1' => [
     *              file1 => [],
     *              file2 => [],
     *          ],
     *          's-folder2' => [],
     *          file1 => []
     *      ]
     * ]
     *
     * @return array
     */
    public static function getCorePathsList()
    {
        if (is_null(self::$corePathList)) {
            require_once(dirname(__FILE__) . '/wordpress_core_files.php');
        }
        return self::$corePathList;
    }

    /**
     * Return object list of sites
     *
     * @param string|array $args list of flters, see wordpress get_sites function
     *
     * @return WP_Site[]
     */
    public static function getSites($args = array())
    {
        if (!function_exists('is_multisite') || !is_multisite()) {
            return false;
        }

        if (function_exists('get_sites')) {
            return get_sites($args);
        } else {
            $result = array();
            $blogs  = wp_get_sites($args);
            foreach ($blogs as $blog) {
                $result[] = (object) $blog;
            }
            return $result;
        }
    }

    /**
     * return the list of possible dropins plugins
     *
     * @return [string]
     */
    public static function getDropinsPluginsNames()
    {
        return array(
            'advanced-cache.php', // WP_CACHE
            'db.php', // auto on load
            'db-error.php', // auto on error
            'install.php', // auto on installation
            'maintenance.php', // auto on maintenance
            'object-cache.php', // auto on load
            'php-error.php', // auto on error
            'fatal-error-handler.php', // auto on error
            'sunrise.php',
            'blog-deleted.php',
            'blog-inactive.php',
            'blog-suspended.php'
        );
    }
}
