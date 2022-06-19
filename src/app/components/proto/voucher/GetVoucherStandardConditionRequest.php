<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * 获取优惠券标准条件 - 商品列表筛选用
 *
 * Generated from protobuf message <code>voucher_types_read.GetVoucherStandardConditionRequest</code>
 */
class GetVoucherStandardConditionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 优惠券ID
     *
     * Generated from protobuf field <code>int64 voucher_id = 1;</code>
     */
    protected $voucher_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $voucher_id
     *           优惠券ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * 优惠券ID
     *
     * Generated from protobuf field <code>int64 voucher_id = 1;</code>
     * @return int|string
     */
    public function getVoucherId()
    {
        return $this->voucher_id;
    }

    /**
     * 优惠券ID
     *
     * Generated from protobuf field <code>int64 voucher_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVoucherId($var)
    {
        GPBUtil::checkInt64($var);
        $this->voucher_id = $var;

        return $this;
    }

}
