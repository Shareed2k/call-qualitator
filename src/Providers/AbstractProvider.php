<?php
/**
 * Created by PhpStorm.
 * User: shareed2k
 * Date: 12/08/18
 * Time: 10:44
 */

namespace Shareed2k\CallQualitator\Providers;

use Shareed2k\CallQualitator\Contracts\Provider as ProviderContract;

abstract class AbstractProvider implements ProviderContract
{
    protected $provider;

    public function getProvider() {
        return $this->provider;
    }
}