<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfdc3dbc5aa64dda628b8ae5385e917db
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitfdc3dbc5aa64dda628b8ae5385e917db', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfdc3dbc5aa64dda628b8ae5385e917db', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfdc3dbc5aa64dda628b8ae5385e917db::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
