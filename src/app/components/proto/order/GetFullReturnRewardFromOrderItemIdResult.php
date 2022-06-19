<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/order/order.proto

namespace app\components\proto\order;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>order.GetFullReturnRewardFromOrderItemIdResult</code>
 */
class GetFullReturnRewardFromOrderItemIdResult extends \Google\Protobuf\Internal\Message
{
    /**
     * 配置配置id
     *
     * Generated from protobuf field <code>int64 conf_id = 1;</code>
     */
    protected $conf_id = 0;
    /**
     * 活动配置name
     *
     * Generated from protobuf field <code>string conf_name = 2;</code>
     */
    protected $conf_name = '';
    /**
     * oid所在满返的奖励类型 ( mis配置 )
     *
     * Generated from protobuf field <code>int64 reward_type = 3;</code>
     */
    protected $reward_type = 0;
    /**
     * oid所在满返的奖励id ( mis配置 )
     *
     * Generated from protobuf field <code>int64 reward_id = 4;</code>
     */
    protected $reward_id = 0;
    /**
     * oid所在满返的奖励value ( mis配置 )
     *
     * Generated from protobuf field <code>int64 reward_value = 5;</code>
     */
    protected $reward_value = 0;
    /**
     * oid所在满返的奖励状态 0: 默认 1: 未发奖 2: 已发奖励 3: 奖励已取消
     *
     * Generated from protobuf field <code>int64 reward_status = 6;</code>
     */
    protected $reward_status = 0;
    /**
     * 分摊的优惠金额,!!!单位分!!!
     *
     * Generated from protobuf field <code>int64 benefit = 7;</code>
     */
    protected $benefit = 0;
    /**
     * 到账时间
     *
     * Generated from protobuf field <code>int64 rewarded_time = 8;</code>
     */
    protected $rewarded_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $conf_id
     *           配置配置id
     *     @type string $conf_name
     *           活动配置name
     *     @type int|string $reward_type
     *           oid所在满返的奖励类型 ( mis配置 )
     *     @type int|string $reward_id
     *           oid所在满返的奖励id ( mis配置 )
     *     @type int|string $reward_value
     *           oid所在满返的奖励value ( mis配置 )
     *     @type int|string $reward_status
     *           oid所在满返的奖励状态 0: 默认 1: 未发奖 2: 已发奖励 3: 奖励已取消
     *     @type int|string $benefit
     *           分摊的优惠金额,!!!单位分!!!
     *     @type int|string $rewarded_time
     *           到账时间
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Order\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * 配置配置id
     *
     * Generated from protobuf field <code>int64 conf_id = 1;</code>
     * @return int|string
     */
    public function getConfId()
    {
        return $this->conf_id;
    }

    /**
     * 配置配置id
     *
     * Generated from protobuf field <code>int64 conf_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConfId($var)
    {
        GPBUtil::checkInt64($var);
        $this->conf_id = $var;

        return $this;
    }

    /**
     * 活动配置name
     *
     * Generated from protobuf field <code>string conf_name = 2;</code>
     * @return string
     */
    public function getConfName()
    {
        return $this->conf_name;
    }

    /**
     * 活动配置name
     *
     * Generated from protobuf field <code>string conf_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setConfName($var)
    {
        GPBUtil::checkString($var, True);
        $this->conf_name = $var;

        return $this;
    }

    /**
     * oid所在满返的奖励类型 ( mis配置 )
     *
     * Generated from protobuf field <code>int64 reward_type = 3;</code>
     * @return int|string
     */
    public function getRewardType()
    {
        return $this->reward_type;
    }

    /**
     * oid所在满返的奖励类型 ( mis配置 )
     *
     * Generated from protobuf field <code>int64 reward_type = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRewardType($var)
    {
        GPBUtil::checkInt64($var);
        $this->reward_type = $var;

        return $this;
    }

    /**
     * oid所在满返的奖励id ( mis配置 )
     *
     * Generated from protobuf field <code>int64 reward_id = 4;</code>
     * @return int|string
     */
    public function getRewardId()
    {
        return $this->reward_id;
    }

    /**
     * oid所在满返的奖励id ( mis配置 )
     *
     * Generated from protobuf field <code>int64 reward_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRewardId($var)
    {
        GPBUtil::checkInt64($var);
        $this->reward_id = $var;

        return $this;
    }

    /**
     * oid所在满返的奖励value ( mis配置 )
     *
     * Generated from protobuf field <code>int64 reward_value = 5;</code>
     * @return int|string
     */
    public function getRewardValue()
    {
        return $this->reward_value;
    }

    /**
     * oid所在满返的奖励value ( mis配置 )
     *
     * Generated from protobuf field <code>int64 reward_value = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRewardValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->reward_value = $var;

        return $this;
    }

    /**
     * oid所在满返的奖励状态 0: 默认 1: 未发奖 2: 已发奖励 3: 奖励已取消
     *
     * Generated from protobuf field <code>int64 reward_status = 6;</code>
     * @return int|string
     */
    public function getRewardStatus()
    {
        return $this->reward_status;
    }

    /**
     * oid所在满返的奖励状态 0: 默认 1: 未发奖 2: 已发奖励 3: 奖励已取消
     *
     * Generated from protobuf field <code>int64 reward_status = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRewardStatus($var)
    {
        GPBUtil::checkInt64($var);
        $this->reward_status = $var;

        return $this;
    }

    /**
     * 分摊的优惠金额,!!!单位分!!!
     *
     * Generated from protobuf field <code>int64 benefit = 7;</code>
     * @return int|string
     */
    public function getBenefit()
    {
        return $this->benefit;
    }

    /**
     * 分摊的优惠金额,!!!单位分!!!
     *
     * Generated from protobuf field <code>int64 benefit = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBenefit($var)
    {
        GPBUtil::checkInt64($var);
        $this->benefit = $var;

        return $this;
    }

    /**
     * 到账时间
     *
     * Generated from protobuf field <code>int64 rewarded_time = 8;</code>
     * @return int|string
     */
    public function getRewardedTime()
    {
        return $this->rewarded_time;
    }

    /**
     * 到账时间
     *
     * Generated from protobuf field <code>int64 rewarded_time = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRewardedTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->rewarded_time = $var;

        return $this;
    }

}

