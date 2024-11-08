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

	public function edit($usuario_id = NULL){

		if(!$usuario_id || !$this->ion_auth->user($usuario_id)->row()){
			$this->session->set_flashdata('error', 'usuario não encontrado');
			redirect('usuarios');
		}else{
			

			/*
				Array
				(
					[first_name] => Admin
					[last_name] => istrator
					[email] => admin@admin.com
					[username] => administrator
					[active] => 1
					[perfil_usuario] => 1
					[password] => 
					[confirm_password] => 
					[usuario_id] => 1
				)
			*/
			
			//echo "<pre>";
			//print_r($this->input->post());
			//exit();

			$this->form_validation->set_rules('first_name', '', 'trim|required');
			$this->form_validation->set_rules('last_name', '', 'trim|required');
			$this->form_validation->set_rules('email', '', 'trim|required');
			$this->form_validation->set_rules('username', '', 'trim|required');
			$this->form_validation->set_rules('password', '', 'trim|required');
			$this->form_validation->set_rules('confirm_password', '', 'trim|required');

			if($this->form_validation->run()) {

				exit('Validado');
			}else {
				$data = array(
					'titulo' => 'Editar usuário',	
					'usuario' => $this->ion_auth->user($usuario_id)->row(),
					'perfil_usuario'  => $this->ion_auth->get_users_groups($usuario_id)->row(),					
				);
				$this->load->view('layout/header', $data);
				$this->load->view('usuarios/edit' );
				$this->load->view('layout/footer');
			}
		}

		

		
	}
	
}
