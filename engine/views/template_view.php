<?php
/**
 * Template containing a base layout for all pages
 * Шаблон, содержащий общую для всех страниц разметку
 * User: DMaier
 * Date: 15.03.2019
 * Time: 0:50
 */
// Подключить файл настроек
require_once(__DIR__ . "/settings.php");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная</title>
</head>
<body>
	<?php include VIEWS_PATH . $content_view; ?>
</body>
</html>