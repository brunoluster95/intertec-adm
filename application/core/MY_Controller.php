<?php
class MY_Controller extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('logado')){
            redirect('login');
        }
        else if($this->session->userdata('logado')){
            $this->load->view('layout/template');
        }
    }
}