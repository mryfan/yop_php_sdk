<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardGetcardbinResponse extends BaseResponse
{
    /**
     * @var BindcardGetcardbinOpenQueryCardbinResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardGetcardbinOpenQueryCardbinResponseDTOResult';
    }

    /**
     * @param BindcardGetcardbinOpenQueryCardbinResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardGetcardbinOpenQueryCardbinResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
