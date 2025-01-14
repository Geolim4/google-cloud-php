<?php
/*
 * Copyright 2021 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/appengine/v1/appengine.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AppEngine\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AppEngine\V1\CreateDomainMappingRequest;
use Google\Cloud\AppEngine\V1\DeleteDomainMappingRequest;
use Google\Cloud\AppEngine\V1\DomainMapping;
use Google\Cloud\AppEngine\V1\GetDomainMappingRequest;
use Google\Cloud\AppEngine\V1\ListDomainMappingsRequest;
use Google\Cloud\AppEngine\V1\ListDomainMappingsResponse;
use Google\Cloud\AppEngine\V1\UpdateDomainMappingRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description: Manages domains serving an application.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $domainMappingsClient = new DomainMappingsClient();
 * try {
 *     $operationResponse = $domainMappingsClient->createDomainMapping();
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $domainMappingsClient->createDomainMapping();
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $domainMappingsClient->resumeOperation($operationName, 'createDomainMapping');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         $result = $newOperationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $domainMappingsClient->close();
 * }
 * ```
 *
 * @deprecated Please use the new service client {@see \Google\Cloud\AppEngine\V1\Client\DomainMappingsClient}.
 */
class DomainMappingsGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.appengine.v1.DomainMappings';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    const SERVICE_ADDRESS = 'appengine.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'appengine.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/appengine.admin',
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/domain_mappings_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/domain_mappings_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/domain_mappings_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/domain_mappings_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'appengine.googleapis.com:443'.
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
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Maps a domain to an application. A user must be authorized to administer a
     * domain in order to map it to an application. For a list of available
     * authorized domains, see [`AuthorizedDomains.ListAuthorizedDomains`]().
     *
     * Sample code:
     * ```
     * $domainMappingsClient = new DomainMappingsClient();
     * try {
     *     $operationResponse = $domainMappingsClient->createDomainMapping();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $domainMappingsClient->createDomainMapping();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $domainMappingsClient->resumeOperation($operationName, 'createDomainMapping');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $domainMappingsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $parent
     *           Name of the parent Application resource. Example: `apps/myapp`.
     *     @type DomainMapping $domainMapping
     *           Domain mapping configuration.
     *     @type int $overrideStrategy
     *           Whether the domain creation should override any existing mappings for this
     *           domain. By default, overrides are rejected.
     *           For allowed values, use constants defined on {@see \Google\Cloud\AppEngine\V1\DomainOverrideStrategy}
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function createDomainMapping(array $optionalArgs = [])
    {
        $request = new CreateDomainMappingRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
            $requestParamHeaders['parent'] = $optionalArgs['parent'];
        }

        if (isset($optionalArgs['domainMapping'])) {
            $request->setDomainMapping($optionalArgs['domainMapping']);
        }

        if (isset($optionalArgs['overrideStrategy'])) {
            $request->setOverrideStrategy($optionalArgs['overrideStrategy']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('CreateDomainMapping', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Deletes the specified domain mapping. A user must be authorized to
     * administer the associated domain in order to delete a `DomainMapping`
     * resource.
     *
     * Sample code:
     * ```
     * $domainMappingsClient = new DomainMappingsClient();
     * try {
     *     $operationResponse = $domainMappingsClient->deleteDomainMapping();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $domainMappingsClient->deleteDomainMapping();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $domainMappingsClient->resumeOperation($operationName, 'deleteDomainMapping');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $domainMappingsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Name of the resource to delete. Example:
     *           `apps/myapp/domainMappings/example.com`.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteDomainMapping(array $optionalArgs = [])
    {
        $request = new DeleteDomainMappingRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('DeleteDomainMapping', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Gets the specified domain mapping.
     *
     * Sample code:
     * ```
     * $domainMappingsClient = new DomainMappingsClient();
     * try {
     *     $response = $domainMappingsClient->getDomainMapping();
     * } finally {
     *     $domainMappingsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Name of the resource requested. Example:
     *           `apps/myapp/domainMappings/example.com`.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AppEngine\V1\DomainMapping
     *
     * @throws ApiException if the remote call fails
     */
    public function getDomainMapping(array $optionalArgs = [])
    {
        $request = new GetDomainMappingRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetDomainMapping', DomainMapping::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists the domain mappings on an application.
     *
     * Sample code:
     * ```
     * $domainMappingsClient = new DomainMappingsClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $domainMappingsClient->listDomainMappings();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $domainMappingsClient->listDomainMappings();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $domainMappingsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $parent
     *           Name of the parent Application resource. Example: `apps/myapp`.
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
    public function listDomainMappings(array $optionalArgs = [])
    {
        $request = new ListDomainMappingsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
            $requestParamHeaders['parent'] = $optionalArgs['parent'];
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListDomainMappings', $optionalArgs, ListDomainMappingsResponse::class, $request);
    }

    /**
     * Updates the specified domain mapping. To map an SSL certificate to a
     * domain mapping, update `certificate_id` to point to an `AuthorizedCertificate`
     * resource. A user must be authorized to administer the associated domain
     * in order to update a `DomainMapping` resource.
     *
     * Sample code:
     * ```
     * $domainMappingsClient = new DomainMappingsClient();
     * try {
     *     $operationResponse = $domainMappingsClient->updateDomainMapping();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $domainMappingsClient->updateDomainMapping();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $domainMappingsClient->resumeOperation($operationName, 'updateDomainMapping');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $domainMappingsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Name of the resource to update. Example:
     *           `apps/myapp/domainMappings/example.com`.
     *     @type DomainMapping $domainMapping
     *           A domain mapping containing the updated resource. Only fields set
     *           in the field mask will be updated.
     *     @type FieldMask $updateMask
     *           Required. Standard field mask for the set of fields to be updated.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function updateDomainMapping(array $optionalArgs = [])
    {
        $request = new UpdateDomainMappingRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['domainMapping'])) {
            $request->setDomainMapping($optionalArgs['domainMapping']);
        }

        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('UpdateDomainMapping', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }
}
