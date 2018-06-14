<?php
class AdminLogin extends Controller {

    public function __construct() {
        parent::Controller();

        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
    }

    public function index() {
        $data['main_content']= 'admin_login_form';
        $this->load->view('includes/template', $data);
    }

    public function submit() {

        if ($this->_submit_validate() === FALSE) {
            $this->index();
            return;
        }

        redirect('/');

    }

    private function _submit_validate() {

        $this->form_validation->set_rules('username', 'Username',
            'trim|required|callback_authenticate');

        $this->form_validation->set_rules('password', 'Password',
            'trim|required');

        $this->form_validation->set_message('authenticate','Invalid login. Please try again.');

        return $this->form_validation->run();

    }

    public function authenticate() {

        return Current_Admin::adminLogin($this->input->post('username'),
            $this->input->post('password'));

    }
}

