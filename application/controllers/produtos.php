<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produtos extends CI_Controller {

	public function index()
	{   
        $texto = "voce esta usando o controller produto";
        $dados = array("mensagem" => $texto);
		$this->load->view("produtos/lista", $dados);
	}

	public function listar_array(){
		$this->load->model("produtosModel", "produtos");
		$resultado = $this->produtos->listar_todos();

		echo '<pre>';

		var_dump($resultado);
	}

	public function listar_tabela(){
		$this->load->model("produtosModel", "produtos");
		$resultado = $this->produtos->listar_todos();
		$dados = array("produtos" => $resultado);
		$this->load->view("produtos/lista_tabela", $dados);
	}

}
