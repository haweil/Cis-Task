<?php

use App\core\App;
App::bind('config',require 'config.php');

App::bind('database',new QueryBuilder(

    Connection::make(App::get('config')['database'])
));

function view ($name ,$data=[]) {
    extract($data);

    return require "app/views/$name.view.php";
}

function redirect( $path)
{
    header("Location: /$path");

}