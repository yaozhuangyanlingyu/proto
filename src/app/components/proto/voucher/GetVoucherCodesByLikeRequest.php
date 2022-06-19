<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types_read.GetVoucherCodesByLikeRequest</code>
 */
class GetVoucherCodesByLikeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * code模糊匹配前缀
     *
     * Generated from protobuf field <code>string code_prefix = 1;</code>
     */
    protected $code_prefix = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code_prefix
     *           code模糊匹配前缀
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * code模糊匹配前缀
     *
     * Generated from protobuf field <code>string code_prefix = 1;</code>
     * @return string
     */
    public function getCodePrefix()
    {
        return $this->code_prefix;
    }

    /**
     * code模糊匹配前缀
     *
     * Generated from protobuf field <code>string code_prefix = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCodePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->code_prefix = $var;

        return $this;
    }

}
