<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types_read.GetNextVoucherIdRequest</code>
 */
class GetNextVoucherIdRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 voucher_id = 1;</code>
     */
    protected $voucher_id = 0;
    /**
     * Generated from protobuf field <code>repeated int64 group_ids = 2;</code>
     */
    private $group_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $voucher_id
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $group_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 voucher_id = 1;</code>
     * @return int|string
     */
    public function getVoucherId()
    {
        return $this->voucher_id;
    }

    /**
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
     * Generated from protobuf field <code>repeated int64 group_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupIds()
    {
        return $this->group_ids;
    }

    /**
     * Generated from protobuf field <code>repeated int64 group_ids = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->group_ids = $arr;

        return $this;
    }

}
