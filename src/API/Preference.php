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

class Preference extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'Preference';

    public function delete(array $parameters = []): HttpResponse
    {
        return $this->get('delete', $parameters);
    }

    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->get('findAll', $parameters);
    }

    public function findByName(array $parameters = []): HttpResponse
    {
        return $this->get('findByName', $parameters);
    }

    public function findPreferenceByNameTypeAndAccountId(array $parameters = []): HttpResponse
    {
        return $this->get('findPreferenceByNameTypeAndAccountId', $parameters);
    }

    public function findPreferenceByNameTypeAndUserId(array $parameters = []): HttpResponse
    {
        return $this->get('findPreferenceByNameTypeAndUserId', $parameters);
    }

    public function findPreferencesByTypeAndAccountId(array $parameters = []): HttpResponse
    {
        return $this->get('findPreferencesByTypeAndAccountId', $parameters);
    }

    public function findPreferencesByTypeAndUserId(array $parameters = []): HttpResponse
    {
        return $this->get('findPreferencesByTypeAndUserId', $parameters);
    }

    public function getValue(array $parameters = []): HttpResponse
    {
        return $this->get('getValue', $parameters);
    }

    public function isEnabled(array $parameters = []): HttpResponse
    {
        return $this->get('isEnabled', $parameters);
    }

    public function setAccountPreference(array $parameters = []): HttpResponse
    {
        return $this->get('setAccountPreference', $parameters);
    }

    public function setUserPreference(array $parameters = []): HttpResponse
    {
        return $this->get('setUserPreference', $parameters);
    }

    public function setValue(array $parameters = []): HttpResponse
    {
        return $this->get('setValue', $parameters);
    }

    public function updateAllUserPreferences(array $parameters = []): HttpResponse
    {
        return $this->get('updateAllUserPreferences', $parameters);
    }

    public function userPreferenceUpdateTermsAndConditions(array $parameters = []): HttpResponse
    {
        return $this->get('userPreferenceUpdateTermsAndConditions', $parameters);
    }
}
