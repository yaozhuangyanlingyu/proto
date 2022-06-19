<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/voucher/voucher-param-read.proto

namespace app\components\proto\voucher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>voucher_types_read.VoucherStandardCondition</code>
 */
class VoucherStandardCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * 分类ID
     *
     * Generated from protobuf field <code>repeated int64 category_id = 1;</code>
     */
    private $category_id;
    /**
     * 品牌ID
     *
     * Generated from protobuf field <code>repeated int64 brand_id = 2;</code>
     */
    private $brand_id;
    /**
     * 活动ID
     *
     * Generated from protobuf field <code>repeated int64 activity_id = 3;</code>
     */
    private $activity_id;
    /**
     * 上架天数-大于等于
     *
     * Generated from protobuf field <code>int64 onsale_day_egt = 4;</code>
     */
    protected $onsale_day_egt = 0;
    /**
     * 上架天数-小于等于
     *
     * Generated from protobuf field <code>int64 onsale_day_elt = 5;</code>
     */
    protected $onsale_day_elt = 0;
    /**
     * 商品类型：all：全部，brandnew：新品，secondhand:二手
     *
     * Generated from protobuf field <code>string product_type = 6;</code>
     */
    protected $product_type = '';
    /**
     * 优惠券使用条件
     *
     * Generated from protobuf field <code>float condition_value = 7;</code>
     */
    protected $condition_value = 0.0;
    /**
     * 清仓商品可用，活动ID
     *
     * Generated from protobuf field <code>repeated int64 clearance_discount_id = 8;</code>
     */
    private $clearance_discount_id;
    /**
     * 是否正价商品
     *
     * Generated from protobuf field <code>bool nondiscount_only = 9;</code>
     */
    protected $nondiscount_only = false;
    /**
     * 商品范围(或操作，满足1个条件即可)
     *
     * Generated from protobuf field <code>repeated .voucher_types_read.VProductRange v_product_range = 10;</code>
     */
    private $v_product_range;
    /**
     * 指定卖家劵
     *
     * Generated from protobuf field <code>repeated int64 seller_id = 11;</code>
     */
    private $seller_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $category_id
     *           分类ID
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $brand_id
     *           品牌ID
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $activity_id
     *           活动ID
     *     @type int|string $onsale_day_egt
     *           上架天数-大于等于
     *     @type int|string $onsale_day_elt
     *           上架天数-小于等于
     *     @type string $product_type
     *           商品类型：all：全部，brandnew：新品，secondhand:二手
     *     @type float $condition_value
     *           优惠券使用条件
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $clearance_discount_id
     *           清仓商品可用，活动ID
     *     @type bool $nondiscount_only
     *           是否正价商品
     *     @type \app\components\proto\voucher\VProductRange[]|\Google\Protobuf\Internal\RepeatedField $v_product_range
     *           商品范围(或操作，满足1个条件即可)
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $seller_id
     *           指定卖家劵
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Voucher\VoucherParamRead::initOnce();
        parent::__construct($data);
    }

    /**
     * 分类ID
     *
     * Generated from protobuf field <code>repeated int64 category_id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * 分类ID
     *
     * Generated from protobuf field <code>repeated int64 category_id = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategoryId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->category_id = $arr;

        return $this;
    }

    /**
     * 品牌ID
     *
     * Generated from protobuf field <code>repeated int64 brand_id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * 品牌ID
     *
     * Generated from protobuf field <code>repeated int64 brand_id = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBrandId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->brand_id = $arr;

        return $this;
    }

    /**
     * 活动ID
     *
     * Generated from protobuf field <code>repeated int64 activity_id = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivityId()
    {
        return $this->activity_id;
    }

    /**
     * 活动ID
     *
     * Generated from protobuf field <code>repeated int64 activity_id = 3;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivityId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->activity_id = $arr;

        return $this;
    }

    /**
     * 上架天数-大于等于
     *
     * Generated from protobuf field <code>int64 onsale_day_egt = 4;</code>
     * @return int|string
     */
    public function getOnsaleDayEgt()
    {
        return $this->onsale_day_egt;
    }

    /**
     * 上架天数-大于等于
     *
     * Generated from protobuf field <code>int64 onsale_day_egt = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOnsaleDayEgt($var)
    {
        GPBUtil::checkInt64($var);
        $this->onsale_day_egt = $var;

        return $this;
    }

    /**
     * 上架天数-小于等于
     *
     * Generated from protobuf field <code>int64 onsale_day_elt = 5;</code>
     * @return int|string
     */
    public function getOnsaleDayElt()
    {
        return $this->onsale_day_elt;
    }

    /**
     * 上架天数-小于等于
     *
     * Generated from protobuf field <code>int64 onsale_day_elt = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOnsaleDayElt($var)
    {
        GPBUtil::checkInt64($var);
        $this->onsale_day_elt = $var;

        return $this;
    }

    /**
     * 商品类型：all：全部，brandnew：新品，secondhand:二手
     *
     * Generated from protobuf field <code>string product_type = 6;</code>
     * @return string
     */
    public function getProductType()
    {
        return $this->product_type;
    }

    /**
     * 商品类型：all：全部，brandnew：新品，secondhand:二手
     *
     * Generated from protobuf field <code>string product_type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setProductType($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_type = $var;

        return $this;
    }

    /**
     * 优惠券使用条件
     *
     * Generated from protobuf field <code>float condition_value = 7;</code>
     * @return float
     */
    public function getConditionValue()
    {
        return $this->condition_value;
    }

    /**
     * 优惠券使用条件
     *
     * Generated from protobuf field <code>float condition_value = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setConditionValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->condition_value = $var;

        return $this;
    }

    /**
     * 清仓商品可用，活动ID
     *
     * Generated from protobuf field <code>repeated int64 clearance_discount_id = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClearanceDiscountId()
    {
        return $this->clearance_discount_id;
    }

    /**
     * 清仓商品可用，活动ID
     *
     * Generated from protobuf field <code>repeated int64 clearance_discount_id = 8;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClearanceDiscountId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->clearance_discount_id = $arr;

        return $this;
    }

    /**
     * 是否正价商品
     *
     * Generated from protobuf field <code>bool nondiscount_only = 9;</code>
     * @return bool
     */
    public function getNondiscountOnly()
    {
        return $this->nondiscount_only;
    }

    /**
     * 是否正价商品
     *
     * Generated from protobuf field <code>bool nondiscount_only = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setNondiscountOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->nondiscount_only = $var;

        return $this;
    }

    /**
     * 商品范围(或操作，满足1个条件即可)
     *
     * Generated from protobuf field <code>repeated .voucher_types_read.VProductRange v_product_range = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVProductRange()
    {
        return $this->v_product_range;
    }

    /**
     * 商品范围(或操作，满足1个条件即可)
     *
     * Generated from protobuf field <code>repeated .voucher_types_read.VProductRange v_product_range = 10;</code>
     * @param \app\components\proto\voucher\VProductRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVProductRange($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \app\components\proto\voucher\VProductRange::class);
        $this->v_product_range = $arr;

        return $this;
    }

    /**
     * 指定卖家劵
     *
     * Generated from protobuf field <code>repeated int64 seller_id = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSellerId()
    {
        return $this->seller_id;
    }

    /**
     * 指定卖家劵
     *
     * Generated from protobuf field <code>repeated int64 seller_id = 11;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSellerId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->seller_id = $arr;

        return $this;
    }

}

