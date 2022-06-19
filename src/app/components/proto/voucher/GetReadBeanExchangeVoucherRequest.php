<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types_read.GetReadBeanExchangeVoucherRequest</code>
 */
class GetReadBeanExchangeVoucherRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_type = 1;</code>
     */
    protected $user_type = '';
    /**
     * Generated from protobuf field <code>int64 time = 2;</code>
     */
    protected $time = 0;
    /**
     * "t_voucher.create_time asc,t_voucher.id asc"
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     */
    protected $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_type
     *     @type int|string $time
     *     @type string $order_by
     *           "t_voucher.create_time asc,t_voucher.id asc"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_type = 1;</code>
     * @return string
     */
    public function getUserType()
    {
        return $this->user_type;
    }

    /**
     * Generated from protobuf field <code>string user_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserType($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 time = 2;</code>
     * @return int|string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Generated from protobuf field <code>int64 time = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->time = $var;

        return $this;
    }

    /**
     * "t_voucher.create_time asc,t_voucher.id asc"
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * "t_voucher.create_time asc,t_voucher.id asc"
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}
