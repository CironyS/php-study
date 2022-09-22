<?php
//随机函数
echo mt_rand(0, 20);

ob_clean();

//md5加密
$password = md5('imzchloe');
echo $password;

ob_clean();

//绝对值
echo abs(-6.2);

ob_clean();

//转成大小写
echo strtoupper('hello world');
echo strtolower('HELLO WORLD');

ob_clean();

//快速生成一个数组
$arr = range(1, 100, 2);
// var_dump($arr);
// var_dump($arr);

ob_clean();

//字符串长度
echo strlen('hello world');

ob_clean();
//字符串替换
$msg = "想和你交友，你可以通过微信或者支付宝转账给我就可以了。";
// $res = str_replace('转账', '**', $msg);
// echo $res;

$res = str_replace(["交友", "转账"], ["&&", "**"], $msg);
echo $res;
