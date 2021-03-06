<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class CompanyFinanceTransactionQueryResponse extends BaseResponse
{
    /**
     * @var CompanyFinanceTransactionQueryCompQueryTransactionListResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceTransactionQueryCompQueryTransactionListResponseDTOResult';
    }

    /**
     * @param CompanyFinanceTransactionQueryCompQueryTransactionListResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceTransactionQueryCompQueryTransactionListResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
