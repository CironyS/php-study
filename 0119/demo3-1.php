<?php

/**
 * 函数属于全局成员
 * 特殊形式的函数
 * 1.匿名函数（闭包函数）
 * 2.回调函数
 * 3.递归函数
 */

echo sayhello('刘德华');
function sayhello(string $name)
{
    var_dump($name);
    return "{$name},欢迎您下榻喜来登酒店。";
}

echo sayhello('张学友');

ob_clean();
// 匿名函数
// echo $closure('张老师');

$closure = function ($name) {
    return "{$name},欢迎您下榻喜来登酒店。";
};

echo $closure('朱老师');
ob_clean();

// 闭包引来（变量）作用域的问题


// 全局变量是指声明在函数外部的变量，在函数内部访问不到。
// 局部变量是指声明在函数内部的变量，只能在函数内部被访问到。 
// 全局变量引用到函数体内方法:
$name = '灭绝老师';
$email = 'imzcgloe.@gmail.com';

// function greeting()
// {
//     // 1. global
//     global $name, $email;
//     $modfiy = '美丽的';
//     return "{$modfiy}{$name},你好!恭喜您邮箱注册成功,账号为{$email}";
// }

// function greeting()
// {
//     //2. 超全局数组$GLOBALS   $_GET $_POST 
//     $modfiy = '美丽的';
//     return "{$modfiy}{$GLOBALS['name']},你好!恭喜您邮箱注册成功,账号为{$GLOBALS['email']}";
// }

// echo greeting();

//闭包函数 使用use关键字进行引入
$c = function ($modfiy) use ($name, $email) {
    return "{$modfiy}{$name},你好!恭喜您邮箱注册成功,账号为{$email}";
};

//echo $c('美丽的');

// 闭包改变变量上下文的值 需要引用传递
$c1 = function ($newName) use (&$name) {
    $name = $newName;
};
$c1('西门老师');
//echo $name;
