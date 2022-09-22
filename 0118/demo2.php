<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- php短标签 -->
    <title><? echo '数组的遍历' ?></title>
</head>

<?
$navs = [
    ['id' => 1, 'name' => '前端相关'],
    ['id' => 2, 'name' => '后端相关'],
    ['id' => 3, 'name' => '微信相关'],
    ['id' => 4, 'name' => '辅助学习'],
    ['id' => 5, 'name' => '可视化布局'],
    ['id' => 6, 'name' => 'phpAdmin管路系统']
];
?>

<body>
    <h1 align="center">hello world</h1>
    <ul>
        <?php foreach ($navs as $k => $v) { ?>
            <li><?= $v['name'] ?></li>
        <?php } ?>
    </ul>

    <ul>
        <!-- php模板语法 用于php与html混编 -->
        <? foreach ($navs as $k => $v) : ?>
            <li><?= $v['name'] ?></li>
        <? endforeach ?>
    </ul>

    <ul>
        <? foreach ($navs as $v) {
            echo "<li>{$v['name']}</li>";
        } ?>
    </ul>


</body>

</html>