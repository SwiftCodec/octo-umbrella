<?php
/**
 * Created by PhpStorm.
 * User: DMaier
 * Date: 15.03.2019
 * Time: 0:37
 */

// Подключить файл настроек
require_once(__DIR__ . "/settings.php");

class View
{

    //public $template_view; // здесь можно указать общий вид по умолчанию.

    /**
     * Method 'generate' need to form a view
     * Метод 'generate' предназначен для формирования вида
     * @param $content_view виды отображающие контент страниц
     * @param $template_view общий для всех страниц шаблон
     * @param null $data массив, содержащий элементы контента страницы. Обычно заполняется в модели.
     */
    function generate($content_view, $template_view, $data = null)
    {
        /*
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        */

        // Функцией include динамически подключается общий шаблон (view), внутри которого будет встраиваться вид
        // для отображения контента конкретной страницы
        // Общий шаблон будет содержать header, menu, sidebar и footer,
        // а контент страниц будет содержаться в отдельном виде. Для упрощения, хотя не так удобно верстать...
        // TODO: добавить проверку или шаблон по умолчанию
        include VIEWS_PATH . $template_view;
    }
}