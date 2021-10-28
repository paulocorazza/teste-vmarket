<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7dd730c9b776be4384f942209dcd991
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7dd730c9b776be4384f942209dcd991::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7dd730c9b776be4384f942209dcd991::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf7dd730c9b776be4384f942209dcd991::$classMap;

        }, null, ClassLoader::class);
    }
}
