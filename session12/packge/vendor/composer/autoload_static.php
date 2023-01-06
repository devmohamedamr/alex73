<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d06038d6c0c5f374bfb29b80735ee58
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Amit73\\Test\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Amit73\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/amit73/test/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d06038d6c0c5f374bfb29b80735ee58::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d06038d6c0c5f374bfb29b80735ee58::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d06038d6c0c5f374bfb29b80735ee58::$classMap;

        }, null, ClassLoader::class);
    }
}