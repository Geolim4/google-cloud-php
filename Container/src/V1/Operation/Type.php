<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\Operation;

use UnexpectedValueException;

/**
 * Operation type categorizes the operation.
 *
 * Protobuf type <code>google.container.v1.Operation.Type</code>
 */
class Type
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * The cluster is being created. The cluster should be assumed to be
     * unusable until the operation finishes.
     * In the event of the operation failing, the cluster will enter the [ERROR
     * state][Cluster.Status.ERROR] and eventually be deleted.
     *
     * Generated from protobuf enum <code>CREATE_CLUSTER = 1;</code>
     */
    const CREATE_CLUSTER = 1;
    /**
     * The cluster is being deleted. The cluster should be assumed to be
     * unusable as soon as this operation starts.
     * In the event of the operation failing, the cluster will enter the [ERROR
     * state][Cluster.Status.ERROR] and the deletion will be automatically
     * retried until completed.
     *
     * Generated from protobuf enum <code>DELETE_CLUSTER = 2;</code>
     */
    const DELETE_CLUSTER = 2;
    /**
     * The [cluster
     * version][google.container.v1.ClusterUpdate.desired_master_version] is
     * being updated. Note that this includes "upgrades" to the same version,
     * which are simply a recreation. This also includes
     * [auto-upgrades](https://cloud.google.com/kubernetes-engine/docs/concepts/cluster-upgrades#upgrading_automatically).
     * For more details, see [documentation on cluster
     * upgrades](https://cloud.google.com/kubernetes-engine/docs/concepts/cluster-upgrades#cluster_upgrades).
     *
     * Generated from protobuf enum <code>UPGRADE_MASTER = 3;</code>
     */
    const UPGRADE_MASTER = 3;
    /**
     * A node pool is being updated. Despite calling this an "upgrade", this
     * includes most forms of updates to node pools. This also includes
     * [auto-upgrades](https://cloud.google.com/kubernetes-engine/docs/how-to/node-auto-upgrades).
     * This operation sets the
     * [progress][google.container.v1.Operation.progress] field and may be
     * [canceled][google.container.v1.ClusterManager.CancelOperation].
     * The upgrade strategy depends on [node pool
     * configuration](https://cloud.google.com/kubernetes-engine/docs/concepts/node-pool-upgrade-strategies).
     * The nodes are generally still usable during this operation.
     *
     * Generated from protobuf enum <code>UPGRADE_NODES = 4;</code>
     */
    const UPGRADE_NODES = 4;
    /**
     * A problem has been detected with the control plane and is being repaired.
     * This operation type is initiated by GKE. For more details, see
     * [documentation on
     * repairs](https://cloud.google.com/kubernetes-engine/docs/concepts/maintenance-windows-and-exclusions#repairs).
     *
     * Generated from protobuf enum <code>REPAIR_CLUSTER = 5;</code>
     */
    const REPAIR_CLUSTER = 5;
    /**
     * The cluster is being updated. This is a broad category of operations and
     * includes operations that only change metadata as well as those that must
     * recreate the entire cluster. If the control plane must be recreated, this
     * will cause temporary downtime for zonal clusters.
     * Some features require recreating the nodes as well. Those will be
     * recreated as separate operations and the update may not be completely
     * functional until the node pools recreations finish. Node recreations will
     * generally follow [maintenance
     * policies](https://cloud.google.com/kubernetes-engine/docs/concepts/maintenance-windows-and-exclusions).
     * Some GKE-initiated operations use this type. This includes certain types
     * of auto-upgrades and incident mitigations.
     *
     * Generated from protobuf enum <code>UPDATE_CLUSTER = 6;</code>
     */
    const UPDATE_CLUSTER = 6;
    /**
     * A node pool is being created. The node pool should be assumed to be
     * unusable until this operation finishes. In the event of an error, the
     * node pool may be partially created.
     * If enabled, [node
     * autoprovisioning](https://cloud.google.com/kubernetes-engine/docs/how-to/node-auto-provisioning)
     * may have automatically initiated such operations.
     *
     * Generated from protobuf enum <code>CREATE_NODE_POOL = 7;</code>
     */
    const CREATE_NODE_POOL = 7;
    /**
     * The node pool is being deleted. The node pool should be assumed to be
     * unusable as soon as this operation starts.
     *
     * Generated from protobuf enum <code>DELETE_NODE_POOL = 8;</code>
     */
    const DELETE_NODE_POOL = 8;
    /**
     * The node pool's [manamagent][google.container.v1.NodePool.management]
     * field is being updated. These operations only update metadata and may be
     * concurrent with most other operations.
     *
     * Generated from protobuf enum <code>SET_NODE_POOL_MANAGEMENT = 9;</code>
     */
    const SET_NODE_POOL_MANAGEMENT = 9;
    /**
     * A problem has been detected with nodes and [they are being
     * repaired](https://cloud.google.com/kubernetes-engine/docs/how-to/node-auto-repair).
     * This operation type is initiated by GKE, typically automatically. This
     * operation may be concurrent with other operations and there may be
     * multiple repairs occurring on the same node pool.
     *
     * Generated from protobuf enum <code>AUTO_REPAIR_NODES = 10;</code>
     */
    const AUTO_REPAIR_NODES = 10;
    /**
     * Unused. Automatic node upgrade uses
     * [UPGRADE_NODES][google.container.v1.Operation.Type.UPGRADE_NODES].
     *
     * Generated from protobuf enum <code>AUTO_UPGRADE_NODES = 11 [deprecated = true];</code>
     */
    const AUTO_UPGRADE_NODES = 11;
    /**
     * Unused. Updating labels uses
     * [UPDATE_CLUSTER][google.container.v1.Operation.Type.UPDATE_CLUSTER].
     *
     * Generated from protobuf enum <code>SET_LABELS = 12 [deprecated = true];</code>
     */
    const SET_LABELS = 12;
    /**
     * Unused. Updating master auth uses
     * [UPDATE_CLUSTER][google.container.v1.Operation.Type.UPDATE_CLUSTER].
     *
     * Generated from protobuf enum <code>SET_MASTER_AUTH = 13 [deprecated = true];</code>
     */
    const SET_MASTER_AUTH = 13;
    /**
     * The node pool is being resized. With the exception of resizing to or from
     * size zero, the node pool is generally usable during this operation.
     *
     * Generated from protobuf enum <code>SET_NODE_POOL_SIZE = 14;</code>
     */
    const SET_NODE_POOL_SIZE = 14;
    /**
     * Unused. Updating network policy uses
     * [UPDATE_CLUSTER][google.container.v1.Operation.Type.UPDATE_CLUSTER].
     *
     * Generated from protobuf enum <code>SET_NETWORK_POLICY = 15 [deprecated = true];</code>
     */
    const SET_NETWORK_POLICY = 15;
    /**
     * Unused. Updating maintenance policy uses
     * [UPDATE_CLUSTER][google.container.v1.Operation.Type.UPDATE_CLUSTER].
     *
     * Generated from protobuf enum <code>SET_MAINTENANCE_POLICY = 16 [deprecated = true];</code>
     */
    const SET_MAINTENANCE_POLICY = 16;
    /**
     * The control plane is being resized. This operation type is initiated by
     * GKE. These operations are often performed preemptively to ensure that the
     * control plane has sufficient resources and is not typically an indication
     * of issues. For more details, see
     * [documentation on
     * resizes](https://cloud.google.com/kubernetes-engine/docs/concepts/maintenance-windows-and-exclusions#repairs).
     *
     * Generated from protobuf enum <code>RESIZE_CLUSTER = 18;</code>
     */
    const RESIZE_CLUSTER = 18;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::CREATE_CLUSTER => 'CREATE_CLUSTER',
        self::DELETE_CLUSTER => 'DELETE_CLUSTER',
        self::UPGRADE_MASTER => 'UPGRADE_MASTER',
        self::UPGRADE_NODES => 'UPGRADE_NODES',
        self::REPAIR_CLUSTER => 'REPAIR_CLUSTER',
        self::UPDATE_CLUSTER => 'UPDATE_CLUSTER',
        self::CREATE_NODE_POOL => 'CREATE_NODE_POOL',
        self::DELETE_NODE_POOL => 'DELETE_NODE_POOL',
        self::SET_NODE_POOL_MANAGEMENT => 'SET_NODE_POOL_MANAGEMENT',
        self::AUTO_REPAIR_NODES => 'AUTO_REPAIR_NODES',
        self::AUTO_UPGRADE_NODES => 'AUTO_UPGRADE_NODES',
        self::SET_LABELS => 'SET_LABELS',
        self::SET_MASTER_AUTH => 'SET_MASTER_AUTH',
        self::SET_NODE_POOL_SIZE => 'SET_NODE_POOL_SIZE',
        self::SET_NETWORK_POLICY => 'SET_NETWORK_POLICY',
        self::SET_MAINTENANCE_POLICY => 'SET_MAINTENANCE_POLICY',
        self::RESIZE_CLUSTER => 'RESIZE_CLUSTER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\Container\V1\Operation_Type::class);

