<?php
class DataSiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html','form','download','file'));
		$this->load->library(array('session','pagination'));
		$this->load->model('adminModel');
		if(empty($this->session->userdata("login")))
         {
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Session Habis, silakan login lagi.</div>');
			redirect(site_url(),'refresh');
         }
	}
	
	//index (akun (tanpa password) + data siswa) + klik detail only
	function index()
	{			
	
		$config['base_url'] = base_url().'index.php/DataSiswa/index';
		
		$jmlRecord = $this->adminModel->getDataSiswa()->num_rows();
		$config['total_rows'] = $jmlRecord;
		
		$per_page=4;
		//config for bootstrap pagination class integration		
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = true;
        $config['last_link'] = true;
        $config['first_tag_open'] = '<li class="page-link">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['prev_tag_open'] = '<li class="page-link prev" aria-label="Previous">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-link">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-link active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
		$config['per_page']=$per_page;	
						
		$this->pagination->initialize($config);
		
		$data['dataSiswa'] = $this->adminModel->getDataSiswaLimit($per_page,$this->uri->segment(3));
		$data['links'] = $this->pagination->create_links();
		
		//$this->uri->total_segments();
		//
		//$data['dataSiswa'] = $this->adminModel->getDataSiswa();
		$this->load->view('V_kelolaSiswa',$data);
	}
	
	function dataAkun()
	{	
		if(empty($this->session->userdata("login")))
         {
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Session Habis, silakan login lagi.</div>');
			redirect(site_url(),'refresh');
         }else{
		
		$config['base_url'] = base_url().'index.php/DataSiswa/dataAkun';
		
		$jmlRecord = $this->adminModel->selectAllAkun()->num_rows();
		$config['total_rows'] = $jmlRecord;
		
		$per_page=5;
		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = true;
        $config['last_link'] = true;
        $config['first_tag_open'] = '<li class="page-link">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['prev_tag_open'] = '<li class="page-link prev" aria-label="Previous">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-link">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-link active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
		$config['per_page']=$per_page;	
	
		$this->pagination->initialize($config);		
		$data['dataAkunSiswa'] = $this->adminModel->getDataAkunSiswa($per_page, $this->uri->segment(3));
		$data['links'] = $this->pagination->create_links();
		
		$this->load->view('V_kelolaAkunSiswa',$data);
		 }
	}
	
	function getSiswa($kdPetugas)
		{
			$data['dataSiswa'] = $this->adminModel->selectSiswaById($kdPetugas)->row();
			//$data['akun_siswa'] = $this->adminModel->selectUserByKode($kdPetugas)->row();
			$this->load->view('V_detailSiswa', $data);
		}
		
	function editSiswa($kdPetugas)
	{
			$data['dataSiswa'] = $this->adminModel->selectSiswaById($kdPetugas)->row();
			//$data['akun_siswa'] = $this->adminModel->selectUserByKode($kdPetugas)->row();
			$this->load->view('V_detailSiswa2', $data);
	}
	
	function Absensi(){
		//need pagination
		$config['base_url'] = base_url().'index.php/DataSiswa/Absensi';
		
		$jmlRecord = $this->adminModel->selectAllAbsensi()->num_rows();
		$config['total_rows'] = $jmlRecord;
		
		$per_page=5;
		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = true;
        $config['last_link'] = true;
        $config['first_tag_open'] = '<li class="page-link">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['prev_tag_open'] = '<li class="page-link prev" aria-label="Previous">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-link">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-link active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
		$config['per_page']=$per_page;	
	
		$this->pagination->initialize($config);		
		$data['catatanAbsen'] = $this->adminModel->selectAllAbsensi2($per_page, $this->uri->segment(3));
		$data['links'] = $this->pagination->create_links();
		
		//$data['catatanAbsen'] = $this->adminModel->selectAllAbsensi();			
		$this->load->view('V_kelolaAbsensi', $data);
	}
	
	function CatatanKegiatan(){
		//need pagination
		$config['base_url'] = base_url().'index.php/DataSiswa/CatatanKegiatan';
		
		$jmlRecord = $this->adminModel->selectAllKegiatan()->num_rows();
		$config['total_rows'] = $jmlRecord;
		
		$per_page=5;
		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = true;
        $config['last_link'] = true;
        $config['first_tag_open'] = '<li class="page-link">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['prev_tag_open'] = '<li class="page-link prev" aria-label="Previous">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-link">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-link active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
		$config['per_page']=$per_page;	
	
		$this->pagination->initialize($config);		
		$data['dataKegiatan'] = $this->adminModel->selectAllKegiatan2($per_page, $this->uri->segment(3));
		$data['links'] = $this->pagination->create_links();
		
		//$data['dataKegiatan'] = $this->adminModel->selectAllKegiatan();
		//$this->load->view('V_kelolaCatatan', $data);
		$this->load->view('V_kelolaCatatan',$data);
	}
	
	function IsiCatatanKegiatan($ref){
		//need pagination
		$data['dataKegiatan'] = $this->adminModel->getKegiatan($ref)->row();			
		//$this->load->view('V_kelolaCatatan', $data);
		$this->load->view('V_detailCatatan2',$data);
	}
	
	function EditCatatanKegiatan($ref){
		//need pagination
		$data['dataKegiatan'] = $this->adminModel->getSKegiatan($ref)->row();			
		//$this->load->view('V_kelolaCatatan', $data);
		$this->load->view('V_detailCatatan',$data);
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'id_admin' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('anggota_login/index');
	}	

	function download($filename=NULL){
		$data = file_get_contents(base_url('uploads/'.$filename));
		force_download($filename, $data);
	}
	
	function getAkunSiswa($kdPetugas)
	{
		$data['dataAkun'] = $this->adminModel->getDetailAkun($kdPetugas)->row();
		//$data['akun_siswa'] = $this->adminModel->selectUserByKode($kdPetugas)->row();
		$this->load->view('V_detailAkun2', $data);
	}		
}


