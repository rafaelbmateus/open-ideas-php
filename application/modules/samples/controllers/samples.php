<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
//TODO, Atulizar nome da classe
class Samples extends CI_Controller {
	private $module = 'samples';
	public function __construct() {
		parent::__construct ();
		//date_default_timezone_set ( 'America/Sao_Paulo' );
		//TODO, Alterar nome do Model
		$this->load->model ( 'Sample' );
		$this->data ['module'] = $this->module;
	}
	public function index() {
		//TODO, Alterar nome do Model
		$this->data ['list'] = $this->Sample->get ();
		$this->data ['view'] = 'index';
		$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
	}
	public function show() {
		$id = $this->uri->segment ( 3 );
		if ($id) {
			//TODO, Alterar nome do Model
			$this->data ['item'] = $this->Sample->get ( $id );
			$this->load->view ( 'show', $this->data );
		} else {
			redirect ( base_url () . $this->module );
		}
	}
	public function create() {
		$this->data ['view'] = 'new';
		$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
	}
	public function add() {
		$this->load->library ( 'form_validation' );
		//TODO, Validar campos obrigatórios
		$this->form_validation->set_rules ( 'sample_name', 'User name', 'trim|required' );
		if ($this->form_validation->run () == false) {
			$this->session->set_flashdata ( 'error', (validation_errors () ? validation_errors () : false) );
		} else {
			//TODO, Pegar os campos
			$name = $this->input->post ( 'sample_name', TRUE );

			//TODO, Alterar nome do Model
			//TODO, Alterar assinatura do método
			if ($this->Sample->add ( $name, date ( "Y-m-d H:i:s" ) ) ) {
				$this->session->set_flashdata ( 'success', 'Successfully registered record!' );
			} else {
				$this->session->set_flashdata ( 'error', 'Error registering the record.' );
			}
		}
		redirect ( base_url () . $this->module );
	}
	public function edit() {
		$id = $this->uri->segment ( 3 );
		if ($id) {
			//TODO, Alterar nome do Model
			$this->data ['item'] = $this->Sample->get ( $id );
			$this->data ['view'] = 'edit';
			$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
		} else {
			redirect ( base_url () . $this->module );
		}
	}
	public function update() {
		$this->load->library ( 'form_validation' );
		$this->form_validation->set_rules ( 'sample_name', 'User name', 'trim|required' );
		if ($this->form_validation->run () == false) {
			$this->session->set_flashdata ( 'error', (validation_errors () ? validation_errors () : false) );
		} else {
			$id = $this->input->post ( 'sample_id', TRUE );
			$name = $this->input->post ( 'sample_name', TRUE );

			//TODO, Alterar nome do Model
			if ($this->Sample->update ( $id, $name, date ( "Y-m-d H:i:s" ) )) {
				$this->session->set_flashdata ( 'success', 'Successfully updated record!' );
			} else {
				$this->session->set_flashdata ( 'error', 'Error updating the record' );
			}
		}
		redirect ( base_url () . $this->module );
	}
	public function delete() {
		$id = $this->input->post ( 'id', TRUE );
		if ($id) {
			//TODO, Alterar nome do Model
			if ($this->Sample->delete ( $id )) {
				$this->session->set_flashdata ( 'success', 'Successfully deleted record!' );
			} else {
				$this->session->set_flashdata ( 'error', 'Error deleting the record.' );
			}
		}
		redirect ( base_url () . $this->module );
	}
}
