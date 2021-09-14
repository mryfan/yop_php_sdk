<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PayBatchQueryResponse extends BaseResponse
{
    /**
     * @var PayBatchQueryBatchRemitQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\PayBatchQueryBatchRemitQueryRespDTOResult';
    }

    /**
     * @param PayBatchQueryBatchRemitQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayBatchQueryBatchRemitQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
