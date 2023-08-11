<?php
    class Classes extends CI_Controller{
        public function index(){
            $data['title'] = 'Classes';

            $this->load->view('templates/header');
            $this->load->view('classes/index', $data);
            $this->load->view('templates/footer');

        }
    }