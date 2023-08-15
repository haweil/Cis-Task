<?php

class connect  {

 public static function make($config) {
try
    {
         return new PDO( 
            $config['connection'].';dbname='.$config['name'].";port=".$config['port'],
            $config['username'],
            $config['password'],
            $config['option']
        );
    }
    catch (PDOException $e)
    {
        die( $e->getMessage());
    }

    }
}

?>