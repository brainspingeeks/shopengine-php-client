<?php
/**
 * PurchaseArticle
 *
 * PHP version 5
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* ShopShopBox
 *
* ShopShopBox API Documentation
 *
* OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SSB\Api\Model;

use \ArrayAccess;
use \SSB\Api\ObjectSerializer;

/**
 * PurchaseArticle Class Doc Comment
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseArticle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseArticle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'articleAggregateId' => 'string',
'articleVersionId' => 'int',
'quantity' => 'int',
'custom' => 'string[]',
'id' => 'string',
'price' => '\SSB\Api\Model\Money',
'name' => 'string',
'sku' => 'string',
'tax' => 'int',
'originalPrice' => '\SSB\Api\Model\Money'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'articleAggregateId' => null,
'articleVersionId' => null,
'quantity' => null,
'custom' => null,
'id' => null,
'price' => null,
'name' => null,
'sku' => null,
'tax' => null,
'originalPrice' => null    ];

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
        'articleAggregateId' => 'articleAggregateId',
'articleVersionId' => 'articleVersionId',
'quantity' => 'quantity',
'custom' => 'custom',
'id' => 'id',
'price' => 'price',
'name' => 'name',
'sku' => 'sku',
'tax' => 'tax',
'originalPrice' => 'originalPrice'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'articleAggregateId' => 'setArticleAggregateId',
'articleVersionId' => 'setArticleVersionId',
'quantity' => 'setQuantity',
'custom' => 'setCustom',
'id' => 'setId',
'price' => 'setPrice',
'name' => 'setName',
'sku' => 'setSku',
'tax' => 'setTax',
'originalPrice' => 'setOriginalPrice'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'articleAggregateId' => 'getArticleAggregateId',
'articleVersionId' => 'getArticleVersionId',
'quantity' => 'getQuantity',
'custom' => 'getCustom',
'id' => 'getId',
'price' => 'getPrice',
'name' => 'getName',
'sku' => 'getSku',
'tax' => 'getTax',
'originalPrice' => 'getOriginalPrice'    ];

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
        $this->container['articleAggregateId'] = isset($data['articleAggregateId']) ? $data['articleAggregateId'] : null;
        $this->container['articleVersionId'] = isset($data['articleVersionId']) ? $data['articleVersionId'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['originalPrice'] = isset($data['originalPrice']) ? $data['originalPrice'] : null;
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

        return true;
    }


    /**
     * Gets articleAggregateId
     *
     * @return string
     */
    public function getArticleAggregateId()
    {
        return $this->container['articleAggregateId'];
    }

    /**
     * Sets articleAggregateId
     *
     * @param string $articleAggregateId Aggregate Id of the Article
     *
     * @return $this
     */
    public function setArticleAggregateId($articleAggregateId)
    {
        $this->container['articleAggregateId'] = $articleAggregateId;

        return $this;
    }

    /**
     * Gets articleVersionId
     *
     * @return int
     */
    public function getArticleVersionId()
    {
        return $this->container['articleVersionId'];
    }

    /**
     * Sets articleVersionId
     *
     * @param int $articleVersionId Version Id of the Article
     *
     * @return $this
     */
    public function setArticleVersionId($articleVersionId)
    {
        $this->container['articleVersionId'] = $articleVersionId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return string[]
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param string[] $custom custom
     *
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \SSB\Api\Model\Money
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \SSB\Api\Model\Money $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the Article
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Sku of the Article
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return int
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param int $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets originalPrice
     *
     * @return \SSB\Api\Model\Money
     */
    public function getOriginalPrice()
    {
        return $this->container['originalPrice'];
    }

    /**
     * Sets originalPrice
     *
     * @param \SSB\Api\Model\Money $originalPrice originalPrice
     *
     * @return $this
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->container['originalPrice'] = $originalPrice;

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
