<?php

spl_autoload_register(function ($class) {
    // Directorios donde se pueden encontrar las clases
    $paths = [
        __DIR__ . '/app/controllers/',
        __DIR__ . '/app/models/',
        __DIR__ . '/lib/',
    ];

    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }


    error_log("⚠️ [Autoloader] Clase no encontrada: $class");
});
