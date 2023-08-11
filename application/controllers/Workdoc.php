<?php
    class Workdoc extends CI_Controller{
        public function index(){
            $data['title'] = 'Workdoc';

            $this->load->view('templates/header');
            $this->load->view('workdoc/index', $data);
            $this->load->view('templates/footer');

        }
    }