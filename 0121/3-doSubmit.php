<?php
// var_dump($_POST['username']);
// var_dump($_POST['password']);
//1.接受参数
$name = $_POST['username'] ? $_POST['username']  : null;
$pwd = $_POST['password'] ? $_POST['password'] : null;

//2.连接数据库
require_once '1-connect copy.php';

//3.查询语句
$stmt = $pdo->query("select * from `user` where `username`='{$name}'");
foreach ($stmt as $row) {
    print $row['id'] . "\t";
    print $row['username'] . "\t";
    print $row['password'] . "\n";
}
