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

class Application extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Application';

    public function addAffiliateTier(array $parameters = []): HttpResponse
    {
        return $this->get('addAffiliateTier', $parameters);
    }

    public function addHostname(array $parameters = []): HttpResponse
    {
        return $this->get('addHostname', $parameters);
    }

    public function addOfferCategory(array $parameters = []): HttpResponse
    {
        return $this->get('addOfferCategory', $parameters);
    }

    public function addOfferGroup(array $parameters = []): HttpResponse
    {
        return $this->get('addOfferGroup', $parameters);
    }

    public function changeAdvertiserAPIKey(array $parameters = []): HttpResponse
    {
        return $this->get('changeAdvertiserAPIKey', $parameters);
    }

    public function changeAffiliateAPIKey(array $parameters = []): HttpResponse
    {
        return $this->get('changeAffiliateAPIKey', $parameters);
    }

    public function changeNetworkAPIKey(array $parameters = []): HttpResponse
    {
        return $this->get('changeNetworkAPIKey', $parameters);
    }

    public function createAdvertiserAPIKey(array $parameters = []): HttpResponse
    {
        return $this->get('createAdvertiserAPIKey', $parameters);
    }

    public function createAffiliateAPIKey(array $parameters = []): HttpResponse
    {
        return $this->get('createAffiliateAPIKey', $parameters);
    }

    public function decryptUnsubHash(array $parameters = []): HttpResponse
    {
        return $this->get('decryptUnsubHash', $parameters);
    }

    public function findAdvertiserAPIKey(array $parameters = []): HttpResponse
    {
        return $this->get('findAdvertiserAPIKey', $parameters);
    }

    public function findAdvertiserAPIKeyByAdvertiserId(array $parameters = []): HttpResponse
    {
        return $this->get('findAdvertiserAPIKeyByAdvertiserId', $parameters);
    }

    public function findAffiliateAPIKey(array $parameters = []): HttpResponse
    {
        return $this->get('findAffiliateAPIKey', $parameters);
    }

    public function findAffiliateAPIKeyByAffiliateId(array $parameters = []): HttpResponse
    {
        return $this->get('findAffiliateAPIKeyByAffiliateId', $parameters);
    }

    public function findAllAdvertiserAPIKeys(array $parameters = []): HttpResponse
    {
        return $this->get('findAllAdvertiserAPIKeys', $parameters);
    }

    public function findAllAffiliateAPIKeys(array $parameters = []): HttpResponse
    {
        return $this->get('findAllAffiliateAPIKeys', $parameters);
    }

    public function findAllAffiliateTierAffiliateIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllAffiliateTierAffiliateIds', $parameters);
    }

    public function findAllAffiliateTiers(array $parameters = []): HttpResponse
    {
        return $this->get('findAllAffiliateTiers', $parameters);
    }

    public function findAllBrowsers(array $parameters = []): HttpResponse
    {
        return $this->get('findAllBrowsers', $parameters);
    }

    public function findAllCountries(array $parameters = []): HttpResponse
    {
        return $this->get('findAllCountries', $parameters);
    }

    public function findAllHostnames(array $parameters = []): HttpResponse
    {
        return $this->get('findAllHostnames', $parameters);
    }

    public function findAllOfferCategories(array $parameters = []): HttpResponse
    {
        return $this->get('findAllOfferCategories', $parameters);
    }

    public function findAllOfferCategoryOfferIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllOfferCategoryOfferIds', $parameters);
    }

    public function findAllOfferGroupOfferIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllOfferGroupOfferIds', $parameters);
    }

    public function findAllOfferGroups(array $parameters = []): HttpResponse
    {
        return $this->get('findAllOfferGroups', $parameters);
    }

    public function findAllPermissions(array $parameters = []): HttpResponse
    {
        return $this->get('findAllPermissions', $parameters);
    }

    public function findAllRegions(array $parameters = []): HttpResponse
    {
        return $this->get('findAllRegions', $parameters);
    }

    public function findAllTimezones(array $parameters = []): HttpResponse
    {
        return $this->get('findAllTimezones', $parameters);
    }

    public function findBrowserById(array $parameters = []): HttpResponse
    {
        return $this->get('findBrowserById', $parameters);
    }

    public function findCountryByCode(array $parameters = []): HttpResponse
    {
        return $this->get('findCountryByCode', $parameters);
    }

    public function findPermissionById(array $parameters = []): HttpResponse
    {
        return $this->get('findPermissionById', $parameters);
    }

    public function findPermissionByName(array $parameters = []): HttpResponse
    {
        return $this->get('findPermissionByName', $parameters);
    }

    public function findPermissionsByGroup(array $parameters = []): HttpResponse
    {
        return $this->get('findPermissionsByGroup', $parameters);
    }

    public function findTimezoneById(array $parameters = []): HttpResponse
    {
        return $this->get('findTimezoneById', $parameters);
    }

    public function findUserAuthIps(array $parameters = []): HttpResponse
    {
        return $this->get('findUserAuthIps', $parameters);
    }

    public function generateAllUnsubLinks(array $parameters = []): HttpResponse
    {
        return $this->get('generateAllUnsubLinks', $parameters);
    }

    public function generateUnsubLink(array $parameters = []): HttpResponse
    {
        return $this->get('generateUnsubLink', $parameters);
    }

    public function getAccountInformation(array $parameters = []): HttpResponse
    {
        return $this->get('getAccountInformation', $parameters);
    }

    public function getActiveOfferCategoryCount(array $parameters = []): HttpResponse
    {
        return $this->get('getActiveOfferCategoryCount', $parameters);
    }

    public function getBrand(array $parameters = []): HttpResponse
    {
        return $this->get('getBrand', $parameters);
    }

    public function getBrandInformation(array $parameters = []): HttpResponse
    {
        return $this->get('getBrandInformation', $parameters);
    }

    public function getCountryRegions(array $parameters = []): HttpResponse
    {
        return $this->get('getCountryRegions', $parameters);
    }

    public function getPoFile(array $parameters = []): HttpResponse
    {
        return $this->get('getPoFile', $parameters);
    }

    public function getTimezone(array $parameters = []): HttpResponse
    {
        return $this->get('getTimezone', $parameters);
    }

    public function importAdvertisers(array $parameters = []): HttpResponse
    {
        return $this->get('importAdvertisers', $parameters);
    }

    public function importOffers(array $parameters = []): HttpResponse
    {
        return $this->get('importOffers', $parameters);
    }

    public function resetPassword(array $parameters = []): HttpResponse
    {
        return $this->get('resetPassword', $parameters);
    }

    public function updateAccountInformation(array $parameters = []): HttpResponse
    {
        return $this->get('updateAccountInformation', $parameters);
    }

    public function updateAdvertiserAPIKey(array $parameters = []): HttpResponse
    {
        return $this->get('updateAdvertiserAPIKey', $parameters);
    }

    public function updateAffiliateAPIKey(array $parameters = []): HttpResponse
    {
        return $this->get('updateAffiliateAPIKey', $parameters);
    }

    public function updateAffiliateTier(array $parameters = []): HttpResponse
    {
        return $this->get('updateAffiliateTier', $parameters);
    }

    public function updateBrandEmail(array $parameters = []): HttpResponse
    {
        return $this->get('updateBrandEmail', $parameters);
    }

    public function updateBrandHostname(array $parameters = []): HttpResponse
    {
        return $this->get('updateBrandHostname', $parameters);
    }

    public function updateBrandJumpHostname(array $parameters = []): HttpResponse
    {
        return $this->get('updateBrandJumpHostname', $parameters);
    }

    public function updateBrandJumpHostnameHasSsl(array $parameters = []): HttpResponse
    {
        return $this->get('updateBrandJumpHostnameHasSsl', $parameters);
    }

    public function updateBrandNetworkName(array $parameters = []): HttpResponse
    {
        return $this->get('updateBrandNetworkName', $parameters);
    }

    public function updateHostname(array $parameters = []): HttpResponse
    {
        return $this->get('updateHostname', $parameters);
    }

    public function updateOfferCategory(array $parameters = []): HttpResponse
    {
        return $this->get('updateOfferCategory', $parameters);
    }

    public function updateOfferGroup(array $parameters = []): HttpResponse
    {
        return $this->get('updateOfferGroup', $parameters);
    }

    public function uploadPoFile(array $parameters = []): HttpResponse
    {
        return $this->get('uploadPoFile', $parameters);
    }

    public function validAdvertiserAPIKey(array $parameters = []): HttpResponse
    {
        return $this->get('validAdvertiserAPIKey', $parameters);
    }

    public function validAffiliateAPIKey(array $parameters = []): HttpResponse
    {
        return $this->get('validAffiliateAPIKey', $parameters);
    }

    public function whitelistNetworkAPIIp(array $parameters = []): HttpResponse
    {
        return $this->get('whitelistNetworkAPIIp', $parameters);
    }
}
