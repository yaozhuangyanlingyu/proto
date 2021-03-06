<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types_read.GetCalPriceVoucherListByUserRequest</code>
 */
class GetCalPriceVoucherListByUserRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *[非必填] 如果是具体某个用户则检查这个用户拥有的优惠券，否则检查通用券
     *
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>string coverage_condition = 2;</code>
     */
    protected $coverage_condition = '';
    /**
     * Generated from protobuf field <code>int64 time_point = 3;</code>
     */
    protected $time_point = 0;
    /**
     *默认false [user_id有值、这个选项无效]
     *
     * Generated from protobuf field <code>bool is_new_user_voucher = 4;</code>
     */
    protected $is_new_user_voucher = false;
    /**
     *非日本直邮商品不可用日本直邮券 默认是false=没有这块逻辑
     *
     * Generated from protobuf field <code>bool is_japan = 5;</code>
     */
    protected $is_japan = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $user_id
     *          [非必填] 如果是具体某个用户则检查这个用户拥有的优惠券，否则检查通用券
     *     @type string $coverage_condition
     *     @type int|string $time_point
     *     @type bool $is_new_user_voucher
     *          默认false [user_id有值、这个选项无效]
     *     @type bool $is_japan
     *          非日本直邮商品不可用日本直邮券 默认是false=没有这块逻辑
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     *[非必填] 如果是具体某个用户则检查这个用户拥有的优惠券，否则检查通用券
     *
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     *[非必填] 如果是具体某个用户则检查这个用户拥有的优惠券，否则检查通用券
     *
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string coverage_condition = 2;</code>
     * @return string
     */
    public function getCoverageCondition()
    {
        return $this->coverage_condition;
    }

    /**
     * Generated from protobuf field <code>string coverage_condition = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCoverageCondition($var)
    {
        GPBUtil::checkString($var, True);
        $this->coverage_condition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 time_point = 3;</code>
     * @return int|string
     */
    public function getTimePoint()
    {
        return $this->time_point;
    }

    /**
     * Generated from protobuf field <code>int64 time_point = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimePoint($var)
    {
        GPBUtil::checkInt64($var);
        $this->time_point = $var;

        return $this;
    }

    /**
     *默认false [user_id有值、这个选项无效]
     *
     * Generated from protobuf field <code>bool is_new_user_voucher = 4;</code>
     * @return bool
     */
    public function getIsNewUserVoucher()
    {
        return $this->is_new_user_voucher;
    }

    /**
     *默认false [user_id有值、这个选项无效]
     *
     * Generated from protobuf field <code>bool is_new_user_voucher = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsNewUserVoucher($var)
    {
        GPBUtil::checkBool($var);
        $this->is_new_user_voucher = $var;

        return $this;
    }

    /**
     *非日本直邮商品不可用日本直邮券 默认是false=没有这块逻辑
     *
     * Generated from protobuf field <code>bool is_japan = 5;</code>
     * @return bool
     */
    public function getIsJapan()
    {
        return $this->is_japan;
    }

    /**
     *非日本直邮商品不可用日本直邮券 默认是false=没有这块逻辑
     *
     * Generated from protobuf field <code>bool is_japan = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsJapan($var)
    {
        GPBUtil::checkBool($var);
        $this->is_japan = $var;

        return $this;
    }

}

