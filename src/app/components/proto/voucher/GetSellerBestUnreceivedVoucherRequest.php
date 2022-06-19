<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types_read.GetSellerBestUnreceivedVoucherRequest</code>
 */
class GetSellerBestUnreceivedVoucherRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *分类id
     *
     * Generated from protobuf field <code>int64 cat_id = 1;</code>
     */
    protected $cat_id = 0;
    /**
     *品牌id
     *
     * Generated from protobuf field <code>int64 brand_id = 2;</code>
     */
    protected $brand_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $cat_id
     *          分类id
     *     @type int|string $brand_id
     *          品牌id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     *分类id
     *
     * Generated from protobuf field <code>int64 cat_id = 1;</code>
     * @return int|string
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    /**
     *分类id
     *
     * Generated from protobuf field <code>int64 cat_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCatId($var)
    {
        GPBUtil::checkInt64($var);
        $this->cat_id = $var;

        return $this;
    }

    /**
     *品牌id
     *
     * Generated from protobuf field <code>int64 brand_id = 2;</code>
     * @return int|string
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     *品牌id
     *
     * Generated from protobuf field <code>int64 brand_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBrandId($var)
    {
        GPBUtil::checkInt64($var);
        $this->brand_id = $var;

        return $this;
    }

}

