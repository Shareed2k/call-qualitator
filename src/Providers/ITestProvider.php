<?php
/**
 * Created by PhpStorm.
 * User: shareed2k
 * Date: 12/08/18
 * Time: 10:46
 */

namespace Shareed2k\CallQualitator\Providers;


use Shareed2k\iTest\Client;

class ITestProvider extends AbstractProvider implements ProviderInterface
{
    public function __construct(array $config)
    {
        $this->provider = new Client($config['email'], $config['pass']);
    }
}