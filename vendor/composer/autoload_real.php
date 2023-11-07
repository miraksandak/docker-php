<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit434c0e19ec1a71578bbd55d64ae211d3
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

        spl_autoload_register(array('ComposerAutoloaderInit434c0e19ec1a71578bbd55d64ae211d3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit434c0e19ec1a71578bbd55d64ae211d3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit434c0e19ec1a71578bbd55d64ae211d3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
