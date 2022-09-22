<?php
// 自定义函数
function add($a, $b)    //形式参数
{
    return $a + $b;
}

//调用函数
echo add(2, 3);

ob_clean();


// 变量是否区分大小写？（严格区分大小写） 函数是否区分大小写（不区分）？
$username = 'peter';
echo $userName;

ob_clean();

echo pow(5, 6);
echo POW(5, 6);

ob_clean();
