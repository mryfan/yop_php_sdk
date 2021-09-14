<?php
/**
 * BindpayRequestApiBindPayPaymentResponseDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 前置收银台
 *
 * <p>前置收银台</p>
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * BindpayRequestApiBindPayPaymentResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BindpayRequestApiBindPayPaymentResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BindpayRequestApiBindPayPaymentResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'merchantNo' => 'string',
        'token' => 'string',
        'bindId' => 'string',
        'needItems' => 'string',
        'verifyCodeType' => 'string',
        'supplyNeedItemScene' => 'string',
        'recordId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'merchantNo' => null,
        'token' => null,
        'bindId' => null,
        'needItems' => null,
        'verifyCodeType' => null,
        'supplyNeedItemScene' => null,
        'recordId' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'code' => 'code',
        'message' => 'message',
        'merchantNo' => 'merchantNo',
        'token' => 'token',
        'bindId' => 'bindId',
        'needItems' => 'needItems',
        'verifyCodeType' => 'verifyCodeType',
        'supplyNeedItemScene' => 'supplyNeedItemScene',
        'recordId' => 'recordId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'merchantNo' => 'setMerchantNo',
        'token' => 'setToken',
        'bindId' => 'setBindId',
        'needItems' => 'setNeedItems',
        'verifyCodeType' => 'setVerifyCodeType',
        'supplyNeedItemScene' => 'setSupplyNeedItemScene',
        'recordId' => 'setRecordId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'merchantNo' => 'getMerchantNo',
        'token' => 'getToken',
        'bindId' => 'getBindId',
        'needItems' => 'getNeedItems',
        'verifyCodeType' => 'getVerifyCodeType',
        'supplyNeedItemScene' => 'getSupplyNeedItemScene',
        'recordId' => 'getRecordId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['bindId'] = isset($data['bindId']) ? $data['bindId'] : null;
        $this->container['needItems'] = isset($data['needItems']) ? $data['needItems'] : null;
        $this->container['verifyCodeType'] = isset($data['verifyCodeType']) ? $data['verifyCodeType'] : null;
        $this->container['supplyNeedItemScene'] = isset($data['supplyNeedItemScene']) ? $data['supplyNeedItemScene'] : null;
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 结果码
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 信息描述
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->container['merchantNo'];
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo 商户编号
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token 订单token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets bindId
     *
     * @return string
     */
    public function getBindId()
    {
        return $this->container['bindId'];
    }

    /**
     * Sets bindId
     *
     * @param string $bindId 绑卡ID
     *
     * @return $this
     */
    public function setBindId($bindId)
    {
        $this->container['bindId'] = $bindId;

        return $this;
    }

    /**
     * Gets needItems
     *
     * @return string
     */
    public function getNeedItems()
    {
        return $this->container['needItems'];
    }

    /**
     * Sets needItems
     *
     * @param string $needItems 需补充项名称的 集合，以\",\"分隔
     *
     * @return $this
     */
    public function setNeedItems($needItems)
    {
        $this->container['needItems'] = $needItems;

        return $this;
    }

    /**
     * Gets verifyCodeType
     *
     * @return string
     */
    public function getVerifyCodeType()
    {
        return $this->container['verifyCodeType'];
    }

    /**
     * Sets verifyCodeType
     *
     * @param string $verifyCodeType 验证码类型
     *
     * @return $this
     */
    public function setVerifyCodeType($verifyCodeType)
    {
        $this->container['verifyCodeType'] = $verifyCodeType;

        return $this;
    }

    /**
     * Gets supplyNeedItemScene
     *
     * @return string
     */
    public function getSupplyNeedItemScene()
    {
        return $this->container['supplyNeedItemScene'];
    }

    /**
     * Sets supplyNeedItemScene
     *
     * @param string $supplyNeedItemScene 提交补充项场景
     *
     * @return $this
     */
    public function setSupplyNeedItemScene($supplyNeedItemScene)
    {
        $this->container['supplyNeedItemScene'] = $supplyNeedItemScene;

        return $this;
    }

    /**
     * Gets recordId
     *
     * @return string
     */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
     * Sets recordId
     *
     * @param string $recordId 未命名
     *
     * @return $this
     */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


