<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *批量保存用户优惠券-请求
 *
 * Generated from protobuf message <code>voucher_types.BatchSaveUserVoucherRequest</code>
 */
class BatchSaveUserVoucherRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *用户优惠券列表
     *
     * Generated from protobuf field <code>repeated .voucher_types.SaveUserVoucherItem items = 1;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \app\components\proto\voucher\SaveUserVoucherItem[]|\Google\Protobuf\Internal\RepeatedField $items
     *          用户优惠券列表
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParam::initOnce();
        parent::__construct($data);
    }

    /**
     *用户优惠券列表
     *
     * Generated from protobuf field <code>repeated .voucher_types.SaveUserVoucherItem items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     *用户优惠券列表
     *
     * Generated from protobuf field <code>repeated .voucher_types.SaveUserVoucherItem items = 1;</code>
     * @param \app\components\proto\voucher\SaveUserVoucherItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \app\components\proto\voucher\SaveUserVoucherItem::class);
        $this->items = $arr;

        return $this;
    }

}

