<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types_read.VProductRange</code>
 */
class VProductRange extends \Google\Protobuf\Internal\Message
{
    /**
     * 使用范围类型
     *
     * Generated from protobuf field <code>int32 range_type = 1;</code>
     */
    protected $range_type = 0;
    /**
     * 范围所需字段
     *
     * Generated from protobuf field <code>repeated string use_condition_field = 2;</code>
     */
    private $use_condition_field;
    /**
     * 条件数据
     *
     * Generated from protobuf field <code>.voucher_types_read.VProductRangeConditionFields condition_fields = 3;</code>
     */
    protected $condition_fields = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $range_type
     *           使用范围类型
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $use_condition_field
     *           范围所需字段
     *     @type \app\components\proto\voucher\VProductRangeConditionFields $condition_fields
     *           条件数据
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * 使用范围类型
     *
     * Generated from protobuf field <code>int32 range_type = 1;</code>
     * @return int
     */
    public function getRangeType()
    {
        return $this->range_type;
    }

    /**
     * 使用范围类型
     *
     * Generated from protobuf field <code>int32 range_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRangeType($var)
    {
        GPBUtil::checkInt32($var);
        $this->range_type = $var;

        return $this;
    }

    /**
     * 范围所需字段
     *
     * Generated from protobuf field <code>repeated string use_condition_field = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUseConditionField()
    {
        return $this->use_condition_field;
    }

    /**
     * 范围所需字段
     *
     * Generated from protobuf field <code>repeated string use_condition_field = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUseConditionField($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->use_condition_field = $arr;

        return $this;
    }

    /**
     * 条件数据
     *
     * Generated from protobuf field <code>.voucher_types_read.VProductRangeConditionFields condition_fields = 3;</code>
     * @return \app\components\proto\voucher\VProductRangeConditionFields|null
     */
    public function getConditionFields()
    {
        return isset($this->condition_fields) ? $this->condition_fields : null;
    }

    public function hasConditionFields()
    {
        return isset($this->condition_fields);
    }

    public function clearConditionFields()
    {
        unset($this->condition_fields);
    }

    /**
     * 条件数据
     *
     * Generated from protobuf field <code>.voucher_types_read.VProductRangeConditionFields condition_fields = 3;</code>
     * @param \app\components\proto\voucher\VProductRangeConditionFields $var
     * @return $this
     */
    public function setConditionFields($var)
    {
        GPBUtil::checkMessage($var, \app\components\proto\voucher\VProductRangeConditionFields::class);
        $this->condition_fields = $var;

        return $this;
    }

}

