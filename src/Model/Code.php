<?php
/**
 * Code
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
 * Code Class Doc Comment
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Code implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Code';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'status' => 'string',
        'note' => 'string',
        'codepoolId' => 'int',
        'validation' => '\SSB\Api\Model\Validation[]',
        'usages' => 'string',
        'usagesRaw' => '\SSB\Api\Model\Usages',
        'conditionSetActive' => '\SSB\Api\Model\ConditionSet',
        'conditionSetName' => 'string',
        'conditionSetId' => 'string',
        'codepoolName' => 'string',
        'updatedAt' => '\DateTime',
        'versionId' => 'int',
        'aggregateId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'status' => null,
        'note' => null,
        'codepoolId' => null,
        'validation' => null,
        'usages' => null,
        'usagesRaw' => null,
        'conditionSetActive' => null,
        'conditionSetName' => null,
        'conditionSetId' => null,
        'codepoolName' => null,
        'updatedAt' => 'date-time',
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
        'code' => 'code',
        'status' => 'status',
        'note' => 'note',
        'codepoolId' => 'codepoolId',
        'validation' => 'validation',
        'usages' => 'usages',
        'usagesRaw' => 'usagesRaw',
        'conditionSetActive' => 'conditionSetActive',
        'conditionSetName' => 'conditionSetName',
        'conditionSetId' => 'conditionSetId',
        'codepoolName' => 'codepoolName',
        'updatedAt' => 'updatedAt',
        'versionId' => 'versionId',
        'aggregateId' => 'aggregateId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'status' => 'setStatus',
        'note' => 'setNote',
        'codepoolId' => 'setCodepoolId',
        'validation' => 'setValidation',
        'usages' => 'setUsages',
        'usagesRaw' => 'setUsagesRaw',
        'conditionSetActive' => 'setConditionSetActive',
        'conditionSetName' => 'setConditionSetName',
        'conditionSetId' => 'setConditionSetId',
        'codepoolName' => 'setCodepoolName',
        'updatedAt' => 'setUpdatedAt',
        'versionId' => 'setVersionId',
        'aggregateId' => 'setAggregateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'status' => 'getStatus',
        'note' => 'getNote',
        'codepoolId' => 'getCodepoolId',
        'validation' => 'getValidation',
        'usages' => 'getUsages',
        'usagesRaw' => 'getUsagesRaw',
        'conditionSetActive' => 'getConditionSetActive',
        'conditionSetName' => 'getConditionSetName',
        'conditionSetId' => 'getConditionSetId',
        'codepoolName' => 'getCodepoolName',
        'updatedAt' => 'getUpdatedAt',
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

    const STATUS_ENABLED = 'enabled';
    const STATUS_DISABLED = 'disabled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED,
            self::STATUS_DISABLED,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['codepoolId'] = isset($data['codepoolId']) ? $data['codepoolId'] : null;
        $this->container['validation'] = isset($data['validation']) ? $data['validation'] : null;
        $this->container['usages'] = isset($data['usages']) ? $data['usages'] : null;
        $this->container['usagesRaw'] = isset($data['usagesRaw']) ? $data['usagesRaw'] : null;
        $this->container['conditionSetActive'] = isset($data['conditionSetActive']) ? $data['conditionSetActive'] : null;
        $this->container['conditionSetName'] = isset($data['conditionSetName']) ? $data['conditionSetName'] : null;
        $this->container['conditionSetId'] = isset($data['conditionSetId']) ? $data['conditionSetId'] : null;
        $this->container['codepoolName'] = isset($data['codepoolName']) ? $data['codepoolName'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        return true;
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
     * @param string $code The code of the code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param string $status The status of the code
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
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note A note to the code
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets codepoolId
     *
     * @return int
     */
    public function getCodepoolId()
    {
        return $this->container['codepoolId'];
    }

    /**
     * Sets codepoolId
     *
     * @param int $codepoolId The assigned codepool id
     *
     * @return $this
     */
    public function setCodepoolId($codepoolId)
    {
        $this->container['codepoolId'] = $codepoolId;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return \SSB\Api\Model\Validation[]
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param \SSB\Api\Model\Validation[] $validation validation
     *
     * @return $this
     */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;

        return $this;
    }

    /**
     * Gets usages
     *
     * @return string
     */
    public function getUsages()
    {
        return $this->container['usages'];
    }

    /**
     * Sets usages
     *
     * @param string $usages usages
     *
     * @return $this
     */
    public function setUsages($usages)
    {
        $this->container['usages'] = $usages;

        return $this;
    }

    /**
     * Gets usagesRaw
     *
     * @return \SSB\Api\Model\Usages
     */
    public function getUsagesRaw()
    {
        return $this->container['usagesRaw'];
    }

    /**
     * Sets usagesRaw
     *
     * @param \SSB\Api\Model\Usages $usagesRaw usagesRaw
     *
     * @return $this
     */
    public function setUsagesRaw($usagesRaw)
    {
        $this->container['usagesRaw'] = $usagesRaw;

        return $this;
    }

    /**
     * Gets conditionSetActive
     *
     * @return \SSB\Api\Model\ConditionSet
     */
    public function getConditionSetActive()
    {
        return $this->container['conditionSetActive'];
    }

    /**
     * Sets conditionSetActive
     *
     * @param \SSB\Api\Model\ConditionSet $conditionSetActive conditionSetActive
     *
     * @return $this
     */
    public function setConditionSetActive($conditionSetActive)
    {
        $this->container['conditionSetActive'] = $conditionSetActive;

        return $this;
    }

    /**
     * Gets conditionSetName
     *
     * @return string
     */
    public function getConditionSetName()
    {
        return $this->container['conditionSetName'];
    }

    /**
     * Sets conditionSetName
     *
     * @param string $conditionSetName conditionSetName
     *
     * @return $this
     */
    public function setConditionSetName($conditionSetName)
    {
        $this->container['conditionSetName'] = $conditionSetName;

        return $this;
    }

    /**
     * Gets conditionSetId
     *
     * @return string
     */
    public function getConditionSetId()
    {
        return $this->container['conditionSetId'];
    }

    /**
     * Sets conditionSetId
     *
     * @param string $conditionSetId conditionSetId
     *
     * @return $this
     */
    public function setConditionSetId($conditionSetId)
    {
        $this->container['conditionSetId'] = $conditionSetId;

        return $this;
    }

    /**
     * Gets codepoolName
     *
     * @return string
     */
    public function getCodepoolName()
    {
        return $this->container['codepoolName'];
    }

    /**
     * Sets codepoolName
     *
     * @param string $codepoolName codepoolName
     *
     * @return $this
     */
    public function setCodepoolName($codepoolName)
    {
        $this->container['codepoolName'] = $codepoolName;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime $updatedAt updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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


