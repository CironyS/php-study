<?php

/**
 * php 类与对象
 */
//在声明类时候要声明类名称与文件名称保持一致以便保持类的自动加载机制
class Player
{
    //成员属性前要有访问修饰符 public
    public string $height;
    public $name;

    // protected属性只能由本类或者子类访问
    protected $num;

    public $team;

    // private属性只能由本类访问
    private $weight;


    // 如果给private protected属性赋值
    // 魔术函数 : __set __get __call __callStatic
    // 构造函数 构造器 类每实例化一次 构造函数自动被调用
    public function __construct($name, $height, $team, $num, $weight)
    {
        // 类成员之间的互相访问  $this 本对象
        //__construct作用
        // 1.初始化类成员 让类/对象的状态稳定下来 
        // 2.给对象的属性进行初始化赋值
        // 3.给私有或者受保护的成员属性赋值
        $this->name = $name;
        $this->height = $height;
        $this->team = $team;
        $this->num = $num;
        $this->weight = $weight;
    }

    //成员方法
    public function jog()
    {
        echo "$this->name is jogging,weiighing {$this->weight} {$this->num}<br>";
    }

    public function shoot()
    {
        echo 'is shooting<br>';
    }
}

//new 关键字完成类的实例化 得到对象
$jorden = new Player('jorden', '195cm', 'Bull', '23', '89kg');
// 给对象成员属性赋值 
// $jorden->height = '205cm';
// 访问对象成员属性
// var_dump($jorden->height);

//外部访问私有与受保护属性会报错
// $jorden->weight = "80kg";
// $jorden->num = 23;
// var_dump($jorden->weight); //报错:Fatal error: Uncaught Error: Cannot access private property Player::$weight
// var_dump($jorden->num); //报错:Fatal error: Uncaught Error: Cannot access protected property Player::$num 

// var_dump($jorden);
$jorden->jog();

/*-----------------------------------------------------------*/
// $james = new Player;
// $james->height = '195cm';
// var_dump($james->height);
