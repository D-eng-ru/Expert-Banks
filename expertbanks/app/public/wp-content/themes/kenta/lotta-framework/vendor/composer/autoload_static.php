<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bf32241cfb18da2f16e2bcabd7b63b9
{
    public static $files = array (
        '2ca5bb1b80fb48b774e0eb3986edda31' => __DIR__ . '/..' . '/wptt/webfont-loader/wptt-webfont-loader.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'LottaFramework\\' => 15,
        ),
        'I' => 
        array (
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'LottaFramework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bf32241cfb18da2f16e2bcabd7b63b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bf32241cfb18da2f16e2bcabd7b63b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0bf32241cfb18da2f16e2bcabd7b63b9::$classMap;

        }, null, ClassLoader::class);
    }
}
