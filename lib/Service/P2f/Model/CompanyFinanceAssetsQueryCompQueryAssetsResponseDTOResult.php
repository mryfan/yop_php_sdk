<?php
/**
 * CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 大禹
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
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

namespace Yeepay\Yop\Sdk\Service\P2f\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'errorCode' => 'string',
        'errorMsg' => 'string',
        'channelNo' => 'string',
        'assetsAmount' => 'float',
        'totalProfitAmount' => 'float',
        'yesterdayProfit' => 'float',
        'availableBal' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'channelNo' => null,
        'assetsAmount' => null,
        'totalProfitAmount' => null,
        'yesterdayProfit' => null,
        'availableBal' => null
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
        'status' => 'status',
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
        'channelNo' => 'channelNo',
        'assetsAmount' => 'assetsAmount',
        'totalProfitAmount' => 'totalProfitAmount',
        'yesterdayProfit' => 'yesterdayProfit',
        'availableBal' => 'availableBal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'errorCode' => 'setErrorCode',
        'errorMsg' => 'setErrorMsg',
        'channelNo' => 'setChannelNo',
        'assetsAmount' => 'setAssetsAmount',
        'totalProfitAmount' => 'setTotalProfitAmount',
        'yesterdayProfit' => 'setYesterdayProfit',
        'availableBal' => 'setAvailableBal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'errorCode' => 'getErrorCode',
        'errorMsg' => 'getErrorMsg',
        'channelNo' => 'getChannelNo',
        'assetsAmount' => 'getAssetsAmount',
        'totalProfitAmount' => 'getTotalProfitAmount',
        'yesterdayProfit' => 'getYesterdayProfit',
        'availableBal' => 'getAvailableBal'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['channelNo'] = isset($data['channelNo']) ? $data['channelNo'] : null;
        $this->container['assetsAmount'] = isset($data['assetsAmount']) ? $data['assetsAmount'] : null;
        $this->container['totalProfitAmount'] = isset($data['totalProfitAmount']) ? $data['totalProfitAmount'] : null;
        $this->container['yesterdayProfit'] = isset($data['yesterdayProfit']) ? $data['yesterdayProfit'] : null;
        $this->container['availableBal'] = isset($data['availableBal']) ? $data['availableBal'] : null;
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 状态
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param string $errorCode 错误码
     *
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets errorMsg
     *
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
     * Sets errorMsg
     *
     * @param string $errorMsg 错误描述
     *
     * @return $this
     */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;

        return $this;
    }

    /**
     * Gets channelNo
     *
     * @return string
     */
    public function getChannelNo()
    {
        return $this->container['channelNo'];
    }

    /**
     * Sets channelNo
     *
     * @param string $channelNo 渠道号
     *
     * @return $this
     */
    public function setChannelNo($channelNo)
    {
        $this->container['channelNo'] = $channelNo;

        return $this;
    }

    /**
     * Gets assetsAmount
     *
     * @return float
     */
    public function getAssetsAmount()
    {
        return $this->container['assetsAmount'];
    }

    /**
     * Sets assetsAmount
     *
     * @param float $assetsAmount 企业号可用资产
     *
     * @return $this
     */
    public function setAssetsAmount($assetsAmount)
    {
        $this->container['assetsAmount'] = $assetsAmount;

        return $this;
    }

    /**
     * Gets totalProfitAmount
     *
     * @return float
     */
    public function getTotalProfitAmount()
    {
        return $this->container['totalProfitAmount'];
    }

    /**
     * Sets totalProfitAmount
     *
     * @param float $totalProfitAmount 累计收益
     *
     * @return $this
     */
    public function setTotalProfitAmount($totalProfitAmount)
    {
        $this->container['totalProfitAmount'] = $totalProfitAmount;

        return $this;
    }

    /**
     * Gets yesterdayProfit
     *
     * @return float
     */
    public function getYesterdayProfit()
    {
        return $this->container['yesterdayProfit'];
    }

    /**
     * Sets yesterdayProfit
     *
     * @param float $yesterdayProfit 昨日收益
     *
     * @return $this
     */
    public function setYesterdayProfit($yesterdayProfit)
    {
        $this->container['yesterdayProfit'] = $yesterdayProfit;

        return $this;
    }

    /**
     * Gets availableBal
     *
     * @return float
     */
    public function getAvailableBal()
    {
        return $this->container['availableBal'];
    }

    /**
     * Sets availableBal
     *
     * @param float $availableBal 可用余额
     *
     * @return $this
     */
    public function setAvailableBal($availableBal)
    {
        $this->container['availableBal'] = $availableBal;

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


