<?php
/**
 * 命名空间 解决的是全局成员(函数、类(接口)、常量)命名冲突的问题
 * namespace需要卸载脚本的顶部,必须是php的第一条指令(出了declare指令 declare结构用来设定一段代码的执行指令
 * namespace ns1{)
 * namespace ns1;
 */

//局部空间
namespace ns3{
    function demo(){
        //魔术方法__FUNCTION__用来返回函数名称以及命名空间名称(全局命名空间不返回)
        echo '我的函数名称是' .__FUNCTION__ . '<br/>';
    }
    demo();
}

namespace ns2{
    function demo(){
        echo '我的函数名称是' .__FUNCTION__ . '<br/>';
    }
    demo();
    // 在该子空间中去使用其他空间的函数
    // 从一个子空间访问另一个子空间中的成员时,需要先回到全局空间 \ 代表根空间
    \ns3\demo();
}

namespace ns1{

}

//全局空间
namespace {
    function demo(){
        echo '我的函数名称是' .__FUNCTION__ . '<br/>';
    }
    demo();
}