<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit12126a5fd87da04eaf866087e711d43c
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DMatrix\\Telex\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DMatrix\\Telex\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit12126a5fd87da04eaf866087e711d43c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit12126a5fd87da04eaf866087e711d43c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit12126a5fd87da04eaf866087e711d43c::$classMap;

        }, null, ClassLoader::class);
    }
}