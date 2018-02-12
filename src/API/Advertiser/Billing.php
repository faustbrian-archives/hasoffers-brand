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

namespace BrianFaust\HasOffers\Brand\API\Advertiser;

use BrianFaust\HasOffers\Brand\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Billing extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'AdvertiserBilling';

    public function addInvoiceItem(array $parameters = []): HttpResponse
    {
        return $this->get('addInvoiceItem', $parameters);
    }

    public function createInvoice(array $parameters = []): HttpResponse
    {
        return $this->get('createInvoice', $parameters);
    }

    public function findAllInvoices(array $parameters = []): HttpResponse
    {
        return $this->get('findAllInvoices', $parameters);
    }

    public function findAllInvoicesByIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllInvoicesByIds', $parameters);
    }

    public function findInvoiceById(array $parameters = []): HttpResponse
    {
        return $this->get('findInvoiceById', $parameters);
    }

    public function findInvoiceStats(array $parameters = []): HttpResponse
    {
        return $this->get('findInvoiceStats', $parameters);
    }

    public function getNextStartDate(array $parameters = []): HttpResponse
    {
        return $this->get('getNextStartDate', $parameters);
    }

    public function removeInvoiceItem(array $parameters = []): HttpResponse
    {
        return $this->get('removeInvoiceItem', $parameters);
    }

    public function updateInvoice(array $parameters = []): HttpResponse
    {
        return $this->get('updateInvoice', $parameters);
    }

    public function updateInvoiceField(array $parameters = []): HttpResponse
    {
        return $this->get('updateInvoiceField', $parameters);
    }

    public function updateTaxInfo(array $parameters = []): HttpResponse
    {
        return $this->get('updateTaxInfo', $parameters);
    }
}
