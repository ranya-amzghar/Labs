<?php

spl_autoload_register(static function (string $className): void {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/';

    if (strncmp($className, $prefix, strlen($prefix)) !== 0) {
        return;
    }

    $relativeClass = substr($className, strlen($prefix));
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});
