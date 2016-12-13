<?php
/**
 * GetUniverseTypesTypeIdOk
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
 * GetUniverseTypesTypeIdOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseTypesTypeIdOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_types_type_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'category_id' => 'int',
        'graphic_id' => 'int',
        'group_id' => 'int',
        'icon_id' => 'int',
        'type_description' => 'string',
        'type_name' => 'string'
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
        'category_id' => 'category_id',
        'graphic_id' => 'graphic_id',
        'group_id' => 'group_id',
        'icon_id' => 'icon_id',
        'type_description' => 'type_description',
        'type_name' => 'type_name'
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
        'category_id' => 'setCategoryId',
        'graphic_id' => 'setGraphicId',
        'group_id' => 'setGroupId',
        'icon_id' => 'setIconId',
        'type_description' => 'setTypeDescription',
        'type_name' => 'setTypeName'
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
        'category_id' => 'getCategoryId',
        'graphic_id' => 'getGraphicId',
        'group_id' => 'getGroupId',
        'icon_id' => 'getIconId',
        'type_description' => 'getTypeDescription',
        'type_name' => 'getTypeName'
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
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['graphic_id'] = isset($data['graphic_id']) ? $data['graphic_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['icon_id'] = isset($data['icon_id']) ? $data['icon_id'] : null;
        $this->container['type_description'] = isset($data['type_description']) ? $data['type_description'] : null;
        $this->container['type_name'] = isset($data['type_name']) ? $data['type_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['category_id'] === null) {
            $invalid_properties[] = "'category_id' can't be null";
        }
        if ($this->container['group_id'] === null) {
            $invalid_properties[] = "'group_id' can't be null";
        }
        if ($this->container['type_description'] === null) {
            $invalid_properties[] = "'type_description' can't be null";
        }
        if ($this->container['type_name'] === null) {
            $invalid_properties[] = "'type_name' can't be null";
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
        if ($this->container['category_id'] === null) {
            return false;
        }
        if ($this->container['group_id'] === null) {
            return false;
        }
        if ($this->container['type_description'] === null) {
            return false;
        }
        if ($this->container['type_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets category_id
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     * @param int $category_id category_id integer
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets graphic_id
     * @return int
     */
    public function getGraphicId()
    {
        return $this->container['graphic_id'];
    }

    /**
     * Sets graphic_id
     * @param int $graphic_id graphic_id integer
     * @return $this
     */
    public function setGraphicId($graphic_id)
    {
        $this->container['graphic_id'] = $graphic_id;

        return $this;
    }

    /**
     * Gets group_id
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     * @param int $group_id group_id integer
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets icon_id
     * @return int
     */
    public function getIconId()
    {
        return $this->container['icon_id'];
    }

    /**
     * Sets icon_id
     * @param int $icon_id icon_id integer
     * @return $this
     */
    public function setIconId($icon_id)
    {
        $this->container['icon_id'] = $icon_id;

        return $this;
    }

    /**
     * Gets type_description
     * @return string
     */
    public function getTypeDescription()
    {
        return $this->container['type_description'];
    }

    /**
     * Sets type_description
     * @param string $type_description type_description string
     * @return $this
     */
    public function setTypeDescription($type_description)
    {
        $this->container['type_description'] = $type_description;

        return $this;
    }

    /**
     * Gets type_name
     * @return string
     */
    public function getTypeName()
    {
        return $this->container['type_name'];
    }

    /**
     * Sets type_name
     * @param string $type_name type_name string
     * @return $this
     */
    public function setTypeName($type_name)
    {
        $this->container['type_name'] = $type_name;

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


