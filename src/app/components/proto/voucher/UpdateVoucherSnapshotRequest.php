<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 手动同步优惠券到快照数据
 *
 * Generated from protobuf message <code>voucher_types.UpdateVoucherSnapshotRequest</code>
 */
class UpdateVoucherSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 操作类型：all(更新所有)、part(更新voucher_id部分)、cron定时任务
     *
     * Generated from protobuf field <code>string action_type = 1;</code>
     */
    protected $action_type = '';
    /**
     * 更新指定优惠券快照数据
     *
     * Generated from protobuf field <code>repeated int64 voucher_id = 2;</code>
     */
    private $voucher_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $action_type
     *           操作类型：all(更新所有)、part(更新voucher_id部分)、cron定时任务
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $voucher_id
     *           更新指定优惠券快照数据
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParam::initOnce();
        parent::__construct($data);
    }

    /**
     * 操作类型：all(更新所有)、part(更新voucher_id部分)、cron定时任务
     *
     * Generated from protobuf field <code>string action_type = 1;</code>
     * @return string
     */
    public function getActionType()
    {
        return $this->action_type;
    }

    /**
     * 操作类型：all(更新所有)、part(更新voucher_id部分)、cron定时任务
     *
     * Generated from protobuf field <code>string action_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setActionType($var)
    {
        GPBUtil::checkString($var, True);
        $this->action_type = $var;

        return $this;
    }

    /**
     * 更新指定优惠券快照数据
     *
     * Generated from protobuf field <code>repeated int64 voucher_id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVoucherId()
    {
        return $this->voucher_id;
    }

    /**
     * 更新指定优惠券快照数据
     *
     * Generated from protobuf field <code>repeated int64 voucher_id = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVoucherId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->voucher_id = $arr;

        return $this;
    }

}

