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

namespace BrianFaust\HasOffers\Brand\API\Offer;

use BrianFaust\Http\HttpResponse;
use BrianFaust\HasOffers\Brand\API\AbstractAPI;

class DisabledLink extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'OfferDisabledLink';

    public function delete(array $parameters = []): HttpResponse
    {
        return $this->get('delete', $parameters);
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

    public function save(array $parameters = []): HttpResponse
    {
        return $this->get('save', $parameters);
    }
}
