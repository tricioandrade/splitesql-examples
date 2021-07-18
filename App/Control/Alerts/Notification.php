<?php


namespace App\Control\Alerts;


use App\Control\Consts\URLConsts;

abstract class Notification extends URLConsts
{
        private static string $css_back = "
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        background: #ffffff5c;
        z-index:2;
        font-family:Arial;
        ";
        private static string $css_dark_message = "
        color: #f44336;
        width: 50%;
        margin: 12% auto;
        padding: 4%;
        text-align: center;
        background: #ffffff;
        border-left:2px solid red;
        border-bottom:5px solid red;
        font-family:Arial;
    
        ";
        private static string $css_white_message = "
        color:green;
        width: 50%;
        margin: 12% auto;
        padding: 4%;
        text-align: center;
        background: #ffffff;
        border:1px solid green;
        border-left:2px solid green;
        border-bottom:5px solid green;
        ";

    public static function _sucesso(string $mensagem){

        echo "
            <style>
                .css_back{
                    ".self::$css_back."
                }
                .css_white_message{
                    ".self::$css_white_message."
                }
            </style>
            <div class='css_back'>
            <div class='css_white_message'>
                <h4>".$mensagem."</h4>
                <span class='col s12 l12 m12'>
                    <a href='".server."' class='btn green text-white'>Fechar</a>
                </span>
            </div></div>
        
        ";

    }

    public static function _erro(string $mensagem){

        echo "
            <style>
                .css_back{
                    ".self::$css_back."
                }
                .css_dark_message{
                    ".self::$css_dark_message."
                }
            </style>
            <div class='css_back'>
            <div class='css_dark_message'> 
                <h4>".$mensagem."</h4>
                <span class='col s12 l12 m12'>
                    <a href='".server."' class='btn red text-white'>Fechar</a>
                </span>
            </div></div>
        ";

    }
}