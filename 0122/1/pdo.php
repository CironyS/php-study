<?php
require '1-connect.php';
//准备预处理语句
//删除
$sql = "delete from `user` where `id` = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([3]);
// rowCount 返回受上一个 SQL 语句影响的行数
if ($stmt->rowCount() !== 1) {
}
