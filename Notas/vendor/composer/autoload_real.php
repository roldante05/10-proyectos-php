<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcaf9a4a723875fb073f9869b69e05f08
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitcaf9a4a723875fb073f9869b69e05f08', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcaf9a4a723875fb073f9869b69e05f08', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcaf9a4a723875fb073f9869b69e05f08::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
