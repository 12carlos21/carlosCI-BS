<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Usuario</h1><p></p>
        <?php echo form_open('usuario/inserir'); ?>
        <form method="post" style="text-align:center" class="form-group">
            <div class="form-group">

                <input type="text" class="form-control form-control-lg" name="nomeUsuario" placeholder="Nomeusuario" required/><p></p>

                <input type="text" class="form-control form-control-lg" name="user" placeholder="User" required/><p></p>

                <input type="password" class="form-control form-control-lg" name="senha" placeholder="Senha" required/><p></p>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio1" value="Administrador" required>
                    <label class="form-check-label" for="inlineRadio1">Administrador</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio2" value="Usuario" required>
                    <label class="form-check-label" for="inlineRadio2">Usuario</label>
                </div>
                <p></p>

                <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>

                <input type="reset" class="btn btn-danger"/>

                <a class="btn btn-info" id="btn-lista" href="#">Listar</a>

                <a class="btn btn-primary" href="<?php base_url(); ?> home" id="cancelar">Cancelar</a>

                <p></p>





                <?php form_close(); ?>
        </form>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
</div>



<div id="div-lista" class="hide row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Tabela de Usuario</h1><p></p>

        <form method="post" style="text-align:center" class="form-group">
            <div class="form-group">
                <table id="table_id" class="table table-striped table-bordered table-hover" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Nomeusuario</th>
                            <th>User</th>
                            <th>perfilAcesso</th>
                            <th>Funções</th>



                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuario as $row):
                            ?>
                            <tr>

                                <td><?php echo $row->nomeUsuario; ?></td>
                                <td><?php echo $row->user; ?></td>
                                <td><?php echo $row->perfilAcesso; ?></td>


                                <td>
                                    <a class="glyphicon glyphicon-pencil" href="<?php echo base_url() . 'usuario/editar/' . $row->idusuario; ?>"></a>
                                    <a class="glyphicon glyphicon-trash " href="<?php echo base_url() . 'usuario/excluir/' . $row->idusuario; ?>"></a>
                                </td>


                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <tr>
                    </tbody>
                    </table>
                    </form>
            </div>
            <div class="col-lg-3 col-md-3 col-3"></div>
    </div>
</div>

<!-- <script>
    $(documents).ready(function (){
        $('#table_id').DataTable({
            
        });
    });
-->

<script>
    $(document).ready(function () {
        $('#table_id').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            }
        });
    });
    $("#btn-lista").click(function () {
        $("#div-lista").toggleClass("hide");
    });

</script>