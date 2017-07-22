<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\API\Conversion;

use BrianFaust\HasOffers\Brand\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Meta extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'ConversionMeta';

    public function create(array $parameters = []): HttpResponse
    {
        return $this->get('create', $parameters);
    }

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->get('update', $parameters);
    }
}
