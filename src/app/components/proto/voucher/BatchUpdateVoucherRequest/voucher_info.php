<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param.proto

namespace app\components\proto\voucher\BatchUpdateVoucherRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types.BatchUpdateVoucherRequest.voucher_info</code>
 */
class voucher_info extends \Google\Protobuf\Internal\Message
{
    /**
     *优惠券id
     *
     * Generated from protobuf field <code>int64 voucher_id = 1;</code>
     */
    protected $voucher_id = 0;
    /**
     * 更新的字段标识 "total_count", "can_notify"
     *
     * Generated from protobuf field <code>string field_name = 2;</code>
     */
    protected $field_name = '';
    /**
     * 更新的值
     *
     * Generated from protobuf field <code>int64 field_value = 3;</code>
     */
    protected $field_value = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $voucher_id
     *          优惠券id
     *     @type string $field_name
     *           更新的字段标识 "total_count", "can_notify"
     *     @type int|string $field_value
     *           更新的值
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParam::initOnce();
        parent::__construct($data);
    }

    /**
     *优惠券id
     *
     * Generated from protobuf field <code>int64 voucher_id = 1;</code>
     * @return int|string
     */
    public function getVoucherId()
    {
        return $this->voucher_id;
    }

    /**
     *优惠券id
     *
     * Generated from protobuf field <code>int64 voucher_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVoucherId($var)
    {
        GPBUtil::checkInt64($var);
        $this->voucher_id = $var;

        return $this;
    }

    /**
     * 更新的字段标识 "total_count", "can_notify"
     *
     * Generated from protobuf field <code>string field_name = 2;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * 更新的字段标识 "total_count", "can_notify"
     *
     * Generated from protobuf field <code>string field_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;

        return $this;
    }

    /**
     * 更新的值
     *
     * Generated from protobuf field <code>int64 field_value = 3;</code>
     * @return int|string
     */
    public function getFieldValue()
    {
        return $this->field_value;
    }

    /**
     * 更新的值
     *
     * Generated from protobuf field <code>int64 field_value = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFieldValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->field_value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(voucher_info::class, \app\components\proto\voucher\BatchUpdateVoucherRequest_voucher_info::class);

