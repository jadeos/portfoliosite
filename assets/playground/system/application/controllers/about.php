<?php
class about extends Controller {

    public function index() {
        $data['main_content'] ='about';
        $this->load->view('includes/template', $data);
    }

}