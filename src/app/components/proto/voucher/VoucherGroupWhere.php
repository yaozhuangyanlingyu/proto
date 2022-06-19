<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * t_voucher_group查询条件
 *
 * Generated from protobuf message <code>voucher_types_read.VoucherGroupWhere</code>
 */
class VoucherGroupWhere extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int64 id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated int64 op_id = 2;</code>
     */
    private $op_id;
    /**
     * Generated from protobuf field <code>string department = 3;</code>
     */
    protected $department = '';
    /**
     * start_time<=?
     *
     * Generated from protobuf field <code>int64 start_time_le = 4;</code>
     */
    protected $start_time_le = 0;
    /**
     * end_time >= ?
     *
     * Generated from protobuf field <code>int64 end_time_ge = 5;</code>
     */
    protected $end_time_ge = 0;
    /**
     * Generated from protobuf field <code>repeated string code = 6;</code>
     */
    private $code;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $id
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $op_id
     *     @type string $department
     *     @type int|string $start_time_le
     *           start_time<=?
     *     @type int|string $end_time_ge
     *           end_time >= ?
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int64 id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated int64 id = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 op_id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOpId()
    {
        return $this->op_id;
    }

    /**
     * Generated from protobuf field <code>repeated int64 op_id = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOpId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->op_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string department = 3;</code>
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Generated from protobuf field <code>string department = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDepartment($var)
    {
        GPBUtil::checkString($var, True);
        $this->department = $var;

        return $this;
    }

    /**
     * start_time<=?
     *
     * Generated from protobuf field <code>int64 start_time_le = 4;</code>
     * @return int|string
     */
    public function getStartTimeLe()
    {
        return $this->start_time_le;
    }

    /**
     * start_time<=?
     *
     * Generated from protobuf field <code>int64 start_time_le = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTimeLe($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_time_le = $var;

        return $this;
    }

    /**
     * end_time >= ?
     *
     * Generated from protobuf field <code>int64 end_time_ge = 5;</code>
     * @return int|string
     */
    public function getEndTimeGe()
    {
        return $this->end_time_ge;
    }

    /**
     * end_time >= ?
     *
     * Generated from protobuf field <code>int64 end_time_ge = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTimeGe($var)
    {
        GPBUtil::checkInt64($var);
        $this->end_time_ge = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string code = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>repeated string code = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCode($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->code = $arr;

        return $this;
    }

}
