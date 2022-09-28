<?php

class Credit
{
    public $name;
    private $idNum;

    public function __construct($name, $idNum)
    {
        $this->name = $name;
        $this->idNum = $idNum;
    }

    //架空__set();作为中转站
    public function __set($name, $value)
    {
        // ucfirst — 将字符串的首字母转换为大写
        $method = 'set' . ucfirst($name);
        // method_exists — 检查类的方法是否存在
        return method_exists($this, $method) ? $this->$method($name, $value) : null;
    }

    //架空__get();作为中转站
    public function __get($name)
    {
        $method = 'get' . ucfirst($name);
        return method_exists($this, $method) ? $this->$method($name) : null;
    }

    private function setIdNum($name, $value)
    {
        //设置身份证号 做一些验证
        // 检查对象中是否存在该属性
        //property_exists — 检查对象或类是否具有该属性
        if (property_exists($this, $name)):
            $this->$name = strlen($value) == 18 ? $value : null;
        endif;
    }

    private function getIdNum($name): string
    {
        //只返回后六位
        //empty — 检查一个变量是否为空
        $flag = property_exists($this, $name) && !empty($this->$name);
        if ($flag) {
            //mb_substr — 获取部分字符串
            return '*******' . mb_substr($this->$name, -6, 6);
        } else {
            return '身份信息不合法';
        }
    }

//    private function setAge($name,$value){
//        echo '休想访问到我';
//    }

}

$c = new Credit('胡歌', '341621198501215484');
$c->age = 20;
//echo $c->name;
$c->idNum = '341621198501215484';//__set
echo $c->idNum;//__get
