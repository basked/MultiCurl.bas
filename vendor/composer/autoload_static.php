<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9f4599fee6c0a26afc912e7d5546dec
{
    public static $files = array (
        '61312bec83e7e14c6df2c39083034232' => __DIR__ . '/../..' . '/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Curl\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'p' => 
        array (
            'phpQuery' => 
            array (
                0 => __DIR__ . '/..' . '/coderockr/php-query/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9f4599fee6c0a26afc912e7d5546dec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9f4599fee6c0a26afc912e7d5546dec::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc9f4599fee6c0a26afc912e7d5546dec::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
