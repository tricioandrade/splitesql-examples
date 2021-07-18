<?php


namespace App\Control;


use App\Control\Consts\URLConsts;
use App\Control\Filter\Cleaner;
use App\Route\Controller;

class App extends Controller
{
    private $namespace = "App\\Control\\Domain\\";
    private $defaultDomain = "Home";
    protected $class;

    public function __construct()
    {

        $this->parseURL();
        if (!empty($this->Controller())):
            if (file_exists('App/Control/Domain/' . $this->Controller() . '.php')):
                unset($this->url[0]);
                $this->class = $this->newClass();
                if (!empty($this->Method())):
                    if (method_exists($this->class, $this->Method())):
                        unset($this->url[1]);
                        $params = $this->url ? array_values($this->url) : [];
                        $this->setParam($params);
                        call_user_func_array([$this->class, $this->Method()], $this->Param());
                    else:
                        $this->class->index();
                    endif;
                else:
                    $this->class->index();
                endif;
            elseif(method_exists($this->class, $this->Method())):
                unset($this->url[1]);
                $params = $this->url ? array_values($this->url) : [];
                $this->setParam($params);
                call_user_func_array([$this->class, $this->Method()], $this->Param());
            else:
                $this->Home();
            endif;
        else:
            $this->Home();
        endif;
    }

    public function newClass(){
        $class = $this->namespace.$this->Controller();
        return new $class;
    }

    public function Home(){
        header('Location: '.server.'home/');
    }

}