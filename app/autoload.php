<?php
spl_autoload_register(function ($className) {
    foreach (array('/models', '/controllers', '/helpers') as $dir) {
        $fileName = __DIR__ . '/' . $dir . '/' . $className . '.php';
        if (file_exists($fileName)) {
            require_once $fileName;
            return;
        }
    }
});
