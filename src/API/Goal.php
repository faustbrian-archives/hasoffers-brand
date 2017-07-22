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

class Goal extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Goal';

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

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function generateTracking(array $parameters = []): HttpResponse
    {
        return $this->get('generateTracking', $parameters);
    }

    public function getPayouts(array $parameters = []): HttpResponse
    {
        return $this->get('getPayouts', $parameters);
    }

    public function getRevenues(array $parameters = []): HttpResponse
    {
        return $this->get('getRevenues', $parameters);
    }

    public function getTierPayouts(array $parameters = []): HttpResponse
    {
        return $this->get('getTierPayouts', $parameters);
    }

    public function getTierRevenues(array $parameters = []): HttpResponse
    {
        return $this->get('getTierRevenues', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->get('update', $parameters);
    }

    public function updateField(array $parameters = []): HttpResponse
    {
        return $this->get('updateField', $parameters);
    }
}
