<?php
// GENERATED CODE -- DO NOT EDIT!

namespace app\components\proto\voucher;

/**
 */
class VoucherServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 写相关接口
     * ---------------------------------------------------------------------------------------------------
     * 审核优惠券
     * @param \app\components\proto\voucher\VoucherApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function VoucherApply(\app\components\proto\voucher\VoucherApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/VoucherApply',
        $argument,
        ['\app\components\proto\voucher\VoucherApplyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除优惠券组
     * @param \app\components\proto\voucher\DeleteVoucherGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteVoucherGroup(\app\components\proto\voucher\DeleteVoucherGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/DeleteVoucherGroup',
        $argument,
        ['\app\components\proto\voucher\DeleteVoucherGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除优惠券
     * @param \app\components\proto\voucher\DeleteVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteVoucher(\app\components\proto\voucher\DeleteVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/DeleteVoucher',
        $argument,
        ['\app\components\proto\voucher\DeleteVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除用户优惠券/佣金劵
     * @param \app\components\proto\voucher\DeleteUserVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteUserVoucher(\app\components\proto\voucher\DeleteUserVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/DeleteUserVoucher',
        $argument,
        ['\app\components\proto\voucher\DeleteUserVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 买家优惠劵/卖家优惠券 - 标记"已使用/未使用"
     * @param \app\components\proto\voucher\SetUserVoucherUsedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUserVoucherUsed(\app\components\proto\voucher\SetUserVoucherUsedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/SetUserVoucherUsed',
        $argument,
        ['\app\components\proto\voucher\SetUserVoucherUsedResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MIS - 创建/编辑 优惠券组
     * @param \app\components\proto\voucher\UpdateVoucherGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateVoucherGroup(\app\components\proto\voucher\UpdateVoucherGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/UpdateVoucherGroup',
        $argument,
        ['\app\components\proto\voucher\UpdateVoucherGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MIS - 创建/编辑 优惠券
     * @param \app\components\proto\voucher\UpdateVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateVoucher(\app\components\proto\voucher\UpdateVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/UpdateVoucher',
        $argument,
        ['\app\components\proto\voucher\UpdateVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 开店宝 - 强制下架劵
     * @param \app\components\proto\voucher\SetUnableVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUnableVoucher(\app\components\proto\voucher\SetUnableVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/SetUnableVoucher',
        $argument,
        ['\app\components\proto\voucher\SetUnableVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 开店宝 - 创建/编辑优惠券
     * @param \app\components\proto\voucher\SellerUpdateVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SellerUpdateVoucher(\app\components\proto\voucher\SellerUpdateVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/SellerUpdateVoucher',
        $argument,
        ['\app\components\proto\voucher\SellerUpdateVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MIS 补偿优惠券
     * @param \app\components\proto\voucher\CompensateVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CompensateVoucher(\app\components\proto\voucher\CompensateVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/CompensateVoucher',
        $argument,
        ['\app\components\proto\voucher\CompensateVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量保存优惠券组（mis cron）
     * @param \app\components\proto\voucher\BatchSaveVoucherGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchSaveVoucherGroup(\app\components\proto\voucher\BatchSaveVoucherGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/BatchSaveVoucherGroup',
        $argument,
        ['\app\components\proto\voucher\BatchSaveVoucherGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量保存优惠券（mis cron）
     * @param \app\components\proto\voucher\BatchSaveVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchSaveVoucher(\app\components\proto\voucher\BatchSaveVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/BatchSaveVoucher',
        $argument,
        ['\app\components\proto\voucher\BatchSaveVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量更新已领取优惠券库存（mis cron）
     * @param \app\components\proto\voucher\BatchUpdateDrawCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchUpdateDrawCount(\app\components\proto\voucher\BatchUpdateDrawCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/BatchUpdateDrawCount',
        $argument,
        ['\app\components\proto\voucher\BatchUpdateDrawCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量更新优惠券总数量（mis cron）
     * @param \app\components\proto\voucher\BatchUpdateVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchUpdateVoucherTotalCount(\app\components\proto\voucher\BatchUpdateVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/BatchUpdateVoucherTotalCount',
        $argument,
        ['\app\components\proto\voucher\BatchUpdateVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 更新用户优惠券（mis cron） mis models/crontab/voucher/CheckoutSellerVoucherBindInfoForm.php
     * @param \app\components\proto\voucher\UpdateUserVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateUserVoucher(\app\components\proto\voucher\UpdateUserVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/UpdateUserVoucher',
        $argument,
        ['\app\components\proto\voucher\UpdateUserVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量保存用户优惠券（mis cron）
     * @param \app\components\proto\voucher\BatchSaveUserVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchSaveUserVoucher(\app\components\proto\voucher\BatchSaveUserVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/BatchSaveUserVoucher',
        $argument,
        ['\app\components\proto\voucher\BatchSaveUserVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 取消用户优惠券（mis cron）
     * @param \app\components\proto\voucher\CancelUserVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CancelUserVoucher(\app\components\proto\voucher\CancelUserVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/CancelUserVoucher',
        $argument,
        ['\app\components\proto\voucher\CancelUserVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 发送优惠券
     * @param \app\components\proto\voucher\SendVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendVoucher(\app\components\proto\voucher\SendVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/SendVoucher',
        $argument,
        ['\app\components\proto\voucher\SendVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量发送优惠券
     * @param \app\components\proto\voucher\BatchSendVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchSendVoucher(\app\components\proto\voucher\BatchSendVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/BatchSendVoucher',
        $argument,
        ['\app\components\proto\voucher\BatchSendVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 优惠券锁库存
     * @param \app\components\proto\voucher\VoucherStockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function VoucherStock(\app\components\proto\voucher\VoucherStockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/VoucherStock',
        $argument,
        ['\app\components\proto\voucher\VoucherStockResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 用户优惠券过期时间延期
     * @param \app\components\proto\voucher\UserVoucherDelayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserVoucherDelay(\app\components\proto\voucher\UserVoucherDelayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/UserVoucherDelay',
        $argument,
        ['\app\components\proto\voucher\UserVoucherDelayResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MIS优惠券组列表
     * @param \app\components\proto\voucher\MisVoucherGroupListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MisVoucherGroupList(\app\components\proto\voucher\MisVoucherGroupListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/MisVoucherGroupList',
        $argument,
        ['\app\components\proto\voucher\MisVoucherGroupListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * WWW个人中心-获取优惠券列表
     * @param \app\components\proto\voucher\PersonalCenterVoucherListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PersonalCenterVoucherList(\app\components\proto\voucher\PersonalCenterVoucherListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/PersonalCenterVoucherList',
        $argument,
        ['\app\components\proto\voucher\PersonalCenterVoucherListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取售卖优惠券列表
     * @param \app\components\proto\voucher\SellVoucherListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SellVoucherList(\app\components\proto\voucher\SellVoucherListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/SellVoucherList',
        $argument,
        ['\app\components\proto\voucher\SellVoucherListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * WWW个人中心-获取优惠券数量
     * @param \app\components\proto\voucher\PersonalCenterVoucherCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PersonalCenterVoucherCount(\app\components\proto\voucher\PersonalCenterVoucherCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/PersonalCenterVoucherCount',
        $argument,
        ['\app\components\proto\voucher\PersonalCenterVoucherCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * WWW个人中心-根据CODE获取可领取的优惠券数据(待生效优惠券列表专用)
     * @param \app\components\proto\voucher\GetVoucherByCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVoucherByCode(\app\components\proto\voucher\GetVoucherByCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetVoucherByCode',
        $argument,
        ['\app\components\proto\voucher\GetVoucherByCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 用户已领取的全场可用券
     * @param \app\components\proto\voucher\GetUserVoucherAllAvailableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserVoucherAllAvailable(\app\components\proto\voucher\GetUserVoucherAllAvailableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetUserVoucherAllAvailable',
        $argument,
        ['\app\components\proto\voucher\GetUserVoucherAllAvailableResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 商家中心-获取商家劵
     * @param \app\components\proto\voucher\GetMerVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetMerVoucher(\app\components\proto\voucher\GetMerVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetMerVoucher',
        $argument,
        ['\app\components\proto\voucher\GetMerVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取用户优惠券(通用)
     * @param \app\components\proto\voucher\GetUserVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserVoucher(\app\components\proto\voucher\GetUserVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetUserVoucher',
        $argument,
        ['\app\components\proto\voucher\GetUserVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取优惠券(通用)
     * @param \app\components\proto\voucher\GetVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVoucher(\app\components\proto\voucher\GetVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetVoucher',
        $argument,
        ['\app\components\proto\voucher\GetVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取券组()通用
     * @param \app\components\proto\voucher\GetVoucherGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVoucherGroup(\app\components\proto\voucher\GetVoucherGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetVoucherGroup',
        $argument,
        ['\app\components\proto\voucher\GetVoucherGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据配置获取优惠券
     * @param \app\components\proto\voucher\GetVoucherBySettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVoucherBySettings(\app\components\proto\voucher\GetVoucherBySettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetVoucherBySettings',
        $argument,
        ['\app\components\proto\voucher\GetVoucherBySettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取一张全场可用的优惠券
     * @param \app\components\proto\voucher\GetOneAvailableVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetOneAvailableVoucher(\app\components\proto\voucher\GetOneAvailableVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetOneAvailableVoucher',
        $argument,
        ['\app\components\proto\voucher\GetOneAvailableVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取一个商品可领取的卖家优惠券
     * @param \app\components\proto\voucher\GetSellerBestUnreceivedVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSellerBestUnreceivedVoucher(\app\components\proto\voucher\GetSellerBestUnreceivedVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetSellerBestUnreceivedVoucher',
        $argument,
        ['\app\components\proto\voucher\GetSellerBestUnreceivedVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取券join券组
     * @param \app\components\proto\voucher\GetVoucherJoinGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVoucherJoinGroup(\app\components\proto\voucher\GetVoucherJoinGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetVoucherJoinGroup',
        $argument,
        ['\app\components\proto\voucher\GetVoucherJoinGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取用户优惠券领取时间
     * @param \app\components\proto\voucher\GetUserVoucherMaxCreateTimeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserVoucherMaxCreateTime(\app\components\proto\voucher\GetUserVoucherMaxCreateTimeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetUserVoucherMaxCreateTime',
        $argument,
        ['\app\components\proto\voucher\GetUserVoucherMaxCreateTimeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取优惠券领取数
     * @param \app\components\proto\voucher\GetBeforeVoucherDrawCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetBeforeVoucherDrawCount(\app\components\proto\voucher\GetBeforeVoucherDrawCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetBeforeVoucherDrawCount',
        $argument,
        ['\app\components\proto\voucher\GetBeforeVoucherDrawCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetEvaluateResultVoucher
     * @param \app\components\proto\voucher\GetEvaluateResultVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetEvaluateResultVoucher(\app\components\proto\voucher\GetEvaluateResultVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetEvaluateResultVoucher',
        $argument,
        ['\app\components\proto\voucher\GetEvaluateResultVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetSumSaveAmount
     * @param \app\components\proto\voucher\GetSumSaveAmountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSumSaveAmount(\app\components\proto\voucher\GetSumSaveAmountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetSumSaveAmount',
        $argument,
        ['\app\components\proto\voucher\GetSumSaveAmountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取用户领取劵组的总金额
     * @param \app\components\proto\voucher\GetTotalSavedSumBenefitValueRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTotalSavedSumBenefitValue(\app\components\proto\voucher\GetTotalSavedSumBenefitValueRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetTotalSavedSumBenefitValue',
        $argument,
        ['\app\components\proto\voucher\GetTotalSavedSumBenefitValueResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取优惠券和优惠券组(通用)
     * @param \app\components\proto\voucher\GetVoucherAndGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVoucherAndGroup(\app\components\proto\voucher\GetVoucherAndGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetVoucherAndGroup',
        $argument,
        ['\app\components\proto\voucher\GetVoucherAndGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据指定的商户ID获取该用户领取的优惠券
     * @param \app\components\proto\voucher\GetUserVoucherBySellerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserVoucherBySeller(\app\components\proto\voucher\GetUserVoucherBySellerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetUserVoucherBySeller',
        $argument,
        ['\app\components\proto\voucher\GetUserVoucherBySellerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取可通过红豆兑换的优惠券
     * @param \app\components\proto\voucher\GetReadBeanExchangeVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetReadBeanExchangeVoucher(\app\components\proto\voucher\GetReadBeanExchangeVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetReadBeanExchangeVoucher',
        $argument,
        ['\app\components\proto\voucher\GetReadBeanExchangeVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取卖家券
     * @param \app\components\proto\voucher\GetSellerVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSellerVoucher(\app\components\proto\voucher\GetSellerVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetSellerVoucher',
        $argument,
        ['\app\components\proto\voucher\GetSellerVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MIS根据code前缀，模糊查询已存在的code数据(生成满返优惠券时，需要生成code，必须是不存在的code)
     * @param \app\components\proto\voucher\GetVoucherCodesByLikeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVoucherCodesByLike(\app\components\proto\voucher\GetVoucherCodesByLikeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetVoucherCodesByLike',
        $argument,
        ['\app\components\proto\voucher\GetVoucherCodesByLikeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MIS 获取拥有某优惠券的用户ID
     * @param \app\components\proto\voucher\GetHasVoucherUserByVidAndUidRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetHasVoucherUserByVidAndUid(\app\components\proto\voucher\GetHasVoucherUserByVidAndUidRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetHasVoucherUserByVidAndUid',
        $argument,
        ['\app\components\proto\voucher\GetHasVoucherUserByVidAndUidResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetUserVoucherJoinGroup
     * @param \app\components\proto\voucher\GetUserVoucherJoinGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserVoucherJoinGroup(\app\components\proto\voucher\GetUserVoucherJoinGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetUserVoucherJoinGroup',
        $argument,
        ['\app\components\proto\voucher\GetUserVoucherJoinGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MIS 获取需要定时加库存的优惠券列表（每日库存）
     * @param \app\components\proto\voucher\GetVoucherListByDailyStockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVoucherListByDailyStock(\app\components\proto\voucher\GetVoucherListByDailyStockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetVoucherListByDailyStock',
        $argument,
        ['\app\components\proto\voucher\GetVoucherListByDailyStockResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MIS获取领取过新人礼金券的用户
     * @param \app\components\proto\voucher\GetReceivedNewVoucherUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetReceivedNewVoucherUser(\app\components\proto\voucher\GetReceivedNewVoucherUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetReceivedNewVoucherUser',
        $argument,
        ['\app\components\proto\voucher\GetReceivedNewVoucherUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MIS获取用户可用优惠券总额
     * @param \app\components\proto\voucher\GetUserSumBenefitValueRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserSumBenefitValue(\app\components\proto\voucher\GetUserSumBenefitValueRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetUserSumBenefitValue',
        $argument,
        ['\app\components\proto\voucher\GetUserSumBenefitValueResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 红豆兑券
     * @param \app\components\proto\voucher\GetVoucherGroupConfigListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVoucherGroupConfigList(\app\components\proto\voucher\GetVoucherGroupConfigListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetVoucherGroupConfigList',
        $argument,
        ['\app\components\proto\voucher\GetVoucherGroupConfigListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 查询券是否已领取
     * @param \app\components\proto\voucher\GetCountUserVoucherGroupByVIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCountUserVoucherGroupByVId(\app\components\proto\voucher\GetCountUserVoucherGroupByVIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetCountUserVoucherGroupByVId',
        $argument,
        ['\app\components\proto\voucher\GetCountUserVoucherGroupByVIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 卖家券-绑定X小时未售出
     * @param \app\components\proto\voucher\GetSellerToDescendBindVoucherListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSellerToDescendBindVoucherList(\app\components\proto\voucher\GetSellerToDescendBindVoucherListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetSellerToDescendBindVoucherList',
        $argument,
        ['\app\components\proto\voucher\GetSellerToDescendBindVoucherListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 检查商品类型判断适用哪些类型的优惠券
     * @param \app\components\proto\voucher\GetCalPriceVoucherListByTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCalPriceVoucherListByType(\app\components\proto\voucher\GetCalPriceVoucherListByTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetCalPriceVoucherListByType',
        $argument,
        ['\app\components\proto\voucher\GetCalPriceVoucherListByTypeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 检查商品类型判断适用哪些类型的优惠券 - 检查优惠券
     * @param \app\components\proto\voucher\CheckCalPriceVoucherListByTimePointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckCalPriceVoucherListByTimePoint(\app\components\proto\voucher\CheckCalPriceVoucherListByTimePointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/CheckCalPriceVoucherListByTimePoint',
        $argument,
        ['\app\components\proto\voucher\CheckCalPriceVoucherListByTimePointResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 检查商品类型判断适用哪些类型的优惠券
     * @param \app\components\proto\voucher\GetCalPriceVoucherListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCalPriceVoucherList(\app\components\proto\voucher\GetCalPriceVoucherListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetCalPriceVoucherList',
        $argument,
        ['\app\components\proto\voucher\GetCalPriceVoucherListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 检查商品类型判断适用哪些类型的优惠券
     * @param \app\components\proto\voucher\GetCalPriceVoucherListByUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCalPriceVoucherListByUser(\app\components\proto\voucher\GetCalPriceVoucherListByUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetCalPriceVoucherListByUser',
        $argument,
        ['\app\components\proto\voucher\GetCalPriceVoucherListByUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据orderID - 获取使用的买家劵数据
     * @param \app\components\proto\voucher\GetUserVoucherByOrderIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserVoucherByOrderID(\app\components\proto\voucher\GetUserVoucherByOrderIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetUserVoucherByOrderID',
        $argument,
        ['\app\components\proto\voucher\GetUserVoucherByOrderIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据商品ID - 获取绑定的佣金劵数据
     * @param \app\components\proto\voucher\GetUserVoucherByPidRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserVoucherByPid(\app\components\proto\voucher\GetUserVoucherByPidRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetUserVoucherByPid',
        $argument,
        ['\app\components\proto\voucher\GetUserVoucherByPidResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 用户时间段内优惠券统计
     * @param \app\components\proto\voucher\GetTimeSlotUserSumDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTimeSlotUserSumData(\app\components\proto\voucher\GetTimeSlotUserSumDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetTimeSlotUserSumData',
        $argument,
        ['\app\components\proto\voucher\GetTimeSlotUserSumDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MIS检查将要过期的卖家优惠券，给卖家发送短息 notice3days
     * @param \app\components\proto\voucher\MisGetWaitExpireSVouchersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MisGetWaitExpireSVouchers(\app\components\proto\voucher\MisGetWaitExpireSVouchersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/MisGetWaitExpireSVouchers',
        $argument,
        ['\app\components\proto\voucher\MisGetWaitExpireSVouchersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取下一个优惠券id，循环遍历同组全部优惠券
     * @param \app\components\proto\voucher\GetNextVoucherIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNextVoucherId(\app\components\proto\voucher\GetNextVoucherIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetNextVoucherId',
        $argument,
        ['\app\components\proto\voucher\GetNextVoucherIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetSumRateInGroup
     * @param \app\components\proto\voucher\GetSumRateInGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSumRateInGroup(\app\components\proto\voucher\GetSumRateInGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetSumRateInGroup',
        $argument,
        ['\app\components\proto\voucher\GetSumRateInGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MergeUserVoucher
     * @param \app\components\proto\voucher\MergeUserVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MergeUserVoucher(\app\components\proto\voucher\MergeUserVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/MergeUserVoucher',
        $argument,
        ['\app\components\proto\voucher\MergeUserVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 手动同步优惠券到快照数据
     * @param \app\components\proto\voucher\UpdateVoucherSnapshotRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateVoucherSnapshot(\app\components\proto\voucher\UpdateVoucherSnapshotRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/UpdateVoucherSnapshot',
        $argument,
        ['\app\components\proto\voucher\UpdateVoucherSnapshotResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取已生效的全场可用优惠券 (外场直播间只能使用 product_coverage 为1或11的券) www models/voucher/VoucherListForm.php(getPlumVouchers)
     * @param \app\components\proto\voucher\GetPlumVouchersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetPlumVouchers(\app\components\proto\voucher\GetPlumVouchersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetPlumVouchers',
        $argument,
        ['\app\components\proto\voucher\GetPlumVouchersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取优惠券根据catId和brandId
     * @param \app\components\proto\voucher\GetVoucherByCatIdAndBrandIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVoucherByCatIdAndBrandId(\app\components\proto\voucher\GetVoucherByCatIdAndBrandIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetVoucherByCatIdAndBrandId',
        $argument,
        ['\app\components\proto\voucher\GetVoucherByCatIdAndBrandIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取用户待领取的优惠券（购物车用）
     * @param \app\components\proto\voucher\GetUnclaimedVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUnclaimedVoucher(\app\components\proto\voucher\GetUnclaimedVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetUnclaimedVoucher',
        $argument,
        ['\app\components\proto\voucher\GetUnclaimedVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取优惠券标准条件-用于商品列表做筛选条件
     * @param \app\components\proto\voucher\GetVoucherStandardConditionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVoucherStandardCondition(\app\components\proto\voucher\GetVoucherStandardConditionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/voucher_service.VoucherService/GetVoucherStandardCondition',
        $argument,
        ['\app\components\proto\voucher\GetVoucherStandardConditionResponse', 'decode'],
        $metadata, $options);
    }

}
