<?php

declare(strict_types=1);

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Brand\API;

use BrianFaust\Http\HttpResponse;

class Advertiser extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Advertiser';

    public function addAccountNote(array $parameters = []): HttpResponse
    {
        return $this->get('addAccountNote', $parameters);
    }

    public function block(array $parameters = []): HttpResponse
    {
        return $this->get('block', $parameters);
    }

    public function blockAffiliate(array $parameters = []): HttpResponse
    {
        return $this->get('blockAffiliate', $parameters);
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

    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllByIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findAllIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllIds', $parameters);
    }

    public function findAllIdsByAccountManagerId(array $parameters = []): HttpResponse
    {
        return $this->get('findAllIdsByAccountManagerId', $parameters);
    }

    public function findAllPendingUnassignedAdvertiserIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllPendingUnassignedAdvertiserIds', $parameters);
    }

    public function findAllPendingUnassignedAdvertisers(array $parameters = []): HttpResponse
    {
        return $this->get('findAllPendingUnassignedAdvertisers', $parameters);
    }

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function getAccountBalance(array $parameters = []): HttpResponse
    {
        return $this->get('getAccountBalance', $parameters);
    }

    public function getAccountManager(array $parameters = []): HttpResponse
    {
        return $this->get('getAccountManager', $parameters);
    }

    public function getAccountNotes(array $parameters = []): HttpResponse
    {
        return $this->get('getAccountNotes', $parameters);
    }

    public function getBlockedAffiliateIds(array $parameters = []): HttpResponse
    {
        return $this->get('getBlockedAffiliateIds', $parameters);
    }

    public function getBlockedReasons(array $parameters = []): HttpResponse
    {
        return $this->get('getBlockedReasons', $parameters);
    }

    public function getCreatorUser(array $parameters = []): HttpResponse
    {
        return $this->get('getCreatorUser', $parameters);
    }

    public function getOverview(array $parameters = []): HttpResponse
    {
        return $this->get('getOverview', $parameters);
    }

    public function getOwnersAdvertiserAccountId(array $parameters = []): HttpResponse
    {
        return $this->get('getOwnersAdvertiserAccountId', $parameters);
    }

    public function getSignupAnswers(array $parameters = []): HttpResponse
    {
        return $this->get('getSignupAnswers', $parameters);
    }

    public function getSignupQuestions(array $parameters = []): HttpResponse
    {
        return $this->get('getSignupQuestions', $parameters);
    }

    public function getUnblockedAffiliateIds(array $parameters = []): HttpResponse
    {
        return $this->get('getUnblockedAffiliateIds', $parameters);
    }

    public function signup(array $parameters = []): HttpResponse
    {
        return $this->get('signup', $parameters);
    }

    public function unblockAffiliate(array $parameters = []): HttpResponse
    {
        return $this->get('unblockAffiliate', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->get('update', $parameters);
    }

    public function updateAccountNote(array $parameters = []): HttpResponse
    {
        return $this->get('updateAccountNote', $parameters);
    }

    public function updateField(array $parameters = []): HttpResponse
    {
        return $this->get('updateField', $parameters);
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
