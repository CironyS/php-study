<?php
//  为计算机（主程序）扩展功能 计算机官方给出一种公开标准
interface USB
{
    //接口中只能定义常量和抽象方法
    //抽象方法 必须是公开的
    function run();
}

//为计算机扩展键盘功能 USB键盘
class Ukey implements USB {
    function run(){
        return "运行USB键盘设备";
    }
}


class Umemo implements USB {
    // 工作类按照自己的需求去实现接口中定义的抽象方法（多态）
    function run(){
        return "运行USB键盘存储盘";
    }
}

class Umouse implements USB {
    function run(){
        return "运行USB鼠标设备<br/>";
    }
}

//计算机主程序
class Computer{
    function useUsb($usb){
        return $usb->run();
    }
}

$c = new Computer;
echo $c->useUsb(new Ukey());
echo $c->useUsb(new Umemo());
echo $c->useUsb(new Umouse());
