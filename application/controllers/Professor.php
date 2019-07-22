<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        }
        $this->load->model('Professor_model', 'professor'); // 'professor' é um alias para 'Alunos_model'
    }

    public function index() {
        $this->load->view('template/header');
        $lista['professor'] = $this->professor->listar();
        $this->load->view('professorCadastro', $lista);
        $this->load->view('template/footer');
    }

    public function inserir() {
        //nome do campo do vetor deve ser o mesmo campo da tabela no BD
        $dados['nome'] = mb_convert_case($this->input->post('nome'), MB_CASE_UPPER);
        $dados['rg'] = $this->input->post('rg');
        $dados['endereco'] = mb_convert_case($this->input->post('endereco'), MB_CASE_UPPER);
        $dados['turma'] = mb_convert_case($this->input->post('turma'), MB_CASE_UPPER);
        $this->professor->inserir($dados);
        redirect('professor');
    }

    public function excluir($id) {
        $this->professor->deletar($id);
        redirect('professor');
    }

    public function editar($id) {
        $data['professorEditar'] = $this->professor->editar($id);
        $this->load->view('template/header');
        $this->load->view('professorEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $dados['id'] = $this->input->post('id');
        $dados['nome'] = mb_convert_case($this->input->post('nome'), MB_CASE_UPPER);
        $dados['rg'] = $this->input->post('rg');
        $dados['endereco'] = mb_convert_case($this->input->post('endereco'), MB_CASE_UPPER);
        $dados['turma'] = mb_convert_case($this->input->post('turma'), MB_CASE_UPPER);

        $this->professor->atualizar($dados);
        redirect('professor');
    }

}
