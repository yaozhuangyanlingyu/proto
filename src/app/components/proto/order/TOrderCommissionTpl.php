<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/order/order.proto

namespace app\components\proto\order;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>order.TOrderCommissionTpl</code>
 */
class TOrderCommissionTpl extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string tpl_name = 2;</code>
     */
    protected $tpl_name = '';
    /**
     * Generated from protobuf field <code>float platform_ratio = 3;</code>
     */
    protected $platform_ratio = 0.0;
    /**
     * Generated from protobuf field <code>float min_fee = 4;</code>
     */
    protected $min_fee = 0.0;
    /**
     * Generated from protobuf field <code>int32 min_fee_stime = 5;</code>
     */
    protected $min_fee_stime = 0;
    /**
     * Generated from protobuf field <code>float max_fee = 6;</code>
     */
    protected $max_fee = 0.0;
    /**
     * Generated from protobuf field <code>int32 max_fee_stime = 7;</code>
     */
    protected $max_fee_stime = 0;
    /**
     * Generated from protobuf field <code>float transfer_fee_ratio = 8;</code>
     */
    protected $transfer_fee_ratio = 0.0;
    /**
     * Generated from protobuf field <code>float appraisal_fee = 9;</code>
     */
    protected $appraisal_fee = 0.0;
    /**
     * Generated from protobuf field <code>int32 tpl_stime = 10;</code>
     */
    protected $tpl_stime = 0;
    /**
     * Generated from protobuf field <code>int32 tpl_etime = 11;</code>
     */
    protected $tpl_etime = 0;
    /**
     * Generated from protobuf field <code>string remark = 12;</code>
     */
    protected $remark = '';
    /**
     * Generated from protobuf field <code>int32 create_time = 13;</code>
     */
    protected $create_time = 0;
    /**
     * Generated from protobuf field <code>string brand_list = 14;</code>
     */
    protected $brand_list = '';
    /**
     * Generated from protobuf field <code>string category_list = 15;</code>
     */
    protected $category_list = '';
    /**
     * Generated from protobuf field <code>string seller_id_list = 16;</code>
     */
    protected $seller_id_list = '';
    /**
     * Generated from protobuf field <code>string product_id_list = 17;</code>
     */
    protected $product_id_list = '';
    /**
     * Generated from protobuf field <code>string dispatch_type = 18;</code>
     */
    protected $dispatch_type = '';
    /**
     * Generated from protobuf field <code>float low_selling_price = 19;</code>
     */
    protected $low_selling_price = 0.0;
    /**
     * Generated from protobuf field <code>float low_reseller_price = 20;</code>
     */
    protected $low_reseller_price = 0.0;
    /**
     * Generated from protobuf field <code>int32 level = 21;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>int32 g_id = 22;</code>
     */
    protected $g_id = 0;
    /**
     * Generated from protobuf field <code>string g_status = 23;</code>
     */
    protected $g_status = '';
    /**
     * Generated from protobuf field <code>string g_image = 24;</code>
     */
    protected $g_image = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $tpl_name
     *     @type float $platform_ratio
     *     @type float $min_fee
     *     @type int $min_fee_stime
     *     @type float $max_fee
     *     @type int $max_fee_stime
     *     @type float $transfer_fee_ratio
     *     @type float $appraisal_fee
     *     @type int $tpl_stime
     *     @type int $tpl_etime
     *     @type string $remark
     *     @type int $create_time
     *     @type string $brand_list
     *     @type string $category_list
     *     @type string $seller_id_list
     *     @type string $product_id_list
     *     @type string $dispatch_type
     *     @type float $low_selling_price
     *     @type float $low_reseller_price
     *     @type int $level
     *     @type int $g_id
     *     @type string $g_status
     *     @type string $g_image
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Order\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tpl_name = 2;</code>
     * @return string
     */
    public function getTplName()
    {
        return $this->tpl_name;
    }

    /**
     * Generated from protobuf field <code>string tpl_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTplName($var)
    {
        GPBUtil::checkString($var, True);
        $this->tpl_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float platform_ratio = 3;</code>
     * @return float
     */
    public function getPlatformRatio()
    {
        return $this->platform_ratio;
    }

    /**
     * Generated from protobuf field <code>float platform_ratio = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPlatformRatio($var)
    {
        GPBUtil::checkFloat($var);
        $this->platform_ratio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float min_fee = 4;</code>
     * @return float
     */
    public function getMinFee()
    {
        return $this->min_fee;
    }

    /**
     * Generated from protobuf field <code>float min_fee = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setMinFee($var)
    {
        GPBUtil::checkFloat($var);
        $this->min_fee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 min_fee_stime = 5;</code>
     * @return int
     */
    public function getMinFeeStime()
    {
        return $this->min_fee_stime;
    }

    /**
     * Generated from protobuf field <code>int32 min_fee_stime = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMinFeeStime($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_fee_stime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float max_fee = 6;</code>
     * @return float
     */
    public function getMaxFee()
    {
        return $this->max_fee;
    }

    /**
     * Generated from protobuf field <code>float max_fee = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setMaxFee($var)
    {
        GPBUtil::checkFloat($var);
        $this->max_fee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_fee_stime = 7;</code>
     * @return int
     */
    public function getMaxFeeStime()
    {
        return $this->max_fee_stime;
    }

    /**
     * Generated from protobuf field <code>int32 max_fee_stime = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxFeeStime($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_fee_stime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float transfer_fee_ratio = 8;</code>
     * @return float
     */
    public function getTransferFeeRatio()
    {
        return $this->transfer_fee_ratio;
    }

    /**
     * Generated from protobuf field <code>float transfer_fee_ratio = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setTransferFeeRatio($var)
    {
        GPBUtil::checkFloat($var);
        $this->transfer_fee_ratio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float appraisal_fee = 9;</code>
     * @return float
     */
    public function getAppraisalFee()
    {
        return $this->appraisal_fee;
    }

    /**
     * Generated from protobuf field <code>float appraisal_fee = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setAppraisalFee($var)
    {
        GPBUtil::checkFloat($var);
        $this->appraisal_fee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 tpl_stime = 10;</code>
     * @return int
     */
    public function getTplStime()
    {
        return $this->tpl_stime;
    }

    /**
     * Generated from protobuf field <code>int32 tpl_stime = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setTplStime($var)
    {
        GPBUtil::checkInt32($var);
        $this->tpl_stime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 tpl_etime = 11;</code>
     * @return int
     */
    public function getTplEtime()
    {
        return $this->tpl_etime;
    }

    /**
     * Generated from protobuf field <code>int32 tpl_etime = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setTplEtime($var)
    {
        GPBUtil::checkInt32($var);
        $this->tpl_etime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string remark = 12;</code>
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Generated from protobuf field <code>string remark = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setRemark($var)
    {
        GPBUtil::checkString($var, True);
        $this->remark = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 create_time = 13;</code>
     * @return int
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Generated from protobuf field <code>int32 create_time = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string brand_list = 14;</code>
     * @return string
     */
    public function getBrandList()
    {
        return $this->brand_list;
    }

    /**
     * Generated from protobuf field <code>string brand_list = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setBrandList($var)
    {
        GPBUtil::checkString($var, True);
        $this->brand_list = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string category_list = 15;</code>
     * @return string
     */
    public function getCategoryList()
    {
        return $this->category_list;
    }

    /**
     * Generated from protobuf field <code>string category_list = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setCategoryList($var)
    {
        GPBUtil::checkString($var, True);
        $this->category_list = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string seller_id_list = 16;</code>
     * @return string
     */
    public function getSellerIdList()
    {
        return $this->seller_id_list;
    }

    /**
     * Generated from protobuf field <code>string seller_id_list = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setSellerIdList($var)
    {
        GPBUtil::checkString($var, True);
        $this->seller_id_list = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string product_id_list = 17;</code>
     * @return string
     */
    public function getProductIdList()
    {
        return $this->product_id_list;
    }

    /**
     * Generated from protobuf field <code>string product_id_list = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setProductIdList($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_id_list = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dispatch_type = 18;</code>
     * @return string
     */
    public function getDispatchType()
    {
        return $this->dispatch_type;
    }

    /**
     * Generated from protobuf field <code>string dispatch_type = 18;</code>
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
     * Generated from protobuf field <code>float low_selling_price = 19;</code>
     * @return float
     */
    public function getLowSellingPrice()
    {
        return $this->low_selling_price;
    }

    /**
     * Generated from protobuf field <code>float low_selling_price = 19;</code>
     * @param float $var
     * @return $this
     */
    public function setLowSellingPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->low_selling_price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float low_reseller_price = 20;</code>
     * @return float
     */
    public function getLowResellerPrice()
    {
        return $this->low_reseller_price;
    }

    /**
     * Generated from protobuf field <code>float low_reseller_price = 20;</code>
     * @param float $var
     * @return $this
     */
    public function setLowResellerPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->low_reseller_price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 level = 21;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>int32 level = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 g_id = 22;</code>
     * @return int
     */
    public function getGId()
    {
        return $this->g_id;
    }

    /**
     * Generated from protobuf field <code>int32 g_id = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setGId($var)
    {
        GPBUtil::checkInt32($var);
        $this->g_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string g_status = 23;</code>
     * @return string
     */
    public function getGStatus()
    {
        return $this->g_status;
    }

    /**
     * Generated from protobuf field <code>string g_status = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setGStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->g_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string g_image = 24;</code>
     * @return string
     */
    public function getGImage()
    {
        return $this->g_image;
    }

    /**
     * Generated from protobuf field <code>string g_image = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setGImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->g_image = $var;

        return $this;
    }

}

