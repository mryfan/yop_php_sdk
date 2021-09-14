<?php
/**
 * FileUploadCustFileUploadResponseDTOResult
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

namespace Yeepay\Yop\Sdk\Service\P2f\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * FileUploadCustFileUploadResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileUploadCustFileUploadResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FileUploadCustFileUploadResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'errorCode' => 'string',
        'errorMsg' => 'string',
        'merchantNo' => 'string',
        'requestNo' => 'string',
        'fileType' => 'string',
        'image' => 'string',
        'imageOriginalFileName' => 'string',
        'imageFileSize' => 'string',
        'imageMd5' => 'string'
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
        'merchantNo' => null,
        'requestNo' => null,
        'fileType' => null,
        'image' => null,
        'imageOriginalFileName' => null,
        'imageFileSize' => null,
        'imageMd5' => null
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
        'merchantNo' => 'merchantNo',
        'requestNo' => 'requestNo',
        'fileType' => 'fileType',
        'image' => 'image',
        'imageOriginalFileName' => 'imageOriginalFileName',
        'imageFileSize' => 'imageFileSize',
        'imageMd5' => 'imageMd5'
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
        'merchantNo' => 'setMerchantNo',
        'requestNo' => 'setRequestNo',
        'fileType' => 'setFileType',
        'image' => 'setImage',
        'imageOriginalFileName' => 'setImageOriginalFileName',
        'imageFileSize' => 'setImageFileSize',
        'imageMd5' => 'setImageMd5'
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
        'merchantNo' => 'getMerchantNo',
        'requestNo' => 'getRequestNo',
        'fileType' => 'getFileType',
        'image' => 'getImage',
        'imageOriginalFileName' => 'getImageOriginalFileName',
        'imageFileSize' => 'getImageFileSize',
        'imageMd5' => 'getImageMd5'
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
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['requestNo'] = isset($data['requestNo']) ? $data['requestNo'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['imageOriginalFileName'] = isset($data['imageOriginalFileName']) ? $data['imageOriginalFileName'] : null;
        $this->container['imageFileSize'] = isset($data['imageFileSize']) ? $data['imageFileSize'] : null;
        $this->container['imageMd5'] = isset($data['imageMd5']) ? $data['imageMd5'] : null;
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
     * @param string $status 订单状态
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
     * @param string $errorMsg 错误信息
     *
     * @return $this
     */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;

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
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->container['requestNo'];
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo 商户请求号
     *
     * @return $this
     */
    public function setRequestNo($requestNo)
    {
        $this->container['requestNo'] = $requestNo;

        return $this;
    }

    /**
     * Gets fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
     * Sets fileType
     *
     * @param string $fileType 文件类型
     *
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image 文件存储路径
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets imageOriginalFileName
     *
     * @return string
     */
    public function getImageOriginalFileName()
    {
        return $this->container['imageOriginalFileName'];
    }

    /**
     * Sets imageOriginalFileName
     *
     * @param string $imageOriginalFileName 上传文件名称
     *
     * @return $this
     */
    public function setImageOriginalFileName($imageOriginalFileName)
    {
        $this->container['imageOriginalFileName'] = $imageOriginalFileName;

        return $this;
    }

    /**
     * Gets imageFileSize
     *
     * @return string
     */
    public function getImageFileSize()
    {
        return $this->container['imageFileSize'];
    }

    /**
     * Sets imageFileSize
     *
     * @param string $imageFileSize 上传文件大小
     *
     * @return $this
     */
    public function setImageFileSize($imageFileSize)
    {
        $this->container['imageFileSize'] = $imageFileSize;

        return $this;
    }

    /**
     * Gets imageMd5
     *
     * @return string
     */
    public function getImageMd5()
    {
        return $this->container['imageMd5'];
    }

    /**
     * Sets imageMd5
     *
     * @param string $imageMd5 文件MD5值
     *
     * @return $this
     */
    public function setImageMd5($imageMd5)
    {
        $this->container['imageMd5'] = $imageMd5;

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


