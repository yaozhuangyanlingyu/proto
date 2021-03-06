<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types_read.GetUserVoucherJoinGroupRequest</code>
 */
class GetUserVoucherJoinGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 uv_user_id = 1;</code>
     */
    protected $uv_user_id = 0;
    /**
     * Generated from protobuf field <code>int64 vg_voucher_type = 2;</code>
     */
    protected $vg_voucher_type = 0;
    /**
     * Generated from protobuf field <code>int64 limit = 3;</code>
     */
    protected $limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $uv_user_id
     *     @type int|string $vg_voucher_type
     *     @type int|string $limit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 uv_user_id = 1;</code>
     * @return int|string
     */
    public function getUvUserId()
    {
        return $this->uv_user_id;
    }

    /**
     * Generated from protobuf field <code>int64 uv_user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUvUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->uv_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 vg_voucher_type = 2;</code>
     * @return int|string
     */
    public function getVgVoucherType()
    {
        return $this->vg_voucher_type;
    }

    /**
     * Generated from protobuf field <code>int64 vg_voucher_type = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVgVoucherType($var)
    {
        GPBUtil::checkInt64($var);
        $this->vg_voucher_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 limit = 3;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>int64 limit = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;

        return $this;
    }

}

