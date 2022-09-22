<?php
$odd = function (array $arr) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 2 == 0) {
            $newArr[] = $arr[$i];
        }
    }
    return $newArr;
};

$arr = [34, 89, 68, 23, 443, 234, 2, 25, 45, 20, 89, 78, 452, 3434];

//Closure 约束参数为闭包函数
function sun(Closure $func, $arr)
{
    $oddArr = $func($arr);
    var_dump($oddArr);
    return array_sum($oddArr);
}

echo sun($odd, $arr);

ob_clean();

//php脚本是单线程，脚本是同步执行的，如果遇到耗时函数将会发生线程阻塞的问题，应该将它改为异步回调的方式执行
//  call_user_func()把第一个参数作为回调函数调用
// call_user_func_array() 第二个参数为数组
// 回调的是全局函数 
require_once "demo3-1.php";
// echo call_user_func('sayhello', '张飞');
// echo call_user_func_array('sayhello', ['张飞']);

//回调匿名函数
var_dump(call_user_func($odd, $arr));
