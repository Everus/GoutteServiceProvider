<?php

namespace Tests\Everus\Silex;

use Everus\Silex\GoutteServiceProvider;
use Pimple\Container;
use Goutte\Client;

class GoutteServiceProviderTest extends \PHPUnit_Framework_TestCase
{
  function testRegister()
  {
    $container  = new Container();
    $provider = new GoutteServiceProvider();
    $provider->register($container);
    $this->assertArrayHasKey('browser', $container);
    $this->assertContainsOnlyInstancesOf(Client::class, [$container['browser']]);
  }
}
