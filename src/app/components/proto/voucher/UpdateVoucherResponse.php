<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types.UpdateVoucherResponse</code>
 */
class UpdateVoucherResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 code = 1;</code>
     */
    protected $code = 0;
    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     */
    protected $msg = '';
    /**
     * 优惠券数据
     *
     * Generated from protobuf field <code>.voucher_types.TVoucher voucher_info = 3;</code>
     */
    protected $voucher_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $code
     *     @type string $msg
     *     @type \app\components\proto\voucher\TVoucher $voucher_info
     *           优惠券数据
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParam::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 code = 1;</code>
     * @return int|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>int64 code = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt64($var);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

    /**
     * 优惠券数据
     *
     * Generated from protobuf field <code>.voucher_types.TVoucher voucher_info = 3;</code>
     * @return \app\components\proto\voucher\TVoucher|null
     */
    public function getVoucherInfo()
    {
        return isset($this->voucher_info) ? $this->voucher_info : null;
    }

    public function hasVoucherInfo()
    {
        return isset($this->voucher_info);
    }

    public function clearVoucherInfo()
    {
        unset($this->voucher_info);
    }

    /**
     * 优惠券数据
     *
     * Generated from protobuf field <code>.voucher_types.TVoucher voucher_info = 3;</code>
     * @param \app\components\proto\voucher\TVoucher $var
     * @return $this
     */
    public function setVoucherInfo($var)
    {
        GPBUtil::checkMessage($var, \app\components\proto\voucher\TVoucher::class);
        $this->voucher_info = $var;

        return $this;
    }

}

