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

class Conversion extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Conversion';

    public function create(array $parameters = []): HttpResponse
    {
        return $this->get('create', $parameters);
    }

    public function findAddedConversions(array $parameters = []): HttpResponse
    {
        return $this->get('findAddedConversions', $parameters);
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

    public function findUpdatedConversions(array $parameters = []): HttpResponse
    {
        return $this->get('findUpdatedConversions', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->get('update', $parameters);
    }

    public function updateField(array $parameters = []): HttpResponse
    {
        return $this->get('updateField', $parameters);
    }

    public function updateMeta(array $parameters = []): HttpResponse
    {
        return $this->get('updateMeta', $parameters);
    }

    public function updateStatus(array $parameters = []): HttpResponse
    {
        return $this->get('updateStatus', $parameters);
    }
}
