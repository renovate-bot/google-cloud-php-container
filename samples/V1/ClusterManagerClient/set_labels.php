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

// [START container_v1_generated_ClusterManager_SetLabels_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Container\V1\Client\ClusterManagerClient;
use Google\Cloud\Container\V1\Operation;
use Google\Cloud\Container\V1\SetLabelsRequest;

/**
 * Sets labels on a cluster.
 *
 * @param string $labelFingerprint The fingerprint of the previous set of labels for this resource,
 *                                 used to detect conflicts. The fingerprint is initially generated by
 *                                 Kubernetes Engine and changes after every request to modify or update
 *                                 labels. You must always provide an up-to-date fingerprint hash when
 *                                 updating or changing labels. Make a `get()` request to the
 *                                 resource to get the latest fingerprint.
 */
function set_labels_sample(string $labelFingerprint): void
{
    // Create a client.
    $clusterManagerClient = new ClusterManagerClient();

    // Prepare the request message.
    $resourceLabels = [];
    $request = (new SetLabelsRequest())
        ->setResourceLabels($resourceLabels)
        ->setLabelFingerprint($labelFingerprint);

    // Call the API and handle any network failures.
    try {
        /** @var Operation $response */
        $response = $clusterManagerClient->setLabels($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $labelFingerprint = '[LABEL_FINGERPRINT]';

    set_labels_sample($labelFingerprint);
}
// [END container_v1_generated_ClusterManager_SetLabels_sync]
