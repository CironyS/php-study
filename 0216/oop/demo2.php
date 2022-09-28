<?php
/**
 * 1. 接口中定义的均是公开的抽象方法，类属性不能定义在接口中，类常量可以。
 * 2.一个工作类必须将接口中的所有方法按照自己的需求去实现，否则该类要定义成抽象类。
 * 3. 抽象类中可以有抽象方法和普通方法，不能被实例化。
 */
//定义接口
interface iDemo
{
    //定义常量
    const APP_NAME = "hidemi小铺";
    //定义方法
    public static function getInfo(...$info);
    public static function cal($a,$b);
}

//抽象类
abstract class aDemo implements iDemo{
    static function getInfo(...$info){
        return print_r($info,true);
    }
}

//工作类
class Work extends aDemo
{
    static function cal($a,$b){
        echo pow($a,$b);
    }
}

echo Work::getInfo('胡歌',36,'180cm','内地男演员') . "<hr/>";
//常量最好是以接口的方式去访问
echo iDemo::APP_NAME . "<hr/>";
echo aDemo::APP_NAME . "<hr/>";
echo aDemo::getInfo('胡歌',36,'180cm','内地男演员') . "<hr/>";
echo Work::cal(5,3) . "<hr/>";

/**
 * php中，类的继承只能是单继承，即类C不能同时继承类A和类B，那么对于对特定类的功能进行拓展，可以use trait，还可以使用接口来实现类似于多方继承的好处，。
 * 先继承后实现
 * 工作类使用extends进行继承 普通类（抽象类）使用implements进行继承 接口1，接口2....接口n
 */

/**
 * oop 三大特性  封装 多态 继承

 * 多态性是指同一操作作用于不同类的实例，将产生不同的效果，即不同类的对象收到相同的消息时，得到不同的结果。在PHP中实现多态的方式有2种：通过继承实现多态和通过接口实现多态。多态指的是方法的重写。
 */



/**
 * 什么时候使用抽象类，接口，trait?
 *  1. 如果你想使用模型，为多个紧密想关的对象提供规范，就使用抽象类；如果你想创建一项功能，随后在多个不相关的对象中实现，就使用接口。
 *  2. 如果你的对象必须从多个源头继承行为，就使用接口；php中的类可以实现多个接口，但只能继承一个类（抽象类）。
 *  3.如果你知道所有类将共享一个方法实现时，就使用抽象类，并在抽象类中实现这个方法。你不能在接口中实现方法。
 *  4. 如果所有类都共享一段相同的代码，就使用trait。
 *
 */