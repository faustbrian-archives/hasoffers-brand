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

namespace BrianFaust\HasOffers\Brand\API\Affiliate;

use BrianFaust\HasOffers\Brand\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class User extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'AffiliateUser';

    public function checkPassword(array $parameters = []): HttpResponse
    {
        return $this->get('checkPassword', $parameters);
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

    public function findAllIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllIds', $parameters);
    }

    public function findAllIdsByAffiliateId(array $parameters = []): HttpResponse
    {
        return $this->get('findAllIdsByAffiliateId', $parameters);
    }

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function grantAccess(array $parameters = []): HttpResponse
    {
        return $this->get('grantAccess', $parameters);
    }

    public function removeAccess(array $parameters = []): HttpResponse
    {
        return $this->get('removeAccess', $parameters);
    }

    public function resetPassword(array $parameters = []): HttpResponse
    {
        return $this->get('resetPassword', $parameters);
    }

    public function uniqueEmail(array $parameters = []): HttpResponse
    {
        return $this->get('uniqueEmail', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->get('update', $parameters);
    }

    public function updateField(array $parameters = []): HttpResponse
    {
        return $this->get('updateField', $parameters);
    }
}
