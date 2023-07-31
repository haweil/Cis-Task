<?php
// lesson 1-4 
// create class
class person 
{
    protected $first ="Mohamed";
    private $last = "Haweil";
    private $age = "28";
    public function owner()
    {
        $a = $this->first;
        return $a;
    }
    
}
 class Pet extends person {
    public function owner()
    {
        $a = $this->first;
        return $a;
    }
 }
  ?>