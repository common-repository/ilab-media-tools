<?php

namespace MediaCloud\Vendor\Aws\TranscribeService;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Transcribe Service** service.
 * @method \MediaCloud\Vendor\Aws\Result createCallAnalyticsCategory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createCallAnalyticsCategoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createLanguageModel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createLanguageModelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createMedicalVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createMedicalVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createVocabularyFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createVocabularyFilterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteCallAnalyticsCategory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteCallAnalyticsCategoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteCallAnalyticsJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteCallAnalyticsJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLanguageModel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLanguageModelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteMedicalTranscriptionJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteMedicalTranscriptionJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteMedicalVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteMedicalVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteTranscriptionJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTranscriptionJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteVocabularyFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteVocabularyFilterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeLanguageModel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeLanguageModelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCallAnalyticsCategory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCallAnalyticsCategoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCallAnalyticsJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCallAnalyticsJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMedicalTranscriptionJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMedicalTranscriptionJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMedicalVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMedicalVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTranscriptionJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTranscriptionJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getVocabularyFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getVocabularyFilterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listCallAnalyticsCategories(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listCallAnalyticsCategoriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listCallAnalyticsJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listCallAnalyticsJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listLanguageModels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listLanguageModelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMedicalTranscriptionJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMedicalTranscriptionJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMedicalVocabularies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMedicalVocabulariesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTranscriptionJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTranscriptionJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listVocabularies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listVocabulariesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listVocabularyFilters(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listVocabularyFiltersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startCallAnalyticsJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startCallAnalyticsJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startMedicalTranscriptionJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startMedicalTranscriptionJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startTranscriptionJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startTranscriptionJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateCallAnalyticsCategory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateCallAnalyticsCategoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateMedicalVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateMedicalVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateVocabularyFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateVocabularyFilterAsync(array $args = [])
 */
class TranscribeServiceClient extends AwsClient {}
