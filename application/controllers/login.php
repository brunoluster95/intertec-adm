<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login extends CI_Controller {
    public function index(){
    	$this->load->view('login/login');
    }

    public function entrar(){
    	$email = $this->input->post('email');
    	$senha = $this->input->post('senha');

		$this->load->model('Login_class');
    	$query = $this->Login_class->validarUsuario($email, $senha);

		if ($query){
		$sessao = array(
			'email' 		=> $email,
			'senha' 		=> $senha,
			'logado'		=> true
		);
		$this->session->set_userdata($sessao);
		redirect('home/index');
		}

	}

    public function sair(){
		$this->session->sess_destroy($session);
		redirect('home');
	}
 
}