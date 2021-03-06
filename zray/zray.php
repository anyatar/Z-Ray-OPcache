<?php
namespace OPcache;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'OPcache.php';

$zre = new \ZRayExtension('opcache');
$zre->setMetadata(array(
    'logo' => __DIR__ . DIRECTORY_SEPARATOR . 'logo.png'
));

$opcache = new OPcache();
$zre->setEnabledAfter('session_start');
$zre->traceFunction('session_start', array(
    $opcache,
    'startup'
), array(
    $opcache,
    'shutdown'
));
