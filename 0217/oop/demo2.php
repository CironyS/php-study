<?php
//例子:单例模式 只允许类被实例化一次
class Father{
    private function __construct(){}
    private function __clone(){}
    // 存储father类的实例
    protected static $_instance;
    // 获取father类的实例 唯一实例
    public static function getInstance(){
        //获取类的实例
        //1. self 始终永远和当前类进行绑定
        //2. self 在静态继承上下文中, 不能动态的识别或者设置静态成员的调用者

        //使用self关键字
//        if(self::$_instance === null){
//            self::$_instance = new self;
//        }
        //返回对象
//        return self::$_instance;

        //使用static关键字
        if(static::$_instance === null){
            static::$_instance = new static;
        }
        return static::$_instance;

    }

}

class Son extends Father {
    protected static $_instance;
}

class Son1 extends Father {
    protected static $_instance;
}

var_dump(Father::getInstance());
echo '<hr/>';
var_dump(Son::getInstance());
echo '<hr/>';
var_dump(Son1::getInstance());