<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/cx/v3/entity_type.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\Cx\V3\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\Cx\V3\CreateEntityTypeRequest;
use Google\Cloud\Dialogflow\Cx\V3\DeleteEntityTypeRequest;
use Google\Cloud\Dialogflow\Cx\V3\EntityType;
use Google\Cloud\Dialogflow\Cx\V3\GetEntityTypeRequest;
use Google\Cloud\Dialogflow\Cx\V3\ListEntityTypesRequest;
use Google\Cloud\Dialogflow\Cx\V3\ListEntityTypesResponse;
use Google\Cloud\Dialogflow\Cx\V3\UpdateEntityTypeRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\ListLocationsResponse;
use Google\Cloud\Location\Location;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for managing [EntityTypes][google.cloud.dialogflow.cx.v3.EntityType].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $entityTypesClient = new EntityTypesClient();
 * try {
 *     $formattedParent = $entityTypesClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
 *     $entityType = new EntityType();
 *     $response = $entityTypesClient->createEntityType($formattedParent, $entityType);
 * } finally {
 *     $entityTypesClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @deprecated This class will be removed in the next major version update.
 */
class EntityTypesGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.dialogflow.cx.v3.EntityTypes';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dialogflow.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private static $agentNameTemplate;

    private static $entityTypeNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/entity_types_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/entity_types_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/entity_types_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/entity_types_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getAgentNameTemplate()
    {
        if (self::$agentNameTemplate == null) {
            self::$agentNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}');
        }

        return self::$agentNameTemplate;
    }

    private static function getEntityTypeNameTemplate()
    {
        if (self::$entityTypeNameTemplate == null) {
            self::$entityTypeNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/entityTypes/{entity_type}');
        }

        return self::$entityTypeNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'agent' => self::getAgentNameTemplate(),
                'entityType' => self::getEntityTypeNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a agent
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     *
     * @return string The formatted agent resource.
     */
    public static function agentName($project, $location, $agent)
    {
        return self::getAgentNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a entity_type
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $entityType
     *
     * @return string The formatted entity_type resource.
     */
    public static function entityTypeName($project, $location, $agent, $entityType)
    {
        return self::getEntityTypeNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'entity_type' => $entityType,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agent: projects/{project}/locations/{location}/agents/{agent}
     * - entityType: projects/{project}/locations/{location}/agents/{agent}/entityTypes/{entity_type}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates an entity type in the specified agent.
     *
     * Note: You should always train a flow prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/cx/docs/concept/training).
     *
     * Sample code:
     * ```
     * $entityTypesClient = new EntityTypesClient();
     * try {
     *     $formattedParent = $entityTypesClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
     *     $entityType = new EntityType();
     *     $response = $entityTypesClient->createEntityType($formattedParent, $entityType);
     * } finally {
     *     $entityTypesClient->close();
     * }
     * ```
     *
     * @param string     $parent       Required. The agent to create a entity type for.
     *                                 Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     * @param EntityType $entityType   Required. The entity type to create.
     * @param array      $optionalArgs {
     *     Optional.
     *
     *     @type string $languageCode
     *           The language of the following fields in `entity_type`:
     *
     *           *   `EntityType.entities.value`
     *           *   `EntityType.entities.synonyms`
     *           *   `EntityType.excluded_phrases.value`
     *
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\EntityType
     *
     * @throws ApiException if the remote call fails
     */
    public function createEntityType($parent, $entityType, array $optionalArgs = [])
    {
        $request = new CreateEntityTypeRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setEntityType($entityType);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateEntityType', EntityType::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes the specified entity type.
     *
     * Note: You should always train a flow prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/cx/docs/concept/training).
     *
     * Sample code:
     * ```
     * $entityTypesClient = new EntityTypesClient();
     * try {
     *     $formattedName = $entityTypesClient->entityTypeName('[PROJECT]', '[LOCATION]', '[AGENT]', '[ENTITY_TYPE]');
     *     $entityTypesClient->deleteEntityType($formattedName);
     * } finally {
     *     $entityTypesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the entity type to delete.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/entityTypes/<Entity Type ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type bool $force
     *           This field has no effect for entity type not being used.
     *           For entity types that are used by intents or pages:
     *
     *           *  If `force` is set to false, an error will be returned with message
     *           indicating the referencing resources.
     *           *  If `force` is set to true, Dialogflow will remove the entity type, as
     *           well as any references to the entity type (i.e. Page
     *           [parameter][google.cloud.dialogflow.cx.v3.Form.Parameter] of the entity
     *           type will be changed to
     *           '&#64;sys.any' and intent
     *           [parameter][google.cloud.dialogflow.cx.v3.Intent.Parameter] of the
     *           entity type will be removed).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteEntityType($name, array $optionalArgs = [])
    {
        $request = new DeleteEntityTypeRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['force'])) {
            $request->setForce($optionalArgs['force']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteEntityType', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves the specified entity type.
     *
     * Sample code:
     * ```
     * $entityTypesClient = new EntityTypesClient();
     * try {
     *     $formattedName = $entityTypesClient->entityTypeName('[PROJECT]', '[LOCATION]', '[AGENT]', '[ENTITY_TYPE]');
     *     $response = $entityTypesClient->getEntityType($formattedName);
     * } finally {
     *     $entityTypesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the entity type.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/entityTypes/<Entity Type ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $languageCode
     *           The language to retrieve the entity type for. The following fields are
     *           language dependent:
     *
     *           *   `EntityType.entities.value`
     *           *   `EntityType.entities.synonyms`
     *           *   `EntityType.excluded_phrases.value`
     *
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\EntityType
     *
     * @throws ApiException if the remote call fails
     */
    public function getEntityType($name, array $optionalArgs = [])
    {
        $request = new GetEntityTypeRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetEntityType', EntityType::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns the list of all entity types in the specified agent.
     *
     * Sample code:
     * ```
     * $entityTypesClient = new EntityTypesClient();
     * try {
     *     $formattedParent = $entityTypesClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $entityTypesClient->listEntityTypes($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $entityTypesClient->listEntityTypes($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $entityTypesClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The agent to list all entity types for.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $languageCode
     *           The language to list entity types for. The following fields are language
     *           dependent:
     *
     *           *   `EntityType.entities.value`
     *           *   `EntityType.entities.synonyms`
     *           *   `EntityType.excluded_phrases.value`
     *
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listEntityTypes($parent, array $optionalArgs = [])
    {
        $request = new ListEntityTypesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListEntityTypes', $optionalArgs, ListEntityTypesResponse::class, $request);
    }

    /**
     * Updates the specified entity type.
     *
     * Note: You should always train a flow prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/cx/docs/concept/training).
     *
     * Sample code:
     * ```
     * $entityTypesClient = new EntityTypesClient();
     * try {
     *     $entityType = new EntityType();
     *     $response = $entityTypesClient->updateEntityType($entityType);
     * } finally {
     *     $entityTypesClient->close();
     * }
     * ```
     *
     * @param EntityType $entityType   Required. The entity type to update.
     * @param array      $optionalArgs {
     *     Optional.
     *
     *     @type string $languageCode
     *           The language of the following fields in `entity_type`:
     *
     *           *   `EntityType.entities.value`
     *           *   `EntityType.entities.synonyms`
     *           *   `EntityType.excluded_phrases.value`
     *
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
     *     @type FieldMask $updateMask
     *           The mask to control which fields get updated.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\EntityType
     *
     * @throws ApiException if the remote call fails
     */
    public function updateEntityType($entityType, array $optionalArgs = [])
    {
        $request = new UpdateEntityTypeRequest();
        $requestParamHeaders = [];
        $request->setEntityType($entityType);
        $requestParamHeaders['entity_type.name'] = $entityType->getName();
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateEntityType', EntityType::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets information about a location.
     *
     * Sample code:
     * ```
     * $entityTypesClient = new EntityTypesClient();
     * try {
     *     $response = $entityTypesClient->getLocation();
     * } finally {
     *     $entityTypesClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Resource name for the location.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Location\Location
     *
     * @throws ApiException if the remote call fails
     */
    public function getLocation(array $optionalArgs = [])
    {
        $request = new GetLocationRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetLocation', Location::class, $optionalArgs, $request, Call::UNARY_CALL, 'google.cloud.location.Locations')->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * Sample code:
     * ```
     * $entityTypesClient = new EntityTypesClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $entityTypesClient->listLocations();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $entityTypesClient->listLocations();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $entityTypesClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           The resource that owns the locations collection, if applicable.
     *     @type string $filter
     *           The standard list filter.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listLocations(array $optionalArgs = [])
    {
        $request = new ListLocationsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListLocations', $optionalArgs, ListLocationsResponse::class, $request, 'google.cloud.location.Locations');
    }
}
