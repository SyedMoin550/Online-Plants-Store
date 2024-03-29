<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f8497d12cec47669d380d0f191391dd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f8497d12cec47669d380d0f191391dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f8497d12cec47669d380d0f191391dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f8497d12cec47669d380d0f191391dd::$classMap;

        }, null, ClassLoader::class);
    }
}
