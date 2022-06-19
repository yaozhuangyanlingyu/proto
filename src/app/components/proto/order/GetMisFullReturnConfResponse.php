<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/order/order.proto

namespace app\components\proto\order;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>order.GetMisFullReturnConfResponse</code>
 */
class GetMisFullReturnConfResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 code = 1;</code>
     */
    protected $code = 0;
    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     */
    protected $msg = '';
    /**
     * key: group_id
     *
     * Generated from protobuf field <code>map<int64, .order.MisFullReturnConfItem> result = 3;</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $code
     *     @type string $msg
     *     @type array|\Google\Protobuf\Internal\MapField $result
     *           key: group_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Order\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 code = 1;</code>
     * @return int|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>int64 code = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt64($var);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

    /**
     * key: group_id
     *
     * Generated from protobuf field <code>map<int64, .order.MisFullReturnConfItem> result = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * key: group_id
     *
     * Generated from protobuf field <code>map<int64, .order.MisFullReturnConfItem> result = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT64, \Google\Protobuf\Internal\GPBType::MESSAGE, \app\components\proto\order\MisFullReturnConfItem::class);
        $this->result = $arr;

        return $this;
    }

}

