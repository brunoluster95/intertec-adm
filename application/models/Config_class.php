<?php
class Config_class extends CI_Model {

    function listarOpcao(){
        $this->db->select('*');
        $this->db->from('configuracao');
        $this->db->order_by('nome');

        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function cadastrarBanner($dado,$where){
        $this->db->where('banner', $where);
        $this->db->update('banners_home',$dado);
        
        return;
     }

    function listarBanner($opcao){
        $this->db->select('*');
        $this->db->from('banners_home');
        $this->db->where('banner',$opcao);
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

     function listarRedesSociais(){
        $this->db->select('*');
        $this->db->from('redes_sociais');
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

     function listarInfo(){
        $this->db->select('*');
        $this->db->from('info_loja');
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

     function listarMenus(){
        $this->db->select('*');
        $this->db->from('menu');
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function cadastrarRedesSociais($dado){
        foreach($dado as $dado){
            $this->db->set('link', $dado['link']);
            $this->db->where('codigo', $dado['codigo']);
            $this->db->update('redes_sociais');
        }
        return;
     }

    function cadastrarInfo($dado){
        foreach($dado as $dado){
            $this->db->set('descricao', $dado['descricao']);
            $this->db->where('id', $dado['id']);
            $this->db->update('info_loja');
        }
        return;
     }

    function cadastrarMenus($dado){
        $this->db->set('nome', $dado['nome']);
        $this->db->set('banner', $dado['banner']);
        $this->db->where('id', $dado['id']);
        $this->db->update('menu');
        
        return;
     }
}