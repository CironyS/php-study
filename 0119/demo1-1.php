<?php

namespace ns1 {
    //使用function_exists检测函数名是否声明 同一个脚本不能存在同名函数 
    // echo function_exists('var_dump');
    function totalneedtopay($day, $roomprice, $discount = 0.88)
    {
        $total = $roomprice * $day * $discount;
        return "您需要支付的总价为${total}元。<br>";
    }

    echo totalneedtopay(2, 655);
    ob_clean();

    if (function_exists('totalneedtopay')) {
        echo 124;
    }
    ob_clean();
}

namespace ns2 {
    function totalneedtopay($day, $roomprice, $discount = 0.88)
    {
        // $roomprice = $roomprice * $day;
        $roomprice *= $discount;
        $total = $roomprice * $day;
        return "您需要支付的总价为${total}元。<br>";
    }
    // 全局变量
    $day = 2;
    $roomprice = 1500;
    $discount = 0.7;
    echo totalneedtopay($day, $roomprice, $discount);
    echo '<hr/>';
    echo $roomprice;
    echo '<hr/>';
}

namespace ns3 {
    function totalneedtopay($day, &$roomprice, $discount = 0.88)
    {
        // $roomprice = $roomprice * $day;
        $roomprice *= $discount;
        $total = $roomprice * $day;
        return "您需要支付的总价为${total}元。<br>";
    }
    // 全局变量
    $day = 2;
    $roomprice = 1500;
    $discount = 0.7;
    echo totalneedtopay($day, $roomprice, $discount);
    echo '<hr/>';
    echo $roomprice;
    echo '<hr/>';
}
