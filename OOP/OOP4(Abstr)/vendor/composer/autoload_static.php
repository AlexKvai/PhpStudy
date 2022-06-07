<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite15eaa591bc6cde6d48ff4f6069c897a
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfm',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite15eaa591bc6cde6d48ff4f6069c897a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite15eaa591bc6cde6d48ff4f6069c897a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite15eaa591bc6cde6d48ff4f6069c897a::$classMap;

        }, null, ClassLoader::class);
    }
}