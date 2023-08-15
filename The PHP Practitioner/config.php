<?php
return [

    'database'=>[
        'name'=> 'mytodo',
        'username'=> 'root',
        'password'=> '',
        'connection'=> 'mysql:host=127.0.0.1',
        'port'=> '3307',
        'option'=>[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ]
    ] 
 ];
 ?>