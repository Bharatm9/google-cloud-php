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

// [START recommender_v1_generated_Recommender_ListInsights_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Recommender\V1\Insight;
use Google\Cloud\Recommender\V1\RecommenderClient;

/**
 * Lists insights for the specified Cloud Resource. Requires the
 * recommender.*.list IAM permission for the specified insight type.
 *
 * @param string $formattedParent The container resource on which to execute the request.
 *                                Acceptable formats:
 *
 *                                * `projects/[PROJECT_NUMBER]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
 *
 *                                * `projects/[PROJECT_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
 *
 *                                * `billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
 *
 *                                * `folders/[FOLDER_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
 *
 *                                * `organizations/[ORGANIZATION_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
 *
 *                                LOCATION here refers to GCP Locations:
 *                                https://cloud.google.com/about/locations/
 *                                INSIGHT_TYPE_ID refers to supported insight types:
 *                                https://cloud.google.com/recommender/docs/insights/insight-types. Please see
 *                                {@see RecommenderClient::insightTypeName()} for help formatting this field.
 */
function list_insights_sample(string $formattedParent): void
{
    // Create a client.
    $recommenderClient = new RecommenderClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $recommenderClient->listInsights($formattedParent);

        /** @var Insight $element */
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
    $formattedParent = RecommenderClient::insightTypeName('[PROJECT]', '[LOCATION]', '[INSIGHT_TYPE]');

    list_insights_sample($formattedParent);
}
// [END recommender_v1_generated_Recommender_ListInsights_sync]
