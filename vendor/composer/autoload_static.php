<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25d2cec6ac5be79aaa0725a02ee996a7
{
    public static $classMap = array (
        'App\\Controller\\HomeController' => __DIR__ . '/../..' . '/src/controller/HomeController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Helpers\\Connection' => __DIR__ . '/../..' . '/core/helpers/Connection.php',
        'App\\Core\\Helpers\\Controller' => __DIR__ . '/../..' . '/core/helpers/Controller.php',
        'App\\Core\\Helpers\\Parser' => __DIR__ . '/../..' . '/core/helpers/Parser.php',
        'App\\Core\\Helpers\\QueryBuilder' => __DIR__ . '/../..' . '/core/helpers/QueryBuilder.php',
        'App\\Core\\Helpers\\Request' => __DIR__ . '/../..' . '/core/helpers/Request.php',
        'App\\Core\\Helpers\\Router' => __DIR__ . '/../..' . '/core/helpers/Router.php',
        'App\\Entity\\Customer' => __DIR__ . '/../..' . '/src/entity/Customer.php',
        'ComposerAutoloaderInit25d2cec6ac5be79aaa0725a02ee996a7' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit25d2cec6ac5be79aaa0725a02ee996a7' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit25d2cec6ac5be79aaa0725a02ee996a7::$classMap;

        }, null, ClassLoader::class);
    }
}
