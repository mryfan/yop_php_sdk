<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class CompanyFinanceAccountResponse extends BaseResponse
{
    /**
     * @var CompanyFinanceAccountCompCustOpenAcctRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceAccountCompCustOpenAcctRspDTOResult';
    }

    /**
     * @param CompanyFinanceAccountCompCustOpenAcctRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceAccountCompCustOpenAcctRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
