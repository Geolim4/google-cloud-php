<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/user_event_service.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for WriteUserEvent method.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.WriteUserEventRequest</code>
 */
class WriteUserEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent eventStore resource name, such as
     * `projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. User event to write.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.UserEvent user_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $user_event = null;

    /**
     * @param string                                               $parent    Required. The parent eventStore resource name, such as
     *                                                                        `projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store`. Please see
     *                                                                        {@see UserEventServiceClient::eventStoreName()} for help formatting this field.
     * @param \Google\Cloud\RecommendationEngine\V1beta1\UserEvent $userEvent Required. User event to write.
     *
     * @return \Google\Cloud\RecommendationEngine\V1beta1\WriteUserEventRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\RecommendationEngine\V1beta1\UserEvent $userEvent): self
    {
        return (new self())
            ->setParent($parent)
            ->setUserEvent($userEvent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent eventStore resource name, such as
     *           `projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store`.
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\UserEvent $user_event
     *           Required. User event to write.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\UserEventService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent eventStore resource name, such as
     * `projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent eventStore resource name, such as
     * `projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. User event to write.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.UserEvent user_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\RecommendationEngine\V1beta1\UserEvent|null
     */
    public function getUserEvent()
    {
        return $this->user_event;
    }

    public function hasUserEvent()
    {
        return isset($this->user_event);
    }

    public function clearUserEvent()
    {
        unset($this->user_event);
    }

    /**
     * Required. User event to write.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.UserEvent user_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\UserEvent $var
     * @return $this
     */
    public function setUserEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecommendationEngine\V1beta1\UserEvent::class);
        $this->user_event = $var;

        return $this;
    }

}

