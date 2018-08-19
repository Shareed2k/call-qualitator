<?php
/**
 * Created by PhpStorm.
 * User: shareed2k
 * Date: 12/08/18
 * Time: 10:37
 */

namespace Shareed2k\CallQualitator;


use Illuminate\Support\Manager;
use InvalidArgumentException;
use Shareed2k\CallQualitator\Providers\ITestProvider;

/**
 * Class QualitatorManager
 * @package Shareed2k\CallQualitator
 */
class QualitatorManager extends Manager implements Contracts\Factory
{
    /**
     * Get a driver instance.
     *
     * @param  string  $driver
     * @return mixed
     */
    public function with($driver)
    {
        return $this->driver($driver);
    }

    /**
     * Create an instance of the specified driver.
     *
     * @return \Shareed2k\CallQualitator\Providers\AbstractProvider
     */
    protected function createITestDriver()
    {
        $config = $this->app['config']['qualitator.itest'];

        return $this->buildProvider(
            ITestProvider::class, $config
        );
    }

    /**
     * Build an Qualitator provider instance.
     *
     * @param  string  $provider
     * @param  array  $config
     * @return \Shareed2k\CallQualitator\Providers\AbstractProvider
     */
    public function buildProvider($provider, $config)
    {
        return new $provider($config);
    }

    /**
     * Get the default driver name.
     *
     * @throws \InvalidArgumentException
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        throw new InvalidArgumentException('No Call Qualitator driver was specified.');
    }
}