<?php
    class Chat extends CI_Controller{
        public function index(){
            $data['title'] = 'S&L Chat';

            $this->load->view('templates/header');
            $this->load->view('chat/index', $data);
            $this->load->view('templates/footer');

        }
    }