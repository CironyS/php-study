<?php
// ? 1.导入文件
$config = require_once __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.php';
//传入数组后直接使用该数组下键
extract($config);

// ? 2.进行连接
$dsn = sprintf('%s:host=%s;port=%s;dbname=%s;charset=%s', $type, $host, $port, $dbname, $charset,);

try {
    $pdo = new PDO($dsn, $username, $password);
    // var_dump($pdo);
} catch (PDOException $e) {
    die('Connection error : ' . $e->getMessage());
}
