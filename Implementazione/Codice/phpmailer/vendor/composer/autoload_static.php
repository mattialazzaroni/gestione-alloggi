<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e5945022ee28839b3ee3d7d01308ee2
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e5945022ee28839b3ee3d7d01308ee2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e5945022ee28839b3ee3d7d01308ee2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
