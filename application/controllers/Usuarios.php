<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index() {		

		$data = array(
			'titulo' => 'Usuários',

			'styles' => array(
			'vendor/datatables/dataTables.bootstrap4.min.css',
		),
		'scripts' => array(
			'vendor/datatables/jquery.dataTables.min.js',
			'vendor/datatables/dataTables.bootstrap4.min.js',
			'vendor/datatables/app.js'
		),

			'usuarios' => $this->ion_auth->users()->result() // get all users
		);
		/*
		echo '<pre>';
		print_r($data);
		exit();
		*/
		$this->load->view('layout/header', $data);
		$this->load->view('usuarios/index');
		$this->load->view('layout/footer');
	}


	
}