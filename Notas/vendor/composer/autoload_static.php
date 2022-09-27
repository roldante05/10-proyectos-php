<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcaf9a4a723875fb073f9869b69e05f08
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dante\\Notas\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dante\\Notas\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcaf9a4a723875fb073f9869b69e05f08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcaf9a4a723875fb073f9869b69e05f08::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcaf9a4a723875fb073f9869b69e05f08::$classMap;

        }, null, ClassLoader::class);
    }
}
