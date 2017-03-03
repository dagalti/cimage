<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b4448ad4be850d755525f1f201dede8
{
    public static $files = array (
        'c033e147fa8801d0fd8ea2bc8fa37e2a' => __DIR__ . '/../..' . '/src/defines.php',
        '3b345cc3469552d097f31e5a67742144' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mos\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b4448ad4be850d755525f1f201dede8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b4448ad4be850d755525f1f201dede8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
