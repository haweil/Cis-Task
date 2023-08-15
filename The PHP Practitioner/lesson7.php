<?php 
$task = [
 
    'title' => "watch movie",
    'Due' =>  "Next week" , 
    'Assigned to'=> "mohamed",
    'completed'=> "no"
];

 $task ['name']="mohamed";
   unset($task['name']);
   foreach ($task as $key => $feature) :
?>
<li><strong> <?= $key ; ?> </strong> <?= $feature ; ?> </li>
<?php endforeach; ?>