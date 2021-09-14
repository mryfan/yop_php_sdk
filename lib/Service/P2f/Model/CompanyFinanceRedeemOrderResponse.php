<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class CompanyFinanceRedeemOrderResponse extends BaseResponse
{
    /**
     * @var CompanyFinanceRedeemOrderCompTranRedeemRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceRedeemOrderCompTranRedeemRspDTOResult';
    }

    /**
     * @param CompanyFinanceRedeemOrderCompTranRedeemRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceRedeemOrderCompTranRedeemRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
