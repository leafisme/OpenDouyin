<?php
/**
 * SupplierAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 */

namespace Douyin\Open\Model;

use \ArrayAccess;
use \Douyin\Open\ObjectSerializer;

/**
 * SupplierAttributes Class Doc Comment
 *
 * @category Class
 * @description 店铺属性字段，编号规则：垂直行业 1xxx-酒店民宿 2xxx-餐饮 3xxx-景区 通用属性-9yxxx
 * @package  Douyin\Open
 * @author   抖音小开
 */
class SupplierAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'supplier_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_1101' => '\Douyin\Open\Model\HotelServiceFacility[]',
'_1102' => '\Douyin\Open\Model\HotelServiceFacility[]',
'_1103' => '\Douyin\Open\Model\HotelServiceFacility[]',
'_1104' => '\Douyin\Open\Model\SupplierAttributes1104',
'_1105' => 'int',
'_3101' => '\Douyin\Open\Model\SupplierAttributes3101'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_1101' => null,
'_1102' => null,
'_1103' => null,
'_1104' => null,
'_1105' => null,
'_3101' => null    ];

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
        '_1101' => '1101',
'_1102' => '1102',
'_1103' => '1103',
'_1104' => '1104',
'_1105' => '1105',
'_3101' => '3101'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_1101' => 'set1101',
'_1102' => 'set1102',
'_1103' => 'set1103',
'_1104' => 'set1104',
'_1105' => 'set1105',
'_3101' => 'set3101'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_1101' => 'get1101',
'_1102' => 'get1102',
'_1103' => 'get1103',
'_1104' => 'get1104',
'_1105' => 'get1105',
'_3101' => 'get3101'    ];

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

    const _1105_1 = 1;
const _1105_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function get1105AllowableValues()
    {
        return [
            self::_1105_1,
self::_1105_2,        ];
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
        $this->container['_1101'] = isset($data['_1101']) ? $data['_1101'] : null;
        $this->container['_1102'] = isset($data['_1102']) ? $data['_1102'] : null;
        $this->container['_1103'] = isset($data['_1103']) ? $data['_1103'] : null;
        $this->container['_1104'] = isset($data['_1104']) ? $data['_1104'] : null;
        $this->container['_1105'] = isset($data['_1105']) ? $data['_1105'] : null;
        $this->container['_3101'] = isset($data['_3101']) ? $data['_3101'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->get1105AllowableValues();
        if (!is_null($this->container['_1105']) && !in_array($this->container['_1105'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for '_1105', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets _1101
     *
     * @return \Douyin\Open\Model\HotelServiceFacility[]
     */
    public function get1101()
    {
        return $this->container['_1101'];
    }

    /**
     * Sets _1101
     *
     * @param \Douyin\Open\Model\HotelServiceFacility[] $_1101 酒店服务
     *
     * @return $this
     */
    public function set1101($_1101)
    {
        $this->container['_1101'] = $_1101;

        return $this;
    }

    /**
     * Gets _1102
     *
     * @return \Douyin\Open\Model\HotelServiceFacility[]
     */
    public function get1102()
    {
        return $this->container['_1102'];
    }

    /**
     * Sets _1102
     *
     * @param \Douyin\Open\Model\HotelServiceFacility[] $_1102 酒店设施
     *
     * @return $this
     */
    public function set1102($_1102)
    {
        $this->container['_1102'] = $_1102;

        return $this;
    }

    /**
     * Gets _1103
     *
     * @return \Douyin\Open\Model\HotelServiceFacility[]
     */
    public function get1103()
    {
        return $this->container['_1103'];
    }

    /**
     * Sets _1103
     *
     * @param \Douyin\Open\Model\HotelServiceFacility[] $_1103 酒店特色项目
     *
     * @return $this
     */
    public function set1103($_1103)
    {
        $this->container['_1103'] = $_1103;

        return $this;
    }

    /**
     * Gets _1104
     *
     * @return \Douyin\Open\Model\SupplierAttributes1104
     */
    public function get1104()
    {
        return $this->container['_1104'];
    }

    /**
     * Sets _1104
     *
     * @param \Douyin\Open\Model\SupplierAttributes1104 $_1104 _1104
     *
     * @return $this
     */
    public function set1104($_1104)
    {
        $this->container['_1104'] = $_1104;

        return $this;
    }

    /**
     * Gets _1105
     *
     * @return int
     */
    public function get1105()
    {
        return $this->container['_1105'];
    }

    /**
     * Sets _1105
     *
     * @param int $_1105 下单模板。1 - 国内模板, 2 - 海外模板
     *
     * @return $this
     */
    public function set1105($_1105)
    {
        $allowedValues = $this->get1105AllowableValues();
        if (!is_null($_1105) && !in_array($_1105, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for '_1105', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['_1105'] = $_1105;

        return $this;
    }

    /**
     * Gets _3101
     *
     * @return \Douyin\Open\Model\SupplierAttributes3101
     */
    public function get3101()
    {
        return $this->container['_3101'];
    }

    /**
     * Sets _3101
     *
     * @param \Douyin\Open\Model\SupplierAttributes3101 $_3101 _3101
     *
     * @return $this
     */
    public function set3101($_3101)
    {
        $this->container['_3101'] = $_3101;

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
