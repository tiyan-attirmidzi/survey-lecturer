<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model(
        //     array(
        //         'model_structure',
        //     )
        // );
        // $this->load->library(
        //     array(
        //         'form_validation'
        //     )
        // );
    }

	public function index()
	{
		$this->load->view('templates/part_dashboard/header');
		$this->load->view('templates/part_dashboard/navbar');
		$this->load->view('templates/part_dashboard/sidebar');
		$this->load->view('v_dashboard/home');
		$this->load->view('templates/part_dashboard/footer');
	}
}

?>