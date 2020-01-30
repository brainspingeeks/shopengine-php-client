<?php
/**
 * InlineResponse2001
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
 * Swagger Codegen version: 2.4.11
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
 * InlineResponse2001 Class Doc Comment
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2001 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'defaultCountry' => 'string',
        'currency' => 'string',
        'language' => 'string',
        'production' => 'string',
        'apiUrl' => 'string',
        'shipping' => 'string[]',
        'paymentMethodModels' => 'string[]',
        'paymentMethodsCredentials' => 'string[]',
        'shop' => 'string',
        'shopUrl' => 'string',
        'shopApi' => 'string',
        'name' => 'string',
        'orderConfirmationEmail' => 'string',
        'freeNewsletterGift' => 'string',
        'trustedShopsId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'defaultCountry' => null,
        'currency' => null,
        'language' => null,
        'production' => null,
        'apiUrl' => null,
        'shipping' => null,
        'paymentMethodModels' => null,
        'paymentMethodsCredentials' => null,
        'shop' => null,
        'shopUrl' => null,
        'shopApi' => null,
        'name' => null,
        'orderConfirmationEmail' => null,
        'freeNewsletterGift' => null,
        'trustedShopsId' => null
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
        'defaultCountry' => 'defaultCountry',
        'currency' => 'currency',
        'language' => 'language',
        'production' => 'production',
        'apiUrl' => 'apiUrl',
        'shipping' => 'shipping',
        'paymentMethodModels' => 'paymentMethodModels',
        'paymentMethodsCredentials' => 'paymentMethodsCredentials',
        'shop' => 'shop',
        'shopUrl' => 'shopUrl',
        'shopApi' => 'shopApi',
        'name' => 'name',
        'orderConfirmationEmail' => 'orderConfirmationEmail',
        'freeNewsletterGift' => 'freeNewsletterGift',
        'trustedShopsId' => 'trustedShopsId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultCountry' => 'setDefaultCountry',
        'currency' => 'setCurrency',
        'language' => 'setLanguage',
        'production' => 'setProduction',
        'apiUrl' => 'setApiUrl',
        'shipping' => 'setShipping',
        'paymentMethodModels' => 'setPaymentMethodModels',
        'paymentMethodsCredentials' => 'setPaymentMethodsCredentials',
        'shop' => 'setShop',
        'shopUrl' => 'setShopUrl',
        'shopApi' => 'setShopApi',
        'name' => 'setName',
        'orderConfirmationEmail' => 'setOrderConfirmationEmail',
        'freeNewsletterGift' => 'setFreeNewsletterGift',
        'trustedShopsId' => 'setTrustedShopsId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultCountry' => 'getDefaultCountry',
        'currency' => 'getCurrency',
        'language' => 'getLanguage',
        'production' => 'getProduction',
        'apiUrl' => 'getApiUrl',
        'shipping' => 'getShipping',
        'paymentMethodModels' => 'getPaymentMethodModels',
        'paymentMethodsCredentials' => 'getPaymentMethodsCredentials',
        'shop' => 'getShop',
        'shopUrl' => 'getShopUrl',
        'shopApi' => 'getShopApi',
        'name' => 'getName',
        'orderConfirmationEmail' => 'getOrderConfirmationEmail',
        'freeNewsletterGift' => 'getFreeNewsletterGift',
        'trustedShopsId' => 'getTrustedShopsId'
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
        $this->container['defaultCountry'] = isset($data['defaultCountry']) ? $data['defaultCountry'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['production'] = isset($data['production']) ? $data['production'] : null;
        $this->container['apiUrl'] = isset($data['apiUrl']) ? $data['apiUrl'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['paymentMethodModels'] = isset($data['paymentMethodModels']) ? $data['paymentMethodModels'] : null;
        $this->container['paymentMethodsCredentials'] = isset($data['paymentMethodsCredentials']) ? $data['paymentMethodsCredentials'] : null;
        $this->container['shop'] = isset($data['shop']) ? $data['shop'] : null;
        $this->container['shopUrl'] = isset($data['shopUrl']) ? $data['shopUrl'] : null;
        $this->container['shopApi'] = isset($data['shopApi']) ? $data['shopApi'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['orderConfirmationEmail'] = isset($data['orderConfirmationEmail']) ? $data['orderConfirmationEmail'] : null;
        $this->container['freeNewsletterGift'] = isset($data['freeNewsletterGift']) ? $data['freeNewsletterGift'] : null;
        $this->container['trustedShopsId'] = isset($data['trustedShopsId']) ? $data['trustedShopsId'] : null;
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
     * Gets defaultCountry
     *
     * @return string
     */
    public function getDefaultCountry()
    {
        return $this->container['defaultCountry'];
    }

    /**
     * Sets defaultCountry
     *
     * @param string $defaultCountry defaultCountry
     *
     * @return $this
     */
    public function setDefaultCountry($defaultCountry)
    {
        $this->container['defaultCountry'] = $defaultCountry;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets production
     *
     * @return string
     */
    public function getProduction()
    {
        return $this->container['production'];
    }

    /**
     * Sets production
     *
     * @param string $production production
     *
     * @return $this
     */
    public function setProduction($production)
    {
        $this->container['production'] = $production;

        return $this;
    }

    /**
     * Gets apiUrl
     *
     * @return string
     */
    public function getApiUrl()
    {
        return $this->container['apiUrl'];
    }

    /**
     * Sets apiUrl
     *
     * @param string $apiUrl apiUrl
     *
     * @return $this
     */
    public function setApiUrl($apiUrl)
    {
        $this->container['apiUrl'] = $apiUrl;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return string[]
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param string[] $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets paymentMethodModels
     *
     * @return string[]
     */
    public function getPaymentMethodModels()
    {
        return $this->container['paymentMethodModels'];
    }

    /**
     * Sets paymentMethodModels
     *
     * @param string[] $paymentMethodModels paymentMethodModels
     *
     * @return $this
     */
    public function setPaymentMethodModels($paymentMethodModels)
    {
        $this->container['paymentMethodModels'] = $paymentMethodModels;

        return $this;
    }

    /**
     * Gets paymentMethodsCredentials
     *
     * @return string[]
     */
    public function getPaymentMethodsCredentials()
    {
        return $this->container['paymentMethodsCredentials'];
    }

    /**
     * Sets paymentMethodsCredentials
     *
     * @param string[] $paymentMethodsCredentials paymentMethodsCredentials
     *
     * @return $this
     */
    public function setPaymentMethodsCredentials($paymentMethodsCredentials)
    {
        $this->container['paymentMethodsCredentials'] = $paymentMethodsCredentials;

        return $this;
    }

    /**
     * Gets shop
     *
     * @return string
     */
    public function getShop()
    {
        return $this->container['shop'];
    }

    /**
     * Sets shop
     *
     * @param string $shop shop
     *
     * @return $this
     */
    public function setShop($shop)
    {
        $this->container['shop'] = $shop;

        return $this;
    }

    /**
     * Gets shopUrl
     *
     * @return string
     */
    public function getShopUrl()
    {
        return $this->container['shopUrl'];
    }

    /**
     * Sets shopUrl
     *
     * @param string $shopUrl shopUrl
     *
     * @return $this
     */
    public function setShopUrl($shopUrl)
    {
        $this->container['shopUrl'] = $shopUrl;

        return $this;
    }

    /**
     * Gets shopApi
     *
     * @return string
     */
    public function getShopApi()
    {
        return $this->container['shopApi'];
    }

    /**
     * Sets shopApi
     *
     * @param string $shopApi shopApi
     *
     * @return $this
     */
    public function setShopApi($shopApi)
    {
        $this->container['shopApi'] = $shopApi;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets orderConfirmationEmail
     *
     * @return string
     */
    public function getOrderConfirmationEmail()
    {
        return $this->container['orderConfirmationEmail'];
    }

    /**
     * Sets orderConfirmationEmail
     *
     * @param string $orderConfirmationEmail orderConfirmationEmail
     *
     * @return $this
     */
    public function setOrderConfirmationEmail($orderConfirmationEmail)
    {
        $this->container['orderConfirmationEmail'] = $orderConfirmationEmail;

        return $this;
    }

    /**
     * Gets freeNewsletterGift
     *
     * @return string
     */
    public function getFreeNewsletterGift()
    {
        return $this->container['freeNewsletterGift'];
    }

    /**
     * Sets freeNewsletterGift
     *
     * @param string $freeNewsletterGift freeNewsletterGift
     *
     * @return $this
     */
    public function setFreeNewsletterGift($freeNewsletterGift)
    {
        $this->container['freeNewsletterGift'] = $freeNewsletterGift;

        return $this;
    }

    /**
     * Gets trustedShopsId
     *
     * @return string
     */
    public function getTrustedShopsId()
    {
        return $this->container['trustedShopsId'];
    }

    /**
     * Sets trustedShopsId
     *
     * @param string $trustedShopsId trustedShopsId
     *
     * @return $this
     */
    public function setTrustedShopsId($trustedShopsId)
    {
        $this->container['trustedShopsId'] = $trustedShopsId;

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


