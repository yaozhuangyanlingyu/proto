<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 删除优惠券
 *
 * Generated from protobuf message <code>voucher_types.DeleteVoucherRequest</code>
 */
class DeleteVoucherRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 优惠券ID
     *
     * Generated from protobuf field <code>int64 voucher_id = 1;</code>
     */
    protected $voucher_id = 0;
    /**
     * 操作人员ID
     *
     * Generated from protobuf field <code>int64 op_id = 10;</code>
     */
    protected $op_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $voucher_id
     *           优惠券ID
     *     @type int|string $op_id
     *           操作人员ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParam::initOnce();
        parent::__construct($data);
    }

    /**
     * 优惠券ID
     *
     * Generated from protobuf field <code>int64 voucher_id = 1;</code>
     * @return int|string
     */
    public function getVoucherId()
    {
        return $this->voucher_id;
    }

    /**
     * 优惠券ID
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
     * 操作人员ID
     *
     * Generated from protobuf field <code>int64 op_id = 10;</code>
     * @return int|string
     */
    public function getOpId()
    {
        return $this->op_id;
    }

    /**
     * 操作人员ID
     *
     * Generated from protobuf field <code>int64 op_id = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOpId($var)
    {
        GPBUtil::checkInt64($var);
        $this->op_id = $var;

        return $this;
    }

}
