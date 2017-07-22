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

class Authentication extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Authentication';

    public function findUserByCredentials(array $parameters = []): HttpResponse
    {
        return $this->get('findUserByCredentials', $parameters);
    }

    public function findUserByToken(array $parameters = []): HttpResponse
    {
        return $this->get('findUserByToken', $parameters);
    }
}
