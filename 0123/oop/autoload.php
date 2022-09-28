<?php

/**
 * 类的自动加载器 前提 类名称跟类文件名称保持一致 psr-4规范
 */

spl_autoload_register(function ($className) {
    // printf('类名:%s<br/>', $className);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
    if (is_file($file) && file_exists($file)) {
        require $file;
    }
    // echo $file;
});
