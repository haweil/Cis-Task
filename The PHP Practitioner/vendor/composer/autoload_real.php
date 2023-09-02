<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5bfaf1e51bb381ba51b208a701975c3d
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

        spl_autoload_register(array('ComposerAutoloaderInit5bfaf1e51bb381ba51b208a701975c3d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5bfaf1e51bb381ba51b208a701975c3d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5bfaf1e51bb381ba51b208a701975c3d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}