<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Aluno</h1><p></p>
        <?php echo form_open('alunos/inserir'); ?>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="nome" placeholder="nome"/>
        </div>
            <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>
            <input type="reset" class="btn btn-danger"/>
            
            <a class="btn btn-primary" href="<?php base_url(); ?>home" id="cancelar">Cancelar</a>
        <?php form_close(); ?>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>