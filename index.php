<?php
define('POVAR', true);

header("Content-Type:text/html;charset=utf-8");

//error_reporting(0);

session_start();

require "config.php";

set_include_path(get_include_path().PATH_SEPARATOR.CONTROLLER.PATH_SEPARATOR.MODEL.PATH_SEPARATOR.LIB);

function __autoload($class_name) {
    if (!include_once($class_name.".php")) {
        try {
            throw new ContrException('Не правильный файл для подключения');
        }
        catch (ContrException $e) {
            echo $e->getMessage();
        }
    }
}
$obj = Route_Controller::get_instance();
$obj->route();