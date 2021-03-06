<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types.BatchSendVoucherResponseItem</code>
 */
class BatchSendVoucherResponseItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>bool status = 2;</code>
     */
    protected $status = false;
    /**
     * Generated from protobuf field <code>string error_msg = 3;</code>
     */
    protected $error_msg = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $user_id
     *     @type bool $status
     *     @type string $error_msg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParam::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool status = 2;</code>
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>bool status = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkBool($var);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error_msg = 3;</code>
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->error_msg;
    }

    /**
     * Generated from protobuf field <code>string error_msg = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_msg = $var;

        return $this;
    }

}

