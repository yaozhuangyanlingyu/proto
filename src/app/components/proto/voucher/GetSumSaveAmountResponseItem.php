<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types_read.GetSumSaveAmountResponseItem</code>
 */
class GetSumSaveAmountResponseItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sum_max_off_price = 1;</code>
     */
    protected $sum_max_off_price = '';
    /**
     * Generated from protobuf field <code>string sum_benefit_value = 2;</code>
     */
    protected $sum_benefit_value = '';
    /**
     * Generated from protobuf field <code>string user_type = 3;</code>
     */
    protected $user_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sum_max_off_price
     *     @type string $sum_benefit_value
     *     @type string $user_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sum_max_off_price = 1;</code>
     * @return string
     */
    public function getSumMaxOffPrice()
    {
        return $this->sum_max_off_price;
    }

    /**
     * Generated from protobuf field <code>string sum_max_off_price = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSumMaxOffPrice($var)
    {
        GPBUtil::checkString($var, True);
        $this->sum_max_off_price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sum_benefit_value = 2;</code>
     * @return string
     */
    public function getSumBenefitValue()
    {
        return $this->sum_benefit_value;
    }

    /**
     * Generated from protobuf field <code>string sum_benefit_value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSumBenefitValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->sum_benefit_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_type = 3;</code>
     * @return string
     */
    public function getUserType()
    {
        return $this->user_type;
    }

    /**
     * Generated from protobuf field <code>string user_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserType($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_type = $var;

        return $this;
    }

}

