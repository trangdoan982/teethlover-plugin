<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc85b2f6073741d34ce44249207da3477
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc85b2f6073741d34ce44249207da3477::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc85b2f6073741d34ce44249207da3477::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc85b2f6073741d34ce44249207da3477::$classMap;

        }, null, ClassLoader::class);
    }
}