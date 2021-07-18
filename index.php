<?php
session_start();
require_once 'vendor/autoload.php';
\App\Control\Consts\URLConsts::defined_values();

const __host = 'localhost';
const __user = 'root';
const __database = 'school';
const __password = '';
const __charset = 'utf8';

new \App\Model\SpliteSQL\SGBD( __host, __user, __charset, __database, __password);

new App\Control\Layout\Start();
