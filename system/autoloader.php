<?php

spl_autoload_register('systemAutoLoader');

function systemAutoLoader ($class_name) {
    $paths = array(
        'system/helper/',
        'system/engine/'
    );
    $filename = strtolower($class_name) . '.php';
    foreach ($paths as $path) {
        if (file_exists($path . $filename)) {
            require $path . $filename;
            return true;
        }
    }
    return false;
}

?>