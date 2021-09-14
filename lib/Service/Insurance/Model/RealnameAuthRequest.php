<?php


namespace Yeepay\Yop\Sdk\Service\Insurance\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class RealnameAuthRequest extends BaseRequest
{
    /**
     * @var 
     */
    private $body;

    /**
     * Gets body
     *
     * @return 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets body
     *
     * @param  $body
     * @return RealnameAuthRequest
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public static function getOperationId()
    {
        return 'realnameAuth';
    }


}
