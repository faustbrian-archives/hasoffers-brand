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

namespace Plients\HasOffers\Brand\API\Offer;

use Plients\HasOffers\Brand\API\AbstractAPI;
use Plients\Http\HttpResponse;

class Targeting extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'OfferTargeting';

    public function addTargetRuleToOffer(array $parameters = []): HttpResponse
    {
        return $this->get('addTargetRuleToOffer', $parameters);
    }

    public function createTargetRule(array $parameters = []): HttpResponse
    {
        return $this->get('createTargetRule', $parameters);
    }

    public function deleteTargetRule(array $parameters = []): HttpResponse
    {
        return $this->get('deleteTargetRule', $parameters);
    }

    public function findTargetRules(array $parameters = []): HttpResponse
    {
        return $this->get('findTargetRules', $parameters);
    }

    public function getActiveOfferIdsUsingRule(array $parameters = []): HttpResponse
    {
        return $this->get('getActiveOfferIdsUsingRule', $parameters);
    }

    public function getActiveUsesOfRule(array $parameters = []): HttpResponse
    {
        return $this->get('getActiveUsesOfRule', $parameters);
    }

    public function getRuleTargetingForOffer(array $parameters = []): HttpResponse
    {
        return $this->get('getRuleTargetingForOffer', $parameters);
    }

    public function removeTargetRuleFromOffer(array $parameters = []): HttpResponse
    {
        return $this->get('removeTargetRuleFromOffer', $parameters);
    }

    public function updateTargetRule(array $parameters = []): HttpResponse
    {
        return $this->get('updateTargetRule', $parameters);
    }

    public function updateTargetRuleOfferAction(array $parameters = []): HttpResponse
    {
        return $this->get('updateTargetRuleOfferAction', $parameters);
    }
}
