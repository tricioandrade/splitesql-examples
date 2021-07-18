<style>
    #content{
        padding: 4%;
        width: 100%;
    }

    #content .form{
        border-right: 2px solid #CCC;
    }

    #content h1{
        text-align: center;
        font-family: 'Arial';
    }
</style>
<section id="content">
    <div class="container">
        <div class="row">
           <div class="col-sm-12 col-lg-12 col-md-12">
               <h1>Testando API SpliteSQL</h1>
           </div>
           <div class="col-sm-12 col-lg-6 col-md-6 mr-auto form">
               <p>Efectuando Cadastro</p>
               <hr>
               <form action="<?php echo server.'home/cadastrar/'?>" method="post">
                   <div class="form-group">
                       <label for="nome">Nome</label>
                       <input type="text" class="form-control" id="nome" name="nome" placeholder="escreva um nome">
                   </div>
                   <div class="form-group">
                       <label for="classe">Classe</label>
                       <input type="text" class="form-control" id="classe" name="classe" placeholder="uma classe">
                   </div>
                   <div class="form-group">
                       <label for="turma">Turma</label>
                       <input type="text" class="form-control" id="turma" name="turma" placeholder="uma turma">
                   </div>
                   <div class="form-group">
                       <label for="periodo">Periodo</label>
                       <input type="text" class="form-control" id="periodo" name="periodo" placeholder="um periodo">
                   </div>
                   <div class="form-group">
                       <button name="btn" class="btn btn-success">Cadastrar</button>
                   </div>
               </form>
           </div>

            <div class="col-sm-12 col-lg-6 col-md-6 mr-auto">

                <p>Pegando dados no banco</p>

                <table class="table">
                    <thead>
                        <tr>
                            <th class="col">#</th>
                            <th class="col">Nome</th>
                            <th class="col">Classe</th>
                            <th class="col">Turma</th>
                            <th class="col">Periodo</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    /*
                     * Utilizando o Método select_all da Classe SGBD
                     * para pegar os dados no banco
                     */

                    $alunos  = \App\Model\SpliteSQL\SGBD::select_all('alunos');
                    $i = 1;
                        if (\App\Model\SpliteSQL\SGBD::is_true()):
                            foreach ($alunos as $item):
                    ?>
                        <tr>
                            <th scope="row"><?php echo $i;?></th>
                            <td><?php echo $item->nome;?></td>
                            <td><?php echo $item->classe;?></td>
                            <td><?php echo $item->turma;?></td>
                            <td><?php echo $item->periodo;?></td>
                        </tr>
                    <?php
                            $i++;
                            endforeach;
                        endif;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

