<?php 
 //lesson5-6
 // property and method
 // __construct
 // __destruct
 class person  {
    //properties
    public $name;
    private $eyeColor;
    private $age;

    public function __construct($name,$eyeColor,$age)
    {
        $this->name=$name;
        $this->eyeColor=$eyeColor;
        $this->age=$age;
    }
    //methods
    public function setname (string $name)
    {
        $this->name=$name;
    }
    public function getname()
    {
        return $this->name;
    }
    public function __destruct()
    {
        echo"<br> This is the end of class";
    }
}
?>