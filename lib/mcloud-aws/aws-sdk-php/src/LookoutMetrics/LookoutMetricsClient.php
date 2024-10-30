<?php

namespace MediaCloud\Vendor\Aws\LookoutMetrics;
use MediaCloud\Vendor\Aws\AwsClient;
use MediaCloud\Vendor\Aws\CommandInterface;
use MediaCloud\Vendor\Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Amazon Lookout for Metrics** service.
 * @method \MediaCloud\Vendor\Aws\Result activateAnomalyDetector(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise activateAnomalyDetectorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result backTestAnomalyDetector(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise backTestAnomalyDetectorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAlert(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAlertAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAnomalyDetector(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAnomalyDetectorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createMetricSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createMetricSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deactivateAnomalyDetector(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deactivateAnomalyDetectorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAlert(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAlertAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAnomalyDetector(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAnomalyDetectorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAlert(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAlertAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAnomalyDetectionExecutions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAnomalyDetectionExecutionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAnomalyDetector(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAnomalyDetectorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeMetricSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeMetricSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAnomalyGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAnomalyGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getFeedback(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getFeedbackAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSampleData(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSampleDataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAlerts(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAlertsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAnomalyDetectors(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAnomalyDetectorsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAnomalyGroupRelatedMetrics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAnomalyGroupRelatedMetricsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAnomalyGroupSummaries(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAnomalyGroupSummariesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAnomalyGroupTimeSeries(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAnomalyGroupTimeSeriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMetricSets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMetricSetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putFeedback(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putFeedbackAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAnomalyDetector(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAnomalyDetectorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateMetricSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateMetricSetAsync(array $args = [])
 */
class LookoutMetricsClient extends AwsClient {}
