<?php
//引类的自动加载器
require __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

// 在一个空间中实例化另一个空间中的类(带有自己的,命名空间),如果不做处理,系统会默认将该类归到当前空间.

/**
 * use作用:
 * 1.引一个带有命名空间的类并且起别名
 * 2.引一个空间为该空间起别名
 */

//如果不引入的话该类默认在该文件夹下
use app\admin\controller\User;

echo (new User)->index();

