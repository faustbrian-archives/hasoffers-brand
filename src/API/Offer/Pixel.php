<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Brand\API\Offer;

use BrianFaust\HasOffers\Brand\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Pixel extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'OfferPixel';

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

    public function getAllowedTypes(array $parameters = []): HttpResponse
    {
        return $this->get('getAllowedTypes', $parameters);
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
