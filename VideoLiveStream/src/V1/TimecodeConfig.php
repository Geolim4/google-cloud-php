<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/outputs.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Timecode configuration.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.TimecodeConfig</code>
 */
class TimecodeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The source of the timecode that will later be used in outputs/manifests.
     * It determines the initial timecode/timestamp (first frame) of output
     * streams.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.TimecodeConfig.TimecodeSource source = 1;</code>
     */
    private $source = 0;
    protected $time_offset;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $source
     *           The source of the timecode that will later be used in outputs/manifests.
     *           It determines the initial timecode/timestamp (first frame) of output
     *           streams.
     *     @type \Google\Protobuf\Duration $utc_offset
     *           UTC offset. Must be whole seconds, between -18 hours and +18 hours.
     *     @type \Google\Type\TimeZone $time_zone
     *           Time zone e.g. "America/Los_Angeles".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Outputs::initOnce();
        parent::__construct($data);
    }

    /**
     * The source of the timecode that will later be used in outputs/manifests.
     * It determines the initial timecode/timestamp (first frame) of output
     * streams.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.TimecodeConfig.TimecodeSource source = 1;</code>
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The source of the timecode that will later be used in outputs/manifests.
     * It determines the initial timecode/timestamp (first frame) of output
     * streams.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.TimecodeConfig.TimecodeSource source = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\LiveStream\V1\TimecodeConfig\TimecodeSource::class);
        $this->source = $var;

        return $this;
    }

    /**
     * UTC offset. Must be whole seconds, between -18 hours and +18 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration utc_offset = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getUtcOffset()
    {
        return $this->readOneof(2);
    }

    public function hasUtcOffset()
    {
        return $this->hasOneof(2);
    }

    /**
     * UTC offset. Must be whole seconds, between -18 hours and +18 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration utc_offset = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setUtcOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Time zone e.g. "America/Los_Angeles".
     *
     * Generated from protobuf field <code>.google.type.TimeZone time_zone = 3;</code>
     * @return \Google\Type\TimeZone|null
     */
    public function getTimeZone()
    {
        return $this->readOneof(3);
    }

    public function hasTimeZone()
    {
        return $this->hasOneof(3);
    }

    /**
     * Time zone e.g. "America/Los_Angeles".
     *
     * Generated from protobuf field <code>.google.type.TimeZone time_zone = 3;</code>
     * @param \Google\Type\TimeZone $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\TimeZone::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTimeOffset()
    {
        return $this->whichOneof("time_offset");
    }

}
