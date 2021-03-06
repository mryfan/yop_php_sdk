<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class QueryResponse extends BaseResponse
{
    /**
     * @var QueryYopQueryOrderDivideResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\QueryYopQueryOrderDivideResDTOResult';
    }

    /**
     * @param QueryYopQueryOrderDivideResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryYopQueryOrderDivideResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
