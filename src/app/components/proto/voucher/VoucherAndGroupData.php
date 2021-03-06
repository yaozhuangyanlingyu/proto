<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types_read.VoucherAndGroupData</code>
 */
class VoucherAndGroupData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 page = 1;</code>
     */
    protected $page = 0;
    /**
     * Generated from protobuf field <code>int64 size = 2;</code>
     */
    protected $size = 0;
    /**
     * Generated from protobuf field <code>int64 total_count = 3;</code>
     */
    protected $total_count = 0;
    /**
     * Generated from protobuf field <code>repeated .voucher_types_read.VoucherJoinGroupData list = 4;</code>
     */
    private $list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $page
     *     @type int|string $size
     *     @type int|string $total_count
     *     @type \app\components\proto\voucher\VoucherJoinGroupData[]|\Google\Protobuf\Internal\RepeatedField $list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 page = 1;</code>
     * @return int|string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int64 page = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt64($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 size = 2;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>int64 size = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_count = 3;</code>
     * @return int|string
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * Generated from protobuf field <code>int64 total_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .voucher_types_read.VoucherJoinGroupData list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>repeated .voucher_types_read.VoucherJoinGroupData list = 4;</code>
     * @param \app\components\proto\voucher\VoucherJoinGroupData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \app\components\proto\voucher\VoucherJoinGroupData::class);
        $this->list = $arr;

        return $this;
    }

}

