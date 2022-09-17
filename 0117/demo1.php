<?php
$foo = 21;
$foo = '你好';
echo $foo;
var_dump($foo);

ob_clean();
$obj = new stdClass;
var_dump($obj);

ob_clean();
$user = ['id' => 1, 'name' => '张三', 'email' => '95564545@qq.com'];
var_dump($user);

ob_clean();
$users = [
    ['id' => 1, 'name' => '张三', 'email' => '95564545@qq.com'],
    ['id' => 2, 'name' => '张三', 'email' => '95564545@qq.com'],
    ['id' => 3, 'name' => '张三', 'email' => '95564545@qq.com'],
];
var_dump($users);
