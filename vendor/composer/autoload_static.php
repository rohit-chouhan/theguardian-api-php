<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9683d0de2371017b9eafd3ce42a58adf
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TheGuardian' => __DIR__ . '/../..' . '/src/TheGuardian.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9683d0de2371017b9eafd3ce42a58adf::$classMap;

        }, null, ClassLoader::class);
    }
}