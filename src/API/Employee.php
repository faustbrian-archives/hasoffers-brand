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

class Employee extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Employee';

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

    public function findAllAdvertiserManagers(array $parameters = []): HttpResponse
    {
        return $this->get('findAllAdvertiserManagers', $parameters);
    }

    public function findAllAffiliateManagers(array $parameters = []): HttpResponse
    {
        return $this->get('findAllAffiliateManagers', $parameters);
    }

    public function findAllByIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findAllByPermission(array $parameters = []): HttpResponse
    {
        return $this->get('findAllByPermission', $parameters);
    }

    public function findAllIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllIds', $parameters);
    }

    public function findAllIdsByPermission(array $parameters = []): HttpResponse
    {
        return $this->get('findAllIdsByPermission', $parameters);
    }

    public function findBrandOwnerInformation(array $parameters = []): HttpResponse
    {
        return $this->get('findBrandOwnerInformation', $parameters);
    }

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function getCommission(array $parameters = []): HttpResponse
    {
        return $this->get('getCommission', $parameters);
    }

    public function getHOMessage(array $parameters = []): HttpResponse
    {
        return $this->get('getHOMessage', $parameters);
    }

    public function grantAccess(array $parameters = []): HttpResponse
    {
        return $this->get('grantAccess', $parameters);
    }

    public function removeAccess(array $parameters = []): HttpResponse
    {
        return $this->get('removeAccess', $parameters);
    }

    /**
     * Removes the custom Employee Commission amount/rate for an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeCustomCommission(array $parameters = []): HttpResponse
    {
        return $this->get('removeCustomCommission', $parameters);
    }

    public function resetPassword(array $parameters = []): HttpResponse
    {
        return $this->get('resetPassword', $parameters);
    }

    /**
     * Set a custom commission amount/rate for an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setCustomCommission(array $parameters = []): HttpResponse
    {
        return $this->get('setCustomCommission', $parameters);
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
