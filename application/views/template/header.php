<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Aulas</title>

        <meta http-equiv="content-language" content="pt-br">

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- js -->
        <link href="<?php echo base_url('assets/js/bootstrap.min.js') ?>" rel="stylesheet">
       
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('DataTables/datatables.min.css') ?>"/>

        <script src="<?php echo base_url('DataTables/jquery.min.js') ?>"></script>

    </head>
    <body>
        <div class="container">
        <?php
        if ($this->session->userdata('estou_logado')) {
            ?>        
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="col-lg-2 col-md-2 col-2"></div>
                <img src="icone.PNG" class="img-fluid" alt="Responsive image" style="width: 5%">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">                           
                            <a class="dropdown-item" href="<?php base_url(); ?> home">Home</a>
                        </li>
                        <!--      <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                              </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cadastro
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php base_url(); ?> alunos">Aluno</a>
                                <a class="dropdown-item" href="<?php base_url(); ?> professor">Professor</a>
                                <!--          <div class="dropdown-divider"></div>-->
                                <a class="dropdown-item" href="<?php base_url(); ?> usuario">Usuario</a>
                            </div>
                        </li>
                        <!--      <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                              </li>-->
                    </ul>
                    <div class="col-lg-4 col-md-4 col-4"></div>
                    <form class="form-inline my-2 my-lg-0">
                <!--      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
                        <a> <?php
                            // put your code here
                            if ($this->session->userdata('estou_logado')) {
                                echo $this->session->userdata('logado')->nomeUsuario;
                            }
                            ?></a>
                        <div class="col-lg-1 col-md-1 col-1"></div>
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>login/sair">Sair</a>
                    </form>
                </div>
            </nav>
            <?php
        }
        ?>