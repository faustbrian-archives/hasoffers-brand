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

class RawLog extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'RawLog';

    public function getDownloadLink(array $parameters = []): HttpResponse
    {
        return $this->get('getDownloadLink', $parameters);
    }

    public function getLogExpirations(array $parameters = []): HttpResponse
    {
        return $this->get('getLogExpirations', $parameters);
    }

    public function listDateDirs(array $parameters = []): HttpResponse
    {
        return $this->get('listDateDirs', $parameters);
    }

    public function listLogs(array $parameters = []): HttpResponse
    {
        return $this->get('listLogs', $parameters);
    }
}
