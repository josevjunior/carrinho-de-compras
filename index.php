<?php

 define("DIR", dirname(__FILE__));
 define("DS", DIRECTORY_SEPARATOR);

 include_once DIR.DS.'App'.DS.'Loader.php';

 $loader = new app\Loader();
 $loader->register();

 $controller = new app\base\Controller();
 $controller->index();

 //header("Location: home.php"); 