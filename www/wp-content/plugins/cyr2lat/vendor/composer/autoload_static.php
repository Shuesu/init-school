<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc65917f3981b7ae35d323e257fd28a5b
{
    public static $files = array (
        '08eca214f4d3690babeee667e1bd7ede' => __DIR__ . '/../..' . '/src/php/includes/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CyrToLat\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CyrToLat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/php',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'CyrToLat\\Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/../..' . '/libs/polyfill-mbstring/Mbstring.php',
        'CyrToLat\\WP_Background_Processing\\WP_Async_Request' => __DIR__ . '/../..' . '/libs/wp-background-processing/wp-async-request.php',
        'CyrToLat\\WP_Background_Processing\\WP_Background_Process' => __DIR__ . '/../..' . '/libs/wp-background-processing/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc65917f3981b7ae35d323e257fd28a5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc65917f3981b7ae35d323e257fd28a5b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc65917f3981b7ae35d323e257fd28a5b::$classMap;

        }, null, ClassLoader::class);
    }
}
