<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Editar Professor</h1><p></p>
        <?php echo form_open('professor/atualizar'); ?>
        <div class="form-group">
            
            <input type="text" value="<?php echo $professorEditar[0]->id; ?>" class="hide" name="id" placeholder="id"/><p></p>

            <input type="text" value="<?php echo $professorEditar[0]->nome; ?>" class="form-control form-control-lg" name="nome" placeholder="Nome"/><p></p>

            <input type="text" value="<?php echo $professorEditar[0]->rg; ?>" class="form-control form-control-lg" name="rg" placeholder="RG"/><p></p>

            <input type="text" value="<?php echo $professorEditar[0]->endereco; ?>" class="form-control form-control-lg" name="endereco" placeholder="Endereço"/><p></p>

            <input type="text" value="<?php echo $professorEditar[0]->turma; ?>" class="form-control form-control-lg" name="turma" placeholder="Turma"/><p></p>

            <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>

            <input type="reset" class="btn btn-danger"/>



            <a class="btn btn-primary" href="<?php base_url(); ?> ../../Professor" id="cancelar">Cancelar</a>

            <p></p>
            <?php form_close(); ?>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>