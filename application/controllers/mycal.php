<?php
class Mycal extends CI_Controller{
    
    public function display($year = null, $month = null) {

        $conf = array(
            'start_day' => 'sunday',
            'show_next_prev' => true,
            'next_prev_url' => base_url() . 'mycal/display'
        );

        $this->load->library('calendar', $conf);

        echo $this->calendar->generate($year, $month);

    }
}
