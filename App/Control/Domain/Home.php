<?php


namespace App\Control\Domain;


use App\Control\Alerts\Message;
use App\Control\Filter\Cleaner;
use App\Control\Layout\Layout;
use App\Model\SpliteSQL\SGBD;

class Home extends Layout implements Face
{
    public function index(){
        self::View();
    }

    public function cadastrar(){
        if (isset($_POST['btn'])){
            $table = 'alunos';
            $cleaner = new Cleaner();
            $nome = $cleaner::filter($cleaner::__post, 'nome', $cleaner::string_sanitize);
            $classe = $cleaner::filter($cleaner::__post, 'classe', $cleaner::string_sanitize);
            $turma = $cleaner::filter($cleaner::__post, 'turma', $cleaner::string_sanitize);
            $periodo = $cleaner::filter($cleaner::__post, 'periodo', $cleaner::string_sanitize);

            SGBD::insert_4($table, 'nome', 'classe', 'turma', 'periodo',
                $nome, $classe, $turma, $periodo);

            if (SGBD::is_true()):
                Message::_sucesso('Cadastrado com êxito!!');
            else:
                Message::_erro('Ocorreu um erro!!');
            endif;

        }
    }


}