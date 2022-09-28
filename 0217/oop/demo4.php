<?php
class Credit{
   public $name;
   private $idNum;
   public function __construct($name,$idNum){
       $this->name = $name;
       $this->idNum = $idNum;
   }
   public function __set($name,$value){
//       echo $value . '<hr/>';
       $this->$name = $value;
       return $this->$name;
   }
   public function __get($name){
       return $this->$name;
   }
}

$c = new Credit('胡歌','341621198501215484');
$c->age = 20;
//echo $c->age;
echo $c->idNum;
//var_dump($c);
