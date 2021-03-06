<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *批量更新已领取优惠券库存-请求
 *
 * Generated from protobuf message <code>voucher_types.BatchUpdateDrawCountRequest</code>
 */
class BatchUpdateDrawCountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .voucher_types.BatchUpdateDrawCountRequest.voucher_info voucher = 1;</code>
     */
    private $voucher;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \app\components\proto\voucher\BatchUpdateDrawCountRequest\voucher_info[]|\Google\Protobuf\Internal\RepeatedField $voucher
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParam::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .voucher_types.BatchUpdateDrawCountRequest.voucher_info voucher = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * Generated from protobuf field <code>repeated .voucher_types.BatchUpdateDrawCountRequest.voucher_info voucher = 1;</code>
     * @param \app\components\proto\voucher\BatchUpdateDrawCountRequest\voucher_info[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVoucher($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \app\components\proto\voucher\BatchUpdateDrawCountRequest\voucher_info::class);
        $this->voucher = $arr;

        return $this;
    }

}

