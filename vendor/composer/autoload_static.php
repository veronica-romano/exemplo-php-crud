<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfccc695c3e4cdaf3590adfae14a75481
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CrudPoo\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CrudPoo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfccc695c3e4cdaf3590adfae14a75481::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfccc695c3e4cdaf3590adfae14a75481::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfccc695c3e4cdaf3590adfae14a75481::$classMap;

        }, null, ClassLoader::class);
    }
}