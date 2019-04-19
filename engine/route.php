<?php
/**
 * Will run controller methods, which will generate page views
 * Класс будет запускать методы контроллеров, которые будут генерировать вид страниц.
 * User: DMaier
 * Date: 15.03.2019
 * Time: 0:04
 */

// Очень упрощенная логика. Вообще можно было сделать часть логики на стороне .htaccess, но нет.
// При переходе по ссылке site.com/feedback/view, роутер выполнит следующие действия:
// подключит файл model_feedback.php из папки models, содержащий класс Model_Feedback;
// подключит файл controller_feedback.php из папки controllers, содержащий класс Controller_Feedback;
// создаст экземпляр класса Controller_Feedback и вызовет действие по умолчанию — action_view, описанное в нем.
// в случае отсутствия контроллера или экшена перенаправит на страницу 404.
// TODO: Подумать о безопасности, $_SERVER['REQUEST_URI'] можно подменить, подключив любой файл на основании $routes = explode
// предусмотрена проверка до второго уровеня URL, т.е. site.com/feedback/view
class Route
{
    static function start()
    {
        // контроллер и действие по умолчанию
        $controller_name = 'Main';
        $action_name = 'index';

        // глобальный массив $_SERVER['REQUEST_URI'] содержит полный адрес по которому обратился пользователь
        // разделить адрес на составлющие, получим контроллер feedback и экшен view
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получить имя контроллера
        if ( !empty($routes[1]) )
        {
            $controller_name = $routes[1];
        }

        // получить имя экшена
        if ( !empty($routes[2]) )
        {
            $action_name = $routes[2];
        }

        // добавить префиксы
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

        // подключить файл с классом модели (файла модели может и не быть)

        $model_file = strtolower($model_name).'.php';
        $model_path = "application/models/".$model_file;
        if(file_exists($model_path))
        {
            include "application/models/".$model_file;
        }

        // подключить файл с классом контроллера
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "application/controllers/".$controller_file;
        if(file_exists($controller_path))
        {
            include "application/controllers/".$controller_file;
        }
        else
        {
            /*
            правильно было бы кинуть здесь исключение,
            но для упрощения редирект на страницу 404
            */
            Route::ErrorPage404();
        }

        // создать контроллер
        $controller = new $controller_name;
        $action = $action_name;

        if(method_exists($controller, $action))
        {
            // вызвать действие контроллера
            $controller->$action();
        }
        else
        {
            // здесь также надо бы кинуть исключение, но произвести редирект
            Route::ErrorPage404();
        }

    }

    function ErrorPage404()
    {
        // TODO https
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}