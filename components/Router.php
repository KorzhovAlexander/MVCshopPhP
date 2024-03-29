<?php


class Router
{
    private $routes;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $routersPath=ROOT.'/config/routerConfig.php';
        $this->routes = include($routersPath);
    }

    private function getURL()
    {
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run(){

        /*Получаем строку запроса, куда пришел пользователь*/
        $url = $this->getURL();

        /*разбираем роутер конфиг и проходим по ниму до конца*/
        foreach ($this->routes as $uriPattern=>$path){

            /*Если хотя бы один паттерн из роутера совпал со строкой запроса,
             то создаем контроллер(и вызываем экшин)*/
            if (preg_match("~^$uriPattern$~", $url)){

                //Получаем внутренний путь из внешнего, согласно правилу (рег. выражение)
                $internalRoute = preg_replace("~^$uriPattern$~",$path,$url);

                //разбиваем полученный путь на массив (контроллер и экшин)
                $segments = explode('/',$internalRoute);
                $controllerName = array_shift($segments)."Controller"; //название класса для контроллера
                $actionName = array_shift($segments)."Action"; //название метода для экшина

                //Получаем оставшуюся строку(параметры как глобальный массив $_GET[])
                $parameters=$segments;

                //ищем класс контроллера и подключаем его
                $controllersFileName = ROOT."/controller/$controllerName.php";
                if (file_exists($controllersFileName)){include_once($controllersFileName);}

                /*Создаем класс контроллера*/
                $objectController = new $controllerName;

                /*Передаем в класса контроллера(объект создан) в функцию параметры*/
                $result = call_user_func_array(array($objectController,$actionName),$parameters);
                if ($result!=null) break;
            }
        }
    }

}