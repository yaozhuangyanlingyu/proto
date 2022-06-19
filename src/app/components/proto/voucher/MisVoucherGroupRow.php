<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types_read.MisVoucherGroupRow</code>
 */
class MisVoucherGroupRow extends \Google\Protobuf\Internal\Message
{
    /**
     * 优惠券组信息
     *
     * Generated from protobuf field <code>.voucher_types_read.VoucherGroupData group = 1;</code>
     */
    protected $group = null;
    /**
     * 优惠券信息
     *
     * Generated from protobuf field <code>repeated .voucher_types_read.VoucherData voucher_list = 2;</code>
     */
    private $voucher_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \app\components\proto\voucher\VoucherGroupData $group
     *           优惠券组信息
     *     @type \app\components\proto\voucher\VoucherData[]|\Google\Protobuf\Internal\RepeatedField $voucher_list
     *           优惠券信息
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * 优惠券组信息
     *
     * Generated from protobuf field <code>.voucher_types_read.VoucherGroupData group = 1;</code>
     * @return \app\components\proto\voucher\VoucherGroupData|null
     */
    public function getGroup()
    {
        return isset($this->group) ? $this->group : null;
    }

    public function hasGroup()
    {
        return isset($this->group);
    }

    public function clearGroup()
    {
        unset($this->group);
    }

    /**
     * 优惠券组信息
     *
     * Generated from protobuf field <code>.voucher_types_read.VoucherGroupData group = 1;</code>
     * @param \app\components\proto\voucher\VoucherGroupData $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkMessage($var, \app\components\proto\voucher\VoucherGroupData::class);
        $this->group = $var;

        return $this;
    }

    /**
     * 优惠券信息
     *
     * Generated from protobuf field <code>repeated .voucher_types_read.VoucherData voucher_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVoucherList()
    {
        return $this->voucher_list;
    }

    /**
     * 优惠券信息
     *
     * Generated from protobuf field <code>repeated .voucher_types_read.VoucherData voucher_list = 2;</code>
     * @param \app\components\proto\voucher\VoucherData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVoucherList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \app\components\proto\voucher\VoucherData::class);
        $this->voucher_list = $arr;

        return $this;
    }

}

