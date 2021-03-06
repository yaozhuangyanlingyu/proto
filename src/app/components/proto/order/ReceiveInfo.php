<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/order/order.proto

namespace app\components\proto\order;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ReceiveInfo 收件信息
 *
 * Generated from protobuf message <code>order.ReceiveInfo</code>
 */
class ReceiveInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * 收货人姓名
     *
     * Generated from protobuf field <code>string user_name = 1;</code>
     */
    protected $user_name = '';
    /**
     * 联系电话
     *
     * Generated from protobuf field <code>string phone = 2;</code>
     */
    protected $phone = '';
    /**
     * 省
     *
     * Generated from protobuf field <code>string province = 3;</code>
     */
    protected $province = '';
    /**
     * 市
     *
     * Generated from protobuf field <code>string city = 4;</code>
     */
    protected $city = '';
    /**
     * 区
     *
     * Generated from protobuf field <code>string town = 5;</code>
     */
    protected $town = '';
    /**
     * 详细地址
     *
     * Generated from protobuf field <code>string detail = 6;</code>
     */
    protected $detail = '';
    /**
     * 可选。快递单号
     *
     * Generated from protobuf field <code>string express_no = 8;</code>
     */
    protected $express_no = '';
    /**
     * 以下四个字段最终保存到t_order_address中
     *
     * Generated from protobuf field <code>string encrypt_post_receiver = 9;</code>
     */
    protected $encrypt_post_receiver = '';
    /**
     * 加密手机号
     *
     * Generated from protobuf field <code>string encrypt_post_tel = 10;</code>
     */
    protected $encrypt_post_tel = '';
    /**
     * 加密详细地址
     *
     * Generated from protobuf field <code>string encrypt_detail = 11;</code>
     */
    protected $encrypt_detail = '';
    /**
     * 抖音手机号索引串
     *
     * Generated from protobuf field <code>string phone_key = 12;</code>
     */
    protected $phone_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_name
     *           收货人姓名
     *     @type string $phone
     *           联系电话
     *     @type string $province
     *           省
     *     @type string $city
     *           市
     *     @type string $town
     *           区
     *     @type string $detail
     *           详细地址
     *     @type string $express_no
     *           可选。快递单号
     *     @type string $encrypt_post_receiver
     *           以下四个字段最终保存到t_order_address中
     *     @type string $encrypt_post_tel
     *           加密手机号
     *     @type string $encrypt_detail
     *           加密详细地址
     *     @type string $phone_key
     *           抖音手机号索引串
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Order\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * 收货人姓名
     *
     * Generated from protobuf field <code>string user_name = 1;</code>
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * 收货人姓名
     *
     * Generated from protobuf field <code>string user_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserName($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_name = $var;

        return $this;
    }

    /**
     * 联系电话
     *
     * Generated from protobuf field <code>string phone = 2;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * 联系电话
     *
     * Generated from protobuf field <code>string phone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

    /**
     * 省
     *
     * Generated from protobuf field <code>string province = 3;</code>
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * 省
     *
     * Generated from protobuf field <code>string province = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProvince($var)
    {
        GPBUtil::checkString($var, True);
        $this->province = $var;

        return $this;
    }

    /**
     * 市
     *
     * Generated from protobuf field <code>string city = 4;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * 市
     *
     * Generated from protobuf field <code>string city = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * 区
     *
     * Generated from protobuf field <code>string town = 5;</code>
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * 区
     *
     * Generated from protobuf field <code>string town = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTown($var)
    {
        GPBUtil::checkString($var, True);
        $this->town = $var;

        return $this;
    }

    /**
     * 详细地址
     *
     * Generated from protobuf field <code>string detail = 6;</code>
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * 详细地址
     *
     * Generated from protobuf field <code>string detail = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->detail = $var;

        return $this;
    }

    /**
     * 可选。快递单号
     *
     * Generated from protobuf field <code>string express_no = 8;</code>
     * @return string
     */
    public function getExpressNo()
    {
        return $this->express_no;
    }

    /**
     * 可选。快递单号
     *
     * Generated from protobuf field <code>string express_no = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setExpressNo($var)
    {
        GPBUtil::checkString($var, True);
        $this->express_no = $var;

        return $this;
    }

    /**
     * 以下四个字段最终保存到t_order_address中
     *
     * Generated from protobuf field <code>string encrypt_post_receiver = 9;</code>
     * @return string
     */
    public function getEncryptPostReceiver()
    {
        return $this->encrypt_post_receiver;
    }

    /**
     * 以下四个字段最终保存到t_order_address中
     *
     * Generated from protobuf field <code>string encrypt_post_receiver = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptPostReceiver($var)
    {
        GPBUtil::checkString($var, True);
        $this->encrypt_post_receiver = $var;

        return $this;
    }

    /**
     * 加密手机号
     *
     * Generated from protobuf field <code>string encrypt_post_tel = 10;</code>
     * @return string
     */
    public function getEncryptPostTel()
    {
        return $this->encrypt_post_tel;
    }

    /**
     * 加密手机号
     *
     * Generated from protobuf field <code>string encrypt_post_tel = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptPostTel($var)
    {
        GPBUtil::checkString($var, True);
        $this->encrypt_post_tel = $var;

        return $this;
    }

    /**
     * 加密详细地址
     *
     * Generated from protobuf field <code>string encrypt_detail = 11;</code>
     * @return string
     */
    public function getEncryptDetail()
    {
        return $this->encrypt_detail;
    }

    /**
     * 加密详细地址
     *
     * Generated from protobuf field <code>string encrypt_detail = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->encrypt_detail = $var;

        return $this;
    }

    /**
     * 抖音手机号索引串
     *
     * Generated from protobuf field <code>string phone_key = 12;</code>
     * @return string
     */
    public function getPhoneKey()
    {
        return $this->phone_key;
    }

    /**
     * 抖音手机号索引串
     *
     * Generated from protobuf field <code>string phone_key = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_key = $var;

        return $this;
    }

}

