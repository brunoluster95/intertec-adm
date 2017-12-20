<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class categorias extends MY_Controller {

    public function cadastro(){
    	$data['msg'] = $this->session->flashdata('retorno');
    	
    	$this->load->model('Categoria_class');
    	$data['menu'] = $this->Categoria_class->listarMenu();

    	$this->load->view('categoria/cadastro-categoria', $data);
    }

    public function listar_categoria($categoria){
    	$this->load->model('Categoria_class');
    	$data['categoria'] = $this->Categoria_class->listarDadosCategoria($categoria);
    	$data['menu'] 	   = $this->Categoria_class->listarMenu();

    	$this->load->view('categoria/editar-categoria',$data);
    }

    public function salvar_alteracao(){
    	$data['categoria'] 	= $this->input->post('id');
    	$data['nome'] 		= $this->input->post('nome');
    	$data['menu'] 		= $this->input->post('menu');
    	$data['descricao'] 	= $this->input->post('descricao');

    	$this->load->model('Categoria_class');
    	$this->Categoria_class->salvarAlteracao($data);

    	redirect('categorias/listar');
    }

    public function deletar_categoria($categoria){
    	$this->load->model('Categoria_class');
    	$this->Categoria_class->deleteCategoria($categoria);

    	redirect('categorias/listar');
    }

    public function cadastrar(){
		//configuração para upload de foto
		$config = array(
		'upload_path' 	=> "./uploads/",
		'allowed_types' => "gif|jpg|png|jpeg|pdf",
		'overwrite' 	=> TRUE,
		'max_size' 		=> "4048000", // 3 MB(2048 Kb)
		'max_height' 	=> "4000",
		'max_width' 	=> "4000",
		'file_name'		=> date('YmdHis'),
		);
		$this->load->library('upload', $config);

		if($this->upload->do_upload('userfile')){ // se tiver foto no upload
			$data = array('upload_data' => $this->upload->data());
			$dado['foto']  = $config['file_name'];
		}

    	$dado['nome'] 		= $this->input->post('nome');
    	$dado['descricao'] 	= $this->input->post('descricao');
    	$dado['menu'] 		= $this->input->post('menu');

		$this->load->model('Categoria_class');
    	$query = $this->Categoria_class->cadastrarCategoria($dado);

    	$this->session->set_flashdata('retorno', $query);
		redirect('categorias/cadastro');
	}

	public function listar(){
		$this->load->model('Categoria_class');
   		$query = $this->Categoria_class->listarCategoria();

   		$data['categoria'] = $query;


   		$this->load->view('categoria/listar-categoria', $data);
	}
}