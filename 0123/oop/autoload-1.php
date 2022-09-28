<?php

/**
 * 自动加载文件
 */

spl_autoload_register(function ($className) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . $className . '.php';
    if (!(is_file($file) && file_exists($file))) {
        throw new Exception('文件名不合法或文件不存在');
    } else {
        require $file;
    }
});
