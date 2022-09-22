<?php
// 封装一个递归函数，目的是删除所有缓存目录（及其子目录，文件）
// ? 获取当前文件位置 __DIR
$dir = __DIR__ . DIRECTORY_SEPARATOR . 'runtime';
// echo $dir;

// ? 判断给定的文件名是否为目录 is_dir
// var_dump(is_dir($dir));
function delete_dir_file($dir)
{
    if (is_dir($dir)) {
        // ? 打开资源 opendir
        // $handle = opendir($dir);
        // var_dump($handle);
        // ? 状态
        $flag = false;
        if ($handle = opendir($dir)) {
            // ? 返回目录中下一个文件的文件名 readdir
            // ? 如果含有多个目录建议使用循环机制
            // var_dump(readdir($handle));
            while (($file = readdir($handle)) !== false) {
                // echo $file . '<br/>';
                if ($file != '.'  && $file != '..') {
                    if (is_dir($dir . DIRECTORY_SEPARATOR . $file)) {
                        // ? 是目录继续调用函数
                        delete_dir_file($dir . DIRECTORY_SEPARATOR . $file);
                    } else {
                        //? 是文件就直接执行删除
                        unlink($dir . DIRECTORY_SEPARATOR . $file);
                    }
                }
            }
        }
        // ? 关闭打开的目录
        closedir($handle);
        // ? 删除目录,该目录与其子目录必须为空
        if (rmdir($dir)) {
            $flag = true;
        }
        return $flag;
    }
}

$res = delete_dir_file($dir);
if ($res) {
    echo json_encode(['msg' => '清除成功', 'status' => 1], 320);
}
