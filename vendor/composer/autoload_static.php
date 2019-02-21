<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c90668d531ff95f86a0a397b418bb7b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MWD\\GTMSnippets\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MWD\\GTMSnippets\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c90668d531ff95f86a0a397b418bb7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c90668d531ff95f86a0a397b418bb7b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}