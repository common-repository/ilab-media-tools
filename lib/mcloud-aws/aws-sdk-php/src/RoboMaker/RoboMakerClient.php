<?php

namespace MediaCloud\Vendor\Aws\RoboMaker;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS RoboMaker** service.
 * @method \MediaCloud\Vendor\Aws\Result batchDeleteWorlds(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchDeleteWorldsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchDescribeSimulationJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchDescribeSimulationJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelDeploymentJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelDeploymentJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelSimulationJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelSimulationJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelSimulationJobBatch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelSimulationJobBatchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelWorldExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelWorldExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelWorldGenerationJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelWorldGenerationJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDeploymentJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDeploymentJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createFleet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createFleetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRobot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRobotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRobotApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRobotApplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRobotApplicationVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRobotApplicationVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSimulationApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSimulationApplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSimulationApplicationVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSimulationApplicationVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSimulationJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSimulationJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createWorldExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createWorldExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createWorldGenerationJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createWorldGenerationJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createWorldTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createWorldTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteFleet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteFleetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRobot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRobotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRobotApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRobotApplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSimulationApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSimulationApplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteWorldTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteWorldTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deregisterRobot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deregisterRobotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDeploymentJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDeploymentJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeFleet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeFleetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRobot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRobotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRobotApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRobotApplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSimulationApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSimulationApplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSimulationJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSimulationJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSimulationJobBatch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSimulationJobBatchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeWorld(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeWorldAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeWorldExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeWorldExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeWorldGenerationJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeWorldGenerationJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeWorldTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeWorldTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWorldTemplateBody(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWorldTemplateBodyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDeploymentJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDeploymentJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listFleets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listFleetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRobotApplications(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRobotApplicationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRobots(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRobotsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSimulationApplications(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSimulationApplicationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSimulationJobBatches(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSimulationJobBatchesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSimulationJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSimulationJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listWorldExportJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listWorldExportJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listWorldGenerationJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listWorldGenerationJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listWorldTemplates(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listWorldTemplatesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listWorlds(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listWorldsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result registerRobot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise registerRobotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result restartSimulationJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise restartSimulationJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startSimulationJobBatch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startSimulationJobBatchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result syncDeploymentJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise syncDeploymentJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRobotApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRobotApplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSimulationApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSimulationApplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateWorldTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateWorldTemplateAsync(array $args = [])
 */
class RoboMakerClient extends AwsClient {}
