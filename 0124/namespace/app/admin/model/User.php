<?php
//模型文件 操作数据 为控制器所调用
namespace app\model\User;

class User{
 static function getUserInfo(){
     return "获取用户信息";
 }
}