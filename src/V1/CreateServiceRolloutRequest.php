<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'CreateServiceRollout'
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.CreateServiceRolloutRequest</code>
 */
class CreateServiceRolloutRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the service.  See the
     * [overview](https://cloud.google.com/service-management/overview) for naming
     * requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_name = '';
    /**
     * Required. The rollout resource. The `service_name` field is output only.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Rollout rollout = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $rollout = null;

    /**
     * @param string                                     $serviceName Required. The name of the service.  See the
     *                                                                [overview](https://cloud.google.com/service-management/overview) for naming
     *                                                                requirements.  For example: `example.googleapis.com`.
     * @param \Google\Cloud\ServiceManagement\V1\Rollout $rollout     Required. The rollout resource. The `service_name` field is output only.
     *
     * @return \Google\Cloud\ServiceManagement\V1\CreateServiceRolloutRequest
     *
     * @experimental
     */
    public static function build(string $serviceName, \Google\Cloud\ServiceManagement\V1\Rollout $rollout): self
    {
        return (new self())
            ->setServiceName($serviceName)
            ->setRollout($rollout);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           Required. The name of the service.  See the
     *           [overview](https://cloud.google.com/service-management/overview) for naming
     *           requirements.  For example: `example.googleapis.com`.
     *     @type \Google\Cloud\ServiceManagement\V1\Rollout $rollout
     *           Required. The rollout resource. The `service_name` field is output only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the service.  See the
     * [overview](https://cloud.google.com/service-management/overview) for naming
     * requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Required. The name of the service.  See the
     * [overview](https://cloud.google.com/service-management/overview) for naming
     * requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * Required. The rollout resource. The `service_name` field is output only.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Rollout rollout = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ServiceManagement\V1\Rollout|null
     */
    public function getRollout()
    {
        return $this->rollout;
    }

    public function hasRollout()
    {
        return isset($this->rollout);
    }

    public function clearRollout()
    {
        unset($this->rollout);
    }

    /**
     * Required. The rollout resource. The `service_name` field is output only.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Rollout rollout = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ServiceManagement\V1\Rollout $var
     * @return $this
     */
    public function setRollout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ServiceManagement\V1\Rollout::class);
        $this->rollout = $var;

        return $this;
    }

}

