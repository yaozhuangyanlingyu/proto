<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/order/order.proto

namespace app\components\proto\order;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 获取商品ID，获取对应的佣金模板
 *
 * Generated from protobuf message <code>order.GetCommissionTplByPidRequest</code>
 */
class GetCommissionTplByPidRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 商品ID
     *
     * Generated from protobuf field <code>repeated int64 pids = 1;</code>
     */
    private $pids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $pids
     *           商品ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Order\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * 商品ID
     *
     * Generated from protobuf field <code>repeated int64 pids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPids()
    {
        return $this->pids;
    }

    /**
     * 商品ID
     *
     * Generated from protobuf field <code>repeated int64 pids = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->pids = $arr;

        return $this;
    }

}
