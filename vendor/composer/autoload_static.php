<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita410b32d81b6a5ea5c68c0ca8378dec1
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Banco\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Banco\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita410b32d81b6a5ea5c68c0ca8378dec1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita410b32d81b6a5ea5c68c0ca8378dec1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita410b32d81b6a5ea5c68c0ca8378dec1::$classMap;

        }, null, ClassLoader::class);
    }
}
