<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $data = array();

    public function __construct()
    {
        parent::__construct();
    }

	public function setPagination()
	{
		$this->load->view('welcome_message');
	}
}

class User_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('id')) {
            $this->session->set_flashdata('alert', $this->alert->set_alert(Alert::DANGER,  "Anda Harus Login"));
            redirect(site_url('/login'));
  	    }
    }
    
}

