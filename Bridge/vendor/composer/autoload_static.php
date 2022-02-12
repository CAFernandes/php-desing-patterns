<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a67b67eab509cfa0d21c06759f317e6
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bridge\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bridge\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a67b67eab509cfa0d21c06759f317e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a67b67eab509cfa0d21c06759f317e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0a67b67eab509cfa0d21c06759f317e6::$classMap;

        }, null, ClassLoader::class);
    }
}
