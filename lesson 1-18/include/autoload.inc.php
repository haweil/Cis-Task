<?php
spl_autoload_register('my_auto_load');
 function my_auto_load ($classname)
 {
    $path="classes/";
    $ext  =".class.php";
    $FullPath= $path.$classname.$ext;
    if (!file_exists($FullPath))
    {
       return false ;
      }
      include_once $FullPath ;
 }
 ?>