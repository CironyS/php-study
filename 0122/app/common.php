<?php
//开启session存储
session_start();

//连接数据库
require '1-connect.php';
$pwd = md5($pwd);

function NickName($name, $pwd)
{
    global $pdo;
    $sql = "select * from `user` where `username` = ? and `password` = ?";
    $stmt = $pdo->prepare($sql);
    $res1 = $stmt->execute([$name, md5($pwd)]);
    if ($res1) {
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($res) {
            $_SESSION['username'] = $res['username'];
            return true;
        } else {
            return false;
        }
    }
}
