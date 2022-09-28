<?php
//加载多个类文件  类的自动加载器
require 'autoload-1.php';
$b = new Product('被子', 50);

$son = new Son('皮草', 2000);
echo $b->show();
echo $son->show();
