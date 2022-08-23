<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/job_service.proto

namespace Google\Cloud\Talent\V4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result of [JobService.PurgeJobs][google.cloud.talent.v4.JobService.PurgeJobs]. It's used to
 * replace [google.longrunning.Operation.response][google.longrunning.Operation.response] in case of success.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.PurgeJobsResponse</code>
 */
class PurgeJobsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of jobs that this request deleted (or, if `force` is false,
     * the number of jobs that will be deleted).
     * Note: This number isn't guaranteed to be accurate.
     * Note: This number might change until operation status is FINISHED, FAILED
     * or CANCELLED.
     *
     * Generated from protobuf field <code>int32 purge_count = 1;</code>
     */
    private $purge_count = 0;
    /**
     * A sample of the resource names of jobs that will be deleted.
     * Only populated if `force` is set to false.
     * At most 100 job names are returned as a sample.
     *
     * Generated from protobuf field <code>repeated string purge_sample = 2;</code>
     */
    private $purge_sample;
    /**
     * List of job purge results from a purge jobs operation.
     * Only populated if `force` is set to true.
     * Note: This may change until operation status is FINISHED, FAILED or
     * CANCELLED.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.JobResult job_results = 3;</code>
     */
    private $job_results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $purge_count
     *           The number of jobs that this request deleted (or, if `force` is false,
     *           the number of jobs that will be deleted).
     *           Note: This number isn't guaranteed to be accurate.
     *           Note: This number might change until operation status is FINISHED, FAILED
     *           or CANCELLED.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $purge_sample
     *           A sample of the resource names of jobs that will be deleted.
     *           Only populated if `force` is set to false.
     *           At most 100 job names are returned as a sample.
     *     @type \Google\Cloud\Talent\V4\JobResult[]|\Google\Protobuf\Internal\RepeatedField $job_results
     *           List of job purge results from a purge jobs operation.
     *           Only populated if `force` is set to true.
     *           Note: This may change until operation status is FINISHED, FAILED or
     *           CANCELLED.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of jobs that this request deleted (or, if `force` is false,
     * the number of jobs that will be deleted).
     * Note: This number isn't guaranteed to be accurate.
     * Note: This number might change until operation status is FINISHED, FAILED
     * or CANCELLED.
     *
     * Generated from protobuf field <code>int32 purge_count = 1;</code>
     * @return int
     */
    public function getPurgeCount()
    {
        return $this->purge_count;
    }

    /**
     * The number of jobs that this request deleted (or, if `force` is false,
     * the number of jobs that will be deleted).
     * Note: This number isn't guaranteed to be accurate.
     * Note: This number might change until operation status is FINISHED, FAILED
     * or CANCELLED.
     *
     * Generated from protobuf field <code>int32 purge_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPurgeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->purge_count = $var;

        return $this;
    }

    /**
     * A sample of the resource names of jobs that will be deleted.
     * Only populated if `force` is set to false.
     * At most 100 job names are returned as a sample.
     *
     * Generated from protobuf field <code>repeated string purge_sample = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPurgeSample()
    {
        return $this->purge_sample;
    }

    /**
     * A sample of the resource names of jobs that will be deleted.
     * Only populated if `force` is set to false.
     * At most 100 job names are returned as a sample.
     *
     * Generated from protobuf field <code>repeated string purge_sample = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPurgeSample($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->purge_sample = $arr;

        return $this;
    }

    /**
     * List of job purge results from a purge jobs operation.
     * Only populated if `force` is set to true.
     * Note: This may change until operation status is FINISHED, FAILED or
     * CANCELLED.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.JobResult job_results = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobResults()
    {
        return $this->job_results;
    }

    /**
     * List of job purge results from a purge jobs operation.
     * Only populated if `force` is set to true.
     * Note: This may change until operation status is FINISHED, FAILED or
     * CANCELLED.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.JobResult job_results = 3;</code>
     * @param \Google\Cloud\Talent\V4\JobResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Talent\V4\JobResult::class);
        $this->job_results = $arr;

        return $this;
    }

}
