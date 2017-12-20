<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class produtos extends MY_Controller {

	// actions que carregam views
    public function cadastro(){
        $this->load->model('Categoria_class');
        $query = $this->Categoria_class->listarCategoria();
        $data['categoria'] = $query;
    	$data['msg'] = $this->session->flashdata('retorno');
    	$this->load->view('produto/cadastro-produto', $data);
    }

    public function alteracao($produto){
    	$data['msg'] = $this->session->flashdata('retorno');
    	$this->load->model('Produto_class');
    	$query = $this->Produto_class->carregarProduto($produto);
    	$data['produto'] = $query;

        $this->load->model('Categoria_class');
        $query = $this->Categoria_class->listarCategoria();
        $data['categoria'] = $query;

    	$this->load->view('produto/editar-produto', $data);
	}
    
    public function promocao($produto){
        $data['msg'] = $this->session->flashdata('retorno');
        $this->load->model('Produto_class');
        $query = $this->Produto_class->carregarProduto($produto);
        $data['produto'] = $query;
        $this->load->view('produto/promocao-produto', $data);
    }
    
    public function estoque($produto){
        $this->load->model('Produto_class');

        $query = $this->Produto_class->carregarProduto($produto);
        $data['produto'] = $query;

        $query = $this->Produto_class->listarTotalPortugues($produto);
        $data['portugues'] = $query;

        $query = $this->Produto_class->listarTotalIngles($produto);
        $data['ingles'] = $query;

        $query = $this->Produto_class->listarTotalPadrao($produto);
        $data['padrao'] = $query;

        $this->load->view('produto/estoque-produto', $data);
    }

    public function movimentar_estoque(){
        date_default_timezone_set('America/Sao_Paulo');
        $data['produto']        = $this->input->post('produto');
        $data['qtd']            = $this->input->post('qtd');
        $operacao               = $this->input->post('operacao');
        $data['idioma']         = $this->input->post('idioma');
        $data['data_movimento'] = date("Y-m-d H:i:s");
        
        $data['entrada_saida'] = ($operacao == 1 ? "e" : "s");

    	$this->load->model('Produto_class');
    	$query = $this->Produto_class->inserirEstoque($data);

    	$this->session->set_flashdata('retorno', $query);
        redirect('produtos/estoque/'.$data['produto']);
    }

    public function listarpromo(){
        $this->load->model('Produto_class');
        $data['produto'] = $this->Produto_class->listarPromo();
        $this->load->view('produto/listar-promocao', $data);
    }

    // actions que fazem conexão com model
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
            $dado['foto']  = $data['upload_data']['orig_name'];
		}
        //var_dump($config);exit;
    	$dado['nome'] 		= $this->input->post('nome');
    	$dado['categoria'] 	= $this->input->post('categoria');
    	$dado['preco'] 		= $this->input->post('preco');
    	$dado['descricao'] 	= $this->input->post('descricao');
        $dado['ativo']      = $this->input->post('ativo');
        $dado['raridade']   = $this->input->post('raridade');
        $dado['estado']     = $this->input->post('estado');
    	$dado['peso']   	= $this->input->post('peso');

		$this->load->model('Produto_class');
    	$query = $this->Produto_class->cadastrarProduto($dado);

    	$this->session->set_flashdata('retorno', $query);
		redirect('produtos/cadastro');
	}

    public function alterar(){
        //configuração para upload de foto
        $config = array(
        'upload_path'   => "./uploads/",
        'allowed_types' => "gif|jpg|png|jpeg|pdf",
        'overwrite'     => TRUE,
        'max_size'      => "4048000", // 3 MB(2048 Kb)
        'max_height'    => "4000",
        'max_width'     => "4000",
        'file_name'     => $this->input->post('foto_antiga'),
        );
        $this->load->library('upload', $config);

        if($this->upload->do_upload('userfile')){ // se tiver foto no upload
            $data = array('upload_data' => $this->upload->data());
            $dado['foto']  = $data['upload_data']['orig_name'];
        }

        $data               = $this->input->post('produto');
        $dado['nome']       = $this->input->post('nome');
        $dado['categoria']  = $this->input->post('categoria');
        $dado['preco']      = $this->input->post('preco');
        $dado['descricao']  = $this->input->post('descricao');
        $dado['ativo']      = $this->input->post('ativo');
        $dado['estado']     = $this->input->post('estado');
        $dado['raridade']   = $this->input->post('raridade');

        $this->load->model('Produto_class');
        $query = $this->Produto_class->editarProduto($dado, $data);

        $this->session->set_flashdata('retorno', $query);
        redirect('produtos/listar');
    }

	public function listar(){
		$this->load->model('Produto_class');
   		$query = $this->Produto_class->listarProdutos();
   		$data['produto'] = $query;

   		$this->load->view('produto/listar-produto', $data);
	}

    public function cadastropromocao(){
    	$dado['produto'] 	= $this->input->post('produto');
    	$dado['inicio'] 	= $this->input->post('dataini');
    	$dado['fim'] 		= $this->input->post('datafim');
        $dado['valor'] 	    = $this->input->post('valor');
        
        $this->db->insert('produto_promocao',$dado);
    	redirect('produtos/listar');
    }

    public function excluirpromo($data){
        $this->load->model('Produto_class');
        $query = $this->Produto_class->excluirPromo($data);

        redirect('produtos/listarpromo');
    }
}