<?php
    class Calendar extends CI_Controller{
        public function index(){

            $data['title'] = 'Calendar';

            $this->load->view('templates/header');
            $this->load->view('calendar/index', $data);
            $this->load->view('templates/footer');
     }
    
     public function display($year = null, $month = null) {
}

}
