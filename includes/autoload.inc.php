<?php

spl_autoload_register(function ($className) {
    $file = 'classes/'.$className.'.php';

    if (file_exists($file)) {
        include $file;
    } else {
        echo 'Connection Error, Error_in_spl_autoload register';
    }
});
