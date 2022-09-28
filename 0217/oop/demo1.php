<?php
//父类方法
class Employee{
    public static string $favSport = "football";
    public static function watchTv():void{
        //使用self不能进行改变
//        echo 'watching' . self::$favSport .'<br/>';
        //使用static可以进行改变
        echo 'watching' . static::$favSport .'<br/>';
    }
}

//子类方法
class Execute extends Employee{
    public static string $favSport = 'polo';
}

echo Execute::watchTv();
