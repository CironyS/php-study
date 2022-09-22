<?php
// var_dump($_POST['username']);
// var_dump($_POST['password']);
$name = $_POST['username'] ? $_POST['username']  : null;
$pwd = $_POST['password'] ? $_POST['password'] : null;

//1.连接数据库
require_once '1-connect copy.php';

//2.查询语句
$pwd = md5($pwd);
$stmt = $pdo->query("select * from `user` where `username` = '{$name}' and `password` = '{$pwd}'");
foreach ($stmt as $row) {
    print $row['id'] . "\t";
    print $row['username'] . "\t";
    print $row['password'] . "\n";
}
