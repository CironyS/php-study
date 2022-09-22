<?php
$navs = [
    ['id' => 1, 'name' => '前端相关'],
    ['id' => 2, 'name' => '后端相关'],
    ['id' => 3, 'name' => '微信相关'],
    ['id' => 4, 'name' => '辅助学习'],
    ['id' => 5, 'name' => '可视化布局'],
    ['id' => 6, 'name' => 'phpAdmin管路系统']
];
for ($i = 0; $i < count($navs); $i++) {
    echo $navs[$i]['name'] . '<br/>';
}
