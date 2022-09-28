<?php
session_start();

// 导入自动加载文件
require __DIR__ . DIRECTORY_SEPARATOR .'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

//使用gregwar/captcha进行二维码生成
//https://packagist.org/packages/gregwar/captcha

use Gregwar\Captcha\CaptchaBuilder;
//header('Content-type: image/jpeg');

$builder = new CaptchaBuilder;
$builder->build();

//$builder->save('out.jpg');
//$builder->output();

// 将验证码的文字信息存到session中
$_SESSION['phrase'] = $builder->getPhrase();

// 后端 验证码的验证
//strcasecmp校验两个字符串,并且不区分大小写
if((strcasecmp($_POST['captcha'],$_SESSION['phrase'])) === 0){
    echo json_encode('验证码正确');
}else{
    echo json_encode('验证码错误');
}
?>

<label>
    <input type="text" name="captcha" placeholder="验证码登录"/>
</label>
<img src="<?= $builder->inline() ?>" alt="" />
<p><?= $_SESSION['phrase'] ?></p>