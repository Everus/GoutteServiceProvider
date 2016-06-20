GoutteProvider
=========================

Service provider for Silex for using [Goutte](https://github.com/FriendsOfPHP/Goutte).


Installation
--------------

To use it add following line to your composer.json:

    "require": {
        ...
        "everus/goutte-service-provider": "^0.11.x"
        ...
    }


Usage
--------------
Include following line of code somewhere in your initial Silex file (index.php or whatever):

    $app->register(new Everus\Silex\GoutteServiceProvider());

Now you have access to Goutte through `$app['browser']`.                                           
