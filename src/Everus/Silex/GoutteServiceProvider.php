<?php

namespace Everus\Silex;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Goutte\Client;

class GoutteServiceProvider implements ServiceProviderInterface
{
  protected $client;

  public function __construct()
  {
    $this->client = new Client();
  }

  public function register(Container $app)
  {
    $app['browser'] = new Client();
  }
}
