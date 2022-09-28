<?php
$name = $_POST['username'] ? $_POST['username']  : null;
$pwd = $_POST['password'] ? $_POST['password'] : null;
$type = strtolower($_GET['type']);

//1.连接数据库
require_once 'common.php';
switch ($type) {
    case 'login':
        $res = NickName($name, $pwd);
        if ($res) {
            echo json_encode(['status' => 1, 'msg' => '登录成功'], 320);
        }
        echo json_encode(['status' => 0, 'msg' => '用户名或密码错误'], 320);
        break;
}
