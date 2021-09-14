<?php


namespace Yeepay\Yop\Sdk\Service\Sys;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Sys\Model as Model;

class SysClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * SysClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\MerchantQualUploadRequest $request
     * @return Model\MerchantQualUploadResponse
     * @throws YopClientException
     */
    public function merchantQualUpload(Model\MerchantQualUploadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantQualUploadRequestMarshaller::getInstance(),
            Model\MerchantQualUploadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
