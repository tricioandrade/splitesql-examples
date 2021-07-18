<?php


namespace App\Control\Filter;


use App\Model\SpliteSQL\Inspection;

class Cleaner
{
    public static $var;
    public const int_validate = 1;
    public const email_validate = 2;
    public const email_sanitize = 3;
    public const string_sanitize = 4;
    public const special_chars_sanitize = 5;

    #http const
    public const __post = 1;
    public const __get = 2;

    #Array Filter
    private const filters = array(
        self::int_validate => FILTER_VALIDATE_INT,
        self::email_validate => FILTER_VALIDATE_EMAIL,
        self::email_sanitize => FILTER_SANITIZE_EMAIL,
        self::string_sanitize => FILTER_SANITIZE_STRING,
        self::special_chars_sanitize => FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );

    private static $http_type = array(self::__post => INPUT_POST, self::__get => INPUT_GET);
    private static $validation_type;
    private static $n_var;
    private static $true;

    #Certification Of Anny Operation
    public static function is_true(){
        return self::$true;
    }

    #getting boolean states for Verification
    private static function get_bool_state(bool $e){
        if ($e): self::$true = $e;
        else: self::$true = $e;
        endif;
    }

    #setting var for filter || validation
    protected static function setNVar($n_var){
        self::$n_var = $n_var;
    }
    #setting validation type
    protected static function setValidationType($validation_type){
        self::$validation_type = $validation_type;
    }

    #getting var for filter || validation
    protected static function getNVar(){
        return self::$n_var;
    }
    #getting validation type
    protected static function getValidationType(){
        return self::$validation_type;
    }
    #getting array Http type
    protected static function getHttpType(){
        return self::$http_type;
    }

    #Filter Method
    public static function filter($http_type, $var, $validation_type){
        self::setValidationType($validation_type);
        self::setNVar($var);
        if (Inspection::is_not_empty(array($http_type, self::getNVar(), self::getValidationType(), self::getHttpType()))):
            if (array_key_exists($validation_type, self::filters) && array_key_exists($http_type, self::getHttpType())):
                self::get_bool_state(true);
                return filter_input(self::getHttpType()[$http_type], self::getNVar(), self::filters[self::getValidationType()]);
            else:
                self::get_bool_state(false);
            endif;
        else:
            self::get_bool_state(false);
        endif;
    }
}