<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Aluno</h1><p></p>
        <?php echo form_open('alunos/inserir'); ?>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="nome" placeholder="Nome"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="rg" placeholder="RG"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="endereco" placeholder="Endereço"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="turma" placeholder="Turma"/>
        </div>
        <div class="form-group">
            <input type="number" class="form-control form-control-lg" name="idade" placeholder="Idade"/>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios1" value="masculino">
            <label class="form-check-label" for="exampleRadios1">
                Masculino
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios2" value="feminino" >
            <label class="form-check-label" for="exampleRadios2">
                Feminino
            </label>
        </div>  
        <p></p>
        <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>
        <input type="reset" class="btn btn-danger"/>


        <a class="btn btn-primary" href="<?php base_url(); ?>home" id="cancelar">Cancelar</a>
        <?php form_close(); ?>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>