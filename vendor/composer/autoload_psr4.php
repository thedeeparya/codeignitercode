<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'app\\Services\\' => array($baseDir . '/app/services'),
    'app\\Seeders\\' => array($baseDir . '/app/database/seeds'),
    'app\\Repositories\\' => array($baseDir . '/app/repositories'),
    'app\\Models\\' => array($baseDir . '/app/models'),
    'app\\Controllers\\' => array($baseDir . '/app/controllers'),
    'app\\Commands\\' => array($baseDir . '/app/commands'),
    'Symfony\\Component\\Filesystem\\' => array($vendorDir . '/symfony/filesystem'),
    'Symfony\\Component\\EventDispatcher\\' => array($vendorDir . '/symfony/event-dispatcher'),
    'Patchwork\\' => array($vendorDir . '/patchwork/utf8/src/Patchwork'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
    'Jenssegers\\Agent\\' => array($vendorDir . '/jenssegers/agent/src'),
);
