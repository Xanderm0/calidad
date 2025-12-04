<?php
$controller = $_GET['c'] ?? 'producto';
$action     = $_GET['a'] ?? 'index';

require_once "controllers/" . ucfirst($controller) . "Controller.php";

$class = ucfirst($controller) . "Controller";
$ctrl = new $class();
$ctrl->$action();

