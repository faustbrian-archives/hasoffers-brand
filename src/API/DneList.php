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

class DneList extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'DneList';

    public function addEmail(array $parameters = []): HttpResponse
    {
        return $this->get('addEmail', $parameters);
    }

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

    public function findByOfferId(array $parameters = []): HttpResponse
    {
        return $this->get('findByOfferId', $parameters);
    }

    public function getEmailListCsv(array $parameters = []): HttpResponse
    {
        return $this->get('getEmailListCsv', $parameters);
    }

    public function moveDneList(array $parameters = []): HttpResponse
    {
        return $this->get('moveDneList', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->get('update', $parameters);
    }

    public function upload(array $parameters = []): HttpResponse
    {
        return $this->get('upload', $parameters);
    }
}
