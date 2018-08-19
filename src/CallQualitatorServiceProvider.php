<?php
/**
 * Created by PhpStorm.
 * User: shareed2k
 * Date: 12/08/18
 * Time: 10:35
 */

namespace Shareed2k\CallQualitator;


use Illuminate\Support\ServiceProvider;
use Shareed2k\CallQualitator\Contracts\Factory;

class CallQualitatorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Factory::class, function ($app) {
            return new QualitatorManager($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Factory::class];
    }
}