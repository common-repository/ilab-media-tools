<?php

namespace MediaCloud\Vendor\Aws\WafRegional;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS WAF Regional** service.
 * @method \MediaCloud\Vendor\Aws\Result associateWebACL(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateWebACLAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createByteMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createByteMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createGeoMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createGeoMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createIPSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createIPSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRateBasedRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRateBasedRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRegexMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRegexMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRegexPatternSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRegexPatternSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRuleGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRuleGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSizeConstraintSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSizeConstraintSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSqlInjectionMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSqlInjectionMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createWebACL(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createWebACLAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createWebACLMigrationStack(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createWebACLMigrationStackAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createXssMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createXssMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteByteMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteByteMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteGeoMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteGeoMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteIPSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteIPSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLoggingConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLoggingConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePermissionPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePermissionPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRateBasedRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRateBasedRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRegexMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRegexMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRegexPatternSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRegexPatternSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRuleGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRuleGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSizeConstraintSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSizeConstraintSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSqlInjectionMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSqlInjectionMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteWebACL(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteWebACLAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteXssMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteXssMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateWebACL(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateWebACLAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getByteMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getByteMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getChangeToken(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getChangeTokenAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getChangeTokenStatus(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getChangeTokenStatusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getGeoMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getGeoMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getIPSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getIPSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLoggingConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLoggingConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPermissionPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPermissionPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRateBasedRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRateBasedRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRateBasedRuleManagedKeys(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRateBasedRuleManagedKeysAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRegexMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRegexMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRegexPatternSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRegexPatternSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRuleGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRuleGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSampledRequests(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSampledRequestsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSizeConstraintSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSizeConstraintSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSqlInjectionMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSqlInjectionMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWebACL(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWebACLAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWebACLForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWebACLForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getXssMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getXssMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listActivatedRulesInRuleGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listActivatedRulesInRuleGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listByteMatchSets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listByteMatchSetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listGeoMatchSets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listGeoMatchSetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listIPSets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listIPSetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listLoggingConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listLoggingConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRateBasedRules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRateBasedRulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRegexMatchSets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRegexMatchSetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRegexPatternSets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRegexPatternSetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listResourcesForWebACL(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listResourcesForWebACLAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRuleGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRuleGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSizeConstraintSets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSizeConstraintSetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSqlInjectionMatchSets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSqlInjectionMatchSetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSubscribedRuleGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSubscribedRuleGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listWebACLs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listWebACLsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listXssMatchSets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listXssMatchSetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putLoggingConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putLoggingConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putPermissionPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putPermissionPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateByteMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateByteMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateGeoMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateGeoMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateIPSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateIPSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRateBasedRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRateBasedRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRegexMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRegexMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRegexPatternSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRegexPatternSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRuleGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRuleGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSizeConstraintSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSizeConstraintSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSqlInjectionMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSqlInjectionMatchSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateWebACL(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateWebACLAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateXssMatchSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateXssMatchSetAsync(array $args = [])
 */
class WafRegionalClient extends AwsClient {}
