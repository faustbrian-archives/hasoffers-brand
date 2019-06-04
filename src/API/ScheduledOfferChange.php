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

class ScheduledOfferChange extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'ScheduledOfferChange';

    public function create(array $parameters = []): HttpResponse
    {
        return $this->get('create', $parameters);
    }

    public function findScheduleById(array $parameters = []): HttpResponse
    {
        return $this->get('findScheduleById', $parameters);
    }

    public function findSchedules(array $parameters = []): HttpResponse
    {
        return $this->get('findSchedules', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->get('update', $parameters);
    }
}
