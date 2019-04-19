<?php
/**
 * Main
 * User: DMaier
 * Date: 14.03.2019
 * Time: 23:52
 */

// Показ ошибок
ini_set('display_errors', 1);

// Подключить файл настроек
require_once(__DIR__ . "/settings.php");

// Запустить процесс инициализации MVC
require_once ENGINE_PATH . 'boot.php';