<?php

declare(strict_types=1);

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\HasOffers\Brand\API;

use Plients\Http\HttpResponse;

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
