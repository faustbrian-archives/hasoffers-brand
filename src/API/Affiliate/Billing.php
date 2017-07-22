<?php

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

class Billing extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'AffiliateBilling';

    public function addInvoiceItem(array $parameters = []): HttpResponse
    {
        return $this->get('addInvoiceItem', $parameters);
    }

    public function createInvoice(array $parameters = []): HttpResponse
    {
        return $this->get('createInvoice', $parameters);
    }

    public function createReceipt(array $parameters = []): HttpResponse
    {
        return $this->get('createReceipt', $parameters);
    }

    public function findAllInvoices(array $parameters = []): HttpResponse
    {
        return $this->get('findAllInvoices', $parameters);
    }

    public function findAllInvoicesByIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllInvoicesByIds', $parameters);
    }

    public function findAllReceipts(array $parameters = []): HttpResponse
    {
        return $this->get('findAllReceipts', $parameters);
    }

    public function findAllReceiptsByIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllReceiptsByIds', $parameters);
    }

    public function findInvoiceById(array $parameters = []): HttpResponse
    {
        return $this->get('findInvoiceById', $parameters);
    }

    public function findInvoiceStats(array $parameters = []): HttpResponse
    {
        return $this->get('findInvoiceStats', $parameters);
    }

    public function findLastInvoice(array $parameters = []): HttpResponse
    {
        return $this->get('findLastInvoice', $parameters);
    }

    public function findLastReceipt(array $parameters = []): HttpResponse
    {
        return $this->get('findLastReceipt', $parameters);
    }

    public function findReceiptById(array $parameters = []): HttpResponse
    {
        return $this->get('findReceiptById', $parameters);
    }

    public function generateInvoices(array $parameters = []): HttpResponse
    {
        return $this->get('generateInvoices', $parameters);
    }

    public function getAccountBalance(array $parameters = []): HttpResponse
    {
        return $this->get('getAccountBalance', $parameters);
    }

    public function getAccountHistory(array $parameters = []): HttpResponse
    {
        return $this->get('getAccountHistory', $parameters);
    }

    public function getNextStartDate(array $parameters = []): HttpResponse
    {
        return $this->get('getNextStartDate', $parameters);
    }

    public function getOutstandingInvoices(array $parameters = []): HttpResponse
    {
        return $this->get('getOutstandingInvoices', $parameters);
    }

    public function getPayoutTotals(array $parameters = []): HttpResponse
    {
        return $this->get('getPayoutTotals', $parameters);
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

    public function updateReceipt(array $parameters = []): HttpResponse
    {
        return $this->get('updateReceipt', $parameters);
    }

    public function updateReceiptField(array $parameters = []): HttpResponse
    {
        return $this->get('updateReceiptField', $parameters);
    }

    public function updateTaxInfo(array $parameters = []): HttpResponse
    {
        return $this->get('updateTaxInfo', $parameters);
    }
}
