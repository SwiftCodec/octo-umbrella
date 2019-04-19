<?php
/**
 * Main AJAX file
 * User: DMaier
 * Date: 14.03.2019
 * Time: 20:52
 */

// Подключить файл настроек
require_once(__DIR__ . "/settings.php");
// Подключить класс для ручной отладки
require_once(ENGINE_PATH . "DebugClass.php");

// Вывести дебаг информацию
$DebugClass = new DebugClass;
$DebugClass -> printConsole($_GET);
$DebugClass -> printPage($_GET);

sleep(1);

$ajax_peoples = array('firstname' => 'Vasya', 'lastname' => 'Pupkin');
//echo "Firstname: " . $ajax_peoples['firstname'];
isset($_GET["w"]) ? print "W: " . $_GET["w"] . " " : print " ";
isset($_GET["h"]) ? print "H: " . $_GET["h"] . " " : print " ";
isset($_GET["d"]) ? print "D: " . $_GET["d"] . " " : print " ";



?>