<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Professor</h1><p></p>
        <?php echo form_open('professor/inserir'); ?>
        <form method="post" style="text-align:center" class="form-group">
            <div class="form-group">

                <input type="text" class="form-control form-control-lg" name="nome" placeholder="Nome"/><p></p>

                <input type="text" class="form-control form-control-lg" name="rg" placeholder="RG"/><p></p>

                <input type="text" class="form-control form-control-lg" name="endereco" placeholder="Endereço"/><p></p>

                <input type="text" class="form-control form-control-lg" name="turma" placeholder="Turma"/><p></p>

                <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>

                <input type="reset" class="btn btn-danger"/>


              
                <a class="btn btn-primary" href="<?php base_url(); ?> home" id="cancelar">Cancelar</a>
                 
                <p></p>

                <table class="table  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>RG</th>
                            <th>Endereço</th>
                            <th>Turma</th>
                            <th>Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                           <?php foreach ($professor as $row):
                          ?>
                        <tr>
                         

                            <td><?php echo $row->nome; ?></td>
                            <td><?php echo $row->rg; ?></td>
                             <td><?php echo $row->endereco; ?></td>
                            <td><?php echo $row->turma; ?></td>

                        </tr>
                        <?php endforeach;    ?>
                    </tbody>
                </table>
                </tr>
                </tbody>
                </table>




<?php form_close(); ?>
        </form>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>