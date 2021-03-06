<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit278e2dd4a8cbac8b097ab989322d0d98
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'B' => 
        array (
            'Blog\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Blog\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit278e2dd4a8cbac8b097ab989322d0d98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit278e2dd4a8cbac8b097ab989322d0d98::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit278e2dd4a8cbac8b097ab989322d0d98::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
