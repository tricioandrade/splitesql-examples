<?php


namespace App\Control\Alerts;


use App\Control\Alerts\Notification;

class Message extends Notification
{
    public static function ErrorMessage(string $message): void{
        self::_erro($message);
    }

    public static function SucessMessage(string $message): void{
        self::_sucesso($message);
    }
}