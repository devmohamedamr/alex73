<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdeb0fe28eda9481e375742526a3e66d
{
    public static $files = array (
        '2878512ca7b0f9f126b9010979957257' => __DIR__ . '/../..' . '/src/routes/web.php',
        'd7e644f05d539f0b7c0b545664acc90d' => __DIR__ . '/../..' . '/src/core/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Amit73\\Mvc\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Amit73\\Mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdeb0fe28eda9481e375742526a3e66d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdeb0fe28eda9481e375742526a3e66d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfdeb0fe28eda9481e375742526a3e66d::$classMap;

        }, null, ClassLoader::class);
    }
}