<?php
error_reporting(0);
// error_reporting(-1);

$int = 23;
$int = '23';
echo $int;
var_dump($int);

ob_clean();

$age = '35';
echo '小李今年' . $age . '岁';
echo '<hr/>';
echo '小李今年$age岁';
echo '<hr/>';
echo "小李今年{$age}岁";


ob_clean();
$foo = 2;
echo "$foo \t is $foo \n,next\n";
ob_clean();
echo '$foo \t is $foo \n,next\n';

ob_clean();
$stu = ['name' => 'Tim', 'stuNo' => 202201, 'mobile' => 18956785474];
$table = <<<HELLO
<table border="1" cellspacing="0">
<thead>您的信息如下<thead>
<tbody>
    <tr>
        <td>姓名</td>
        <td>学号</td>
        <td>手机号</td>
    <tr>
    <tr>
        <td>{$stu['name']}</td>
        <td>{$stu['stuNo']}</td>
        <td>{$stu['mobile']}</td>
    <tr>
</tbody>
</table>
HELLO;
echo $table;

ob_clean();

$stu = ['name' => 'Tim', 'stuNo' => 202201, 'mobile' => 18956785474];
var_dump($stu);
echo $stu['mobile'];

ob_clean();

$stus = [
    ['name' => 'Tim', 'stuNo' => 202201, 'mobile' => 18956785474],
    ['name' => 'Tom', 'stuNo' => 202202, 'mobile' => 18956785474],
];
var_dump($stus);
echo $stus[1]['name'];
echo $stus[1]['mobile'];

ob_clean();
$handle = fopen('log.log', 'w');
var_dump($handle);
file_put_contents('log.log', 'hellow world');

ob_clean();
$avatar = null;
var_dump($avatar);
$stus = [
    ['name' => 'Tim', 'stuNo' => 202201, 'mobile' => 18956785474],
    ['name' => 'Tom', 'stuNo' => 202202, 'mobile' => 18956785474],
];
unset($stus);
// var_dump(@$stus);
var_dump($stus);
