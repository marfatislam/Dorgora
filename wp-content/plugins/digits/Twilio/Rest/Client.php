<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Client as HttpClient;
use Twilio\Http\CurlClient;
use Twilio\Http\Response;
use Twilio\InstanceContext;
use Twilio\Rest\Api\V2010\Account\AddressContext;
use Twilio\Rest\Api\V2010\Account\AddressList;
use Twilio\Rest\Api\V2010\Account\ApplicationContext;
use Twilio\Rest\Api\V2010\Account\ApplicationList;
use Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppContext;
use Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList;
use Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryContext;
use Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryList;
use Twilio\Rest\Api\V2010\Account\BalanceList;
use Twilio\Rest\Api\V2010\Account\CallContext;
use Twilio\Rest\Api\V2010\Account\CallList;
use Twilio\Rest\Api\V2010\Account\ConferenceContext;
use Twilio\Rest\Api\V2010\Account\ConferenceList;
use Twilio\Rest\Api\V2010\Account\ConnectAppContext;
use Twilio\Rest\Api\V2010\Account\ConnectAppList;
use Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberContext;
use Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberList;
use Twilio\Rest\Api\V2010\Account\KeyContext;
use Twilio\Rest\Api\V2010\Account\KeyList;
use Twilio\Rest\Api\V2010\Account\MessageContext;
use Twilio\Rest\Api\V2010\Account\MessageList;
use Twilio\Rest\Api\V2010\Account\NewKeyList;
use Twilio\Rest\Api\V2010\Account\NewSigningKeyList;
use Twilio\Rest\Api\V2010\Account\NotificationContext;
use Twilio\Rest\Api\V2010\Account\NotificationList;
use Twilio\Rest\Api\V2010\Account\OutgoingCallerIdContext;
use Twilio\Rest\Api\V2010\Account\OutgoingCallerIdList;
use Twilio\Rest\Api\V2010\Account\QueueContext;
use Twilio\Rest\Api\V2010\Account\QueueList;
use Twilio\Rest\Api\V2010\Account\RecordingContext;
use Twilio\Rest\Api\V2010\Account\RecordingList;
use Twilio\Rest\Api\V2010\Account\ShortCodeContext;
use Twilio\Rest\Api\V2010\Account\ShortCodeList;
use Twilio\Rest\Api\V2010\Account\SigningKeyContext;
use Twilio\Rest\Api\V2010\Account\SigningKeyList;
use Twilio\Rest\Api\V2010\Account\SipList;
use Twilio\Rest\Api\V2010\Account\TokenList;
use Twilio\Rest\Api\V2010\Account\TranscriptionContext;
use Twilio\Rest\Api\V2010\Account\TranscriptionList;
use Twilio\Rest\Api\V2010\Account\UsageList;
use Twilio\Rest\Api\V2010\Account\ValidationRequestList;
use Twilio\Rest\Api\V2010\AccountContext;
use Twilio\Rest\Api\V2010\AccountInstance;
use Twilio\VersionInfo;

/**
 * A client for accessing the Twilio API.
 * 
 * @property Accounts accounts
 * @property Api api
 * @property Authy authy
 * @property Autopilot autopilot
 * @property Chat chat
 * @property Fax fax
 * @property IpMessaging ipMessaging
 * @property Lookups lookups
 * @property Monitor monitor
 * @property Notify notify
 * @property Preview preview
 * @property Pricing pricing
 * @property Proxy proxy
 * @property Taskrouter taskrouter
 * @property Trunking trunking
 * @property Video video
 * @property Messaging messaging
 * @property Wireless wireless
 * @property Sync sync
 * @property Studio studio
 * @property Verify verify
 * @property Voice voice
 * @property AccountInstance account
 * @property AddressList addresses
 * @property ApplicationList applications
 * @property AuthorizedConnectAppList authorizedConnectApps
 * @property AvailablePhoneNumberCountryList availablePhoneNumbers
 * @property BalanceList balance
 * @property CallList calls
 * @property ConferenceList conferences
 * @property ConnectAppList connectApps
 * @property IncomingPhoneNumberList incomingPhoneNumbers
 * @property KeyList keys
 * @property MessageList messages
 * @property NewKeyList newKeys
 * @property NewSigningKeyList newSigningKeys
 * @property NotificationList notifications
 * @property OutgoingCallerIdList outgoingCallerIds
 * @property QueueList queues
 * @property RecordingList recordings
 * @property SigningKeyList signingKeys
 * @property SipList sip
 * @property ShortCodeList shortCodes
 * @property TokenList tokens
 * @property TranscriptionList transcriptions
 * @property UsageList usage
 * @property ValidationRequestList validationRequests
 * @method AccountContext accounts(string $sid)
 * @method AddressContext addresses(string $sid)
 * @method ApplicationContext applications(string $sid)
 * @method AuthorizedConnectAppContext authorizedConnectApps(string $connectAppSid)
 * @method AvailablePhoneNumberCountryContext availablePhoneNumbers(string $countryCode)
 * @method CallContext calls(string $sid)
 * @method ConferenceContext conferences(string $sid)
 * @method ConnectAppContext connectApps(string $sid)
 * @method IncomingPhoneNumberContext incomingPhoneNumbers(string $sid)
 * @method KeyContext keys(string $sid)
 * @method MessageContext messages(string $sid)
 * @method NotificationContext notifications(string $sid)
 * @method OutgoingCallerIdContext outgoingCallerIds(string $sid)
 * @method QueueContext queues(string $sid)
 * @method RecordingContext recordings(string $sid)
 * @method SigningKeyContext signingKeys(string $sid)
 * @method ShortCodeContext shortCodes(string $sid)
 * @method TranscriptionContext transcriptions(string $sid)
 */
class Client {
    const ENV_ACCOUNT_SID = "TWILIO_ACCOUNT_SID";
    const ENV_AUTH_TOKEN = "TWILIO_AUTH_TOKEN";

    protected $username;
    protected $password;
    protected $accountSid;
    protected $region;
    protected $httpClient;
    protected $_account;
    protected $_accounts = null;
    protected $_api = null;
    protected $_authy = null;
    protected $_autopilot = null;
    protected $_chat = null;
    protected $_fax = null;
    protected $_ipMessaging = null;
    protected $_lookups = null;
    protected $_monitor = null;
    protected $_notify = null;
    protected $_preview = null;
    protected $_pricing = null;
    protected $_proxy = null;
    protected $_taskrouter = null;
    protected $_trunking = null;
    protected $_video = null;
    protected $_messaging = null;
    protected $_wireless = null;
    protected $_sync = null;
    protected $_studio = null;
    protected $_verify = null;
    protected $_voice = null;

    /**
     * Initializes the Twilio Client
     * 
     * @param string $username Username to authenticate with
     * @param string $password Password to authenticate with
     * @param string $accountSid Account Sid to authenticate with, defaults to
     *                           $username
     * @param string $region Region to send requests to, defaults to no region
     *                       selection
     * @param HttpClient $httpClient HttpClient, defaults to CurlClient
     * @param mixed[] $environment Environment to look for auth details, defaults
     *                             to $_ENV
     *
     * @return Client Twilio Client
     * @throws ConfigurationException If valid authentication is not present
     */
    public function __construct($username = null, $password = null, $accountSid = null, $region = null, HttpClient $httpClient = null, $environment = null) {
        if (is_null($environment)) {
            $environment = $_ENV;
        }

        if ($username) {
            $this->username = $username;
        } else {
            if (array_key_exists(self::ENV_ACCOUNT_SID, $environment)) {
                $this->username = $environment[self::ENV_ACCOUNT_SID];
            }
        }

        if ($password) {
            $this->password = $password;
        } else {
            if (array_key_exists(self::ENV_AUTH_TOKEN, $environment)) {
                $this->password = $environment[self::ENV_AUTH_TOKEN];
            }
        }

        if (!$this->username || !$this->password) {
            throw new ConfigurationException("Credentials are required to create a Client");
        }

        $this->accountSid = $accountSid ?: $this->username;
        $this->region = $region;

        if ($httpClient) {
            $this->httpClient = $httpClient;
        } else {
            $this->httpClient = new CurlClient();
        }
    }

    /**
     * Makes a request to the Twilio API using the configured http client
     * Authentication information is automatically added if none is provided
     * 
     * @param string $method HTTP Method
     * @param string $uri Fully qualified url
     * @param string[] $params Query string parameters
     * @param string[] $data POST body data
     * @param string[] $headers HTTP Headers
     * @param string $username User for Authentication
     * @param string $password Password for Authentication
     * @param int $timeout Timeout in seconds
     * @return Response Response from the Twilio API
     */
    public function request($method, $uri, $params = array(), $data = array(), $headers = array(), $username = null, $password = null, $timeout = null) {
        $username = $username ? $username : $this->username;
        $password = $password ? $password : $this->password;

        $headers['User-Agent'] = 'twilio-php/' . VersionInfo::string() .
                                 ' (PHP ' . phpversion() . ')';
        $headers['Accept-Charset'] = 'utf-8';

        if ($method == 'POST' && !array_key_exists('Content-Type', $headers)) {
            $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        }

        if (!array_key_exists('Accept', $headers)) {
            $headers['Accept'] = 'application/json';
        }

        if ($this->region) {
            list($head, $tail) = explode('.', $uri, 2);

            if (strpos($tail, $this->region) !== 0) {
                $uri = implode('.', array($head, $this->region, $tail));
            }
        }

        return $this->getHttpClient()->request(
            $method,
            $uri,
            $params,
            $data,
            $headers,
            $username,
            $password,
            $timeout
        );
    }

    /**
     * Retrieve the HttpClient
     *
     * @return HttpClient Current HttpClient
     */
    public function getHttpClient() {
        return $this->httpClient;
    }

    /**
     * Set the HttpClient
     *
     * @param HttpClient $httpClient HttpClient to use
     */
    public function setHttpClient(HttpClient $httpClient) {
        $this->httpClient = $httpClient;
    }

    /**
     * Retrieve the Username
     *
     * @return string Current Username
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Retrieve the Password
     *
     * @return string Current Password
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Retrieve the Region
     *
     * @return string Current Region
     */
    public function getRegion() {
        return $this->region;
    }

    /**
     * @return AccountContext Account provided as the
     *                                               authenticating account
     */
    public function getAccount() {
        return $this->api->v2010->account;
    }

    /**
     * Magic getter to lazy load domains
     *
     * @param string $name Domain to return
     * @return Domain The requested domain
     * @throws TwilioException For unknown domains
     */
    public function __get($name) {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown domain ' . $name);
    }

    /**
     * Magic call to lazy load contexts
     *
     * @param string $name Context to return
     * @param mixed[] $arguments Context to return
     * @return InstanceContext The requested context
     * @throws TwilioException For unknown contexts
     */
    public function __call($name, $arguments) {
        $method = 'context' . ucfirst($name);
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $arguments);
        }

        throw new TwilioException('Unknown context ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Client ' . $this->getAccountSid() . ']';
    }

    /**
     * Retrieve the AccountSid
     *
     * @return string Current AccountSid
     */
    public function getAccountSid() {
        return $this->accountSid;
    }

    /**
     * Validates connection to new SSL certificate endpoint
     *
     * @param CurlClient $client
     * @throws TwilioException if request fails
     */
    public function validateSslCertificate($client) {
        $response = $client->request('GET', 'https://api.twilio.com:8443');

        if ($response->getStatusCode() < 200 || $response->getStatusCode() > 300) {
            throw new TwilioException("Failed to validate SSL certificate");
        }
    }

    /**
     * Access the Accounts Twilio Domain
     *
     * @return Accounts Accounts Twilio Domain
     */
    protected function getAccounts() {
        if (!$this->_accounts) {
            $this->_accounts = new Accounts($this);
        }
        return $this->_accounts;
    }

    /**
     * Access the Api Twilio Domain
     *
     * @return Api Api Twilio Domain
     */
    protected function getApi() {
        if (!$this->_api) {
            $this->_api = new Api($this);
        }
        return $this->_api;
    }

    /**
     * @return AddressList
     */
    protected function getAddresses() {
        return $this->api->v2010->account->addresses;
    }

    /**
     * @param string $sid The sid
     * @return AddressContext
     */
    protected function contextAddresses($sid) {
        return $this->api->v2010->account->addresses($sid);
    }

    /**
     * @return ApplicationList
     */
    protected function getApplications() {
        return $this->api->v2010->account->applications;
    }

    /**
     * @param string $sid Fetch by unique Application Sid
     * @return ApplicationContext
     */
    protected function contextApplications($sid) {
        return $this->api->v2010->account->applications($sid);
    }

    /**
     * @return AuthorizedConnectAppList
     */
    protected function getAuthorizedConnectApps() {
        return $this->api->v2010->account->authorizedConnectApps;
    }

    /**
     * @param string $connectAppSid The connect_app_sid
     * @return AuthorizedConnectAppContext
     */
    protected function contextAuthorizedConnectApps($connectAppSid) {
        return $this->api->v2010->account->authorizedConnectApps($connectAppSid);
    }

    /**
     * @return AvailablePhoneNumberCountryList
     */
    protected function getAvailablePhoneNumbers() {
        return $this->api->v2010->account->availablePhoneNumbers;
    }

    /**
     * @param string $countryCode The country_code
     * @return AvailablePhoneNumberCountryContext
     */
    protected function contextAvailablePhoneNumbers($countryCode) {
        return $this->api->v2010->account->availablePhoneNumbers($countryCode);
    }

    /**
     * @return BalanceList
     */
    protected function getBalance() {
        return $this->api->v2010->account->balance;
    }

    /**
     * @return CallList
     */
    protected function getCalls() {
        return $this->api->v2010->account->calls;
    }

    /**
     * @param string $sid Call Sid that uniquely identifies the Call to fetch
     * @return CallContext
     */
    protected function contextCalls($sid) {
        return $this->api->v2010->account->calls($sid);
    }

    /**
     * @return ConferenceList
     */
    protected function getConferences() {
        return $this->api->v2010->account->conferences;
    }

    /**
     * @param string $sid Fetch by unique conference Sid
     * @return ConferenceContext
     */
    protected function contextConferences($sid) {
        return $this->api->v2010->account->conferences($sid);
    }

    /**
     * @return ConnectAppList
     */
    protected function getConnectApps() {
        return $this->api->v2010->account->connectApps;
    }

    /**
     * @param string $sid Fetch by unique connect-app Sid
     * @return ConnectAppContext
     */
    protected function contextConnectApps($sid) {
        return $this->api->v2010->account->connectApps($sid);
    }

    /**
     * @return IncomingPhoneNumberList
     */
    protected function getIncomingPhoneNumbers() {
        return $this->api->v2010->account->incomingPhoneNumbers;
    }

    /**
     * @param string $sid Fetch by unique incoming-phone-number Sid
     * @return IncomingPhoneNumberContext
     */
    protected function contextIncomingPhoneNumbers($sid) {
        return $this->api->v2010->account->incomingPhoneNumbers($sid);
    }

    /**
     * @return KeyList
     */
    protected function getKeys() {
        return $this->api->v2010->account->keys;
    }

    /**
     * @param string $sid The sid
     * @return KeyContext
     */
    protected function contextKeys($sid) {
        return $this->api->v2010->account->keys($sid);
    }

    /**
     * @return MessageList
     */
    protected function getMessages() {
        return $this->api->v2010->account->messages;
    }

    /**
     * @param string $sid Fetch by unique message Sid
     * @return MessageContext
     */
    protected function contextMessages($sid) {
        return $this->api->v2010->account->messages($sid);
    }

    /**
     * @return NewKeyList
     */
    protected function getNewKeys() {
        return $this->api->v2010->account->newKeys;
    }

    /**
     * @return NewSigningKeyList
     */
    protected function getNewSigningKeys() {
        return $this->api->v2010->account->newSigningKeys;
    }

    /**
     * @return NotificationList
     */
    protected function getNotifications() {
        return $this->api->v2010->account->notifications;
    }

    /**
     * @param string $sid Fetch by unique notification Sid
     * @return NotificationContext
     */
    protected function contextNotifications($sid) {
        return $this->api->v2010->account->notifications($sid);
    }

    /**
     * @return OutgoingCallerIdList
     */
    protected function getOutgoingCallerIds() {
        return $this->api->v2010->account->outgoingCallerIds;
    }

    /**
     * @param string $sid Fetch by unique outgoing-caller-id Sid
     * @return OutgoingCallerIdContext
     */
    protected function contextOutgoingCallerIds($sid) {
        return $this->api->v2010->account->outgoingCallerIds($sid);
    }

    /**
     * @return QueueList
     */
    protected function getQueues() {
        return $this->api->v2010->account->queues;
    }

    /**
     * @param string $sid Fetch by unique queue Sid
     * @return QueueContext
     */
    protected function contextQueues($sid) {
        return $this->api->v2010->account->queues($sid);
    }

    /**
     * @return RecordingList
     */
    protected function getRecordings() {
        return $this->api->v2010->account->recordings;
    }

    /**
     * @param string $sid Fetch by unique recording SID
     * @return RecordingContext
     */
    protected function contextRecordings($sid) {
        return $this->api->v2010->account->recordings($sid);
    }

    /**
     * @return SigningKeyList
     */
    protected function getSigningKeys() {
        return $this->api->v2010->account->signingKeys;
    }

    /**
     * @param string $sid The sid
     * @return SigningKeyContext
     */
    protected function contextSigningKeys($sid) {
        return $this->api->v2010->account->signingKeys($sid);
    }

    /**
     * @return SipList
     */
    protected function getSip() {
        return $this->api->v2010->account->sip;
    }

    /**
     * @return ShortCodeList
     */
    protected function getShortCodes() {
        return $this->api->v2010->account->shortCodes;
    }

    /**
     * @param string $sid Fetch by unique short-code Sid
     * @return ShortCodeContext
     */
    protected function contextShortCodes($sid) {
        return $this->api->v2010->account->shortCodes($sid);
    }

    /**
     * @return TokenList
     */
    protected function getTokens() {
        return $this->api->v2010->account->tokens;
    }

    /**
     * @return TranscriptionList
     */
    protected function getTranscriptions() {
        return $this->api->v2010->account->transcriptions;
    }

    /**
     * @param string $sid Fetch by unique transcription SID
     * @return TranscriptionContext
     */
    protected function contextTranscriptions($sid) {
        return $this->api->v2010->account->transcriptions($sid);
    }

    /**
     * @return UsageList
     */
    protected function getUsage() {
        return $this->api->v2010->account->usage;
    }

    /**
     * @return ValidationRequestList
     */
    protected function getValidationRequests() {
        return $this->api->v2010->account->validationRequests;
    }

    /**
     * Access the Authy Twilio Domain
     *
     * @return Authy Authy Twilio Domain
     */
    protected function getAuthy() {
        if (!$this->_authy) {
            $this->_authy = new Authy($this);
        }
        return $this->_authy;
    }

    /**
     * Access the Autopilot Twilio Domain
     *
     * @return Autopilot Autopilot Twilio Domain
     */
    protected function getAutopilot() {
        if (!$this->_autopilot) {
            $this->_autopilot = new Autopilot($this);
        }
        return $this->_autopilot;
    }

    /**
     * Access the Chat Twilio Domain
     *
     * @return Chat Chat Twilio Domain
     */
    protected function getChat() {
        if (!$this->_chat) {
            $this->_chat = new Chat($this);
        }
        return $this->_chat;
    }

    /**
     * Access the Fax Twilio Domain
     *
     * @return Fax Fax Twilio Domain
     */
    protected function getFax() {
        if (!$this->_fax) {
            $this->_fax = new Fax($this);
        }
        return $this->_fax;
    }

    /**
     * Access the IpMessaging Twilio Domain
     *
     * @return IpMessaging IpMessaging Twilio Domain
     */
    protected function getIpMessaging() {
        if (!$this->_ipMessaging) {
            $this->_ipMessaging = new IpMessaging($this);
        }
        return $this->_ipMessaging;
    }

    /**
     * Access the Lookups Twilio Domain
     *
     * @return Lookups Lookups Twilio Domain
     */
    protected function getLookups() {
        if (!$this->_lookups) {
            $this->_lookups = new Lookups($this);
        }
        return $this->_lookups;
    }

    /**
     * Access the Monitor Twilio Domain
     *
     * @return Monitor Monitor Twilio Domain
     */
    protected function getMonitor() {
        if (!$this->_monitor) {
            $this->_monitor = new Monitor($this);
        }
        return $this->_monitor;
    }

    /**
     * Access the Notify Twilio Domain
     *
     * @return Notify Notify Twilio Domain
     */
    protected function getNotify() {
        if (!$this->_notify) {
            $this->_notify = new Notify($this);
        }
        return $this->_notify;
    }

    /**
     * Access the Preview Twilio Domain
     *
     * @return Preview Preview Twilio Domain
     */
    protected function getPreview() {
        if (!$this->_preview) {
            $this->_preview = new Preview($this);
        }
        return $this->_preview;
    }

    /**
     * Access the Pricing Twilio Domain
     *
     * @return Pricing Pricing Twilio Domain
     */
    protected function getPricing() {
        if (!$this->_pricing) {
            $this->_pricing = new Pricing($this);
        }
        return $this->_pricing;
    }

    /**
     * Access the Proxy Twilio Domain
     *
     * @return Proxy Proxy Twilio Domain
     */
    protected function getProxy() {
        if (!$this->_proxy) {
            $this->_proxy = new Proxy($this);
        }
        return $this->_proxy;
    }

    /**
     * Access the Taskrouter Twilio Domain
     *
     * @return Taskrouter Taskrouter Twilio Domain
     */
    protected function getTaskrouter() {
        if (!$this->_taskrouter) {
            $this->_taskrouter = new Taskrouter($this);
        }
        return $this->_taskrouter;
    }

    /**
     * Access the Trunking Twilio Domain
     *
     * @return Trunking Trunking Twilio Domain
     */
    protected function getTrunking() {
        if (!$this->_trunking) {
            $this->_trunking = new Trunking($this);
        }
        return $this->_trunking;
    }

    /**
     * Access the Video Twilio Domain
     *
     * @return Video Video Twilio Domain
     */
    protected function getVideo() {
        if (!$this->_video) {
            $this->_video = new Video($this);
        }
        return $this->_video;
    }

    /**
     * Access the Messaging Twilio Domain
     *
     * @return Messaging Messaging Twilio Domain
     */
    protected function getMessaging() {
        if (!$this->_messaging) {
            $this->_messaging = new Messaging($this);
        }
        return $this->_messaging;
    }

    /**
     * Access the Wireless Twilio Domain
     *
     * @return Wireless Wireless Twilio Domain
     */
    protected function getWireless() {
        if (!$this->_wireless) {
            $this->_wireless = new Wireless($this);
        }
        return $this->_wireless;
    }

    /**
     * Access the Sync Twilio Domain
     *
     * @return Sync Sync Twilio Domain
     */
    protected function getSync() {
        if (!$this->_sync) {
            $this->_sync = new Sync($this);
        }
        return $this->_sync;
    }

    /**
     * Access the Studio Twilio Domain
     *
     * @return Studio Studio Twilio Domain
     */
    protected function getStudio() {
        if (!$this->_studio) {
            $this->_studio = new Studio($this);
        }
        return $this->_studio;
    }

    /**
     * Access the Verify Twilio Domain
     *
     * @return Verify Verify Twilio Domain
     */
    protected function getVerify() {
        if (!$this->_verify) {
            $this->_verify = new Verify($this);
        }
        return $this->_verify;
    }

    /**
     * Access the Voice Twilio Domain
     *
     * @return Voice Voice Twilio Domain
     */
    protected function getVoice() {
        if (!$this->_voice) {
            $this->_voice = new Voice($this);
        }
        return $this->_voice;
    }
}