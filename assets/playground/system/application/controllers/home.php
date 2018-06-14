<?php
class Home extends Controller {

	public function index() {
		$data['main_content'] = 'home';
		$this->load->view('includes/template', $data);
	}

}


