<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Brand\API\Custom;

use BrianFaust\HasOffers\Brand\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Page extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'CustomPage';

    public function find(array $parameters = []): HttpResponse
    {
        return $this->get('find', $parameters);
    }

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }
}
