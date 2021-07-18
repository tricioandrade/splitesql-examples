<?php


namespace App\Route;


abstract class Controller
{
    private  $controller;
    private  $method;
    private  $param;

    protected array $url = array();

    protected function setController($controller): void{
        $this->controller = $controller;
    }
    protected function setMethod($method): void{
        $this->method = $method;
    }
    protected function setParam($param): void{
        $this->param = $param;
    }

    protected function Controller(){
        return $this->controller;
    }
    protected function Method(){
        return $this->method;
    }
    protected function Param(){
        return $this->param;
    }

    protected function parseURL(){
        if (!empty(URL)):
            $this->url = explode('/',rtrim(URL, '/'));
            if (array_key_exists(0, $this->url)):
                $this->setController(ucfirst($this->url[0]));
            endif;
            if (array_key_exists(1, $this->url)):
                $this->setMethod($this->url[1]);
            else:
                $this->setMethod("home");
            endif;
        endif;
    }

}