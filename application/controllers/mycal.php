<?php
class Mycal extends CI_Controller{
    
    public function display($year = null, $month = null) {

        $this->load->model('Mycal_model');

        $data['calendar'] = $this->Mycal_model->generate($year, $month);

        $this->load->view('mycal', $data);

    }
}
