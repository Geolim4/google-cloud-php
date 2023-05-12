<?php
/*
 * Copyright 2022 Google LLC
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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START run_v2_generated_Revisions_ListRevisions_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Run\V2\Client\RevisionsClient;
use Google\Cloud\Run\V2\ListRevisionsRequest;
use Google\Cloud\Run\V2\Revision;

/**
 * Lists Revisions from a given Service, or from a given location.
 *
 * @param string $formattedParent The Service from which the Revisions should be listed.
 *                                To list all Revisions across Services, use "-" instead of Service name.
 *                                Format:
 *                                projects/{project}/locations/{location}/services/{service}
 *                                Please see {@see RevisionsClient::serviceName()} for help formatting this field.
 */
function list_revisions_sample(string $formattedParent): void
{
    // Create a client.
    $revisionsClient = new RevisionsClient();

    // Prepare the request message.
    $request = (new ListRevisionsRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $revisionsClient->listRevisions($request);

        /** @var Revision $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = RevisionsClient::serviceName('[PROJECT]', '[LOCATION]', '[SERVICE]');

    list_revisions_sample($formattedParent);
}
// [END run_v2_generated_Revisions_ListRevisions_sync]
