<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RegisterSaasMicroResponse extends BaseResponse
{
    /**
     * @var RegisterSaasMicroContributeMicroMerchantNetInRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMicroContributeMicroMerchantNetInRespDtoResult';
    }

    /**
     * @param RegisterSaasMicroContributeMicroMerchantNetInRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterSaasMicroContributeMicroMerchantNetInRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
