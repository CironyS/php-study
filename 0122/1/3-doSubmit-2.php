<?php
// var_dump($_POST['username']);
// var_dump($_POST['password']);
$name = $_POST['username'] ? $_POST['username']  : null;
$pwd = $_POST['password'] ? $_POST['password'] : null;

//1.连接数据库
require_once '1-connect.php';

//2.查询语句
$pwd = md5($pwd);
//准备一条sql语句
$sql = "select * from `user` where `username` = ? and `password` = ?";
//进行预备
$stmt = $pdo->prepare($sql);
//设置参数
// $stmt->bindParam(1, $name);
// $stmt->bindParam(2, $pwd);
//执行语句
// $stmt->execute();
$res1 = $stmt->execute([$name, $pwd]);
//返回结果
// $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($res1) {
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($res) {
        echo json_encode(['status' => 1, 'msg' => '登录成功'], 320);
    }
}
