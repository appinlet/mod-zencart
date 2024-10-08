<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd110bd92533ce94b8064f49d87d1b52
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Payfast\\PayfastCommon\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Payfast\\PayfastCommon\\' => 
        array (
            0 => __DIR__ . '/..' . '/payfast/payfast-common/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd110bd92533ce94b8064f49d87d1b52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd110bd92533ce94b8064f49d87d1b52::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd110bd92533ce94b8064f49d87d1b52::$classMap;

        }, null, ClassLoader::class);
    }
}
