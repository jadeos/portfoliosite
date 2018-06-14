<?php


class Contactform extends Controller
{

    public function index() {
        $data['main_content']= 'contactform';
        $this->load->view('includes/template', $data);
    }


    function thanks()
    {
        $data['main_content'] = 'thanks';
        $this->load->view('includes/template', $data);
    }




}