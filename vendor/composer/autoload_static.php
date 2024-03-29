<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita57459c23abcaa5f0e21055b7f1a7c6c
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita57459c23abcaa5f0e21055b7f1a7c6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita57459c23abcaa5f0e21055b7f1a7c6c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita57459c23abcaa5f0e21055b7f1a7c6c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
