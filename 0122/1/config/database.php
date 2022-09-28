<?php
return [
    // 连接类型
    'type' => $type ?? 'mysql',
    // 连接名称
    'username' => $username ?? 'root',
    // 连接密码
    'password' => $password ?? '',
    // 连接域名
    'host' => $host ?? 'localhost',
    // 连接端口号
    'port' => $port ?? '3306',
    // 连接字符集
    'charset' => $charset ?? 'utf8',
    // 连接数据库名称
    'dbname' => $dbname ?? 'database1',
];
