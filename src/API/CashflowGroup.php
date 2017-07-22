<?php

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

class CashflowGroup extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'CashflowGroup';

    public function createCashflowGroup(array $parameters = []): HttpResponse
    {
        return $this->get('createCashflowGroup', $parameters);
    }

    public function findCashflowGroupById(array $parameters = []): HttpResponse
    {
        return $this->get('findCashflowGroupById', $parameters);
    }

    public function findCashflowGroups(array $parameters = []): HttpResponse
    {
        return $this->get('findCashflowGroups', $parameters);
    }

    public function findCashflowGroupUsage(array $parameters = []): HttpResponse
    {
        return $this->get('findCashflowGroupUsage', $parameters);
    }

    public function getCashflowRuleFieldDefinitions(array $parameters = []): HttpResponse
    {
        return $this->get('getCashflowRuleFieldDefinitions', $parameters);
    }

    public function getGoalPayoutGroupsForGoal(array $parameters = []): HttpResponse
    {
        return $this->get('getGoalPayoutGroupsForGoal', $parameters);
    }

    public function getGoalRevenueGroupsForGoal(array $parameters = []): HttpResponse
    {
        return $this->get('getGoalRevenueGroupsForGoal', $parameters);
    }

    public function getOfferPayoutGroupsForOffer(array $parameters = []): HttpResponse
    {
        return $this->get('getOfferPayoutGroupsForOffer', $parameters);
    }

    public function getOfferRevenueGroupsForOffer(array $parameters = []): HttpResponse
    {
        return $this->get('getOfferRevenueGroupsForOffer', $parameters);
    }

    public function replaceGoalPayoutGroupsForGoal(array $parameters = []): HttpResponse
    {
        return $this->get('replaceGoalPayoutGroupsForGoal', $parameters);
    }

    public function replaceGoalRevenueGroupsForGoal(array $parameters = []): HttpResponse
    {
        return $this->get('replaceGoalRevenueGroupsForGoal', $parameters);
    }

    public function replaceOfferPayoutGroupsForOffer(array $parameters = []): HttpResponse
    {
        return $this->get('replaceOfferPayoutGroupsForOffer', $parameters);
    }

    public function replaceOfferRevenueGroupsForOffer(array $parameters = []): HttpResponse
    {
        return $this->get('replaceOfferRevenueGroupsForOffer', $parameters);
    }

    public function updateCashflowGroup(array $parameters = []): HttpResponse
    {
        return $this->get('updateCashflowGroup', $parameters);
    }
}
