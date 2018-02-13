<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd8b7977fe313ad7507cd164b4761730
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'ez\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ez\\' => 
        array (
            0 => __DIR__ . '/..' . '/uej/ezphp/ez',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd8b7977fe313ad7507cd164b4761730::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd8b7977fe313ad7507cd164b4761730::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}