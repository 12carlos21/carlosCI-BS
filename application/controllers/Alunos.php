<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Alunos_model', 'alunos'); // 'alunos' é um alias para 'Alunos_model'
    }
    
    public function index() {
        $this->load->view('template/header');
        $lista['alunos'] = $this->alunos->listar();
        $this->load->view('alunosCadastro', $lista);
        $this->load->view('template/footer');
    }
    
    public function inserir() {
        //nome do campo do vetor ser o mesmo campo da tabela no BD
        $dados['nome'] = mb_convert_case($this->input->post('nome'), MB_CASE_UPPER);
        $dados['rg'] = $this->input->post('rg');
        $dados['endereco'] = mb_conbert_case($this->input->poost('endereco'), MB_CASE_UPPER);
        $dados['turma'] = mb_conbert_case($this->input->poost('turma'), MB_CASE_UPPER);
        $dados['idade'] = $this->input->post('idade');
        $this->alunos->inserir($dados);
        redirect('alunos');
    }
    
    function excluir($id) {
        $this->alunos->deletar($id);
        redirect('alunos');
    }
    
    public function editar($id) {
        $data['alunosEditar'] = $this->alunos->editar($id);
        $this->load->view('template/header');
        $this->load->view('alunosEditar', $data);
        $this->load->view('template/footer');
    }
    
    public function atualizar() {
        $dados['id'] = $this->input->post('id');
        $dados['nome'] = mb_convert_case($this->input->post('nome'), MB_CASE_UPPER);
        $dados['rg'] = $this->input->post('rg');
        $dados['endereco'] = mb_convert_case($this->input->post('endereco'), MB_CASE_UPPER);
        $dados['turma'] = mb_convert_case($this->input->post('turma'), MB_CASE_UPPER);
        $dados['idade'] = $this->input->post('idade');
        
        $this->alunos->atualizar($dados);
        redirect('alunos');
    }
    
} 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

