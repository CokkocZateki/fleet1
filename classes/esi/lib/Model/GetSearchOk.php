<?php
/**
 * GetSearchOk
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
 * GetSearchOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetSearchOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_search_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'agent' => 'int[]',
        'alliance' => 'int[]',
        'character' => 'int[]',
        'constellation' => 'int[]',
        'corporation' => 'int[]',
        'faction' => 'int[]',
        'inventorytype' => 'int[]',
        'region' => 'int[]',
        'solarsystem' => 'int[]',
        'station' => 'int[]',
        'wormhole' => 'int[]'
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
        'agent' => 'agent',
        'alliance' => 'alliance',
        'character' => 'character',
        'constellation' => 'constellation',
        'corporation' => 'corporation',
        'faction' => 'faction',
        'inventorytype' => 'inventorytype',
        'region' => 'region',
        'solarsystem' => 'solarsystem',
        'station' => 'station',
        'wormhole' => 'wormhole'
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
        'agent' => 'setAgent',
        'alliance' => 'setAlliance',
        'character' => 'setCharacter',
        'constellation' => 'setConstellation',
        'corporation' => 'setCorporation',
        'faction' => 'setFaction',
        'inventorytype' => 'setInventorytype',
        'region' => 'setRegion',
        'solarsystem' => 'setSolarsystem',
        'station' => 'setStation',
        'wormhole' => 'setWormhole'
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
        'agent' => 'getAgent',
        'alliance' => 'getAlliance',
        'character' => 'getCharacter',
        'constellation' => 'getConstellation',
        'corporation' => 'getCorporation',
        'faction' => 'getFaction',
        'inventorytype' => 'getInventorytype',
        'region' => 'getRegion',
        'solarsystem' => 'getSolarsystem',
        'station' => 'getStation',
        'wormhole' => 'getWormhole'
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
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['alliance'] = isset($data['alliance']) ? $data['alliance'] : null;
        $this->container['character'] = isset($data['character']) ? $data['character'] : null;
        $this->container['constellation'] = isset($data['constellation']) ? $data['constellation'] : null;
        $this->container['corporation'] = isset($data['corporation']) ? $data['corporation'] : null;
        $this->container['faction'] = isset($data['faction']) ? $data['faction'] : null;
        $this->container['inventorytype'] = isset($data['inventorytype']) ? $data['inventorytype'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['solarsystem'] = isset($data['solarsystem']) ? $data['solarsystem'] : null;
        $this->container['station'] = isset($data['station']) ? $data['station'] : null;
        $this->container['wormhole'] = isset($data['wormhole']) ? $data['wormhole'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets agent
     * @return int[]
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     * @param int[] $agent agent array
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets alliance
     * @return int[]
     */
    public function getAlliance()
    {
        return $this->container['alliance'];
    }

    /**
     * Sets alliance
     * @param int[] $alliance alliance array
     * @return $this
     */
    public function setAlliance($alliance)
    {
        $this->container['alliance'] = $alliance;

        return $this;
    }

    /**
     * Gets character
     * @return int[]
     */
    public function getCharacter()
    {
        return $this->container['character'];
    }

    /**
     * Sets character
     * @param int[] $character character array
     * @return $this
     */
    public function setCharacter($character)
    {
        $this->container['character'] = $character;

        return $this;
    }

    /**
     * Gets constellation
     * @return int[]
     */
    public function getConstellation()
    {
        return $this->container['constellation'];
    }

    /**
     * Sets constellation
     * @param int[] $constellation constellation array
     * @return $this
     */
    public function setConstellation($constellation)
    {
        $this->container['constellation'] = $constellation;

        return $this;
    }

    /**
     * Gets corporation
     * @return int[]
     */
    public function getCorporation()
    {
        return $this->container['corporation'];
    }

    /**
     * Sets corporation
     * @param int[] $corporation corporation array
     * @return $this
     */
    public function setCorporation($corporation)
    {
        $this->container['corporation'] = $corporation;

        return $this;
    }

    /**
     * Gets faction
     * @return int[]
     */
    public function getFaction()
    {
        return $this->container['faction'];
    }

    /**
     * Sets faction
     * @param int[] $faction faction array
     * @return $this
     */
    public function setFaction($faction)
    {
        $this->container['faction'] = $faction;

        return $this;
    }

    /**
     * Gets inventorytype
     * @return int[]
     */
    public function getInventorytype()
    {
        return $this->container['inventorytype'];
    }

    /**
     * Sets inventorytype
     * @param int[] $inventorytype inventorytype array
     * @return $this
     */
    public function setInventorytype($inventorytype)
    {
        $this->container['inventorytype'] = $inventorytype;

        return $this;
    }

    /**
     * Gets region
     * @return int[]
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param int[] $region region array
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets solarsystem
     * @return int[]
     */
    public function getSolarsystem()
    {
        return $this->container['solarsystem'];
    }

    /**
     * Sets solarsystem
     * @param int[] $solarsystem solarsystem array
     * @return $this
     */
    public function setSolarsystem($solarsystem)
    {
        $this->container['solarsystem'] = $solarsystem;

        return $this;
    }

    /**
     * Gets station
     * @return int[]
     */
    public function getStation()
    {
        return $this->container['station'];
    }

    /**
     * Sets station
     * @param int[] $station station array
     * @return $this
     */
    public function setStation($station)
    {
        $this->container['station'] = $station;

        return $this;
    }

    /**
     * Gets wormhole
     * @return int[]
     */
    public function getWormhole()
    {
        return $this->container['wormhole'];
    }

    /**
     * Sets wormhole
     * @param int[] $wormhole wormhole array
     * @return $this
     */
    public function setWormhole($wormhole)
    {
        $this->container['wormhole'] = $wormhole;

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


