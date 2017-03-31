<?php
/**
 * GetCharactersCharacterIdPlanetsPlanetIdOkLinks
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
 * GetCharactersCharacterIdPlanetsPlanetIdOkLinks Class Doc Comment
 *
 * @category    Class */
 // @description link object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdPlanetsPlanetIdOkLinks implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_planets_planet_id_ok_links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'destination_pin_id' => 'int',
        'link_level' => 'int',
        'source_pin_id' => 'int'
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
        'destination_pin_id' => 'destination_pin_id',
        'link_level' => 'link_level',
        'source_pin_id' => 'source_pin_id'
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
        'destination_pin_id' => 'setDestinationPinId',
        'link_level' => 'setLinkLevel',
        'source_pin_id' => 'setSourcePinId'
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
        'destination_pin_id' => 'getDestinationPinId',
        'link_level' => 'getLinkLevel',
        'source_pin_id' => 'getSourcePinId'
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
        $this->container['destination_pin_id'] = isset($data['destination_pin_id']) ? $data['destination_pin_id'] : null;
        $this->container['link_level'] = isset($data['link_level']) ? $data['link_level'] : null;
        $this->container['source_pin_id'] = isset($data['source_pin_id']) ? $data['source_pin_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['destination_pin_id'] === null) {
            $invalid_properties[] = "'destination_pin_id' can't be null";
        }
        if ($this->container['link_level'] === null) {
            $invalid_properties[] = "'link_level' can't be null";
        }
        if (($this->container['link_level'] > 10.0)) {
            $invalid_properties[] = "invalid value for 'link_level', must be smaller than or equal to 10.0.";
        }

        if (($this->container['link_level'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'link_level', must be bigger than or equal to 0.0.";
        }

        if ($this->container['source_pin_id'] === null) {
            $invalid_properties[] = "'source_pin_id' can't be null";
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
        if ($this->container['destination_pin_id'] === null) {
            return false;
        }
        if ($this->container['link_level'] === null) {
            return false;
        }
        if ($this->container['link_level'] > 10.0) {
            return false;
        }
        if ($this->container['link_level'] < 0.0) {
            return false;
        }
        if ($this->container['source_pin_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets destination_pin_id
     * @return int
     */
    public function getDestinationPinId()
    {
        return $this->container['destination_pin_id'];
    }

    /**
     * Sets destination_pin_id
     * @param int $destination_pin_id destination_pin_id integer
     * @return $this
     */
    public function setDestinationPinId($destination_pin_id)
    {
        $this->container['destination_pin_id'] = $destination_pin_id;

        return $this;
    }

    /**
     * Gets link_level
     * @return int
     */
    public function getLinkLevel()
    {
        return $this->container['link_level'];
    }

    /**
     * Sets link_level
     * @param int $link_level link_level integer
     * @return $this
     */
    public function setLinkLevel($link_level)
    {

        if ($link_level > 10.0) {
            throw new \InvalidArgumentException('invalid value for $link_level when calling GetCharactersCharacterIdPlanetsPlanetIdOkLinks., must be smaller than or equal to 10.0.');
        }
        if ($link_level < 0.0) {
            throw new \InvalidArgumentException('invalid value for $link_level when calling GetCharactersCharacterIdPlanetsPlanetIdOkLinks., must be bigger than or equal to 0.0.');
        }
        $this->container['link_level'] = $link_level;

        return $this;
    }

    /**
     * Gets source_pin_id
     * @return int
     */
    public function getSourcePinId()
    {
        return $this->container['source_pin_id'];
    }

    /**
     * Sets source_pin_id
     * @param int $source_pin_id source_pin_id integer
     * @return $this
     */
    public function setSourcePinId($source_pin_id)
    {
        $this->container['source_pin_id'] = $source_pin_id;

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


