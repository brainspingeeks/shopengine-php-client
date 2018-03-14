<?php
/**
 * Purchase
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
 * Swagger Codegen version: 2.3.1
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
 * Purchase Class Doc Comment
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Purchase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Purchase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'purchaseArticles' => '\SSB\Api\Model\PurchaseArticle[]',
        'codes' => '\SSB\Api\Model\Code[]',
        'shippingAddress' => '\SSB\Api\Model\Address',
        'billingAddress' => '\SSB\Api\Model\Address',
        'email' => 'string',
        'paymentMethod' => 'string',
        'user' => 'string',
        'originStatus' => 'string',
        'status' => 'string',
        'grandTotal' => '\SSB\Api\Model\Money',
        'subTotal' => '\SSB\Api\Model\Money',
        'taxTotal' => '\SSB\Api\Model\Money',
        'discountedTotal' => '\SSB\Api\Model\Money',
        'shipping' => '\SSB\Api\Model\Money',
        'orderId' => 'string',
        'orderDate' => '\DateTime',
        'versionId' => 'int',
        'aggregateId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'purchaseArticles' => null,
        'codes' => null,
        'shippingAddress' => null,
        'billingAddress' => null,
        'email' => null,
        'paymentMethod' => null,
        'user' => null,
        'originStatus' => null,
        'status' => null,
        'grandTotal' => null,
        'subTotal' => null,
        'taxTotal' => null,
        'discountedTotal' => null,
        'shipping' => null,
        'orderId' => null,
        'orderDate' => 'date-time',
        'versionId' => null,
        'aggregateId' => null
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
        'purchaseArticles' => 'purchaseArticles',
        'codes' => 'codes',
        'shippingAddress' => 'shippingAddress',
        'billingAddress' => 'billingAddress',
        'email' => 'email',
        'paymentMethod' => 'paymentMethod',
        'user' => 'user',
        'originStatus' => 'originStatus',
        'status' => 'status',
        'grandTotal' => 'grandTotal',
        'subTotal' => 'subTotal',
        'taxTotal' => 'taxTotal',
        'discountedTotal' => 'discountedTotal',
        'shipping' => 'shipping',
        'orderId' => 'orderId',
        'orderDate' => 'orderDate',
        'versionId' => 'versionId',
        'aggregateId' => 'aggregateId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchaseArticles' => 'setPurchaseArticles',
        'codes' => 'setCodes',
        'shippingAddress' => 'setShippingAddress',
        'billingAddress' => 'setBillingAddress',
        'email' => 'setEmail',
        'paymentMethod' => 'setPaymentMethod',
        'user' => 'setUser',
        'originStatus' => 'setOriginStatus',
        'status' => 'setStatus',
        'grandTotal' => 'setGrandTotal',
        'subTotal' => 'setSubTotal',
        'taxTotal' => 'setTaxTotal',
        'discountedTotal' => 'setDiscountedTotal',
        'shipping' => 'setShipping',
        'orderId' => 'setOrderId',
        'orderDate' => 'setOrderDate',
        'versionId' => 'setVersionId',
        'aggregateId' => 'setAggregateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchaseArticles' => 'getPurchaseArticles',
        'codes' => 'getCodes',
        'shippingAddress' => 'getShippingAddress',
        'billingAddress' => 'getBillingAddress',
        'email' => 'getEmail',
        'paymentMethod' => 'getPaymentMethod',
        'user' => 'getUser',
        'originStatus' => 'getOriginStatus',
        'status' => 'getStatus',
        'grandTotal' => 'getGrandTotal',
        'subTotal' => 'getSubTotal',
        'taxTotal' => 'getTaxTotal',
        'discountedTotal' => 'getDiscountedTotal',
        'shipping' => 'getShipping',
        'orderId' => 'getOrderId',
        'orderDate' => 'getOrderDate',
        'versionId' => 'getVersionId',
        'aggregateId' => 'getAggregateId'
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

    const ORIGIN_STATUS_EMPTY = '';
    const ORIGIN_STATUS_READY_TO_IMPORT = 'ready_to_import';
    const ORIGIN_STATUS_IMPORTED = 'imported';
    const STATUS__NEW = 'new';
    const STATUS_PLACED = 'placed';
    const STATUS_PAYMENT_FAILED = 'payment_failed';
    const STATUS_PAYMENT_PENDING = 'payment_pending';
    const STATUS_PAYMENT_DONE = 'payment_done';
    const STATUS_SHIPPED = 'shipped';
    const STATUS_CANCELED = 'canceled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginStatusAllowableValues()
    {
        return [
            self::ORIGIN_STATUS_EMPTY,
            self::ORIGIN_STATUS_READY_TO_IMPORT,
            self::ORIGIN_STATUS_IMPORTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__NEW,
            self::STATUS_PLACED,
            self::STATUS_PAYMENT_FAILED,
            self::STATUS_PAYMENT_PENDING,
            self::STATUS_PAYMENT_DONE,
            self::STATUS_SHIPPED,
            self::STATUS_CANCELED,
        ];
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
        $this->container['purchaseArticles'] = isset($data['purchaseArticles']) ? $data['purchaseArticles'] : null;
        $this->container['codes'] = isset($data['codes']) ? $data['codes'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['originStatus'] = isset($data['originStatus']) ? $data['originStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['grandTotal'] = isset($data['grandTotal']) ? $data['grandTotal'] : null;
        $this->container['subTotal'] = isset($data['subTotal']) ? $data['subTotal'] : null;
        $this->container['taxTotal'] = isset($data['taxTotal']) ? $data['taxTotal'] : null;
        $this->container['discountedTotal'] = isset($data['discountedTotal']) ? $data['discountedTotal'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['orderDate'] = isset($data['orderDate']) ? $data['orderDate'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['aggregateId'] = isset($data['aggregateId']) ? $data['aggregateId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOriginStatusAllowableValues();
        if (!in_array($this->container['originStatus'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'originStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

        $allowedValues = $this->getOriginStatusAllowableValues();
        if (!in_array($this->container['originStatus'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets purchaseArticles
     *
     * @return \SSB\Api\Model\PurchaseArticle[]
     */
    public function getPurchaseArticles()
    {
        return $this->container['purchaseArticles'];
    }

    /**
     * Sets purchaseArticles
     *
     * @param \SSB\Api\Model\PurchaseArticle[] $purchaseArticles purchaseArticles
     *
     * @return $this
     */
    public function setPurchaseArticles($purchaseArticles)
    {
        $this->container['purchaseArticles'] = $purchaseArticles;

        return $this;
    }

    /**
     * Gets codes
     *
     * @return \SSB\Api\Model\Code[]
     */
    public function getCodes()
    {
        return $this->container['codes'];
    }

    /**
     * Sets codes
     *
     * @param \SSB\Api\Model\Code[] $codes codes
     *
     * @return $this
     */
    public function setCodes($codes)
    {
        $this->container['codes'] = $codes;

        return $this;
    }

    /**
     * Gets shippingAddress
     *
     * @return \SSB\Api\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     *
     * @param \SSB\Api\Model\Address $shippingAddress shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \SSB\Api\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \SSB\Api\Model\Address $billingAddress billingAddress
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param string $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets originStatus
     *
     * @return string
     */
    public function getOriginStatus()
    {
        return $this->container['originStatus'];
    }

    /**
     * Sets originStatus
     *
     * @param string $originStatus originStatus
     *
     * @return $this
     */
    public function setOriginStatus($originStatus)
    {
        $allowedValues = $this->getOriginStatusAllowableValues();
        if (!is_null($originStatus) && !in_array($originStatus, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'originStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['originStatus'] = $originStatus;

        return $this;
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
     * @param string $status The status of the Purchase
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets grandTotal
     *
     * @return \SSB\Api\Model\Money
     */
    public function getGrandTotal()
    {
        return $this->container['grandTotal'];
    }

    /**
     * Sets grandTotal
     *
     * @param \SSB\Api\Model\Money $grandTotal grandTotal
     *
     * @return $this
     */
    public function setGrandTotal($grandTotal)
    {
        $this->container['grandTotal'] = $grandTotal;

        return $this;
    }

    /**
     * Gets subTotal
     *
     * @return \SSB\Api\Model\Money
     */
    public function getSubTotal()
    {
        return $this->container['subTotal'];
    }

    /**
     * Sets subTotal
     *
     * @param \SSB\Api\Model\Money $subTotal subTotal
     *
     * @return $this
     */
    public function setSubTotal($subTotal)
    {
        $this->container['subTotal'] = $subTotal;

        return $this;
    }

    /**
     * Gets taxTotal
     *
     * @return \SSB\Api\Model\Money
     */
    public function getTaxTotal()
    {
        return $this->container['taxTotal'];
    }

    /**
     * Sets taxTotal
     *
     * @param \SSB\Api\Model\Money $taxTotal taxTotal
     *
     * @return $this
     */
    public function setTaxTotal($taxTotal)
    {
        $this->container['taxTotal'] = $taxTotal;

        return $this;
    }

    /**
     * Gets discountedTotal
     *
     * @return \SSB\Api\Model\Money
     */
    public function getDiscountedTotal()
    {
        return $this->container['discountedTotal'];
    }

    /**
     * Sets discountedTotal
     *
     * @param \SSB\Api\Model\Money $discountedTotal discountedTotal
     *
     * @return $this
     */
    public function setDiscountedTotal($discountedTotal)
    {
        $this->container['discountedTotal'] = $discountedTotal;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \SSB\Api\Model\Money
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \SSB\Api\Model\Money $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     *
     * @param \DateTime $orderDate orderDate
     *
     * @return $this
     */
    public function setOrderDate($orderDate)
    {
        $this->container['orderDate'] = $orderDate;

        return $this;
    }

    /**
     * Gets versionId
     *
     * @return int
     */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
     * Sets versionId
     *
     * @param int $versionId The version id of the object
     *
     * @return $this
     */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;

        return $this;
    }

    /**
     * Gets aggregateId
     *
     * @return string
     */
    public function getAggregateId()
    {
        return $this->container['aggregateId'];
    }

    /**
     * Sets aggregateId
     *
     * @param string $aggregateId The uuid v4 of the object
     *
     * @return $this
     */
    public function setAggregateId($aggregateId)
    {
        $this->container['aggregateId'] = $aggregateId;

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


