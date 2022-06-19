<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types.SendVoucherResponseItem</code>
 */
class SendVoucherResponseItem extends \Google\Protobuf\Internal\Message
{
    /**
     *优惠券id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     *优惠券名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     *是否只能用于原价购买的商品
     *
     * Generated from protobuf field <code>string non_discount_only = 3;</code>
     */
    protected $non_discount_only = '';
    /**
     *应用优惠条件的商品所要达到的购买值
     *
     * Generated from protobuf field <code>string condition_value = 4;</code>
     */
    protected $condition_value = '';
    /**
     *优惠的金额,单位为元
     *
     * Generated from protobuf field <code>string benefit_value = 5;</code>
     */
    protected $benefit_value = '';
    /**
     *优惠的结束时间
     *
     * Generated from protobuf field <code>int64 end_time = 6;</code>
     */
    protected $end_time = 0;
    /**
     * Generated from protobuf field <code>int64 insert_id = 7;</code>
     */
    protected $insert_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *          优惠券id
     *     @type string $name
     *          优惠券名称
     *     @type string $non_discount_only
     *          是否只能用于原价购买的商品
     *     @type string $condition_value
     *          应用优惠条件的商品所要达到的购买值
     *     @type string $benefit_value
     *          优惠的金额,单位为元
     *     @type int|string $end_time
     *          优惠的结束时间
     *     @type int|string $insert_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParam::initOnce();
        parent::__construct($data);
    }

    /**
     *优惠券id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *优惠券id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     *优惠券名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *优惠券名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     *是否只能用于原价购买的商品
     *
     * Generated from protobuf field <code>string non_discount_only = 3;</code>
     * @return string
     */
    public function getNonDiscountOnly()
    {
        return $this->non_discount_only;
    }

    /**
     *是否只能用于原价购买的商品
     *
     * Generated from protobuf field <code>string non_discount_only = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNonDiscountOnly($var)
    {
        GPBUtil::checkString($var, True);
        $this->non_discount_only = $var;

        return $this;
    }

    /**
     *应用优惠条件的商品所要达到的购买值
     *
     * Generated from protobuf field <code>string condition_value = 4;</code>
     * @return string
     */
    public function getConditionValue()
    {
        return $this->condition_value;
    }

    /**
     *应用优惠条件的商品所要达到的购买值
     *
     * Generated from protobuf field <code>string condition_value = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setConditionValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->condition_value = $var;

        return $this;
    }

    /**
     *优惠的金额,单位为元
     *
     * Generated from protobuf field <code>string benefit_value = 5;</code>
     * @return string
     */
    public function getBenefitValue()
    {
        return $this->benefit_value;
    }

    /**
     *优惠的金额,单位为元
     *
     * Generated from protobuf field <code>string benefit_value = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBenefitValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->benefit_value = $var;

        return $this;
    }

    /**
     *优惠的结束时间
     *
     * Generated from protobuf field <code>int64 end_time = 6;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     *优惠的结束时间
     *
     * Generated from protobuf field <code>int64 end_time = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 insert_id = 7;</code>
     * @return int|string
     */
    public function getInsertId()
    {
        return $this->insert_id;
    }

    /**
     * Generated from protobuf field <code>int64 insert_id = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInsertId($var)
    {
        GPBUtil::checkInt64($var);
        $this->insert_id = $var;

        return $this;
    }

}

