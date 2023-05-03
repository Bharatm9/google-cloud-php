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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START alloydb_v1_generated_AlloyDBAdmin_CreateBackup_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\AlloyDb\V1\AlloyDBAdminClient;
use Google\Cloud\AlloyDb\V1\Backup;
use Google\Rpc\Status;

/**
 * Creates a new Backup in a given project and location.
 *
 * @param string $formattedParent            Value for parent. Please see
 *                                           {@see AlloyDBAdminClient::locationName()} for help formatting this field.
 * @param string $backupId                   ID of the requesting object.
 * @param string $formattedBackupClusterName The full resource name of the backup source cluster
 *                                           (e.g., projects/<project>/locations/<location>/clusters/<cluster_id>). Please see
 *                                           {@see AlloyDBAdminClient::clusterName()} for help formatting this field.
 */
function create_backup_sample(
    string $formattedParent,
    string $backupId,
    string $formattedBackupClusterName
): void {
    // Create a client.
    $alloyDBAdminClient = new AlloyDBAdminClient();

    // Prepare the request message.
    $backup = (new Backup())
        ->setClusterName($formattedBackupClusterName);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $alloyDBAdminClient->createBackup($formattedParent, $backupId, $backup);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Backup $result */
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
    $formattedParent = AlloyDBAdminClient::locationName('[PROJECT]', '[LOCATION]');
    $backupId = '[BACKUP_ID]';
    $formattedBackupClusterName = AlloyDBAdminClient::clusterName(
        '[PROJECT]',
        '[LOCATION]',
        '[CLUSTER]'
    );

    create_backup_sample($formattedParent, $backupId, $formattedBackupClusterName);
}
// [END alloydb_v1_generated_AlloyDBAdmin_CreateBackup_sync]
