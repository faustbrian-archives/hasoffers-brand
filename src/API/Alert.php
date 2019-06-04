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

class Alert extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Alert';

    public function create(array $parameters = []): HttpResponse
    {
        return $this->get('create', $parameters);
    }

    public function createAffiliateUserAlert(array $parameters = []): HttpResponse
    {
        return $this->get('createAffiliateUserAlert', $parameters);
    }

    public function createEmployeeAlert(array $parameters = []): HttpResponse
    {
        return $this->get('createEmployeeAlert', $parameters);
    }

    public function dismissAffiliateUserAlert(array $parameters = []): HttpResponse
    {
        return $this->get('dismissAffiliateUserAlert', $parameters);
    }

    public function dismissAllAffiliateUserAlerts(array $parameters = []): HttpResponse
    {
        return $this->get('dismissAllAffiliateUserAlerts', $parameters);
    }

    public function dismissAllEmployeeAlerts(array $parameters = []): HttpResponse
    {
        return $this->get('dismissAllEmployeeAlerts', $parameters);
    }

    public function dismissEmployeeAlert(array $parameters = []): HttpResponse
    {
        return $this->get('dismissEmployeeAlert', $parameters);
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

    public function getAffiliateUserAlerts(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliateUserAlerts', $parameters);
    }

    public function getEmployeeAlerts(array $parameters = []): HttpResponse
    {
        return $this->get('getEmployeeAlerts', $parameters);
    }

    public function sendToAffiliateUsers(array $parameters = []): HttpResponse
    {
        return $this->get('sendToAffiliateUsers', $parameters);
    }

    public function sendToEmployees(array $parameters = []): HttpResponse
    {
        return $this->get('sendToEmployees', $parameters);
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
