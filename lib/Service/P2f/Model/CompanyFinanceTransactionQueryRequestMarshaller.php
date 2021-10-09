<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CompanyFinanceTransactionQueryRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CompanyFinanceTransactionQueryRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinanceTransactionQueryRequestMarshaller();
    }

    /**
     * @return CompanyFinanceTransactionQueryRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'P2f';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/p2f/company-finance/transaction/query';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CompanyFinanceTransactionQueryRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getStartDate() != null){
            $internalRequest->addParameter('startDate', ObjectSerializer::sanitizeForSerialization($request->getStartDate(), 'string'));
        }
        if($request->getEndDate() != null){
            $internalRequest->addParameter('endDate', ObjectSerializer::sanitizeForSerialization($request->getEndDate(), 'string'));
        }
        if($request->getChannelCode() != null){
            $internalRequest->addParameter('channelCode', ObjectSerializer::sanitizeForSerialization($request->getChannelCode(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CompanyFinanceTransactionQueryRequestMarshaller::__init();
