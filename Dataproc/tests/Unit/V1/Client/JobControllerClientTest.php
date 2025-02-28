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

namespace Google\Cloud\Dataproc\Tests\Unit\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\Dataproc\V1\CancelJobRequest;
use Google\Cloud\Dataproc\V1\Client\JobControllerClient;
use Google\Cloud\Dataproc\V1\DeleteJobRequest;
use Google\Cloud\Dataproc\V1\GetJobRequest;
use Google\Cloud\Dataproc\V1\Job;
use Google\Cloud\Dataproc\V1\JobPlacement;
use Google\Cloud\Dataproc\V1\ListJobsRequest;
use Google\Cloud\Dataproc\V1\ListJobsResponse;
use Google\Cloud\Dataproc\V1\SubmitJobRequest;
use Google\Cloud\Dataproc\V1\UpdateJobRequest;
use Google\LongRunning\GetOperationRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\Any;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;
use Google\Rpc\Code;
use stdClass;

/**
 * @group dataproc
 *
 * @group gapic
 */
class JobControllerClientTest extends GeneratedTest
{
    /** @return TransportInterface */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /** @return CredentialsWrapper */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)->disableOriginalConstructor()->getMock();
    }

    /** @return JobControllerClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new JobControllerClient($options);
    }

    /** @test */
    public function cancelJobTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $driverOutputResourceUri = 'driverOutputResourceUri-542229086';
        $driverControlFilesUri = 'driverControlFilesUri207057643';
        $jobUuid = 'jobUuid-1615012099';
        $done = true;
        $expectedResponse = new Job();
        $expectedResponse->setDriverOutputResourceUri($driverOutputResourceUri);
        $expectedResponse->setDriverControlFilesUri($driverControlFilesUri);
        $expectedResponse->setJobUuid($jobUuid);
        $expectedResponse->setDone($done);
        $transport->addResponse($expectedResponse);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $jobId = 'jobId-1154752291';
        $request = (new CancelJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJobId($jobId);
        $response = $gapicClient->cancelJob($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataproc.v1.JobController/CancelJob', $actualFuncCall);
        $actualValue = $actualRequestObject->getProjectId();
        $this->assertProtobufEquals($projectId, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualRequestObject->getJobId();
        $this->assertProtobufEquals($jobId, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function cancelJobExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $jobId = 'jobId-1154752291';
        $request = (new CancelJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJobId($jobId);
        try {
            $gapicClient->cancelJob($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteJobTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $jobId = 'jobId-1154752291';
        $request = (new DeleteJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJobId($jobId);
        $gapicClient->deleteJob($request);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataproc.v1.JobController/DeleteJob', $actualFuncCall);
        $actualValue = $actualRequestObject->getProjectId();
        $this->assertProtobufEquals($projectId, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualRequestObject->getJobId();
        $this->assertProtobufEquals($jobId, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteJobExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $jobId = 'jobId-1154752291';
        $request = (new DeleteJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJobId($jobId);
        try {
            $gapicClient->deleteJob($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getJobTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $driverOutputResourceUri = 'driverOutputResourceUri-542229086';
        $driverControlFilesUri = 'driverControlFilesUri207057643';
        $jobUuid = 'jobUuid-1615012099';
        $done = true;
        $expectedResponse = new Job();
        $expectedResponse->setDriverOutputResourceUri($driverOutputResourceUri);
        $expectedResponse->setDriverControlFilesUri($driverControlFilesUri);
        $expectedResponse->setJobUuid($jobUuid);
        $expectedResponse->setDone($done);
        $transport->addResponse($expectedResponse);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $jobId = 'jobId-1154752291';
        $request = (new GetJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJobId($jobId);
        $response = $gapicClient->getJob($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataproc.v1.JobController/GetJob', $actualFuncCall);
        $actualValue = $actualRequestObject->getProjectId();
        $this->assertProtobufEquals($projectId, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualRequestObject->getJobId();
        $this->assertProtobufEquals($jobId, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getJobExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $jobId = 'jobId-1154752291';
        $request = (new GetJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJobId($jobId);
        try {
            $gapicClient->getJob($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listJobsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $jobsElement = new Job();
        $jobs = [
            $jobsElement,
        ];
        $expectedResponse = new ListJobsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setJobs($jobs);
        $transport->addResponse($expectedResponse);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $request = (new ListJobsRequest())
            ->setProjectId($projectId)
            ->setRegion($region);
        $response = $gapicClient->listJobs($request);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getJobs()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataproc.v1.JobController/ListJobs', $actualFuncCall);
        $actualValue = $actualRequestObject->getProjectId();
        $this->assertProtobufEquals($projectId, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listJobsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $request = (new ListJobsRequest())
            ->setProjectId($projectId)
            ->setRegion($region);
        try {
            $gapicClient->listJobs($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function submitJobTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $driverOutputResourceUri = 'driverOutputResourceUri-542229086';
        $driverControlFilesUri = 'driverControlFilesUri207057643';
        $jobUuid = 'jobUuid-1615012099';
        $done = true;
        $expectedResponse = new Job();
        $expectedResponse->setDriverOutputResourceUri($driverOutputResourceUri);
        $expectedResponse->setDriverControlFilesUri($driverControlFilesUri);
        $expectedResponse->setJobUuid($jobUuid);
        $expectedResponse->setDone($done);
        $transport->addResponse($expectedResponse);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $job = new Job();
        $jobPlacement = new JobPlacement();
        $placementClusterName = 'placementClusterName1028110208';
        $jobPlacement->setClusterName($placementClusterName);
        $job->setPlacement($jobPlacement);
        $request = (new SubmitJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJob($job);
        $response = $gapicClient->submitJob($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataproc.v1.JobController/SubmitJob', $actualFuncCall);
        $actualValue = $actualRequestObject->getProjectId();
        $this->assertProtobufEquals($projectId, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualRequestObject->getJob();
        $this->assertProtobufEquals($job, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function submitJobExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $job = new Job();
        $jobPlacement = new JobPlacement();
        $placementClusterName = 'placementClusterName1028110208';
        $jobPlacement->setClusterName($placementClusterName);
        $job->setPlacement($jobPlacement);
        $request = (new SubmitJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJob($job);
        try {
            $gapicClient->submitJob($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function submitJobAsOperationTest()
    {
        $operationsTransport = $this->createTransport();
        $operationsClient = new OperationsClient([
            'apiEndpoint' => '',
            'transport' => $operationsTransport,
            'credentials' => $this->createCredentials(),
        ]);
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
            'operationsClient' => $operationsClient,
        ]);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
        // Mock response
        $incompleteOperation = new Operation();
        $incompleteOperation->setName('operations/submitJobAsOperationTest');
        $incompleteOperation->setDone(false);
        $transport->addResponse($incompleteOperation);
        $driverOutputResourceUri = 'driverOutputResourceUri-542229086';
        $driverControlFilesUri = 'driverControlFilesUri207057643';
        $jobUuid = 'jobUuid-1615012099';
        $done = true;
        $expectedResponse = new Job();
        $expectedResponse->setDriverOutputResourceUri($driverOutputResourceUri);
        $expectedResponse->setDriverControlFilesUri($driverControlFilesUri);
        $expectedResponse->setJobUuid($jobUuid);
        $expectedResponse->setDone($done);
        $anyResponse = new Any();
        $anyResponse->setValue($expectedResponse->serializeToString());
        $completeOperation = new Operation();
        $completeOperation->setName('operations/submitJobAsOperationTest');
        $completeOperation->setDone(true);
        $completeOperation->setResponse($anyResponse);
        $operationsTransport->addResponse($completeOperation);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $job = new Job();
        $jobPlacement = new JobPlacement();
        $placementClusterName = 'placementClusterName1028110208';
        $jobPlacement->setClusterName($placementClusterName);
        $job->setPlacement($jobPlacement);
        $request = (new SubmitJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJob($job);
        $response = $gapicClient->submitJobAsOperation($request);
        $this->assertFalse($response->isDone());
        $this->assertNull($response->getResult());
        $apiRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($apiRequests));
        $operationsRequestsEmpty = $operationsTransport->popReceivedCalls();
        $this->assertSame(0, count($operationsRequestsEmpty));
        $actualApiFuncCall = $apiRequests[0]->getFuncCall();
        $actualApiRequestObject = $apiRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataproc.v1.JobController/SubmitJobAsOperation', $actualApiFuncCall);
        $actualValue = $actualApiRequestObject->getProjectId();
        $this->assertProtobufEquals($projectId, $actualValue);
        $actualValue = $actualApiRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualApiRequestObject->getJob();
        $this->assertProtobufEquals($job, $actualValue);
        $expectedOperationsRequestObject = new GetOperationRequest();
        $expectedOperationsRequestObject->setName('operations/submitJobAsOperationTest');
        $response->pollUntilComplete([
            'initialPollDelayMillis' => 1,
        ]);
        $this->assertTrue($response->isDone());
        $this->assertEquals($expectedResponse, $response->getResult());
        $apiRequestsEmpty = $transport->popReceivedCalls();
        $this->assertSame(0, count($apiRequestsEmpty));
        $operationsRequests = $operationsTransport->popReceivedCalls();
        $this->assertSame(1, count($operationsRequests));
        $actualOperationsFuncCall = $operationsRequests[0]->getFuncCall();
        $actualOperationsRequestObject = $operationsRequests[0]->getRequestObject();
        $this->assertSame('/google.longrunning.Operations/GetOperation', $actualOperationsFuncCall);
        $this->assertEquals($expectedOperationsRequestObject, $actualOperationsRequestObject);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
    }

    /** @test */
    public function submitJobAsOperationExceptionTest()
    {
        $operationsTransport = $this->createTransport();
        $operationsClient = new OperationsClient([
            'apiEndpoint' => '',
            'transport' => $operationsTransport,
            'credentials' => $this->createCredentials(),
        ]);
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
            'operationsClient' => $operationsClient,
        ]);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
        // Mock response
        $incompleteOperation = new Operation();
        $incompleteOperation->setName('operations/submitJobAsOperationTest');
        $incompleteOperation->setDone(false);
        $transport->addResponse($incompleteOperation);
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $operationsTransport->addResponse(null, $status);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $job = new Job();
        $jobPlacement = new JobPlacement();
        $placementClusterName = 'placementClusterName1028110208';
        $jobPlacement->setClusterName($placementClusterName);
        $job->setPlacement($jobPlacement);
        $request = (new SubmitJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJob($job);
        $response = $gapicClient->submitJobAsOperation($request);
        $this->assertFalse($response->isDone());
        $this->assertNull($response->getResult());
        $expectedOperationsRequestObject = new GetOperationRequest();
        $expectedOperationsRequestObject->setName('operations/submitJobAsOperationTest');
        try {
            $response->pollUntilComplete([
                'initialPollDelayMillis' => 1,
            ]);
            // If the pollUntilComplete() method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stubs are exhausted
        $transport->popReceivedCalls();
        $operationsTransport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
    }

    /** @test */
    public function updateJobTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $driverOutputResourceUri = 'driverOutputResourceUri-542229086';
        $driverControlFilesUri = 'driverControlFilesUri207057643';
        $jobUuid = 'jobUuid-1615012099';
        $done = true;
        $expectedResponse = new Job();
        $expectedResponse->setDriverOutputResourceUri($driverOutputResourceUri);
        $expectedResponse->setDriverControlFilesUri($driverControlFilesUri);
        $expectedResponse->setJobUuid($jobUuid);
        $expectedResponse->setDone($done);
        $transport->addResponse($expectedResponse);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $jobId = 'jobId-1154752291';
        $job = new Job();
        $jobPlacement = new JobPlacement();
        $placementClusterName = 'placementClusterName1028110208';
        $jobPlacement->setClusterName($placementClusterName);
        $job->setPlacement($jobPlacement);
        $updateMask = new FieldMask();
        $request = (new UpdateJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJobId($jobId)
            ->setJob($job)
            ->setUpdateMask($updateMask);
        $response = $gapicClient->updateJob($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataproc.v1.JobController/UpdateJob', $actualFuncCall);
        $actualValue = $actualRequestObject->getProjectId();
        $this->assertProtobufEquals($projectId, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualRequestObject->getJobId();
        $this->assertProtobufEquals($jobId, $actualValue);
        $actualValue = $actualRequestObject->getJob();
        $this->assertProtobufEquals($job, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateJobExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $jobId = 'jobId-1154752291';
        $job = new Job();
        $jobPlacement = new JobPlacement();
        $placementClusterName = 'placementClusterName1028110208';
        $jobPlacement->setClusterName($placementClusterName);
        $job->setPlacement($jobPlacement);
        $updateMask = new FieldMask();
        $request = (new UpdateJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJobId($jobId)
            ->setJob($job)
            ->setUpdateMask($updateMask);
        try {
            $gapicClient->updateJob($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function cancelJobAsyncTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $driverOutputResourceUri = 'driverOutputResourceUri-542229086';
        $driverControlFilesUri = 'driverControlFilesUri207057643';
        $jobUuid = 'jobUuid-1615012099';
        $done = true;
        $expectedResponse = new Job();
        $expectedResponse->setDriverOutputResourceUri($driverOutputResourceUri);
        $expectedResponse->setDriverControlFilesUri($driverControlFilesUri);
        $expectedResponse->setJobUuid($jobUuid);
        $expectedResponse->setDone($done);
        $transport->addResponse($expectedResponse);
        // Mock request
        $projectId = 'projectId-1969970175';
        $region = 'region-934795532';
        $jobId = 'jobId-1154752291';
        $request = (new CancelJobRequest())
            ->setProjectId($projectId)
            ->setRegion($region)
            ->setJobId($jobId);
        $response = $gapicClient->cancelJobAsync($request)->wait();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.dataproc.v1.JobController/CancelJob', $actualFuncCall);
        $actualValue = $actualRequestObject->getProjectId();
        $this->assertProtobufEquals($projectId, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualRequestObject->getJobId();
        $this->assertProtobufEquals($jobId, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }
}
