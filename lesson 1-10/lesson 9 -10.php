<?php 
// my auto load
// type declare
declare (Strict_types=1);
spl_autoload_register('my_auto_load');
function my_auto_load ($classname)
{
   $path="classes/";
   $ext  =".php";
   $FullPath= $path.$classname.$ext;
   if (!file_exists($FullPath))
   {
      return false ;
     }
     include_once $FullPath ;
}
?>
?>