<?php

declare(strict_types=1);

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\HasOffers\Brand\API;

use Plients\Http\HttpResponse;

class Offer extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Offer';

    public function addApprovalQuestion(array $parameters = []): HttpResponse
    {
        return $this->get('addApprovalQuestion', $parameters);
    }

    public function addCategory(array $parameters = []): HttpResponse
    {
        return $this->get('addCategory', $parameters);
    }

    public function addGroup(array $parameters = []): HttpResponse
    {
        return $this->get('addGroup', $parameters);
    }

    public function addTargetBrowser(array $parameters = []): HttpResponse
    {
        return $this->get('addTargetBrowser', $parameters);
    }

    public function addTargetCountry(array $parameters = []): HttpResponse
    {
        return $this->get('addTargetCountry', $parameters);
    }

    public function addTargetCountryRegion(array $parameters = []): HttpResponse
    {
        return $this->get('addTargetCountryRegion', $parameters);
    }

    public function blockAffiliate(array $parameters = []): HttpResponse
    {
        return $this->get('blockAffiliate', $parameters);
    }

    public function create(array $parameters = []): HttpResponse
    {
        return $this->get('create', $parameters);
    }

    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllByIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findAllFeaturedOfferIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllFeaturedOfferIds', $parameters);
    }

    public function findAllIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllIds', $parameters);
    }

    public function findAllIdsByAdvertiserId(array $parameters = []): HttpResponse
    {
        return $this->get('findAllIdsByAdvertiserId', $parameters);
    }

    public function findAllIdsByAffiliateId(array $parameters = []): HttpResponse
    {
        return $this->get('findAllIdsByAffiliateId', $parameters);
    }

    public function findAllPendingAffiliateApprovals(array $parameters = []): HttpResponse
    {
        return $this->get('findAllPendingAffiliateApprovals', $parameters);
    }

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function generateTrackingLink(array $parameters = []): HttpResponse
    {
        return $this->get('generateTrackingLink', $parameters);
    }

    public function generateTrackingPixel(array $parameters = []): HttpResponse
    {
        return $this->get('generateTrackingPixel', $parameters);
    }

    public function getAffiliateApplicationNote(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliateApplicationNote', $parameters);
    }

    public function getAffiliateApprovalStatus(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliateApprovalStatus', $parameters);
    }

    public function getAffiliateHostnames(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliateHostnames', $parameters);
    }

    /**
     * Gets a summary of payout and revenue-related details for an Affiliate/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliatePayment(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliatePayment', $parameters);
    }

    /**
     * Get an Affiliate-specific Offer Payout for a specific Offer/Affiliate/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliatePayout(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliatePayout', $parameters);
    }

    /**
     * Get an Affiliate-specific Offer Revenue for a specific Offer/Affiliate/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateRevenue(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliateRevenue', $parameters);
    }

    /**
     * Get a list of all answers an Affiliate provided for an Offer's signup/approval questions.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getApprovalAnswers(array $parameters = []): HttpResponse
    {
        return $this->get('getApprovalAnswers', $parameters);
    }

    /**
     * Get Offer Approval/Signup Questions for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getApprovalQuestions(array $parameters = []): HttpResponse
    {
        return $this->get('getApprovalQuestions', $parameters);
    }

    public function getApprovedAffiliateIds(array $parameters = []): HttpResponse
    {
        return $this->get('getApprovedAffiliateIds', $parameters);
    }

    public function getBlockedAffiliateIds(array $parameters = []): HttpResponse
    {
        return $this->get('getBlockedAffiliateIds', $parameters);
    }

    public function getCategories(array $parameters = []): HttpResponse
    {
        return $this->get('getCategories', $parameters);
    }

    public function getConversionCaps(array $parameters = []): HttpResponse
    {
        return $this->get('getConversionCaps', $parameters);
    }

    public function getCustomerList(array $parameters = []): HttpResponse
    {
        return $this->get('getCustomerList', $parameters);
    }

    public function getGroups(array $parameters = []): HttpResponse
    {
        return $this->get('getGroups', $parameters);
    }

    public function getOfferFiles(array $parameters = []): HttpResponse
    {
        return $this->get('getOfferFiles', $parameters);
    }

    public function getOfferFilesWithCreativeCode(array $parameters = []): HttpResponse
    {
        return $this->get('getOfferFilesWithCreativeCode', $parameters);
    }

    public function getOfferListByGroupId(array $parameters = []): HttpResponse
    {
        return $this->get('getOfferListByGroupId', $parameters);
    }

    public function getOfferUrls(array $parameters = []): HttpResponse
    {
        return $this->get('getOfferUrls', $parameters);
    }

    public function getOverview(array $parameters = []): HttpResponse
    {
        return $this->get('getOverview', $parameters);
    }

    public function getPayouts(array $parameters = []): HttpResponse
    {
        return $this->get('getPayouts', $parameters);
    }

    public function getPixels(array $parameters = []): HttpResponse
    {
        return $this->get('getPixels', $parameters);
    }

    public function getRevenues(array $parameters = []): HttpResponse
    {
        return $this->get('getRevenues', $parameters);
    }

    public function getTargetBrowsers(array $parameters = []): HttpResponse
    {
        return $this->get('getTargetBrowsers', $parameters);
    }

    public function getTargetCountries(array $parameters = []): HttpResponse
    {
        return $this->get('getTargetCountries', $parameters);
    }

    public function getThumbnail(array $parameters = []): HttpResponse
    {
        return $this->get('getThumbnail', $parameters);
    }

    public function getTierPayouts(array $parameters = []): HttpResponse
    {
        return $this->get('getTierPayouts', $parameters);
    }

    public function getTierRevenues(array $parameters = []): HttpResponse
    {
        return $this->get('getTierRevenues', $parameters);
    }

    public function getUnapprovedAffiliateIds(array $parameters = []): HttpResponse
    {
        return $this->get('getUnapprovedAffiliateIds', $parameters);
    }

    public function removeCategory(array $parameters = []): HttpResponse
    {
        return $this->get('removeCategory', $parameters);
    }

    public function removeConversionCap(array $parameters = []): HttpResponse
    {
        return $this->get('removeConversionCap', $parameters);
    }

    public function removeGroup(array $parameters = []): HttpResponse
    {
        return $this->get('removeGroup', $parameters);
    }

    public function removePayout(array $parameters = []): HttpResponse
    {
        return $this->get('removePayout', $parameters);
    }

    public function removeRevenue(array $parameters = []): HttpResponse
    {
        return $this->get('removeRevenue', $parameters);
    }

    public function removeTargetBrowser(array $parameters = []): HttpResponse
    {
        return $this->get('removeTargetBrowser', $parameters);
    }

    public function removeTargetCountry(array $parameters = []): HttpResponse
    {
        return $this->get('removeTargetCountry', $parameters);
    }

    public function removeTargetCountryRegion(array $parameters = []): HttpResponse
    {
        return $this->get('removeTargetCountryRegion', $parameters);
    }

    public function removeTierPayout(array $parameters = []): HttpResponse
    {
        return $this->get('removeTierPayout', $parameters);
    }

    public function removeTierRevenue(array $parameters = []): HttpResponse
    {
        return $this->get('removeTierRevenue', $parameters);
    }

    /**
     * Create an Affiliate's answer to an Offer's signup/approval question.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function saveApprovalQuestionAnswer(array $parameters = []): HttpResponse
    {
        return $this->get('saveApprovalQuestionAnswer', $parameters);
    }

    public function setAffiliateApproval(array $parameters = []): HttpResponse
    {
        return $this->get('setAffiliateApproval', $parameters);
    }

    public function setAffiliateHostname(array $parameters = []): HttpResponse
    {
        return $this->get('setAffiliateHostname', $parameters);
    }

    public function setAffiliateTermsDate(array $parameters = []): HttpResponse
    {
        return $this->get('setAffiliateTermsDate', $parameters);
    }

    public function setCategories(array $parameters = []): HttpResponse
    {
        return $this->get('setCategories', $parameters);
    }

    public function setConversionCap(array $parameters = []): HttpResponse
    {
        return $this->get('setConversionCap', $parameters);
    }

    public function setGroups(array $parameters = []): HttpResponse
    {
        return $this->get('setGroups', $parameters);
    }

    public function setMultipleAffiliateApprovals(array $parameters = []): HttpResponse
    {
        return $this->get('setMultipleAffiliateApprovals', $parameters);
    }

    public function setPayout(array $parameters = []): HttpResponse
    {
        return $this->get('setPayout', $parameters);
    }

    public function setRevenue(array $parameters = []): HttpResponse
    {
        return $this->get('setRevenue', $parameters);
    }

    public function setTargetBrowsers(array $parameters = []): HttpResponse
    {
        return $this->get('setTargetBrowsers', $parameters);
    }

    /**
     * Set a list of Countries and/or Regions that an Offer should use for geo-targeting.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTargetCountries(array $parameters = []): HttpResponse
    {
        return $this->get('setTargetCountries', $parameters);
    }

    /**
     * Sets Affiliate Tier Payout for a specific Affiliate Tier/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTierPayout(array $parameters = []): HttpResponse
    {
        return $this->get('setTierPayout', $parameters);
    }

    /**
     * Sets Affiliate Tier Revenue for a specific Affiliate Tier/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTierRevenue(array $parameters = []): HttpResponse
    {
        return $this->get('setTierRevenue', $parameters);
    }

    public function unblockAffiliate(array $parameters = []): HttpResponse
    {
        return $this->get('unblockAffiliate', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->get('update', $parameters);
    }

    public function updateApprovalQuestion(array $parameters = []): HttpResponse
    {
        return $this->get('updateApprovalQuestion', $parameters);
    }

    public function updateByRefId(array $parameters = []): HttpResponse
    {
        return $this->get('updateByRefId', $parameters);
    }

    public function updateField(array $parameters = []): HttpResponse
    {
        return $this->get('updateField', $parameters);
    }
}
