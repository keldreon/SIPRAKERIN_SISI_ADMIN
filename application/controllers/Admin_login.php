<?php
class Admin_login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html','security'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('adminModel');
		if(!empty($this->session->userdata("login")))
         {
			redirect('Home/index','refresh');
         }
	}
    public function index()
    {
		// get form input
		$username = $this->input->post("username");
        $password = $this->input->post("password");

		// form validation
		
		//how to db-ing?
		$this->form_validation->set_rules("username", "username", "trim|required|xss_clean");
		$this->form_validation->set_rules("password", "password", "trim|required|xss_clean");
		
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('V_Adminlogin');
		}
		else
		{
			// check for user credentials
						
			$tes = $this->adminModel->get_akun_array2($username);
			$pwd = $tes['pass_admin'];
			$res = password_verify($password,$pwd); 						
			$uresult = $this->adminModel->get_akun($username, $password);
			if ($uresult > 0)
			{	
				// set session				
				$uR = $this->adminModel->get_akun_array($username, $password);
				$sess_data = array('login' => TRUE, 'uname' => $uR['nama_admin'], 'id_admin' => $uR['id_admin'], 'kekuasaan' => $uR['kekuasaan']);
				$this->session->set_userdata($sess_data);
				redirect("Home/index");
			}else if($res==TRUE){				
				$sess_data = array('login' => TRUE, 'uname' => $tes['nama_admin'], 'id_admin' => $tes['id_admin'], 'kekuasaan' => $tes['kekuasaan']);
				$this->session->set_userdata($sess_data);
				redirect("Home/index");
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Username atau Password salah!!</div>');
				redirect('Admin_login/index');
			}
		}
    }
	/*
	public function Pass(){
		//input password for confirmation
	}
	
	public function RegAdmin()
    {
		// get form input
		
		$username = $this->input->post("username");
        $password = $this->input->post("password");

		// form validation
		
		//how to db-ing?
		$this->form_validation->set_rules("username", "username", "trim|required|xss_clean");
		$this->form_validation->set_rules("password", "password", "trim|required|xss_clean");
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('V_Adminlogin');
		}
		else
		{
			// check for user credentials
			$uresult = $this->adminModel->get_akun($username, $password);			
			if ($uresult > 0)
			{
				// set session				
				$uR = $this->adminModel->get_akun_array($username, $password);
				$sess_data = array('login' => TRUE, 'uname' => $uR['username_admin'], 'id_admin' => $uR['id_admin']);
				$this->session->set_userdata($sess_data);
				redirect("Home/index");
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Username or Password!</div>');
				redirect('Admin_login/index');
			}
		}
    }*/
}