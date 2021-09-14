<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RegisterSaasMerchantResponse extends BaseResponse
{
    /**
     * @var RegisterSaasMerchantContributeMerchantNetInRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMerchantContributeMerchantNetInRespDtoResult';
    }

    /**
     * @param RegisterSaasMerchantContributeMerchantNetInRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterSaasMerchantContributeMerchantNetInRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
