<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite98677948d0eecd1dca9dc49463593eb
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite98677948d0eecd1dca9dc49463593eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite98677948d0eecd1dca9dc49463593eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite98677948d0eecd1dca9dc49463593eb::$classMap;

        }, null, ClassLoader::class);
    }
}
