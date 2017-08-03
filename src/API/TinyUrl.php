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

class TinyUrl extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'TinyUrl';

    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->get('findAll', $parameters);
    }

    public function updateRedirect(array $parameters = []): HttpResponse
    {
        return $this->get('updateRedirect', $parameters);
    }
}
