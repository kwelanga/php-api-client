<?php
/**
 * FetchedStore
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  KwelangaAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Kwelanga Online Solutions
 *
 * OpenAPI for Kwelanga Online Solutions
 *
 * The version of the OpenAPI document: 1.0
 * Contact: info@kwelangasolutions.co.za
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KwelangaAPI\Model;

use \ArrayAccess;
use \KwelangaAPI\ObjectSerializer;

/**
 * FetchedStore Class Doc Comment
 *
 * @category Class
 * @package  KwelangaAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FetchedStore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FetchedStore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'deliver_name' => 'string',
        'deliver_add1' => 'string',
        'deliver_add2' => 'string',
        'deliver_add3' => 'string',
        'bill_name' => 'string',
        'bill_add1' => 'string',
        'bill_add2' => 'string',
        'bill_add3' => 'string',
        'principal_chain_uid' => 'float',
        'branch_code' => 'string',
        'tel_no1' => 'string',
        'tel_no2' => 'string',
        'email_add1' => 'string',
        'email_add2' => 'string',
        'depot_uid' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'deliver_name' => null,
        'deliver_add1' => null,
        'deliver_add2' => null,
        'deliver_add3' => null,
        'bill_name' => null,
        'bill_add1' => null,
        'bill_add2' => null,
        'bill_add3' => null,
        'principal_chain_uid' => null,
        'branch_code' => null,
        'tel_no1' => null,
        'tel_no2' => null,
        'email_add1' => null,
        'email_add2' => null,
        'depot_uid' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'deliver_name' => 'deliver_name',
        'deliver_add1' => 'deliver_add1',
        'deliver_add2' => 'deliver_add2',
        'deliver_add3' => 'deliver_add3',
        'bill_name' => 'bill_name',
        'bill_add1' => 'bill_add1',
        'bill_add2' => 'bill_add2',
        'bill_add3' => 'bill_add3',
        'principal_chain_uid' => 'principal_chain_uid',
        'branch_code' => 'branch_code',
        'tel_no1' => 'tel_no1',
        'tel_no2' => 'tel_no2',
        'email_add1' => 'email_add1',
        'email_add2' => 'email_add2',
        'depot_uid' => 'depot_uid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'deliver_name' => 'setDeliverName',
        'deliver_add1' => 'setDeliverAdd1',
        'deliver_add2' => 'setDeliverAdd2',
        'deliver_add3' => 'setDeliverAdd3',
        'bill_name' => 'setBillName',
        'bill_add1' => 'setBillAdd1',
        'bill_add2' => 'setBillAdd2',
        'bill_add3' => 'setBillAdd3',
        'principal_chain_uid' => 'setPrincipalChainUid',
        'branch_code' => 'setBranchCode',
        'tel_no1' => 'setTelNo1',
        'tel_no2' => 'setTelNo2',
        'email_add1' => 'setEmailAdd1',
        'email_add2' => 'setEmailAdd2',
        'depot_uid' => 'setDepotUid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'deliver_name' => 'getDeliverName',
        'deliver_add1' => 'getDeliverAdd1',
        'deliver_add2' => 'getDeliverAdd2',
        'deliver_add3' => 'getDeliverAdd3',
        'bill_name' => 'getBillName',
        'bill_add1' => 'getBillAdd1',
        'bill_add2' => 'getBillAdd2',
        'bill_add3' => 'getBillAdd3',
        'principal_chain_uid' => 'getPrincipalChainUid',
        'branch_code' => 'getBranchCode',
        'tel_no1' => 'getTelNo1',
        'tel_no2' => 'getTelNo2',
        'email_add1' => 'getEmailAdd1',
        'email_add2' => 'getEmailAdd2',
        'depot_uid' => 'getDepotUid'
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
        return self::$openAPIModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['deliver_name'] = isset($data['deliver_name']) ? $data['deliver_name'] : null;
        $this->container['deliver_add1'] = isset($data['deliver_add1']) ? $data['deliver_add1'] : null;
        $this->container['deliver_add2'] = isset($data['deliver_add2']) ? $data['deliver_add2'] : null;
        $this->container['deliver_add3'] = isset($data['deliver_add3']) ? $data['deliver_add3'] : null;
        $this->container['bill_name'] = isset($data['bill_name']) ? $data['bill_name'] : null;
        $this->container['bill_add1'] = isset($data['bill_add1']) ? $data['bill_add1'] : null;
        $this->container['bill_add2'] = isset($data['bill_add2']) ? $data['bill_add2'] : null;
        $this->container['bill_add3'] = isset($data['bill_add3']) ? $data['bill_add3'] : null;
        $this->container['principal_chain_uid'] = isset($data['principal_chain_uid']) ? $data['principal_chain_uid'] : null;
        $this->container['branch_code'] = isset($data['branch_code']) ? $data['branch_code'] : null;
        $this->container['tel_no1'] = isset($data['tel_no1']) ? $data['tel_no1'] : null;
        $this->container['tel_no2'] = isset($data['tel_no2']) ? $data['tel_no2'] : null;
        $this->container['email_add1'] = isset($data['email_add1']) ? $data['email_add1'] : null;
        $this->container['email_add2'] = isset($data['email_add2']) ? $data['email_add2'] : null;
        $this->container['depot_uid'] = isset($data['depot_uid']) ? $data['depot_uid'] : null;
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
     * Gets id
     *
     * @return float|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets deliver_name
     *
     * @return string|null
     */
    public function getDeliverName()
    {
        return $this->container['deliver_name'];
    }

    /**
     * Sets deliver_name
     *
     * @param string|null $deliver_name deliver_name
     *
     * @return $this
     */
    public function setDeliverName($deliver_name)
    {
        $this->container['deliver_name'] = $deliver_name;

        return $this;
    }

    /**
     * Gets deliver_add1
     *
     * @return string|null
     */
    public function getDeliverAdd1()
    {
        return $this->container['deliver_add1'];
    }

    /**
     * Sets deliver_add1
     *
     * @param string|null $deliver_add1 deliver_add1
     *
     * @return $this
     */
    public function setDeliverAdd1($deliver_add1)
    {
        $this->container['deliver_add1'] = $deliver_add1;

        return $this;
    }

    /**
     * Gets deliver_add2
     *
     * @return string|null
     */
    public function getDeliverAdd2()
    {
        return $this->container['deliver_add2'];
    }

    /**
     * Sets deliver_add2
     *
     * @param string|null $deliver_add2 deliver_add2
     *
     * @return $this
     */
    public function setDeliverAdd2($deliver_add2)
    {
        $this->container['deliver_add2'] = $deliver_add2;

        return $this;
    }

    /**
     * Gets deliver_add3
     *
     * @return string|null
     */
    public function getDeliverAdd3()
    {
        return $this->container['deliver_add3'];
    }

    /**
     * Sets deliver_add3
     *
     * @param string|null $deliver_add3 deliver_add3
     *
     * @return $this
     */
    public function setDeliverAdd3($deliver_add3)
    {
        $this->container['deliver_add3'] = $deliver_add3;

        return $this;
    }

    /**
     * Gets bill_name
     *
     * @return string|null
     */
    public function getBillName()
    {
        return $this->container['bill_name'];
    }

    /**
     * Sets bill_name
     *
     * @param string|null $bill_name bill_name
     *
     * @return $this
     */
    public function setBillName($bill_name)
    {
        $this->container['bill_name'] = $bill_name;

        return $this;
    }

    /**
     * Gets bill_add1
     *
     * @return string|null
     */
    public function getBillAdd1()
    {
        return $this->container['bill_add1'];
    }

    /**
     * Sets bill_add1
     *
     * @param string|null $bill_add1 bill_add1
     *
     * @return $this
     */
    public function setBillAdd1($bill_add1)
    {
        $this->container['bill_add1'] = $bill_add1;

        return $this;
    }

    /**
     * Gets bill_add2
     *
     * @return string|null
     */
    public function getBillAdd2()
    {
        return $this->container['bill_add2'];
    }

    /**
     * Sets bill_add2
     *
     * @param string|null $bill_add2 bill_add2
     *
     * @return $this
     */
    public function setBillAdd2($bill_add2)
    {
        $this->container['bill_add2'] = $bill_add2;

        return $this;
    }

    /**
     * Gets bill_add3
     *
     * @return string|null
     */
    public function getBillAdd3()
    {
        return $this->container['bill_add3'];
    }

    /**
     * Sets bill_add3
     *
     * @param string|null $bill_add3 bill_add3
     *
     * @return $this
     */
    public function setBillAdd3($bill_add3)
    {
        $this->container['bill_add3'] = $bill_add3;

        return $this;
    }

    /**
     * Gets principal_chain_uid
     *
     * @return float|null
     */
    public function getPrincipalChainUid()
    {
        return $this->container['principal_chain_uid'];
    }

    /**
     * Sets principal_chain_uid
     *
     * @param float|null $principal_chain_uid principal_chain_uid
     *
     * @return $this
     */
    public function setPrincipalChainUid($principal_chain_uid)
    {
        $this->container['principal_chain_uid'] = $principal_chain_uid;

        return $this;
    }

    /**
     * Gets branch_code
     *
     * @return string|null
     */
    public function getBranchCode()
    {
        return $this->container['branch_code'];
    }

    /**
     * Sets branch_code
     *
     * @param string|null $branch_code branch_code
     *
     * @return $this
     */
    public function setBranchCode($branch_code)
    {
        $this->container['branch_code'] = $branch_code;

        return $this;
    }

    /**
     * Gets tel_no1
     *
     * @return string|null
     */
    public function getTelNo1()
    {
        return $this->container['tel_no1'];
    }

    /**
     * Sets tel_no1
     *
     * @param string|null $tel_no1 tel_no1
     *
     * @return $this
     */
    public function setTelNo1($tel_no1)
    {
        $this->container['tel_no1'] = $tel_no1;

        return $this;
    }

    /**
     * Gets tel_no2
     *
     * @return string|null
     */
    public function getTelNo2()
    {
        return $this->container['tel_no2'];
    }

    /**
     * Sets tel_no2
     *
     * @param string|null $tel_no2 tel_no2
     *
     * @return $this
     */
    public function setTelNo2($tel_no2)
    {
        $this->container['tel_no2'] = $tel_no2;

        return $this;
    }

    /**
     * Gets email_add1
     *
     * @return string|null
     */
    public function getEmailAdd1()
    {
        return $this->container['email_add1'];
    }

    /**
     * Sets email_add1
     *
     * @param string|null $email_add1 email_add1
     *
     * @return $this
     */
    public function setEmailAdd1($email_add1)
    {
        $this->container['email_add1'] = $email_add1;

        return $this;
    }

    /**
     * Gets email_add2
     *
     * @return string|null
     */
    public function getEmailAdd2()
    {
        return $this->container['email_add2'];
    }

    /**
     * Sets email_add2
     *
     * @param string|null $email_add2 email_add2
     *
     * @return $this
     */
    public function setEmailAdd2($email_add2)
    {
        $this->container['email_add2'] = $email_add2;

        return $this;
    }

    /**
     * Gets depot_uid
     *
     * @return float|null
     */
    public function getDepotUid()
    {
        return $this->container['depot_uid'];
    }

    /**
     * Sets depot_uid
     *
     * @param float|null $depot_uid depot_uid
     *
     * @return $this
     */
    public function setDepotUid($depot_uid)
    {
        $this->container['depot_uid'] = $depot_uid;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


