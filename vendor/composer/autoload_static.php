<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit503618b7edb8ba859bfd90d68e6ebd07
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit503618b7edb8ba859bfd90d68e6ebd07::$classMap;

        }, null, ClassLoader::class);
    }
}