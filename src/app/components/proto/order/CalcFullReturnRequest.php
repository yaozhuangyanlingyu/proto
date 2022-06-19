<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/order/order.proto

namespace app\components\proto\order;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>order.CalcFullReturnRequest</code>
 */
class CalcFullReturnRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .order.FullReturnInfo full_return_info = 1;</code>
     */
    private $full_return_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \app\components\proto\order\FullReturnInfo[]|\Google\Protobuf\Internal\RepeatedField $full_return_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Order\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .order.FullReturnInfo full_return_info = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFullReturnInfo()
    {
        return $this->full_return_info;
    }

    /**
     * Generated from protobuf field <code>repeated .order.FullReturnInfo full_return_info = 1;</code>
     * @param \app\components\proto\order\FullReturnInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFullReturnInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \app\components\proto\order\FullReturnInfo::class);
        $this->full_return_info = $arr;

        return $this;
    }

}
