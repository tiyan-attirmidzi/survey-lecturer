<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(
            array(
                'model_alternative',
                'model_criteria',
            )
        );
        $this->load->library(
            array(
                'form_validation'
            )
        );
    }

	public function index()
	{
		$data['alternative']				= $this->model_alternative->get();
		$data['criteria']				    = $this->model_criteria->get();

		$this->load->view('templates/part_public/header', $data);
		$this->load->view('v_public/home', $data);
		$this->load->view('templates/part_public/footer', $data);
    }
    
    public function get_lecturer()
	{
        $lecturer                           = $this->input->post('id');
        $data				                = $this->model_alternative->getWhere($lecturer);
        print_r($data);
    }

    public function next()
	{
		$data['alternative']				= $this->model_alternative->get();
		$data['criteria']				    = $this->model_criteria->get();

		$this->load->view('templates/part_public/footer', $data);
    }
}

?>
