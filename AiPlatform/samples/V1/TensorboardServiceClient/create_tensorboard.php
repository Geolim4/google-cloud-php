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

// [START aiplatform_v1_generated_TensorboardService_CreateTensorboard_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\AIPlatform\V1\Tensorboard;
use Google\Cloud\AIPlatform\V1\TensorboardServiceClient;
use Google\Rpc\Status;

/**
 * Creates a Tensorboard.
 *
 * @param string $formattedParent        The resource name of the Location to create the Tensorboard in.
 *                                       Format: `projects/{project}/locations/{location}`
 *                                       Please see {@see TensorboardServiceClient::tensorboardName()} for help formatting this field.
 * @param string $tensorboardDisplayName User provided name of this Tensorboard.
 */
function create_tensorboard_sample(string $formattedParent, string $tensorboardDisplayName): void
{
    // Create a client.
    $tensorboardServiceClient = new TensorboardServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $tensorboard = (new Tensorboard())
        ->setDisplayName($tensorboardDisplayName);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $tensorboardServiceClient->createTensorboard($formattedParent, $tensorboard);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Tensorboard $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
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
    $formattedParent = TensorboardServiceClient::tensorboardName(
        '[PROJECT]',
        '[LOCATION]',
        '[TENSORBOARD]'
    );
    $tensorboardDisplayName = '[DISPLAY_NAME]';

    create_tensorboard_sample($formattedParent, $tensorboardDisplayName);
}
// [END aiplatform_v1_generated_TensorboardService_CreateTensorboard_sync]