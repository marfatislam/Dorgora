<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Pricing;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\ListResource;
use Twilio\Rest\Pricing\V2\VoiceList;
use Twilio\Version;

/**
 * @property VoiceList voice
 */
class V2 extends Version {
    protected $_voice = null;

    /**
     * Construct the V2 version of Pricing
     * 
     * @param Domain $domain Domain that contains the version
     * @return V2 V2 version of Pricing
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = 'v2';
    }

    /**
     * Magic getter to lazy load root resources
     *
     * @param string $name Resource to return
     *
     * @return ListResource The requested resource
     * @throws TwilioException For unknown resource
     */
    public function __get($name) {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown resource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     *
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call($name, $arguments) {
        $property = $this->$name;
        if (method_exists($property, 'getContext')) {
            return call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Pricing.V2]';
    }

    /**
     * @return VoiceList
     */
    protected function getVoice() {
        if (!$this->_voice) {
            $this->_voice = new VoiceList($this);
        }
        return $this->_voice;
    }
}