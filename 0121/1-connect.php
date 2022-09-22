<?php
// ? 1.导入文件
$config = require_once __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.php';
//传入数组后直接使用该数组下键
extract($config);
// var_dump($config);

// ? 2.进行连接
//sprintf 返回格式化字符串
// $dsn = sprintf('%s:host=%s;port=%s;dbname=%s;charset=%s', $config['type'], $config['host'], $config['port'], $config['dbname'], $config['charset'],);

// try {
//     $pdo = new PDO($dsn, $config['username'], $config['password']);
//     var_dump($pdo);
// } catch (PDOException $e) {
//     die('Connection error : ' . $e->getMessage());
// }

$dsn = sprintf('%s:host=%s;port=%s;dbname=%s;charset=%s', $type, $host, $port, $dbname, $charset,);

try {
    $pdo = new PDO($dsn, $username, $password);
    // var_dump($pdo);
} catch (PDOException $e) {
    die('Connection error : ' . $e->getMessage());
}

// ? 3获取数据
$stmt = $pdo->query('select * from user');

foreach ($stmt as $row) {
    print $row['id'] . "\t";
    print $row['username'] . "\t";
    print $row['password'] . "\n";
}
