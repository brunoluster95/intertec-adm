<?php
class Produto_class extends CI_Model {
	
  function cadastrarProduto($data){
    if ($this->db->insert('produto',$data)){
        return $msg = 1;
    }
    else {
        return $msg = 0;
        }
    }

    function listarProdutos(){
        $this->db->select('p.*, c.nome as categoria, r.nome_raridade');
        $this->db->from('produto as p');
        $this->db->join('categoria as c','p.categoria=c.categoria', 'left');
        $this->db->join('raridade as r','p.raridade=r.id', 'left');
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function inserirEstoque($data){

        //verifica se tem algum dado do produto no estoque
        $this->db->select('*')->from('estoque')->where('produto', $data['produto']);
        $query = $this->db->get();

        if ($query->num_rows() <= 0){
            $this->db->insert('estoque', $data);
            return $msg = 1;
        } else {
            //verifica se tem algum produto com idioma padrão
            $this->db->select('*')->from('estoque')->where('produto = '.$data['produto'].' and idioma = 0');
            $query_padrao = $this->db->get();

            $this->db->select('*')->from('estoque')->where('produto = '.$data['produto'].' and idioma > 0');
            $query_outro = $this->db->get();

            if ($query_padrao->num_rows() > 0 && $query_outro->num_rows() <= 0 && $data['idioma'] == 0) { // se tiver padrão, e não tiver outro e idioma padrão
                $this->db->insert('estoque', $data);
                return $msg = 1;
            } else if ($query_padrao->num_rows() <= 0 && $query_outro->num_rows() >= 1 && $data['idioma'] > 0) { // se não tiver padrão, tiver outro e idioma padrão
                $this->db->insert('estoque', $data);
                return $msg = 1;
            } else {
                return $msg = 0;
            }
        }
    }

    function listarPromo(){
        $this->db->select('pp.*, p.foto, p.nome');
        $this->db->from('produto_promocao as pp');
        $this->db->join('produto as p','p.produto=pp.produto');

        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function listarTotalPadrao($produto){
        $this->db->select('*');
        $this->db->from('saldo_padrao as s');
        $this->db->where('s.produto', $produto);
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function listarTotalIngles($produto){
        $this->db->select('*');
        $this->db->from('saldo_ingles as s');
        $this->db->where('s.produto', $produto);
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function listarTotalPortugues($produto){
        $this->db->select('*');
        $this->db->from('saldo_portugues as s');
        $this->db->where('s.produto', $produto);
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function carregarProduto($produto){
        $this->db->select('p.*, c.nome as nome_cat, r.*');
        $this->db->from('produto as p');
        $this->db->join('categoria as c', 'c.categoria = p.categoria');
        $this->db->join('raridade as r', 'p.raridade = r.id', 'left');
        $this->db->where('produto', $produto);
        $query = $this->db->get();

        foreach($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }

    function editarProduto($dado, $data){
        $this->db->where('produto', $data);
        $this->db->update('produto',$dado);
        //$query = $this->db->get();
        return;
    }

    function excluirPromo($data){
        $this->db->where('id', $data);
        $this->db->delete('produto_promocao');
        return;
    }
}