<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class CompanyFinancePurchaseOrderResponse extends BaseResponse
{
    /**
     * @var CompanyFinancePurchaseOrderCompTranPurchaseRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinancePurchaseOrderCompTranPurchaseRspDTOResult';
    }

    /**
     * @param CompanyFinancePurchaseOrderCompTranPurchaseRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinancePurchaseOrderCompTranPurchaseRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
