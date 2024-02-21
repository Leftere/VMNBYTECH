<?php

namespace app\core;
class Router
{
    protected array $routes = [];
    public Request $request;
    public Response $respone;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->respone = $response;
    }


    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve() 
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false) {
            $this->respone->setStatusCode(404);
            return   header('Location: /404');
           
        }

        if(is_string($callback)) {
            return $this->renderView($callback);
        }
    
        if(is_array($callback)) {
            // Instantiate the controller class if $callback[0] is a string (class name)

            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
            // if(is_string($callback[0])) {
            //     $callback[0] = new $callback[0]();
            // }
        }
    
        return call_user_func($callback, $this->request);
    }

    public function renderView($view, $params =[]) {
       
        include_once __DIR__."/../views/$view.php";
        // $layoutContent = $this->layoutContent();
        // $viewContent = $this->renderOnlyView($view, $params);
        // return str_replace('{{content}}', $viewContent, $layoutContent);
    }



    public function renderContent($viewContent) {
       
        $layoutContent = $this->layoutContent();
    
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent() {

        // $layout = Application::$app->controller->layout;
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $params){
        
        foreach ($params as $key => $value) {
            $$key = $value;
        }
    
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }
}
