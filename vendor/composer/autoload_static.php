<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite59fbb3f2b32d99cf568c429a4d94dc4
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Source',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite59fbb3f2b32d99cf568c429a4d94dc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite59fbb3f2b32d99cf568c429a4d94dc4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
