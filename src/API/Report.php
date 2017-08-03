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

class Report extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Report';

    public function getActiveCurrencies(array $parameters = []): HttpResponse
    {
        return $this->get('getActiveCurrencies', $parameters);
    }

    public function getAffiliateCommissions(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliateCommissions', $parameters);
    }

    public function getConversions(array $parameters = []): HttpResponse
    {
        return $this->get('getConversions', $parameters);
    }

    public function getManagerCommissions(array $parameters = []): HttpResponse
    {
        return $this->get('getManagerCommissions', $parameters);
    }

    public function getModSummaryLogs(array $parameters = []): HttpResponse
    {
        return $this->get('getModSummaryLogs', $parameters);
    }

    public function getReferrals(array $parameters = []): HttpResponse
    {
        return $this->get('getReferrals', $parameters);
    }

    public function getStats(array $parameters = []): HttpResponse
    {
        return $this->get('getStats', $parameters);
    }

    public function getSubscriptions(array $parameters = []): HttpResponse
    {
        return $this->get('getSubscriptions', $parameters);
    }
}
