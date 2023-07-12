            <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_leave extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$userdata=$this->session->userdata('userdata');
		if (empty($userdata)) {
			# code...
			$this->session->set_flashdata('msg', 'Your Session Time Out ! Please Login Again');
			redirect(base_url('login'),'refresh');
		}
	}

	public function index()
	{
		$this->load->library('form_validation');
		$this->load->view('students/student_apply_leave');
	}
	public function student_apply_leave_save()
	{
		$user=$this->session->userdata('userdata');
		
		# code...
		$this->load->library('form_validation');
		$this->load->model('Student_model');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('leave_date', 'Leave Date', 'trim|required');
		$this->form_validation->set_rules('leave_msg', 'Leave Massage', 'trim|required|min_length[5]');
		if ($this->form_validation->run() == TRUE) {
			$data['leave_date']= $this->input->post('leave_date');
			$data['leave_message']= $this->input->post('leave_msg');
			$data['status']= 0;
			$data['created_at']= date('Y-m-d H:i:s');
			$data['student_id']= $user['id'];
			$status=$this->Student_model->student_leave_save($data);
			if(!empty($status))
			{
			$this->session->set_flashdata('success', 'Leave Application Successfully Submitted');
			redirect(base_url('students/').'Student_leave');
			
			}
			else{
				$this->session->set_flashdata('fail', 'Leave Application Fail to Submitted');
				$this->load->view('students/student_apply_leave');

			}
			

			# code...
		} else {
			# code...
			$this->load->view('students/student_apply_leave');
		}
	}

}

/* End of file Student_leave.php */
/* Location: ./application/controllers/students/Student_leave.php */