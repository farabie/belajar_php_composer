<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ad5659b96e43febc57b150e21733959
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abieproject\\BelajarPhpComposer\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abieproject\\BelajarPhpComposer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ad5659b96e43febc57b150e21733959::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ad5659b96e43febc57b150e21733959::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ad5659b96e43febc57b150e21733959::$classMap;

        }, null, ClassLoader::class);
    }
}
