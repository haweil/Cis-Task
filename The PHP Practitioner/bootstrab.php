<?php

$config=require "config.php";
require "Database/connection.php";
require "Database/Query.php";

return new query(

    connect::make($config['database'])
);
?>