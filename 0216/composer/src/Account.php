<?php
namespace Chloe\Logins;

class Account{
    static function index(){
        //__METHOD__ 是PHP5之后新增的魔术常量，表示的是类文法的名称。
        //魔术常量是一种PHP预定义常量，它的值可以是变化的，PHP中的其它已经存在的魔术常量有__LINE__、__FILE__、__FUNCTION__、__CLASS__等。
        return __METHOD__;
    }
}