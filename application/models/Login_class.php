<?php
class Login_class extends CI_Model {
	
  function validarUsuario($email, $senha){
    $this->db->select('email, tipo, senha');
    $this->db->from('usuario');
    $this->db->where('email', $email);
    $this->db->where('senha', $senha);
    $query = $this->db->get();

    if ($query->num_rows() > 0){
        foreach($query->result() as $row) {
                $data[] = $row;
            }
        return $data;
    }
    else{
        return null;
        }
    }
}