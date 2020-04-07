<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1beta1/registration_service.proto

namespace Google\Cloud\ServiceDirectory\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [RegistrationService.UpdateNamespace][google.cloud.servicedirectory.v1beta1.RegistrationService.UpdateNamespace].
 *
 * Generated from protobuf message <code>google.cloud.servicedirectory.v1beta1.UpdateNamespaceRequest</code>
 */
class UpdateNamespaceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The updated namespace.
     *
     * Generated from protobuf field <code>.google.cloud.servicedirectory.v1beta1.Namespace namespace = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $namespace = null;
    /**
     * Required. List of fields to be updated in this request.
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
     *     @type \Google\Cloud\ServiceDirectory\V1beta1\PBNamespace $namespace
     *           Required. The updated namespace.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. List of fields to be updated in this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicedirectory\V1Beta1\RegistrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The updated namespace.
     *
     * Generated from protobuf field <code>.google.cloud.servicedirectory.v1beta1.Namespace namespace = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ServiceDirectory\V1beta1\PBNamespace
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Required. The updated namespace.
     *
     * Generated from protobuf field <code>.google.cloud.servicedirectory.v1beta1.Namespace namespace = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ServiceDirectory\V1beta1\PBNamespace $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ServiceDirectory\V1beta1\PBNamespace::class);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Required. List of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Required. List of fields to be updated in this request.
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
