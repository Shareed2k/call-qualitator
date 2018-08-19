<?php
/**
 * Created by PhpStorm.
 * User: shareed2k
 * Date: 12/08/18
 * Time: 10:29
 */

namespace Shareed2k\CallQualitator\Facades;


use Illuminate\Support\Facades\Facade;
use Shareed2k\CallQualitator\Contracts\Factory;

class Qualitator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}