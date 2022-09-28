<?php
require '1-connect.php';
//更新数据
$sql = 'update `user` set `password` = ? where id=?';
$id = 5;
$pwd = 'wwwphpcn';
$stmt = $pdo->prepare($sql);
$stmt->execute([$pwd, $id]);
var_dump($stmt->rowCount());
