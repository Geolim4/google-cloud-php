<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ImportEntries][google.cloud.datacatalog.v1.DataCatalog.ImportEntries]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ImportEntriesRequest</code>
 */
class ImportEntriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Target entry group for ingested entries.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Target entry group for ingested entries.
     *     @type string $gcs_bucket_path
     *           Path to a Cloud Storage bucket that contains a dump ready for ingestion.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Target entry group for ingested entries.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Target entry group for ingested entries.
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
     * Path to a Cloud Storage bucket that contains a dump ready for ingestion.
     *
     * Generated from protobuf field <code>string gcs_bucket_path = 2;</code>
     * @return string
     */
    public function getGcsBucketPath()
    {
        return $this->readOneof(2);
    }

    public function hasGcsBucketPath()
    {
        return $this->hasOneof(2);
    }

    /**
     * Path to a Cloud Storage bucket that contains a dump ready for ingestion.
     *
     * Generated from protobuf field <code>string gcs_bucket_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsBucketPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}
