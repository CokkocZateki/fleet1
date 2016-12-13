<?php
/**
 * GetMarketsRegionIdHistory200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.3.2.dev3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetMarketsRegionIdHistory200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetMarketsRegionIdHistory200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_markets_region_id_history_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'average' => 'float',
        'date' => '\DateTime',
        'highest' => 'float',
        'lowest' => 'float',
        'order_count' => 'int',
        'volume' => 'int'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'average' => 'average',
        'date' => 'date',
        'highest' => 'highest',
        'lowest' => 'lowest',
        'order_count' => 'order_count',
        'volume' => 'volume'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'average' => 'setAverage',
        'date' => 'setDate',
        'highest' => 'setHighest',
        'lowest' => 'setLowest',
        'order_count' => 'setOrderCount',
        'volume' => 'setVolume'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'average' => 'getAverage',
        'date' => 'getDate',
        'highest' => 'getHighest',
        'lowest' => 'getLowest',
        'order_count' => 'getOrderCount',
        'volume' => 'getVolume'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['average'] = isset($data['average']) ? $data['average'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['highest'] = isset($data['highest']) ? $data['highest'] : null;
        $this->container['lowest'] = isset($data['lowest']) ? $data['lowest'] : null;
        $this->container['order_count'] = isset($data['order_count']) ? $data['order_count'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['average'] === null) {
            $invalid_properties[] = "'average' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalid_properties[] = "'date' can't be null";
        }
        if ($this->container['highest'] === null) {
            $invalid_properties[] = "'highest' can't be null";
        }
        if ($this->container['lowest'] === null) {
            $invalid_properties[] = "'lowest' can't be null";
        }
        if ($this->container['order_count'] === null) {
            $invalid_properties[] = "'order_count' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalid_properties[] = "'volume' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['average'] === null) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['highest'] === null) {
            return false;
        }
        if ($this->container['lowest'] === null) {
            return false;
        }
        if ($this->container['order_count'] === null) {
            return false;
        }
        if ($this->container['volume'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets average
     * @return float
     */
    public function getAverage()
    {
        return $this->container['average'];
    }

    /**
     * Sets average
     * @param float $average average number
     * @return $this
     */
    public function setAverage($average)
    {
        $this->container['average'] = $average;

        return $this;
    }

    /**
     * Gets date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param \DateTime $date The date of this historical statistic entry
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets highest
     * @return float
     */
    public function getHighest()
    {
        return $this->container['highest'];
    }

    /**
     * Sets highest
     * @param float $highest highest number
     * @return $this
     */
    public function setHighest($highest)
    {
        $this->container['highest'] = $highest;

        return $this;
    }

    /**
     * Gets lowest
     * @return float
     */
    public function getLowest()
    {
        return $this->container['lowest'];
    }

    /**
     * Sets lowest
     * @param float $lowest lowest number
     * @return $this
     */
    public function setLowest($lowest)
    {
        $this->container['lowest'] = $lowest;

        return $this;
    }

    /**
     * Gets order_count
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     * @param int $order_count Total number of orders happened that day
     * @return $this
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets volume
     * @return int
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     * @param int $volume Total
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


