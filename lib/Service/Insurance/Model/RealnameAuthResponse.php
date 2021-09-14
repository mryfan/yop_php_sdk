<?php


namespace Yeepay\Yop\Sdk\Service\Insurance\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RealnameAuthResponse extends BaseResponse
{
    /**
     * @var RealnameAuthCommonInsurResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Insurance\Model\RealnameAuthCommonInsurResponseDTOResult';
    }

    /**
     * @param RealnameAuthCommonInsurResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RealnameAuthCommonInsurResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
