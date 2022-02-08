<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NotificationConfig is the configuration of notifications.
 *
 * Generated from protobuf message <code>google.container.v1.NotificationConfig</code>
 */
class NotificationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Notification config for Pub/Sub.
     *
     * Generated from protobuf field <code>.google.container.v1.NotificationConfig.PubSub pubsub = 1;</code>
     */
    private $pubsub = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Container\V1\NotificationConfig\PubSub $pubsub
     *           Notification config for Pub/Sub.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Notification config for Pub/Sub.
     *
     * Generated from protobuf field <code>.google.container.v1.NotificationConfig.PubSub pubsub = 1;</code>
     * @return \Google\Cloud\Container\V1\NotificationConfig\PubSub|null
     */
    public function getPubsub()
    {
        return $this->pubsub;
    }

    public function hasPubsub()
    {
        return isset($this->pubsub);
    }

    public function clearPubsub()
    {
        unset($this->pubsub);
    }

    /**
     * Notification config for Pub/Sub.
     *
     * Generated from protobuf field <code>.google.container.v1.NotificationConfig.PubSub pubsub = 1;</code>
     * @param \Google\Cloud\Container\V1\NotificationConfig\PubSub $var
     * @return $this
     */
    public function setPubsub($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NotificationConfig\PubSub::class);
        $this->pubsub = $var;

        return $this;
    }

}
