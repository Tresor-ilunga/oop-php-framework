<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a2bfd25a29434d87a4c328c658f7a5a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'E' => 
        array (
            'Exceptions\\' => 11,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Router',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Exceptions',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a2bfd25a29434d87a4c328c658f7a5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a2bfd25a29434d87a4c328c658f7a5a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0a2bfd25a29434d87a4c328c658f7a5a::$classMap;

        }, null, ClassLoader::class);
    }
}
