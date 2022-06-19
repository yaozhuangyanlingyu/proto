<?php
// GENERATED CODE -- DO NOT EDIT!

namespace app\components\proto\order;

/**
 * OrderService 订单服务
 */
class OrderServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CreateExternalOrder 创建外部订单
     * @param \app\components\proto\order\CreateExternalOrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateExternalOrder(\app\components\proto\order\CreateExternalOrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/CreateExternalOrder',
        $argument,
        ['\app\components\proto\order\CreateExternalOrderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * CancelOrder 取消订单（内部订单、外部订单）
     * @param \app\components\proto\order\CancelOrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CancelOrder(\app\components\proto\order\CancelOrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/CancelOrder',
        $argument,
        ['\app\components\proto\order\CancelOrderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * OrderSearch 订单搜索
     * @param \app\components\proto\order\OrderSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function OrderSearch(\app\components\proto\order\OrderSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/OrderSearch',
        $argument,
        ['\app\components\proto\order\OrderSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取佣金劵过期时间
     * @param \app\components\proto\order\SvoucherExpireTimeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SvoucherExpireTime(\app\components\proto\order\SvoucherExpireTimeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/SvoucherExpireTime',
        $argument,
        ['\app\components\proto\order\SvoucherExpireTimeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 计算结算佣金
     * @param \app\components\proto\order\CalcSettlePriceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CalcSettlePrice(\app\components\proto\order\CalcSettlePriceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/CalcSettlePrice',
        $argument,
        ['\app\components\proto\order\CalcSettlePriceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Mq消息回调接口
     * @param \app\components\proto\order\MqNoticeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MqNotice(\app\components\proto\order\MqNoticeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/MqNotice',
        $argument,
        ['\app\components\proto\order\MqNoticeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据条件，获取佣金模板数据
     * @param \app\components\proto\order\GetCommissionTplRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCommissionTpl(\app\components\proto\order\GetCommissionTplRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/GetCommissionTpl',
        $argument,
        ['\app\components\proto\order\GetCommissionTplResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据商品ID，获取对应的佣金模板
     * @param \app\components\proto\order\GetCommissionTplByPidRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCommissionTplByPid(\app\components\proto\order\GetCommissionTplByPidRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/GetCommissionTplByPid',
        $argument,
        ['\app\components\proto\order\GetCommissionTplByPidResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 计算满返奖励
     * @param \app\components\proto\order\CalcFullReturnRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CalcFullReturn(\app\components\proto\order\CalcFullReturnRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/CalcFullReturn',
        $argument,
        ['\app\components\proto\order\CalcFullReturnResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据order_item_id获取满返活动的奖励
     * @param \app\components\proto\order\GetFullReturnRewardFromOrderItemIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFullReturnRewardFromOrderItemId(\app\components\proto\order\GetFullReturnRewardFromOrderItemIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/GetFullReturnRewardFromOrderItemId',
        $argument,
        ['\app\components\proto\order\GetFullReturnRewardFromOrderItemIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 计算mis配置的满返奖励
     * @param \app\components\proto\order\GetMisFullReturnConfRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetMisFullReturnConf(\app\components\proto\order\GetMisFullReturnConfRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/GetMisFullReturnConf',
        $argument,
        ['\app\components\proto\order\GetMisFullReturnConfResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * mis退款成功后,通知服务重新计算满返奖励(确认收货后的退款mis也会调,服务保证未发奖的前提下再发奖)
     * @param \app\components\proto\order\RefundSuccessMisNoticeForReCalcFullReturnRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RefundSuccessMisNoticeForReCalcFullReturn(\app\components\proto\order\RefundSuccessMisNoticeForReCalcFullReturnRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/RefundSuccessMisNoticeForReCalcFullReturn',
        $argument,
        ['\app\components\proto\order\RefundSuccessMisNoticeForReCalcFullReturnResponse', 'decode'],
        $metadata, $options);
    }

}
