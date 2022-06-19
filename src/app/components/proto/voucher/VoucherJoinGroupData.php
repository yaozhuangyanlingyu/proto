<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 券data，字短描述参考表结构
 *
 * Generated from protobuf message <code>voucher_types_read.VoucherJoinGroupData</code>
 */
class VoucherJoinGroupData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.voucher_types_read.VoucherData voucher = 1;</code>
     */
    protected $voucher = null;
    /**
     * Generated from protobuf field <code>.voucher_types_read.VoucherGroupData group = 2;</code>
     */
    protected $group = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \app\components\proto\voucher\VoucherData $voucher
     *     @type \app\components\proto\voucher\VoucherGroupData $group
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.voucher_types_read.VoucherData voucher = 1;</code>
     * @return \app\components\proto\voucher\VoucherData|null
     */
    public function getVoucher()
    {
        return isset($this->voucher) ? $this->voucher : null;
    }

    public function hasVoucher()
    {
        return isset($this->voucher);
    }

    public function clearVoucher()
    {
        unset($this->voucher);
    }

    /**
     * Generated from protobuf field <code>.voucher_types_read.VoucherData voucher = 1;</code>
     * @param \app\components\proto\voucher\VoucherData $var
     * @return $this
     */
    public function setVoucher($var)
    {
        GPBUtil::checkMessage($var, \app\components\proto\voucher\VoucherData::class);
        $this->voucher = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.voucher_types_read.VoucherGroupData group = 2;</code>
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
     * Generated from protobuf field <code>.voucher_types_read.VoucherGroupData group = 2;</code>
     * @param \app\components\proto\voucher\VoucherGroupData $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkMessage($var, \app\components\proto\voucher\VoucherGroupData::class);
        $this->group = $var;

        return $this;
    }

}

