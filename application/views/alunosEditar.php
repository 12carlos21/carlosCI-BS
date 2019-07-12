<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Editar Aluno</h1><p></p>
        <?php echo form_open('alunos/atualizar'); ?>
        <div class="form-group">

            <input type="text" value="<?php echo $alunosEditar[0]->id; ?>" class="hide" name="id" placeholder="id"/><p></p>

            <input type="text" value="<?php echo $alunosEditar[0]->nome; ?>" class="form-control form-control-lg" name="nome" placeholder="Nome"/><p></p>

            <input type="text" value="<?php echo $alunosEditar[0]->rg; ?>" class="form-control form-control-lg" name="rg" placeholder="RG"/><p></p>

            <input type="text" value="<?php echo $alunosEditar[0]->endereco; ?>" class="form-control form-control-lg" name="endereco" placeholder="Endereço"/><p></p>

            <input type="text" value="<?php echo $alunosEditar[0]->turma; ?>" class="form-control form-control-lg" name="turma" placeholder="Turma"/><p></p>

            <input type="text" value="<?php echo $alunosEditar[0]->idade; ?>" class="form-control form-control-lg" name="idade" placeholder="Idade"/><p></p>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Masculino" <?php if ($alunosEditar[0]->sexo === "MASCULINO") echo set_radio('sexo', '1', true); ?>>
                <label class="form-check-label" for="inlineRadio1">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Feminino" <?php if ($alunosEditar[0]->sexo === "FEMININO") echo set_radio('sexo', '1', true); ?>>
                <label class="form-check-label" for="inlineRadio2">Feminino</label>
            </div>
            <p></p>

            <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>

            <input type="reset" class="btn btn-danger"/>

            <a class="btn btn-primary" href="<?php base_url(); ?> ../../alunos" id="cancelar">Cancelar</a>

            <p></p>
        </div>
        <?php form_close(); ?>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
