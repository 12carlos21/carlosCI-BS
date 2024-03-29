<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Professor</h1><p></p>
        <?php echo form_open('professor/inserir'); ?>
        <div class="form-group">

            <input type="text" class="form-control form-control-lg" name="nome" placeholder="Nome"/><p></p>

            <input type="text" class="form-control form-control-lg" name="rg" placeholder="RG"/><p></p>

            <input type="text" class="form-control form-control-lg" name="endereco" placeholder="Endereço"/><p></p>

            <input type="text" class="form-control form-control-lg" name="turma" placeholder="Turma"/><p></p>

            <input type="text" class="form-control form-control-lg" name="idade" placeholder="Idade"/><p></p>

            <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>

            <input type="reset" class="btn btn-danger"/>

            <a class="btn btn-info" id="btn-lista" href="#">Listar</a>

            <a class="btn btn-primary" href="<?php base_url(); ?> home" id="cancelar">Cancelar</a>

            <p></p>
            <?php form_close(); ?>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
<div id="div-lista" class="hide row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <table id="table_id" class="table table-striped table-bordered " style="width: 100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>Endereço</th>
                    <th>Turma</th>
                    <th>Funçoes</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professor as $row): ?>           
                    <tr>
                        <td><?php echo $row->nome; ?></td>
                        <td><?php echo $row->rg; ?></td>
                        <td><?php echo $row->endereco; ?></td>
                        <td><?php echo $row->turma; ?></td>
                        <td>
                            <a href="<?php echo base_url() . 'professor/excluir/' . $row->id; ?>">Excluir</a>
                            <a href="<?php echo base_url() . 'professor/editar/' . $row->id; ?>">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
            }
        });
    });
    $("#btn-lista").click(function () {
        $("#div-lista").toggleClass("hide");
    });
</script>