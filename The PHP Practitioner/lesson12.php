<?php

class Task {

    public $description;

    public $completed = false ;


    public function __construct($description)
    {
       
        $this->description =$description;

    }
    
    public function complete ()
    {

         $this->completed=true;
    }

    public function isComplete()
    {

        return $this->completed;
    }
}

$tasks =[

    new Task ("Go to the club"),
    new Task ("play football"),
    new Task ("Watch Movie"),
];
 
$tasks[0]->complete();

 require "lesson.view.php";

?>