<?php
/**
 * FacepayProxyQueryOrderBeforeOrderBeforeRequestParam
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 刷脸付
 *
 * <p>Facepay是一款部署在支付公司的应用内刷脸支付产品，用于代替现有的H5形态的快捷支付产品、以刷脸技术来代替短信验证啊技术，在app环境中提供安全，快捷，不可抵赖的支付体验。</p>
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\Facepay\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * FacepayProxyQueryOrderBeforeOrderBeforeRequestParam Class Doc Comment
 *
 * @category Class
 * @description 方法签名第0个参数，请自行修改arg0等参数的名字
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FacepayProxyQueryOrderBeforeOrderBeforeRequestParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FacepayProxyQueryOrderBeforeOrderBeforeRequestParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bizSystem' => 'string',
        'merchantNo' => 'string',
        'mtToken' => 'string',
        'memberNo' => 'string',
        'orderToken' => 'string',
        'merchantUserName' => 'string',
        'merchantUserIdNo' => 'string',
        'merchantUserPhone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bizSystem' => null,
        'merchantNo' => null,
        'mtToken' => null,
        'memberNo' => null,
        'orderToken' => null,
        'merchantUserName' => null,
        'merchantUserIdNo' => null,
        'merchantUserPhone' => null
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
        'bizSystem' => 'bizSystem',
        'merchantNo' => 'merchantNo',
        'mtToken' => 'mtToken',
        'memberNo' => 'memberNo',
        'orderToken' => 'orderToken',
        'merchantUserName' => 'merchantUserName',
        'merchantUserIdNo' => 'merchantUserIdNo',
        'merchantUserPhone' => 'merchantUserPhone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizSystem' => 'setBizSystem',
        'merchantNo' => 'setMerchantNo',
        'mtToken' => 'setMtToken',
        'memberNo' => 'setMemberNo',
        'orderToken' => 'setOrderToken',
        'merchantUserName' => 'setMerchantUserName',
        'merchantUserIdNo' => 'setMerchantUserIdNo',
        'merchantUserPhone' => 'setMerchantUserPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizSystem' => 'getBizSystem',
        'merchantNo' => 'getMerchantNo',
        'mtToken' => 'getMtToken',
        'memberNo' => 'getMemberNo',
        'orderToken' => 'getOrderToken',
        'merchantUserName' => 'getMerchantUserName',
        'merchantUserIdNo' => 'getMerchantUserIdNo',
        'merchantUserPhone' => 'getMerchantUserPhone'
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
        $this->container['bizSystem'] = isset($data['bizSystem']) ? $data['bizSystem'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['mtToken'] = isset($data['mtToken']) ? $data['mtToken'] : null;
        $this->container['memberNo'] = isset($data['memberNo']) ? $data['memberNo'] : null;
        $this->container['orderToken'] = isset($data['orderToken']) ? $data['orderToken'] : null;
        $this->container['merchantUserName'] = isset($data['merchantUserName']) ? $data['merchantUserName'] : null;
        $this->container['merchantUserIdNo'] = isset($data['merchantUserIdNo']) ? $data['merchantUserIdNo'] : null;
        $this->container['merchantUserPhone'] = isset($data['merchantUserPhone']) ? $data['merchantUserPhone'] : null;
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
     * Gets bizSystem
     *
     * @return string
     */
    public function getBizSystem()
    {
        return $this->container['bizSystem'];
    }

    /**
     * Sets bizSystem
     *
     * @param string $bizSystem bizSystem
     *
     * @return $this
     */
    public function setBizSystem($bizSystem)
    {
        $this->container['bizSystem'] = $bizSystem;

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
     * @param string $merchantNo merchantNo
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets mtToken
     *
     * @return string
     */
    public function getMtToken()
    {
        return $this->container['mtToken'];
    }

    /**
     * Sets mtToken
     *
     * @param string $mtToken mtToken
     *
     * @return $this
     */
    public function setMtToken($mtToken)
    {
        $this->container['mtToken'] = $mtToken;

        return $this;
    }

    /**
     * Gets memberNo
     *
     * @return string
     */
    public function getMemberNo()
    {
        return $this->container['memberNo'];
    }

    /**
     * Sets memberNo
     *
     * @param string $memberNo memberNo
     *
     * @return $this
     */
    public function setMemberNo($memberNo)
    {
        $this->container['memberNo'] = $memberNo;

        return $this;
    }

    /**
     * Gets orderToken
     *
     * @return string
     */
    public function getOrderToken()
    {
        return $this->container['orderToken'];
    }

    /**
     * Sets orderToken
     *
     * @param string $orderToken orderToken
     *
     * @return $this
     */
    public function setOrderToken($orderToken)
    {
        $this->container['orderToken'] = $orderToken;

        return $this;
    }

    /**
     * Gets merchantUserName
     *
     * @return string
     */
    public function getMerchantUserName()
    {
        return $this->container['merchantUserName'];
    }

    /**
     * Sets merchantUserName
     *
     * @param string $merchantUserName merchantUserName
     *
     * @return $this
     */
    public function setMerchantUserName($merchantUserName)
    {
        $this->container['merchantUserName'] = $merchantUserName;

        return $this;
    }

    /**
     * Gets merchantUserIdNo
     *
     * @return string
     */
    public function getMerchantUserIdNo()
    {
        return $this->container['merchantUserIdNo'];
    }

    /**
     * Sets merchantUserIdNo
     *
     * @param string $merchantUserIdNo merchantUserIdNo
     *
     * @return $this
     */
    public function setMerchantUserIdNo($merchantUserIdNo)
    {
        $this->container['merchantUserIdNo'] = $merchantUserIdNo;

        return $this;
    }

    /**
     * Gets merchantUserPhone
     *
     * @return string
     */
    public function getMerchantUserPhone()
    {
        return $this->container['merchantUserPhone'];
    }

    /**
     * Sets merchantUserPhone
     *
     * @param string $merchantUserPhone merchantUserPhone
     *
     * @return $this
     */
    public function setMerchantUserPhone($merchantUserPhone)
    {
        $this->container['merchantUserPhone'] = $merchantUserPhone;

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


