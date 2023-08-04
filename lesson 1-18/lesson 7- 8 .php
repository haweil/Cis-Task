<?php
//lesson 7-8
// static property and method
class newclass
{
    public $data = "I am property";
    public static $personteam ="Ahly";

    public function __construct()
    {
        echo "This class has been installed <br>";
    }
    public function setdata($data)
    {
        $this->data=$data;
    }
    public function getproperty()
    {
        return $this->data;
    }
    public function __destruct()
    {
        echo"<br> This is the end of class";
    }
    public static function setteam ($newteam)
    {
        self::$personteam = $newteam;
    }
    public function getteam()
    {
        return self::$personteam;
    }
}
    $person1= new newclass();
    echo $person1->getteam();
    $person1->setteam("real");
    echo $person1->getteam();
    echo newclass::$personteam;
?>