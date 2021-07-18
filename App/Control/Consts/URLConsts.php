<?php


namespace App\Control\Consts;



use App\Control\Filter\Cleaner;

class URLConsts extends Cleaner
{
    public const SERVER = 'http://localhost/spock/2021/_source/Exemple/';
    public const author = '@tricioandrade';
    public const Project = 'SpliteSQLTest';
    public const _HOME = 'home';

    public const CONTROLLER = 'controller';


    public static function defined_values(){
        define('server', self::SERVER);
        define('URL', Cleaner::filter(self::__get,self::CONTROLLER,  self::string_sanitize));
        define('author',array(
            'name' => 'tricioandrade',
            'url' => 'github.com/tricioandrade/splitesqlexemple'
        ));

     }


}