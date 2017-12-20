<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MY_Controller {
	public function index(){
		$this->load->model('Home_class');
		$data['cad_hoje'] = $this->Home_class->cadastrosHoje();

	    $this->load->view('dashboard',$data);
	}

	// método para cadastrar funcionário
	function cadastrar(){
		$config = array(
		'upload_path' 	=> "./uploads/",
		'allowed_types' => "gif|jpg|png|jpeg|pdf",
		'overwrite' 	=> TRUE,
		'max_size' 		=> "3048000", // 3 MB(2048 Kb)
		'max_height' 	=> "2000",
		'max_width' 	=> "4000",
		'file_name'		=> date('YmdHis'),
		);
		$this->load->library('upload', $config);

		if($this->upload->do_upload()){
			$data = array('upload_data' => $this->upload->data());
			$dado['foto'] 		  = $config['file_name'];
		}
			$dado['primeironome'] = $this->input->post('primeiro-nome');
			$dado['sobrenome']	  = $this->input->post('sobrenome');
			$dado['email'] 		  = $this->input->post('email');
			$dado['empresa'] 	  = $this->input->post('empresa');
			$dado['telefone'] 	  = $this->input->post('telefone');
			$dado['cargo'] 	  	  = $this->input->post('cargo');
			$dado['tipo'] 	  	  = '1';
	    	if ($this->db->insert('membro', $dado)){
	    		$this->session->set_flashdata('msg', 'cadastro efetuado!');
				redirect('membro/buscar');
    		}
    		else if (!$this->db->insert('membro', $dado)){
    			$this->session->set_flashdata('msg', 'erro');
  				redirect('membro');
			}
		}

	//método para busca de funcionários
	function buscar($empresa){
		$this->load->model('Membro_class');
   		$query = $this->Membro_class->listarMembros($empresa);

		$data['msg'] = $this->session->flashdata('msg');
   		if ($query){
	        $data['records'] = $query;
    	    $this->load->view('membro/busca_membro', $data);
    	}
    	else{
	    	redirect('membro');
	    }
	}

	function buscarPorNome(){
   		$this->load->model('Membro_class');
   		$nome = $this->input->post("nome");
   		$query = $this->Membro_class->buscarMembroPorNome($nome);
   		if ($query){
	        $data['records'] = $query;
    	    $this->load->view('membro/busca_membro', $data);
    	}
    	else{
	    	redirect('membro');
	    }
	}

	//método para visualizar perfil de um funcionário
	function visualizar($id){
		$this->load->model('Membro_class');
  		$query = $this->Membro_class->perfilMembro($id);
	    $data['membro'] = $query;
  		$query = $this->Membro_class->dadosAdicionaisMembro($id);
	    $data['dados'] = $query;
    	$this->load->view('membro/perfil_membro', $data);
	}

	function editar($id){
		$this->load->model('Membro_class');
  		$query = $this->Membro_class->perfilMembro($id);
	    $data['perfil'] = $query;
    	$this->load->view('membro/edit_membro', $data);
	}

	function alterando(){
		$data 				  = $this->input->post('codmembro');
		$dado['primeironome'] = $this->input->post('primeiro-nome');
		$dado['sobrenome']	  = $this->input->post('sobrenome');
		$dado['email'] 		  = $this->input->post('email');
		$dado['telefone'] 	  = $this->input->post('telefone');
		$dado['cargo'] 	  	  = $this->input->post('cargo');
		$dado['senha'] 	  	  = $this->input->post('senha');

		$this->load->model('Membro_class');
		$this->Membro_class->editarMembro($data, $dado);

		redirect('membro/buscar');
	}
}