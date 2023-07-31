<?php
    declare (Strict_types=1);
    include "project/autoload.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frist project</title>
</head>

<body>
    <form action="project/calc.inc.php" method="post">
        <P>My Own Calculator</P>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
            <option value="mod">Modulo</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculator</button>
    </form>
    <?php
    ?>
</body>

</html>