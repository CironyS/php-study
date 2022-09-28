<?php

/**
 * 方法拦截器   当访问当前类中不存在的方法时或者不可见的方法时 会调用魔术方法 __call   __callStatic
 */

class User
{
    public function normal()
    {
        // __METHOD__ 返回类以及调用的函数
        return __METHOD__;
    }

    // 当访问当前类中不存在的普通方法时或者不可见的普通方法时 会自动调用__call
    public function __Call(string $method, array $args)
    {
        //printf — 输出格式化字符串
        //implode — 用字符串连接数组元素
        printf('调用当前类不存在的普通方法%s(),参数列表为[%s]<br>', $method, implode('', $args));
    }

    // 当访问当前类中不存在的静态方法时或者不可见的静态方法时 会自动调用__callStatic
    public function __callStatic(string $method, array $args)
    {
        printf('调用当前类不存在的静态方法%s(),参数列表为[%s]<br>', $method, implode('', $args));
    }
}


$u = new User;

// $u->login('张三', 'qwert');
User::index('古力娜扎', '172cm', '48kg');
