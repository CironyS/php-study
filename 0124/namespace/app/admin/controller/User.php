<?php
namespace app\admin\controller;

// use 引用带有命名空间的类
// 使用as对引进的命名空间进行重新命名
use app\admin\model\User as UserModel;

class User {
    public function index(){
        return UserModel::getUserInfo();
    }
}

