<?php
/**
 * Initiates loading of applications, connect all of the necessary modules, etc.
 * Инициирует загрузку приложения, подключая все необходимые модули и пр.
 * User: DMaier
 * Date: 14.03.2019
 * Time: 23:54
 */

// Подключить файл настроек
require_once("../settings.php");

// Подключить файлы ядра
require_once CORE_PATH . 'model.php';
require_once CORE_PATH . 'view.php';
require_once CORE_PATH . 'controller.php';
require_once CORE_PATH . 'route.php';

// Запустить маршрутизатор
Route::start();