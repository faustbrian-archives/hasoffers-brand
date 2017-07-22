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

class Auditor extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Auditor';

    public function findBrandDataAudits(array $parameters = []): HttpResponse
    {
        return $this->get('findBrandDataAudits', $parameters);
    }
}
