<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 用户已领取的全场可用券
 *
 * Generated from protobuf message <code>voucher_types_read.GetUserVoucherAllAvailableRequest</code>
 */
class GetUserVoucherAllAvailableRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 优惠券场景类型：1未使用、2待领取、3已使用、6已过期
     *
     * Generated from protobuf field <code>int32 scene_type = 1;</code>
     */
    protected $scene_type = 0;
    /**
     * 劵类型：user买家劵、seller卖家劵
     *
     * Generated from protobuf field <code>string user_type = 2;</code>
     */
    protected $user_type = '';
    /**
     * 用户ID
     *
     * Generated from protobuf field <code>int64 user_id = 3;</code>
     */
    protected $user_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $scene_type
     *           优惠券场景类型：1未使用、2待领取、3已使用、6已过期
     *     @type string $user_type
     *           劵类型：user买家劵、seller卖家劵
     *     @type int|string $user_id
     *           用户ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * 优惠券场景类型：1未使用、2待领取、3已使用、6已过期
     *
     * Generated from protobuf field <code>int32 scene_type = 1;</code>
     * @return int
     */
    public function getSceneType()
    {
        return $this->scene_type;
    }

    /**
     * 优惠券场景类型：1未使用、2待领取、3已使用、6已过期
     *
     * Generated from protobuf field <code>int32 scene_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSceneType($var)
    {
        GPBUtil::checkInt32($var);
        $this->scene_type = $var;

        return $this;
    }

    /**
     * 劵类型：user买家劵、seller卖家劵
     *
     * Generated from protobuf field <code>string user_type = 2;</code>
     * @return string
     */
    public function getUserType()
    {
        return $this->user_type;
    }

    /**
     * 劵类型：user买家劵、seller卖家劵
     *
     * Generated from protobuf field <code>string user_type = 2;</code>
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
     * 用户ID
     *
     * Generated from protobuf field <code>int64 user_id = 3;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * 用户ID
     *
     * Generated from protobuf field <code>int64 user_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_id = $var;

        return $this;
    }

}

