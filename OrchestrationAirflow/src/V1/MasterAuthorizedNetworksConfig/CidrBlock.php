<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1\MasterAuthorizedNetworksConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CIDR block with an optional name.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.MasterAuthorizedNetworksConfig.CidrBlock</code>
 */
class CidrBlock extends \Google\Protobuf\Internal\Message
{
    /**
     * User-defined name that identifies the CIDR block.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    private $display_name = '';
    /**
     * CIDR block that must be specified in CIDR notation.
     *
     * Generated from protobuf field <code>string cidr_block = 2;</code>
     */
    private $cidr_block = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           User-defined name that identifies the CIDR block.
     *     @type string $cidr_block
     *           CIDR block that must be specified in CIDR notation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * User-defined name that identifies the CIDR block.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * User-defined name that identifies the CIDR block.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * CIDR block that must be specified in CIDR notation.
     *
     * Generated from protobuf field <code>string cidr_block = 2;</code>
     * @return string
     */
    public function getCidrBlock()
    {
        return $this->cidr_block;
    }

    /**
     * CIDR block that must be specified in CIDR notation.
     *
     * Generated from protobuf field <code>string cidr_block = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->cidr_block = $var;

        return $this;
    }

}

