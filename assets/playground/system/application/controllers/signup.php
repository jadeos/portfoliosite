
<?php

class Signup extends Controller {
	
	public function __construct() {
		parent::Controller();
		
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');

	}
	
	public function index() {
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template', $data);

	}
	
	public function submit() {

		if ($this->_submit_validate() === FALSE) {
			$this->index();
			return;
		}

		$u = new User();
		$u->username = $this->input->post('username');
		$u->password = $this->input->post('password');
		$u->email = $this->input->post('email');
		$u->save();

        //$data['main_content']= 'submit_success';
		//$this->load->view('includes/template', $data);
		redirect('/login');
	
	}
	
	private function _submit_validate() {
		
		// validation rules
		$this->form_validation->set_rules('username', 'Username', 
			'required|alpha_numeric|min_length[6]|max_length[12]|unique[User.username]');
		
		$this->form_validation->set_rules('password', 'Password',
			'required|min_length[6]|max_length[12]');
		
		$this->form_validation->set_rules('passconf', 'Confirm Password',
			'required|matches[password]');
		
		$this->form_validation->set_rules('email', 'E-mail',
			'required|valid_email|unique[User.email]');
		
		return $this->form_validation->run();
		
	}
	
}
