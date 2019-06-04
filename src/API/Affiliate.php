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

class Affiliate extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Affiliate';

    public function addAccountNote(array $parameters = []): HttpResponse
    {
        return $this->get('addAccountNote', $parameters);
    }

    public function adjustAffiliateClicks(array $parameters = []): HttpResponse
    {
        return $this->get('adjustAffiliateClicks', $parameters);
    }

    public function block(array $parameters = []): HttpResponse
    {
        return $this->get('block', $parameters);
    }

    public function create(array $parameters = []): HttpResponse
    {
        return $this->get('create', $parameters);
    }

    public function createSignupQuestion(array $parameters = []): HttpResponse
    {
        return $this->get('createSignupQuestion', $parameters);
    }

    public function createSignupQuestionAnswer(array $parameters = []): HttpResponse
    {
        return $this->get('createSignupQuestionAnswer', $parameters);
    }

    public function disableFraudAlert(array $parameters = []): HttpResponse
    {
        return $this->get('disableFraudAlert', $parameters);
    }

    public function enableFraudAlert(array $parameters = []): HttpResponse
    {
        return $this->get('enableFraudAlert', $parameters);
    }

    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllByIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findAllFraudAlerts(array $parameters = []): HttpResponse
    {
        return $this->get('findAllFraudAlerts', $parameters);
    }

    public function findAllIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllIds', $parameters);
    }

    public function findAllIdsByAccountManagerId(array $parameters = []): HttpResponse
    {
        return $this->get('findAllIdsByAccountManagerId', $parameters);
    }

    public function findAllPendingUnassignedAffiliateIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllPendingUnassignedAffiliateIds', $parameters);
    }

    public function findAllPendingUnassignedAffiliates(array $parameters = []): HttpResponse
    {
        return $this->get('findAllPendingUnassignedAffiliates', $parameters);
    }

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function findList(array $parameters = []): HttpResponse
    {
        return $this->get('findList', $parameters);
    }

    public function getAccountManager(array $parameters = []): HttpResponse
    {
        return $this->get('getAccountManager', $parameters);
    }

    public function getAccountNotes(array $parameters = []): HttpResponse
    {
        return $this->get('getAccountNotes', $parameters);
    }

    public function getAffiliateTier(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliateTier', $parameters);
    }

    public function getApprovedOfferIds(array $parameters = []): HttpResponse
    {
        return $this->get('getApprovedOfferIds', $parameters);
    }

    public function getBlockedOfferIds(array $parameters = []): HttpResponse
    {
        return $this->get('getBlockedOfferIds', $parameters);
    }

    public function getBlockedReasons(array $parameters = []): HttpResponse
    {
        return $this->get('getBlockedReasons', $parameters);
    }

    /**
     * Gets the original/creator Affiliate User for an Affiliate account.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getCreatorUser(array $parameters = []): HttpResponse
    {
        return $this->get('getCreatorUser', $parameters);
    }

    public function getOfferConversionCaps(array $parameters = []): HttpResponse
    {
        return $this->get('getOfferConversionCaps', $parameters);
    }

    public function getOfferHostnames(array $parameters = []): HttpResponse
    {
        return $this->get('getOfferHostnames', $parameters);
    }

    public function getOfferPayouts(array $parameters = []): HttpResponse
    {
        return $this->get('getOfferPayouts', $parameters);
    }

    public function getOfferPayoutsAll(array $parameters = []): HttpResponse
    {
        return $this->get('getOfferPayoutsAll', $parameters);
    }

    public function getOfferPixels(array $parameters = []): HttpResponse
    {
        return $this->get('getOfferPixels', $parameters);
    }

    public function getOwnersAffiliateAccountId(array $parameters = []): HttpResponse
    {
        return $this->get('getOwnersAffiliateAccountId', $parameters);
    }

    public function getPaymentMethods(array $parameters = []): HttpResponse
    {
        return $this->get('getPaymentMethods', $parameters);
    }

    public function getReferralAffiliateIds(array $parameters = []): HttpResponse
    {
        return $this->get('getReferralAffiliateIds', $parameters);
    }

    public function getReferralCommission(array $parameters = []): HttpResponse
    {
        return $this->get('getReferralCommission', $parameters);
    }

    public function getReferringAffiliate(array $parameters = []): HttpResponse
    {
        return $this->get('getReferringAffiliate', $parameters);
    }

    public function getSignupAnswers(array $parameters = []): HttpResponse
    {
        return $this->get('getSignupAnswers', $parameters);
    }

    public function getSignupQuestions(array $parameters = []): HttpResponse
    {
        return $this->get('getSignupQuestions', $parameters);
    }

    public function getUnapprovedOfferIds(array $parameters = []): HttpResponse
    {
        return $this->get('getUnapprovedOfferIds', $parameters);
    }

    public function getUnblockedOfferIds(array $parameters = []): HttpResponse
    {
        return $this->get('getUnblockedOfferIds', $parameters);
    }

    /**
     * Delete a custom Affiliate Referral Commission rate/amount setting for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeCustomReferralCommission(array $parameters = []): HttpResponse
    {
        return $this->get('removeCustomReferralCommission', $parameters);
    }

    /**
     * Set the custom Affiliate Referral Commission amounts/rates for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setCustomReferralCommission(array $parameters = []): HttpResponse
    {
        return $this->get('setCustomReferralCommission', $parameters);
    }

    public function signup(array $parameters = []): HttpResponse
    {
        return $this->get('signup', $parameters);
    }

    public function simpleSearch(array $parameters = []): HttpResponse
    {
        return $this->get('simpleSearch', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->get('update', $parameters);
    }

    public function updateAccountNote(array $parameters = []): HttpResponse
    {
        return $this->get('updateAccountNote', $parameters);
    }

    public function updateByRefId(array $parameters = []): HttpResponse
    {
        return $this->get('updateByRefId', $parameters);
    }

    public function updateField(array $parameters = []): HttpResponse
    {
        return $this->get('updateField', $parameters);
    }

    public function updatePaymentMethodCheck(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodCheck', $parameters);
    }

    public function updatePaymentMethodDirectDeposit(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodDirectDeposit', $parameters);
    }

    public function updatePaymentMethodOther(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodOther', $parameters);
    }

    public function updatePaymentMethodPayoneer(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodPayoneer', $parameters);
    }

    public function updatePaymentMethodPaypal(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodPaypal', $parameters);
    }

    public function updatePaymentMethodPayQuicker(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodPayQuicker', $parameters);
    }

    public function updatePaymentMethodWire(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodWire', $parameters);
    }

    public function updateSignupQuestion(array $parameters = []): HttpResponse
    {
        return $this->get('updateSignupQuestion', $parameters);
    }

    public function updateSignupQuestionAnswer(array $parameters = []): HttpResponse
    {
        return $this->get('updateSignupQuestionAnswer', $parameters);
    }
}
