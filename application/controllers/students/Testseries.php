<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testseries extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$userdata=$this->session->userdata('userdata');
		if (empty($userdata)) {
			# code...
			$this->session->set_flashdata('msg', 'Your Session Time Out ! Please Login Again');
			redirect(base_url('login'),'refresh');
		}
		$this->load->model('Exam_model');
		$this->load->model('Test_series_model');
		$this->load->model('Subjects_model');
		$this->load->model('Mocktest_model');
		$this->load->model('Questions_model');
	}

	public function index()
	{
		$queryString=$this->input->get('q');
		$testserieses=$this->Test_series_model->getTestserieses();
		$data['testserieses']=$testserieses;
		$data['queryString']=$queryString;

		$this->load->view('students/testseries',$data);
		
	}
	public function mytestseries()
	{

		# code...
	}
	public function freetestseries()
	{
		# code...
	}

	public function mocktest()
	{
		$testseries_id=$this->input->get('testserie_id');
		$params['testseries_id']= $testseries_id;
		$mocktests=$this->Mocktest_model->getMocktests($params);
		$data['testseries_id']=$testseries_id;
		$data['mocktests']=$mocktests;
		$this->load->view('students/mocktest', $data);

		# code...
	}

}

/* End of file Testseries.php */
/* Location: ./application/controllers/students/Testseries.php */