<?php defined ('BASEPATH') or exit ('No direct script access allowed');
class Ideas extends CI_Controller{
	private $module = 'ideas';
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){redirect(base_url());}
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model('Idea');
		$this->data['module'] = $this->module;
	}
	public function index(){
		$this->data['menu_ideas'] = true;
		// $this->data['list'] = $this->Idea->get();
		$this->data['list'] = $this->Idea->get_where('idea_is_public', true);
		$this->load->model('users/User');
		$this->data['list_users'] = $this->User->get();
		$this->load->model('areas/Area');
		$this->data['list_areas'] = $this->Area->get();
		$this->data['view'] = 'index';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function my_ideas(){
		$this->data['menu_my_ideas'] = true;
		$this->data['list'] = $this->Idea->get_where('user_id', $this->session->userdata('user_id'));
		$this->load->model('users/User');
		$this->data['list_users'] = $this->User->get();
		$this->load->model('areas/Area');
		$this->data['list_areas'] = $this->Area->get();
		$this->data['view'] = 'index';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function show(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->data['item'] = $this->Idea->get($id);
			$this->load->model('users/User');
			$this->data['list_users'] = $this->User->get();
			$this->load->model('areas/Area');
			$this->data['list_areas'] = $this->Area->get();
			$this->load->model('ideas/Idea');
			$this->data['num_ideas'] = $this->Idea->get_sum($this->data['item']->user_id);
			$this->load->model('challenges/Challenge');
			$this->data['num_challenges'] = $this->Challenge->get_sum($this->data['item']->user_id);
			$this->load->model('comments/Comment');
			$this->data['list_comments'] = $this->Comment->get_idea($id);
			$this->data['view'] = 'show';
			$this->load->view($this->config->item('app_layout') . 'template', $this->data);
		}else{
			redirect(base_url() . $this->module);
		}
	}
	public function create(){
		$this->load->model('areas/Area');
		$this->data['innovation_areas'] = $this->Area->get();

		$this->data['view'] = 'new';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function add(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('idea_title', $this->lang->line('title'), 'trim|required');
		$this->form_validation->set_rules('idea_description', $this->lang->line('description'), 'trim|required');
		if ($this->form_validation->run() == false){
			$this->session->set_flashdata('error', (validation_errors() ? validation_errors() : false));
		}else{
			$is_public = $this->input->post('idea_is_public', true);
			$title = $this->input->post('idea_title', true);
			$description = $this->input->post('idea_description', true);
			$solution = $this->input->post('idea_solution', true);
			$differential = $this->input->post('idea_differential', true);
			$necessary_skills = $this->input->post('idea_necessary_skills', true);
			$target_group = $this->input->post('idea_target_group', true);
			$area_id = $this->input->post('area_id', true);
			$idea_attachment = $this->input->post('idea_attachment', true);	//TODO, upload
			$user_id = $this->session->userdata('user_id');

			if ($this->Idea->add($is_public, $title, $description, $solution, $differential, $necessary_skills, $target_group, $area_id, $user_id, date('Y-m-d H:i:s'))){
				$this->session->set_flashdata ('success', $this->lang->line('save_success'));
			}else{
				$this->session->set_flashdata ('error', $this->lang->line('save_error'));
			}
		}
		redirect (base_url() . $this->module);
	}
	public function edit(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->load->model('areas/Area');
			$this->data['innovation_areas'] = $this->Area->get();

			$this->data['item'] = $this->Idea->get($id);
			$this->data['view'] = 'edit';
			$this->load->view ($this->config->item('app_layout') . 'template', $this->data);
		}else{
			$this->session->set_flashdata('error', $this->lang->line('update_error'));
			redirect (base_url() . $this->module);
		}
	}
	public function update(){
		$this->load->library ('form_validation');
		$this->form_validation->set_rules('idea_title', $this->lang->line('title'), 'trim|required');
		$this->form_validation->set_rules('idea_description', $this->lang->line('description'), 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata( 'error', (validation_errors() ? validation_errors() : false));
		}else{
			$id = $this->input->post('idea_id', true);
			$is_public = $this->input->post('idea_is_public', TRUE);
			$title = $this->input->post('idea_title', TRUE );
			$description = $this->input->post('idea_description', TRUE);
			$solution = $this->input->post('idea_solution', TRUE);
			$differential = $this->input->post('idea_differential', TRUE);
			$necessary_skills = $this->input->post('idea_necessary_skills', TRUE);
			$target_group = $this->input->post('idea_target_group', TRUE);
			$area_id = $this->input->post('area_id', TRUE);
			$idea_attachment = $this->input->post('idea_attachment', TRUE);	//TODO, upload
			$user_id = $this->session->userdata('user_id');

			if ($this->Idea->update($id, $is_public, $title, $description, $solution, $differential, $necessary_skills, $target_group, $area_id, $user_id, date('Y-m-d H:i:s'))){
				$this->session->set_flashdata('success', $this->lang->line('update_success'));
			}else{
				$this->session->set_flashdata('error', $this->lang->line('update_error'));
			}
		}
		redirect(base_url() . $this->module);
	}
	public function delete(){
		$id = $this->input->post('id', true);
		if ($id){
			if ($this->Idea->delete($id)){
				$this->session->set_flashdata('success', $this->lang->line('delete_success'));
			}else{
				$this->session->set_flashdata('error', $this->lang->line('delete_error'));
			}
		}else{
			$this->session->set_flashdata('error', $this->lang->line('delete_error'));
		}
		redirect (base_url() . $this->module);
	}

	function comment(){
		$this->load->library ('form_validation');
		$this->form_validation->set_rules('comment_description', $this->lang->line('description'), 'trim|required');
		if ($this->form_validation->run() == false){
			$this->session->set_flashdata( 'error', (validation_errors() ? validation_errors() : false));
		}
		$user_id = $this->session->userdata('user_id');
		$idea_id = $this->input->post('idea_id', true);
		$description = $this->input->post('comment_description', true);

		$this->load->model('comments/Comment');
		if ($this->Comment->add_idea($user_id, $idea_id, $description, date('Y-m-d H:i:s'))){
			$this->session->set_flashdata ('success', $this->lang->line('save_success'));
		}else{
			$this->session->set_flashdata ('error', $this->lang->line('save_error'));
		}

		redirect (base_url() . $this->module . '/show/' . $idea_id);
	}

	function comment_delete(){
		$comment_id = $this->uri->segment(3);
		if ($comment_id){
			$this->load->model('comments/Comment');
			if ($this->Comment->destroy($comment_id)){
				$this->session->set_flashdata ('success', $this->lang->line('delete_success'));
			}else{
				$this->session->set_flashdata ('error', $this->lang->line('delete_error'));
			}
		}
		redirect (base_url() . $this->module);
	}
}
