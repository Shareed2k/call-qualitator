<?php
/**
 * Created by PhpStorm.
 * User: shareed2k
 * Date: 12/08/18
 * Time: 10:30
 */

namespace Shareed2k\CallQualitator\Contracts;


interface Factory
{
    public function driver($driver = null);
}