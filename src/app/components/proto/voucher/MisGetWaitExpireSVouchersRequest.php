<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MIS检查将要过期的卖家优惠券，给卖家发送短息 notice3days
 *
 * Generated from protobuf message <code>voucher_types_read.MisGetWaitExpireSVouchersRequest</code>
 */
class MisGetWaitExpireSVouchersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 开始时间
     *
     * Generated from protobuf field <code>int64 stime = 1;</code>
     */
    protected $stime = 0;
    /**
     * 结束时间
     *
     * Generated from protobuf field <code>int64 etime = 2;</code>
     */
    protected $etime = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $stime
     *           开始时间
     *     @type int|string $etime
     *           结束时间
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * 开始时间
     *
     * Generated from protobuf field <code>int64 stime = 1;</code>
     * @return int|string
     */
    public function getStime()
    {
        return $this->stime;
    }

    /**
     * 开始时间
     *
     * Generated from protobuf field <code>int64 stime = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStime($var)
    {
        GPBUtil::checkInt64($var);
        $this->stime = $var;

        return $this;
    }

    /**
     * 结束时间
     *
     * Generated from protobuf field <code>int64 etime = 2;</code>
     * @return int|string
     */
    public function getEtime()
    {
        return $this->etime;
    }

    /**
     * 结束时间
     *
     * Generated from protobuf field <code>int64 etime = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEtime($var)
    {
        GPBUtil::checkInt64($var);
        $this->etime = $var;

        return $this;
    }

}
