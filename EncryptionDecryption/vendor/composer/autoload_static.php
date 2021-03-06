<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e7438369cdef259d3fd59e120ecfa24
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Crypto\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Crypto\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e7438369cdef259d3fd59e120ecfa24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e7438369cdef259d3fd59e120ecfa24::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
