<?php


namespace App\Control\Layout;


use App\Control\Consts\URLConsts;
use App\Control\Login\Login;
use App\Route\Controller;

abstract class Layout extends Controller
{
    private $publicHeader = "App/View/Headers/publicHeader.php";
    private $publicFooter = "App/View/Footers/publicFooter.php";
    private $privateHeader = "App/View/Headers/privateHeader.php";
    private $privateFooter = 'App/View/Footers/privateFooter.php';

    private static $pagesUrlPath = 'App/View/Pages/';
    private static $errorPagesUrlPath = 'App/View/404/404';

    public function View(): void
    {
        $this->parseURL();
        if ($this->Method()):
            self::set($this->publicHeader, $this->publicFooter,  $this->Method());
        else:
            self::set($this->publicHeader, $this->publicFooter,  'home');
        endif;
    }

    private static function structure($header, $page, $footer): void{
        include_once $header;
        include_once $page.".php";
        include_once $footer;
    }

    private static function set(string $header, string $footer, string $page = 'home'): void{
        $file =  self::$pagesUrlPath.strtolower($page);
        if (file_exists("{$file}.php")):
            self::structure($header,"./{$file}", $footer);
        else:
            self::structure($header, self::$errorPagesUrlPath, $footer);
        endif;
    }
}