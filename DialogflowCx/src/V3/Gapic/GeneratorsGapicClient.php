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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/cx/v3/generator.proto
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
use Google\Cloud\Dialogflow\Cx\V3\CreateGeneratorRequest;
use Google\Cloud\Dialogflow\Cx\V3\DeleteGeneratorRequest;
use Google\Cloud\Dialogflow\Cx\V3\Generator;
use Google\Cloud\Dialogflow\Cx\V3\GetGeneratorRequest;
use Google\Cloud\Dialogflow\Cx\V3\ListGeneratorsRequest;
use Google\Cloud\Dialogflow\Cx\V3\ListGeneratorsResponse;
use Google\Cloud\Dialogflow\Cx\V3\UpdateGeneratorRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\ListLocationsResponse;
use Google\Cloud\Location\Location;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for managing [Generators][google.cloud.dialogflow.cx.v3.Generator]
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $generatorsClient = new GeneratorsClient();
 * try {
 *     $formattedParent = $generatorsClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
 *     $generator = new Generator();
 *     $response = $generatorsClient->createGenerator($formattedParent, $generator);
 * } finally {
 *     $generatorsClient->close();
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
class GeneratorsGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.dialogflow.cx.v3.Generators';

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

    private static $generatorNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/generators_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/generators_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/generators_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/generators_rest_client_config.php',
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

    private static function getGeneratorNameTemplate()
    {
        if (self::$generatorNameTemplate == null) {
            self::$generatorNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/generators/{generator}');
        }

        return self::$generatorNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'agent' => self::getAgentNameTemplate(),
                'generator' => self::getGeneratorNameTemplate(),
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
     * Formats a string containing the fully-qualified path to represent a generator
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $generator
     *
     * @return string The formatted generator resource.
     */
    public static function generatorName($project, $location, $agent, $generator)
    {
        return self::getGeneratorNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'generator' => $generator,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agent: projects/{project}/locations/{location}/agents/{agent}
     * - generator: projects/{project}/locations/{location}/agents/{agent}/generators/{generator}
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
     * Creates a generator in the specified agent.
     *
     * Sample code:
     * ```
     * $generatorsClient = new GeneratorsClient();
     * try {
     *     $formattedParent = $generatorsClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
     *     $generator = new Generator();
     *     $response = $generatorsClient->createGenerator($formattedParent, $generator);
     * } finally {
     *     $generatorsClient->close();
     * }
     * ```
     *
     * @param string    $parent       Required. The agent to create a generator for.
     *                                Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     * @param Generator $generator    Required. The generator to create.
     * @param array     $optionalArgs {
     *     Optional.
     *
     *     @type string $languageCode
     *           The language to create generators for the following fields:
     *           *  `Generator.prompt_text.text`
     *           If not specified, the agent's default language is used.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\Generator
     *
     * @throws ApiException if the remote call fails
     */
    public function createGenerator($parent, $generator, array $optionalArgs = [])
    {
        $request = new CreateGeneratorRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setGenerator($generator);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateGenerator', Generator::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes the specified generators.
     *
     * Sample code:
     * ```
     * $generatorsClient = new GeneratorsClient();
     * try {
     *     $formattedName = $generatorsClient->generatorName('[PROJECT]', '[LOCATION]', '[AGENT]', '[GENERATOR]');
     *     $generatorsClient->deleteGenerator($formattedName);
     * } finally {
     *     $generatorsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the generator to delete.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/generators/<Generator ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type bool $force
     *           This field has no effect for generators not being used.
     *           For generators that are used by pages/flows/transition route groups:
     *
     *           *  If `force` is set to false, an error will be returned with message
     *           indicating the referenced resources.
     *           *  If `force` is set to true, Dialogflow will remove the generator, as well
     *           as any references to the generator (i.e.
     *           [Generator][Fulfillment.generator]) in fulfillments.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteGenerator($name, array $optionalArgs = [])
    {
        $request = new DeleteGeneratorRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['force'])) {
            $request->setForce($optionalArgs['force']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteGenerator', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves the specified generator.
     *
     * Sample code:
     * ```
     * $generatorsClient = new GeneratorsClient();
     * try {
     *     $formattedName = $generatorsClient->generatorName('[PROJECT]', '[LOCATION]', '[AGENT]', '[GENERATOR]');
     *     $response = $generatorsClient->getGenerator($formattedName);
     * } finally {
     *     $generatorsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the generator.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/generators/<Generator ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $languageCode
     *           The language to list generators for.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\Generator
     *
     * @throws ApiException if the remote call fails
     */
    public function getGenerator($name, array $optionalArgs = [])
    {
        $request = new GetGeneratorRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetGenerator', Generator::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns the list of all generators in the specified agent.
     *
     * Sample code:
     * ```
     * $generatorsClient = new GeneratorsClient();
     * try {
     *     $formattedParent = $generatorsClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $generatorsClient->listGenerators($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $generatorsClient->listGenerators($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $generatorsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The agent to list all generators for.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $languageCode
     *           The language to list generators for.
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
    public function listGenerators($parent, array $optionalArgs = [])
    {
        $request = new ListGeneratorsRequest();
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
        return $this->getPagedListResponse('ListGenerators', $optionalArgs, ListGeneratorsResponse::class, $request);
    }

    /**
     * Update the specified generator.
     *
     * Sample code:
     * ```
     * $generatorsClient = new GeneratorsClient();
     * try {
     *     $generator = new Generator();
     *     $response = $generatorsClient->updateGenerator($generator);
     * } finally {
     *     $generatorsClient->close();
     * }
     * ```
     *
     * @param Generator $generator    Required. The generator to update.
     * @param array     $optionalArgs {
     *     Optional.
     *
     *     @type string $languageCode
     *           The language to list generators for.
     *     @type FieldMask $updateMask
     *           The mask to control which fields get updated. If the mask is not present,
     *           all fields will be updated.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\Generator
     *
     * @throws ApiException if the remote call fails
     */
    public function updateGenerator($generator, array $optionalArgs = [])
    {
        $request = new UpdateGeneratorRequest();
        $requestParamHeaders = [];
        $request->setGenerator($generator);
        $requestParamHeaders['generator.name'] = $generator->getName();
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateGenerator', Generator::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets information about a location.
     *
     * Sample code:
     * ```
     * $generatorsClient = new GeneratorsClient();
     * try {
     *     $response = $generatorsClient->getLocation();
     * } finally {
     *     $generatorsClient->close();
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
     * $generatorsClient = new GeneratorsClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $generatorsClient->listLocations();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $generatorsClient->listLocations();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $generatorsClient->close();
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
