<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/order/order.proto

namespace app\components\proto\order;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>order.GetMisFullReturnConfRequest</code>
 */
class GetMisFullReturnConfRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int64 group_id = 1;</code>
     */
    private $group_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $group_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Order\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int64 group_id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>repeated int64 group_id = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->group_id = $arr;

        return $this;
    }

}

