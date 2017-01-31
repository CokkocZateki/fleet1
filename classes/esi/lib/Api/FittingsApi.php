<?php
/**
 * FittingsApi
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
 * OpenAPI spec version: 0.3.9
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

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * FittingsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FittingsApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://esi.tech.ccp.is/latest');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return FittingsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteCharactersCharacterIdFittingsFittingId
     *
     * Delete fitting
     *
     * @param int $character_id ID for a character (required)
     * @param int $fitting_id ID for a fitting of this character (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteCharactersCharacterIdFittingsFittingId($character_id, $fitting_id, $datasource = null)
    {
        list($response) = $this->deleteCharactersCharacterIdFittingsFittingIdWithHttpInfo($character_id, $fitting_id, $datasource);
        return $response;
    }

    /**
     * Operation deleteCharactersCharacterIdFittingsFittingIdWithHttpInfo
     *
     * Delete fitting
     *
     * @param int $character_id ID for a character (required)
     * @param int $fitting_id ID for a fitting of this character (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteCharactersCharacterIdFittingsFittingIdWithHttpInfo($character_id, $fitting_id, $datasource = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling deleteCharactersCharacterIdFittingsFittingId');
        }
        // verify the required parameter 'fitting_id' is set
        if ($fitting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $fitting_id when calling deleteCharactersCharacterIdFittingsFittingId');
        }
        // parse inputs
        $resourcePath = "/characters/{character_id}/fittings/{fitting_id}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($character_id),
                $resourcePath
            );
        }
        // path params
        if ($fitting_id !== null) {
            $resourcePath = str_replace(
                "{" . "fitting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($fitting_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/characters/{character_id}/fittings/{fitting_id}/'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DeleteCharactersCharacterIdFittingsFittingIdForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DeleteCharactersCharacterIdFittingsFittingIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCharactersCharacterIdFittings
     *
     * Get fittings
     *
     * @param int $character_id ID for a character (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return \Swagger\Client\Model\GetCharactersCharacterIdFittings200Ok[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdFittings($character_id, $datasource = null)
    {
        list($response) = $this->getCharactersCharacterIdFittingsWithHttpInfo($character_id, $datasource);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdFittingsWithHttpInfo
     *
     * Get fittings
     *
     * @param int $character_id ID for a character (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return Array of \Swagger\Client\Model\GetCharactersCharacterIdFittings200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdFittingsWithHttpInfo($character_id, $datasource = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling getCharactersCharacterIdFittings');
        }
        // parse inputs
        $resourcePath = "/characters/{character_id}/fittings/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($character_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetCharactersCharacterIdFittings200Ok[]',
                '/characters/{character_id}/fittings/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetCharactersCharacterIdFittings200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdFittings200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdFittingsForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdFittingsInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postCharactersCharacterIdFittings
     *
     * Create fitting
     *
     * @param int $character_id ID for a character (required)
     * @param \Swagger\Client\Model\PostCharactersCharacterIdFittingsFitting $fitting Details about the new fitting (optional)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return \Swagger\Client\Model\PostCharactersCharacterIdFittingsCreated
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postCharactersCharacterIdFittings($character_id, $fitting = null, $datasource = null)
    {
        list($response) = $this->postCharactersCharacterIdFittingsWithHttpInfo($character_id, $fitting, $datasource);
        return $response;
    }

    /**
     * Operation postCharactersCharacterIdFittingsWithHttpInfo
     *
     * Create fitting
     *
     * @param int $character_id ID for a character (required)
     * @param \Swagger\Client\Model\PostCharactersCharacterIdFittingsFitting $fitting Details about the new fitting (optional)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return Array of \Swagger\Client\Model\PostCharactersCharacterIdFittingsCreated, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postCharactersCharacterIdFittingsWithHttpInfo($character_id, $fitting = null, $datasource = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling postCharactersCharacterIdFittings');
        }
        // parse inputs
        $resourcePath = "/characters/{character_id}/fittings/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($character_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($fitting)) {
            $_tempBody = $fitting;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\PostCharactersCharacterIdFittingsCreated',
                '/characters/{character_id}/fittings/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PostCharactersCharacterIdFittingsCreated', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PostCharactersCharacterIdFittingsCreated', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PostCharactersCharacterIdFittingsForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PostCharactersCharacterIdFittingsInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
