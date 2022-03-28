<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [ModelService.UpdateModel][google.cloud.aiplatform.v1.ModelService.UpdateModel].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateModelRequest</code>
 */
class UpdateModelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Model which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Model model = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $model = null;
    /**
     * Required. The update mask applies to the resource.
     * For the `FieldMask` definition, see [google.protobuf.FieldMask][google.protobuf.FieldMask].
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Model $model
     *           Required. The Model which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The update mask applies to the resource.
     *           For the `FieldMask` definition, see [google.protobuf.FieldMask][google.protobuf.FieldMask].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Model which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Model model = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\Model|null
     */
    public function getModel()
    {
        return $this->model;
    }

    public function hasModel()
    {
        return isset($this->model);
    }

    public function clearModel()
    {
        unset($this->model);
    }

    /**
     * Required. The Model which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Model model = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\Model $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Model::class);
        $this->model = $var;

        return $this;
    }

    /**
     * Required. The update mask applies to the resource.
     * For the `FieldMask` definition, see [google.protobuf.FieldMask][google.protobuf.FieldMask].
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The update mask applies to the resource.
     * For the `FieldMask` definition, see [google.protobuf.FieldMask][google.protobuf.FieldMask].
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
