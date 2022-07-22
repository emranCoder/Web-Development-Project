<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea8b56e0b9661e6cfc0666edb5a33b53
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea8b56e0b9661e6cfc0666edb5a33b53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea8b56e0b9661e6cfc0666edb5a33b53::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea8b56e0b9661e6cfc0666edb5a33b53::$classMap;

        }, null, ClassLoader::class);
    }
}
