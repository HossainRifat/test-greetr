<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita40d4186463dff427b696f4e93f2c2d7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Simplexi\\Greetr\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Simplexi\\Greetr\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita40d4186463dff427b696f4e93f2c2d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita40d4186463dff427b696f4e93f2c2d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita40d4186463dff427b696f4e93f2c2d7::$classMap;

        }, null, ClassLoader::class);
    }
}
