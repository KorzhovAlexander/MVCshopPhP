<?php
/*Репортим любые ошибки */
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

/*Определяем переменную РУТ и подключаем роутер*/
define('ROOT',dirname('__FILE__'));
//print_r(ROOT);
require_once ROOT.'/components/Autoload.php';


$alpha = new Router();
$alpha->run();
?>

