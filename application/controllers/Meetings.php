<?php
    class Meetings extends CI_Controller{
        public function index(){
            $data['title'] = 'L&SMeet';

            $this->load->view('templates/header');
            $this->load->view('meetings/index', $data);
            $this->load->view('templates/footer');

        }
    }