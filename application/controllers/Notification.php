<?php
    class Notification extends CI_Controller{
        public function index(){
            $data['title'] = 'Notification';

            $this->load->view('templates/header');
            $this->load->view('notification/index', $data);
            $this->load->view('templates/footer');

        }
    }