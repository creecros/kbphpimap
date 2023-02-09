<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit725b8eabb4b914d90717f055642ed4c2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpImap\\' => 8,
        ),
        'L' => 
        array (
            'League\\HTMLToMarkdown\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpImap\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-imap/php-imap/src/PhpImap',
        ),
        'League\\HTMLToMarkdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/html-to-markdown/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit725b8eabb4b914d90717f055642ed4c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit725b8eabb4b914d90717f055642ed4c2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit725b8eabb4b914d90717f055642ed4c2::$classMap;

        }, null, ClassLoader::class);
    }
}
