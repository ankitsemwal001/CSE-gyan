<?php

if (!defined('BASE_URL')) {
    $projectRoot = str_replace('\\', '/', __DIR__);
    $docRoot = str_replace('\\', '/', rtrim($_SERVER['DOCUMENT_ROOT'], '/\\'));
    $basePath = str_replace($docRoot, '', $projectRoot);
    define('BASE_URL', rtrim($basePath, '/') . '/');
}