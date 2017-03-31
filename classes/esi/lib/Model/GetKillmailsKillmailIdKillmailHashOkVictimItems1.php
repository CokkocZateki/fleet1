<?php
/**
 * GetKillmailsKillmailIdKillmailHashOkVictimItems1
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
 * OpenAPI spec version: 0.4.1.dev1
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
 * GetKillmailsKillmailIdKillmailHashOkVictimItems1 Class Doc Comment
 *
 * @category    Class */
 // @description item object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetKillmailsKillmailIdKillmailHashOkVictimItems1 implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_killmails_killmail_id_killmail_hash_ok_victim_items_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'flag' => 'int',
        'item_type_id' => 'int',
        'items' => '\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOkVictimItems[]',
        'quantity_destroyed' => 'int',
        'quantity_dropped' => 'int',
        'singleton' => 'int'
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
        'flag' => 'flag',
        'item_type_id' => 'item_type_id',
        'items' => 'items',
        'quantity_destroyed' => 'quantity_destroyed',
        'quantity_dropped' => 'quantity_dropped',
        'singleton' => 'singleton'
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
        'flag' => 'setFlag',
        'item_type_id' => 'setItemTypeId',
        'items' => 'setItems',
        'quantity_destroyed' => 'setQuantityDestroyed',
        'quantity_dropped' => 'setQuantityDropped',
        'singleton' => 'setSingleton'
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
        'flag' => 'getFlag',
        'item_type_id' => 'getItemTypeId',
        'items' => 'getItems',
        'quantity_destroyed' => 'getQuantityDestroyed',
        'quantity_dropped' => 'getQuantityDropped',
        'singleton' => 'getSingleton'
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
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['item_type_id'] = isset($data['item_type_id']) ? $data['item_type_id'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['quantity_destroyed'] = isset($data['quantity_destroyed']) ? $data['quantity_destroyed'] : null;
        $this->container['quantity_dropped'] = isset($data['quantity_dropped']) ? $data['quantity_dropped'] : null;
        $this->container['singleton'] = isset($data['singleton']) ? $data['singleton'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['flag'] === null) {
            $invalid_properties[] = "'flag' can't be null";
        }
        if ($this->container['item_type_id'] === null) {
            $invalid_properties[] = "'item_type_id' can't be null";
        }
        if ($this->container['singleton'] === null) {
            $invalid_properties[] = "'singleton' can't be null";
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
        if ($this->container['flag'] === null) {
            return false;
        }
        if ($this->container['item_type_id'] === null) {
            return false;
        }
        if ($this->container['singleton'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets flag
     * @return int
     */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
     * Sets flag
     * @param int $flag Flag for the location of the item
     * @return $this
     */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;

        return $this;
    }

    /**
     * Gets item_type_id
     * @return int
     */
    public function getItemTypeId()
    {
        return $this->container['item_type_id'];
    }

    /**
     * Sets item_type_id
     * @param int $item_type_id item_type_id integer
     * @return $this
     */
    public function setItemTypeId($item_type_id)
    {
        $this->container['item_type_id'] = $item_type_id;

        return $this;
    }

    /**
     * Gets items
     * @return \Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOkVictimItems[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOkVictimItems[] $items items array
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets quantity_destroyed
     * @return int
     */
    public function getQuantityDestroyed()
    {
        return $this->container['quantity_destroyed'];
    }

    /**
     * Sets quantity_destroyed
     * @param int $quantity_destroyed How many of the item were destroyed if any
     * @return $this
     */
    public function setQuantityDestroyed($quantity_destroyed)
    {
        $this->container['quantity_destroyed'] = $quantity_destroyed;

        return $this;
    }

    /**
     * Gets quantity_dropped
     * @return int
     */
    public function getQuantityDropped()
    {
        return $this->container['quantity_dropped'];
    }

    /**
     * Sets quantity_dropped
     * @param int $quantity_dropped How many of the item were dropped if any
     * @return $this
     */
    public function setQuantityDropped($quantity_dropped)
    {
        $this->container['quantity_dropped'] = $quantity_dropped;

        return $this;
    }

    /**
     * Gets singleton
     * @return int
     */
    public function getSingleton()
    {
        return $this->container['singleton'];
    }

    /**
     * Sets singleton
     * @param int $singleton singleton integer
     * @return $this
     */
    public function setSingleton($singleton)
    {
        $this->container['singleton'] = $singleton;

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


