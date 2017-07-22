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

class Environment extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Environment';

    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->get('findAll', $parameters);
    }

    public function findByName(array $parameters = []): HttpResponse
    {
        return $this->get('findByName', $parameters);
    }

    public function getValue(array $parameters = []): HttpResponse
    {
        return $this->get('getValue', $parameters);
    }

    public function isEnabled(array $parameters = []): HttpResponse
    {
        return $this->get('isEnabled', $parameters);
    }

    public function setValue(array $parameters = []): HttpResponse
    {
        return $this->get('setValue', $parameters);
    }
}
