<?php

class User
{
    public string $height;
    public $name;

    protected $num;

    public $team;

    private $weight;

    public function __construct($name, $height, $team, $num, $weight)
    {

        $this->name = $name;
        $this->height = $height;
        $this->team = $team;
        $this->num = $num;
        $this->weight = $weight;
    }

    public function jog()
    {
        echo "$this->name is jogging,weiighing {$this->weight} {$this->num}<br>";
    }

    public function shoot()
    {
        echo 'is shooting<br>';
    }
}
