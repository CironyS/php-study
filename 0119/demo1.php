<?php
//获取默认时区
echo date_default_timezone_get();
//修改时区
echo date_default_timezone_set("PRC");
echo date_default_timezone_get();
//输出当前时间
echo date("Y-m-d H:m:s");

ob_clean();

echo sayhello('张学友');
function sayhello(string $name): string
{
    var_dump($name);
    return "${name},欢迎您下榻喜来登酒店。";
}

echo sayhello('张学友');
echo sayhello(23);

ob_clean();

function totalneedtopay($day, $roomprice, $discount = 0.88)
{
    $total = $roomprice * $day * $discount;
    return "您需要支付的总价为${total}元。<br>";
}

echo totalneedtopay(2, 655);
