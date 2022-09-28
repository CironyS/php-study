<?php
//composer自动加载文件机制
//导入自动加载文件
require __DIR__ . DIRECTORY_SEPARATOR .'vendor'. DIRECTORY_SEPARATOR.'autoload.php';

//导入命名空间类
use Chloe\Logins\Account;
use Chloe\Login\Article;
use lib\Rule;

//输出类
echo Article::index();
echo Account::index();
echo Rule::index();