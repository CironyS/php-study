<?php
// ? 数据库的连接
// 基础配置
// $username = 'root';
// $password = '';
// $type = 'mysql';
// $port = '3308';

// phpinfo();
//dsn  data source name 数据源名称 包括pdo驱动名称(dsn)，host,port,数据库名称。
$dsn = 'mysql:host=localhost;port=3306;dbname=database1';
$username = 'root';
$password = '';
// $pdo = new PDO($dsn, $username, $password);
// var_dump($pdo);

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo $e;
    // die('Connection error' . $e->getMessage());
}
