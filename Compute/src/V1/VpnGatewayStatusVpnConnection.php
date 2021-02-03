<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A VPN connection contains all VPN tunnels connected from this VpnGateway to the same peer gateway. The peer gateway could either be a external VPN gateway or GCP VPN gateway.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.VpnGatewayStatusVpnConnection</code>
 */
class VpnGatewayStatusVpnConnection extends \Google\Protobuf\Internal\Message
{
    /**
     * URL reference to the peer external VPN gateways to which the VPN tunnels in this VPN connection are connected. This field is mutually exclusive with peer_gcp_gateway.
     *
     * Generated from protobuf field <code>string peer_external_gateway = 116520717;</code>
     */
    private $peer_external_gateway = '';
    /**
     * URL reference to the peer side VPN gateways to which the VPN tunnels in this VPN connection are connected. This field is mutually exclusive with peer_gcp_gateway.
     *
     * Generated from protobuf field <code>string peer_gcp_gateway = 13431996;</code>
     */
    private $peer_gcp_gateway = '';
    /**
     * HighAvailabilityRequirementState for the VPN connection.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.VpnGatewayStatusHighAvailabilityRequirementState state = 109757585;</code>
     */
    private $state = null;
    /**
     * List of VPN tunnels that are in this VPN connection.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VpnGatewayStatusTunnel tunnels = 104561931;</code>
     */
    private $tunnels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $peer_external_gateway
     *           URL reference to the peer external VPN gateways to which the VPN tunnels in this VPN connection are connected. This field is mutually exclusive with peer_gcp_gateway.
     *     @type string $peer_gcp_gateway
     *           URL reference to the peer side VPN gateways to which the VPN tunnels in this VPN connection are connected. This field is mutually exclusive with peer_gcp_gateway.
     *     @type \Google\Cloud\Compute\V1\VpnGatewayStatusHighAvailabilityRequirementState $state
     *           HighAvailabilityRequirementState for the VPN connection.
     *     @type \Google\Cloud\Compute\V1\VpnGatewayStatusTunnel[]|\Google\Protobuf\Internal\RepeatedField $tunnels
     *           List of VPN tunnels that are in this VPN connection.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * URL reference to the peer external VPN gateways to which the VPN tunnels in this VPN connection are connected. This field is mutually exclusive with peer_gcp_gateway.
     *
     * Generated from protobuf field <code>string peer_external_gateway = 116520717;</code>
     * @return string
     */
    public function getPeerExternalGateway()
    {
        return $this->peer_external_gateway;
    }

    /**
     * URL reference to the peer external VPN gateways to which the VPN tunnels in this VPN connection are connected. This field is mutually exclusive with peer_gcp_gateway.
     *
     * Generated from protobuf field <code>string peer_external_gateway = 116520717;</code>
     * @param string $var
     * @return $this
     */
    public function setPeerExternalGateway($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_external_gateway = $var;

        return $this;
    }

    /**
     * URL reference to the peer side VPN gateways to which the VPN tunnels in this VPN connection are connected. This field is mutually exclusive with peer_gcp_gateway.
     *
     * Generated from protobuf field <code>string peer_gcp_gateway = 13431996;</code>
     * @return string
     */
    public function getPeerGcpGateway()
    {
        return $this->peer_gcp_gateway;
    }

    /**
     * URL reference to the peer side VPN gateways to which the VPN tunnels in this VPN connection are connected. This field is mutually exclusive with peer_gcp_gateway.
     *
     * Generated from protobuf field <code>string peer_gcp_gateway = 13431996;</code>
     * @param string $var
     * @return $this
     */
    public function setPeerGcpGateway($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_gcp_gateway = $var;

        return $this;
    }

    /**
     * HighAvailabilityRequirementState for the VPN connection.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.VpnGatewayStatusHighAvailabilityRequirementState state = 109757585;</code>
     * @return \Google\Cloud\Compute\V1\VpnGatewayStatusHighAvailabilityRequirementState
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : null;
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * HighAvailabilityRequirementState for the VPN connection.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.VpnGatewayStatusHighAvailabilityRequirementState state = 109757585;</code>
     * @param \Google\Cloud\Compute\V1\VpnGatewayStatusHighAvailabilityRequirementState $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\VpnGatewayStatusHighAvailabilityRequirementState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * List of VPN tunnels that are in this VPN connection.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VpnGatewayStatusTunnel tunnels = 104561931;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTunnels()
    {
        return $this->tunnels;
    }

    /**
     * List of VPN tunnels that are in this VPN connection.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VpnGatewayStatusTunnel tunnels = 104561931;</code>
     * @param \Google\Cloud\Compute\V1\VpnGatewayStatusTunnel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTunnels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\VpnGatewayStatusTunnel::class);
        $this->tunnels = $arr;

        return $this;
    }

}
