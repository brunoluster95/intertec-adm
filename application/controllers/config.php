<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class config extends MY_Controller {

    public function index(){
		$this->load->model('Config_class');
   		$query = $this->Config_class->listarOpcao();
   		$data['config'] = $query;

   		$this->load->view('config/cadastro-opcao', $data);
    }

    public function cadastro($opcao){
		$this->load->model('Config_class');
		$query = $this->Config_class->listarBanner($opcao);

		$data['config'] = $query;
		if($opcao >= 1 && $opcao <= 4){
			$this->load->view('config/cadastro-banners', $data);
		} else if ($opcao == 5){
			redirect('config/cadastro_sociais');
		}else if ($opcao == 6){
			redirect('config/cadastro_menu');
		}else if ($opcao == 7){
			redirect('config/info_geral');
		}

    }

    public function cadastrar(){
		$valor  = $this->input->post('banner');
		$id 	= $this->input->post('id');

		//configuração para upload de foto
		$config = array(
		'upload_path' 	=> "./uploads/banners",
		'allowed_types' => "gif|jpg|png|jpeg|pdf",
		'overwrite' 	=> TRUE,
		'max_size' 		=> "4048000", // 3 MB(2048 Kb)
		'max_height' 	=> "4000",
		'max_width' 	=> "4000",
		'file_name'		=> "banner".$id,
		);
		$this->load->library('upload', $config);

			if($this->upload->do_upload('userfile1')){ // se tiver foto no upload
				$data = array('upload_data' => $this->upload->data());
				$dado['foto']  = "banner1";
			$this->load->model('Config_class');
	    	$query = $this->Config_class->cadastrarBanner($dado,1);

	    	$this->session->set_flashdata('retorno', $query);
			redirect('config/index');
		}
	}

	public function listar(){
		$this->load->model('Categoria_class');
   		$query = $this->Categoria_class->listarCategoria();

   		$data['categoria'] = $query;
   		$this->load->view('categoria/listar-categoria', $data);
	}

	// REDES SOCIAIS
    public function cadastro_sociais(){
		$this->load->model('Config_class');
		$query = $this->Config_class->listarRedesSociais();

		$data['facebook']	= array($query[0]);
		$data['twitter'] 	= array($query[1]);
		$data['instagram']  = array($query[2]);
		$data['linkedin']   = array($query[3]);
		$data['whatsapp']   = array($query[4]);
		$data['email']	    = array($query[5]);

		$this->load->view('config/redes-sociais', $data);
    }

	// MENUS DA LOJA
    public function cadastro_menu(){
		$this->load->model('Config_class');
		$query = $this->Config_class->listarMenus();

		$data['menu_1']		= array($query[0]);
		$data['menu_2'] 	= array($query[1]);
		$data['menu_3']  = array($query[2]);
		$data['menu_4']   = array($query[3]);

		$this->load->view('config/menus-loja', $data);
    }

    public function info_geral(){
		$this->load->model('Config_class');
		$query = $this->Config_class->listarInfo();

		$data['rua']		 = array($query[0]);
		$data['numero'] 	 = array($query[1]);
		$data['cidade'] 	 = array($query[2]);
		$data['estado'] 	 = array($query[3]);
		$data['bairro'] 	 = array($query[4]);
		$data['loja']   	 = array($query[5]);
		$data['descricao']   = array($query[6]);

		$this->load->view('config/info-geral', $data);
    }

    public function cadastra_sociais(){
    	$dado['facebook'] 	= array('codigo' => 1, 'link' => $this->input->post('facebook'));
    	$dado['instagram'] 	= array('codigo' => 3, 'link' => $this->input->post('instagram'));
    	$dado['linkedin'] 	= array('codigo' => 4, 'link' => $this->input->post('linkedin'));
    	$dado['whatsapp'] 	= array('codigo' => 5, 'link' => $this->input->post('whatsapp'));
    	$dado['twitter'] 	= array('codigo' => 2, 'link' => $this->input->post('twitter'));
    	$dado['email']	 	= array('codigo' => 6, 'link' => $this->input->post('email'));

		$this->load->model('Config_class');
		$query = $this->Config_class->cadastrarRedesSociais($dado);

		redirect('config');
    }

    public function cadastra_info(){
    	$dado['cidade'] 	= array('id' => 3, 'descricao' => $this->input->post('cidade'));
    	$dado['estado'] 	= array('id' => 4, 'descricao' => $this->input->post('estado'));
    	$dado['rua']	 	= array('id' => 1, 'descricao' => $this->input->post('rua'));
    	$dado['loja'] 		= array('id' => 6, 'descricao' => $this->input->post('loja'));
    	$dado['descricao'] 	= array('id' => 7, 'descricao' => $this->input->post('descricao'));
    	$dado['numero'] 	= array('id' => 2, 'descricao' => $this->input->post('numero'));
    	$dado['bairro']	 	= array('id' => 5, 'descricao' => $this->input->post('bairro'));

		$this->load->model('Config_class');
		$query = $this->Config_class->cadastrarInfo($dado);

		redirect('config');
    }

    public function cadastra_menus(){
    	$dado['id'] = $this->input->post('id');
		$config = array(
		'upload_path' 	=> "./uploads/banners",
		'allowed_types' => "gif|jpg|png|jpeg|pdf",
		'overwrite' 	=> TRUE,
		'max_size' 		=> "4048000", // 3 MB(2048 Kb)
		'max_height' 	=> "4000",
		'max_width' 	=> "4000",
		'file_name'		=> "top".$dado['id'],
		);$this->load->library('upload', $config);

		if($this->upload->do_upload('banner')){ // se tiver foto no upload
			$data = array('upload_data' => $this->upload->data());
			$dado['banner']  = $data['upload_data']['orig_name'];
	    }

    	$dado['nome'] =  $this->input->post('menu');

		$this->load->model('Config_class');
		$query = $this->Config_class->cadastrarMenus($dado);

		redirect('config');
    }

}