<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 获取商品绑定的卖家劵
 *
 * Generated from protobuf message <code>voucher_types_read.GetUserVoucherByPidRequest</code>
 */
class GetUserVoucherByPidRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 订单ID
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
     *           订单ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * 订单ID
     *
     * Generated from protobuf field <code>repeated int64 pids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPids()
    {
        return $this->pids;
    }

    /**
     * 订单ID
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

