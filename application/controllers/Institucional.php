<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucional extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->cache(1440);
		$this->output->clearstatcache();
	}

	public function index()
	{
		$data['title'] = "LCI | Home";
		$data['description'] = "Exercício de exemplo do capítulo 2 do livro Codeigniter";

		$this->load->view('home',$data);
	}

	public function Empresa()
	{

		$data['title'] = "LCI | A Terste";
		$data['description'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget sem et odio cursus placerat. Donec aliquet, velit eget elementum eleifend, lacus elit elementum justo, dapibus posuere mi purus a sapien. Suspendisse potenti. ";

		$this->load->view('commons/header',$data);
		$this->load->view('empresa');
		$this->load->view('commons/footer');
	}

	public function Servicos()
	{
		$data['title'] = "LCI | Serviços";
		$data['description'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget sem et odio cursus placerat. Donec aliquet, velit eget elementum eleifend, lacus elit elementum justo, dapibus posuere mi purus a sapien. Suspendisse potenti. ";

		$this->load->view('servicos',$data);
	}
}

?>
