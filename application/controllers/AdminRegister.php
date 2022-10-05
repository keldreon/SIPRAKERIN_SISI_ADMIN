 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminRegister extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html','security','date', 'string'));        		
        $this->load->model('adminModel');  
        $this->load->library(array('session', 'form_validation'));
    }

    public function index()
    {        
		if($this->session->tempdata('lanjut')==NULL){
			redirect('HakKelola/PasswordVer');
		}else{
			redirect('AdminRegister/registration');
		}
    }

    public function registration(){    
        $this->form_validation->set_rules("username", "username", "trim|required|min_length[5]|max_length[60]");
        $this->form_validation->set_rules("password", "password", "trim|required|min_length[5]|max_length[60]");        
		$this->form_validation->set_rules("nama", "nama", "trim|required|min_length[5]|max_length[60]");        
		
		$password = $this->input->post("password");//kode_referal pas di acc.
		$nama_admin = $this->input->post("nama");//kode_referal pas di acc.
		$uname_admin = $this->input->post("username");//kode_referal pas di acc.
		
		if($this->form_validation->run()==FALSE){
			$this->load->view("V_regisAdmin");
		}else{
			$hash = password_hash($password, PASSWORD_DEFAULT); 
			$data = array(
				'username_admin' =>$uname_admin,
				'pass_admin' => $hash,
				'nama_admin' => $nama_admin
			);
			$this->adminModel->insertAdmin($data);
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Regisrasi Berhasil...</div>');                                
			redirect(site_url('admin_login'));
		}
    }
    
}
?>