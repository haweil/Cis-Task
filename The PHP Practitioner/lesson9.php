<?php
$task = [
    'title' => "watch movie",
    'Due' =>  "Next week",
    'Assigned to' => "mohamed",
    'completed' => false,
    'statue' => true
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>

<body>
    <ul>
        <?php foreach ($task as $key => $value): ?>
        <strong><?=  ucfirst($key); ?>:</strong> <?= ($key=='completed'?($value? 'Yes':'No'):$value) ?><br>
        <?php endforeach;?>
    </ul>
</body>

</html>