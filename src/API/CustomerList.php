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

class CustomerList extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'CustomerList';

    public function addCustomerAttribute(array $parameters = []): HttpResponse
    {
        return $this->get('addCustomerAttribute', $parameters);
    }

    public function addListAttribute(array $parameters = []): HttpResponse
    {
        return $this->get('addListAttribute', $parameters);
    }

    public function createList(array $parameters = []): HttpResponse
    {
        return $this->get('createList', $parameters);
    }

    public function findAllCustomers(array $parameters = []): HttpResponse
    {
        return $this->get('findAllCustomers', $parameters);
    }

    public function findAllLists(array $parameters = []): HttpResponse
    {
        return $this->get('findAllLists', $parameters);
    }

    public function findAllListsByIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllListsByIds', $parameters);
    }

    public function findAllSubscriptions(array $parameters = []): HttpResponse
    {
        return $this->get('findAllSubscriptions', $parameters);
    }

    public function findCustomerById(array $parameters = []): HttpResponse
    {
        return $this->get('findCustomerById', $parameters);
    }

    public function findListById(array $parameters = []): HttpResponse
    {
        return $this->get('findListById', $parameters);
    }

    public function findSubscriptionById(array $parameters = []): HttpResponse
    {
        return $this->get('findSubscriptionById', $parameters);
    }

    public function getListAttributes(array $parameters = []): HttpResponse
    {
        return $this->get('getListAttributes', $parameters);
    }

    public function removeCustomerAttribute(array $parameters = []): HttpResponse
    {
        return $this->get('removeCustomerAttribute', $parameters);
    }

    public function removeListAttribute(array $parameters = []): HttpResponse
    {
        return $this->get('removeListAttribute', $parameters);
    }

    public function updateCustomer(array $parameters = []): HttpResponse
    {
        return $this->get('updateCustomer', $parameters);
    }

    public function updateCustomerAttribute(array $parameters = []): HttpResponse
    {
        return $this->get('updateCustomerAttribute', $parameters);
    }

    public function updateList(array $parameters = []): HttpResponse
    {
        return $this->get('updateList', $parameters);
    }

    public function updateListAttribute(array $parameters = []): HttpResponse
    {
        return $this->get('updateListAttribute', $parameters);
    }

    public function updateListField(array $parameters = []): HttpResponse
    {
        return $this->get('updateListField', $parameters);
    }

    public function updateSubscription(array $parameters = []): HttpResponse
    {
        return $this->get('updateSubscription', $parameters);
    }
}
