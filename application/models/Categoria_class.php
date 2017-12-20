<?php
class Categoria_class extends CI_Model {
	
  function cadastrarCategoria($data){
    if ($this->db->insert('categoria',$data)){
        return $msg = 1;
    }
    else {
        return $msg = 0;
        }
    }

    function listarDadosCategoria($categoria){
        $this->db->select('*');
        $this->db->from('categoria');
        $this->db->where('categoria', $categoria);
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function listarCategoria(){
        $this->db->select('c.*, m.nome as nome_menu');
        $this->db->from('categoria as c');
        $this->db->join('menu as m', 'm.id = c.menu');
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function salvarAlteracao($data){
        $this->db->where('categoria', $data['categoria']);
        $this->db->update('categoria',$data);
    }

    function deleteCategoria($categoria){
        $this->db->where('categoria', $categoria);
        $this->db->delete('categoria');
    }

    function listarMenu(){
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
}