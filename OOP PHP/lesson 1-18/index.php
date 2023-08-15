<?php 
    include "include/autoload.inc.php";
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php    
    $test = new usersview ();
    $test->showuser("abdo");

    $test = new userscontr ();
    $test->createuser("mahmoud","kiro","1998-09-25");
 ?>
</body>

</html>