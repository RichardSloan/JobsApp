<?php
session_start();
require_once 'config.php';
require_once 'helpers/system_helper.php';

//Loader
function __autoload($class_name)
{
    require_once 'lib/' . $class_name . '.php';
}
