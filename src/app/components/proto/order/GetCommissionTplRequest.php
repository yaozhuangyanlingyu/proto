<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/order/order.proto

namespace app\components\proto\order;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 提交商品前，根据条件匹配佣金模板
 *
 * Generated from protobuf message <code>order.GetCommissionTplRequest</code>
 */
class GetCommissionTplRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 品牌ID
     *
     * Generated from protobuf field <code>int64 brand_id = 1;</code>
     */
    protected $brand_id = 0;
    /**
     * 类目ID
     *
     * Generated from protobuf field <code>int64 category_id = 2;</code>
     */
    protected $category_id = 0;
    /**
     * 卖家ID
     *
     * Generated from protobuf field <code>int64 seller_id = 3;</code>
     */
    protected $seller_id = 0;
    /**
     * 卖家商品创建时间(非必填)
     *
     * Generated from protobuf field <code>int64 product_commit_time = 4;</code>
     */
    protected $product_commit_time = 0;
    /**
     * 寄卖方式：plum入仓模式、seller挂售(非必填)
     *
     * Generated from protobuf field <code>string dispatch_type = 5;</code>
     */
    protected $dispatch_type = '';
    /**
     * 商品ID(非必填)
     *
     * Generated from protobuf field <code>int64 product_id = 6;</code>
     */
    protected $product_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $brand_id
     *           品牌ID
     *     @type int|string $category_id
     *           类目ID
     *     @type int|string $seller_id
     *           卖家ID
     *     @type int|string $product_commit_time
     *           卖家商品创建时间(非必填)
     *     @type string $dispatch_type
     *           寄卖方式：plum入仓模式、seller挂售(非必填)
     *     @type int|string $product_id
     *           商品ID(非必填)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Order\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * 品牌ID
     *
     * Generated from protobuf field <code>int64 brand_id = 1;</code>
     * @return int|string
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * 品牌ID
     *
     * Generated from protobuf field <code>int64 brand_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBrandId($var)
    {
        GPBUtil::checkInt64($var);
        $this->brand_id = $var;

        return $this;
    }

    /**
     * 类目ID
     *
     * Generated from protobuf field <code>int64 category_id = 2;</code>
     * @return int|string
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * 类目ID
     *
     * Generated from protobuf field <code>int64 category_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCategoryId($var)
    {
        GPBUtil::checkInt64($var);
        $this->category_id = $var;

        return $this;
    }

    /**
     * 卖家ID
     *
     * Generated from protobuf field <code>int64 seller_id = 3;</code>
     * @return int|string
     */
    public function getSellerId()
    {
        return $this->seller_id;
    }

    /**
     * 卖家ID
     *
     * Generated from protobuf field <code>int64 seller_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSellerId($var)
    {
        GPBUtil::checkInt64($var);
        $this->seller_id = $var;

        return $this;
    }

    /**
     * 卖家商品创建时间(非必填)
     *
     * Generated from protobuf field <code>int64 product_commit_time = 4;</code>
     * @return int|string
     */
    public function getProductCommitTime()
    {
        return $this->product_commit_time;
    }

    /**
     * 卖家商品创建时间(非必填)
     *
     * Generated from protobuf field <code>int64 product_commit_time = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setProductCommitTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->product_commit_time = $var;

        return $this;
    }

    /**
     * 寄卖方式：plum入仓模式、seller挂售(非必填)
     *
     * Generated from protobuf field <code>string dispatch_type = 5;</code>
     * @return string
     */
    public function getDispatchType()
    {
        return $this->dispatch_type;
    }

    /**
     * 寄卖方式：plum入仓模式、seller挂售(非必填)
     *
     * Generated from protobuf field <code>string dispatch_type = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDispatchType($var)
    {
        GPBUtil::checkString($var, True);
        $this->dispatch_type = $var;

        return $this;
    }

    /**
     * 商品ID(非必填)
     *
     * Generated from protobuf field <code>int64 product_id = 6;</code>
     * @return int|string
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * 商品ID(非必填)
     *
     * Generated from protobuf field <code>int64 product_id = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setProductId($var)
    {
        GPBUtil::checkInt64($var);
        $this->product_id = $var;

        return $this;
    }

}

