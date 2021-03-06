<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a7bf8792fbd3779154d48a55872d642
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a7bf8792fbd3779154d48a55872d642::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a7bf8792fbd3779154d48a55872d642::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a7bf8792fbd3779154d48a55872d642::$classMap;

        }, null, ClassLoader::class);
    }
}
