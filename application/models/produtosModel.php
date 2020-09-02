<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produtosModel extends CI_Model {

	public function listar_todos()
	{   
        $this->db->select("numcgc, razsoc, endere");
        $resultado = $this->db->get("empresa")->result();

        return $resultado;
	}

}
