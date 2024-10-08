<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda83f796ba5551dd96e4d49699bbe54c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MetaBox\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MetaBox\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitda83f796ba5551dd96e4d49699bbe54c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda83f796ba5551dd96e4d49699bbe54c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitda83f796ba5551dd96e4d49699bbe54c::$classMap;

        }, null, ClassLoader::class);
    }
}
