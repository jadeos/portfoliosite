<?php
class Playgrounds extends Controller {

    public function index() {
        $data['main_content']='playgrounds';
        $this->load->view('includes/template', $data);
    }

}