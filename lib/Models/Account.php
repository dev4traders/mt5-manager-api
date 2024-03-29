<?php
/**
 * Account
 *
 * PHP version 5
 *
 * @category Class
 * @package  D4T\MT5Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Metatrader 5 Rest Api
 *
 * MetaTrader5 Rest Api. Call /init/ to get token, which is required in other methods.
 *
 * OpenAPI spec version: 0.0.3-oas3
 * Contact: mikha.dev@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.52
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace D4T\MT5Sdk\Models;

use \ArrayAccess;
use \D4T\MT5Sdk\ObjectSerializer;

/**
 * Account Class Doc Comment
 *
 * @category Class
 * @package  D4T\MT5Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'login' => 'int',
        'balance' => 'float',
        'profit' => 'float',
        'blocked_profit' => 'float',
        'blocked_commission' => 'float',
        'leverage' => 'float',
        'volume' => 'float',
        'equity' => 'float',
        'margin' => 'float',
        'margin_free' => 'float',
        'margin_level' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'login' => null,
        'balance' => null,
        'profit' => null,
        'blocked_profit' => null,
        'blocked_commission' => null,
        'leverage' => null,
        'volume' => null,
        'equity' => null,
        'margin' => null,
        'margin_free' => null,
        'margin_level' => null
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
        'login' => 'login',
        'balance' => 'balance',
        'profit' => 'profit',
        'blocked_profit' => 'blocked_profit',
        'blocked_commission' => 'blocked_commission',
        'leverage' => 'leverage',
        'volume' => 'volume',
        'equity' => 'equity',
        'margin' => 'margin',
        'margin_free' => 'margin_free',
        'margin_level' => 'margin_level'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'login' => 'setLogin',
        'balance' => 'setBalance',
        'profit' => 'setProfit',
        'blocked_profit' => 'setBlockedProfit',
        'blocked_commission' => 'setBlockedCommission',
        'leverage' => 'setLeverage',
        'volume' => 'setVolume',
        'equity' => 'setEquity',
        'margin' => 'setMargin',
        'margin_free' => 'setMarginFree',
        'margin_level' => 'setMarginLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'login' => 'getLogin',
        'balance' => 'getBalance',
        'profit' => 'getProfit',
        'blocked_profit' => 'getBlockedProfit',
        'blocked_commission' => 'getBlockedCommission',
        'leverage' => 'getLeverage',
        'volume' => 'getVolume',
        'equity' => 'getEquity',
        'margin' => 'getMargin',
        'margin_free' => 'getMarginFree',
        'margin_level' => 'getMarginLevel'
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
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['profit'] = isset($data['profit']) ? $data['profit'] : null;
        $this->container['blocked_profit'] = isset($data['blocked_profit']) ? $data['blocked_profit'] : null;
        $this->container['blocked_commission'] = isset($data['blocked_commission']) ? $data['blocked_commission'] : null;
        $this->container['leverage'] = isset($data['leverage']) ? $data['leverage'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['equity'] = isset($data['equity']) ? $data['equity'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['margin_free'] = isset($data['margin_free']) ? $data['margin_free'] : null;
        $this->container['margin_level'] = isset($data['margin_level']) ? $data['margin_level'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['login'] === null) {
            $invalidProperties[] = "'login' can't be null";
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
     * Gets login
     *
     * @return int
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param int $login login
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets profit
     *
     * @return float
     */
    public function getProfit()
    {
        return $this->container['profit'];
    }

    /**
     * Sets profit
     *
     * @param float $profit profit
     *
     * @return $this
     */
    public function setProfit($profit)
    {
        $this->container['profit'] = $profit;

        return $this;
    }

    /**
     * Gets blocked_profit
     *
     * @return float
     */
    public function getBlockedProfit()
    {
        return $this->container['blocked_profit'];
    }

    /**
     * Sets blocked_profit
     *
     * @param float $blocked_profit blocked_profit
     *
     * @return $this
     */
    public function setBlockedProfit($blocked_profit)
    {
        $this->container['blocked_profit'] = $blocked_profit;

        return $this;
    }

    /**
     * Gets blocked_commission
     *
     * @return float
     */
    public function getBlockedCommission()
    {
        return $this->container['blocked_commission'];
    }

    /**
     * Sets blocked_commission
     *
     * @param float $blocked_commission blocked_commission
     *
     * @return $this
     */
    public function setBlockedCommission($blocked_commission)
    {
        $this->container['blocked_commission'] = $blocked_commission;

        return $this;
    }

    /**
     * Gets leverage
     *
     * @return float
     */
    public function getLeverage()
    {
        return $this->container['leverage'];
    }

    /**
     * Sets leverage
     *
     * @param float $leverage leverage
     *
     * @return $this
     */
    public function setLeverage($leverage)
    {
        $this->container['leverage'] = $leverage;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param float $volume volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets equity
     *
     * @return float
     */
    public function getEquity()
    {
        return $this->container['equity'];
    }

    /**
     * Sets equity
     *
     * @param float $equity equity
     *
     * @return $this
     */
    public function setEquity($equity)
    {
        $this->container['equity'] = $equity;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return float
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param float $margin margin
     *
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets margin_free
     *
     * @return float
     */
    public function getMarginFree()
    {
        return $this->container['margin_free'];
    }

    /**
     * Sets margin_free
     *
     * @param float $margin_free margin_free
     *
     * @return $this
     */
    public function setMarginFree($margin_free)
    {
        $this->container['margin_free'] = $margin_free;

        return $this;
    }

    /**
     * Gets margin_level
     *
     * @return float
     */
    public function getMarginLevel()
    {
        return $this->container['margin_level'];
    }

    /**
     * Sets margin_level
     *
     * @param float $margin_level margin_level
     *
     * @return $this
     */
    public function setMarginLevel($margin_level)
    {
        $this->container['margin_level'] = $margin_level;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
