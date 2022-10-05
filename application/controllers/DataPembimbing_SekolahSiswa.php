<?php
class DataPembimbing_SekolahSiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html','form','download','file'));
		$this->load->library(array('session', 'form_validation','pagination'));
		$this->load->model('adminModel');
		if(empty($this->session->userdata("login")))
         {
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Session Habis, silakan login lagi.</div>');
			redirect(site_url(),'refresh');
         }
	}
	
	//index + klik detail only
	function index()
	{	
		$config['base_url'] = base_url().'index.php/DataPembimbing_SekolahSiswa/index';
		
		$jmlRecord = $this->adminModel->getDataPembimbing()->num_rows();
		$config['total_rows'] = $jmlRecord;
		
		$per_page=10;
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
		$data['dataPembimbing'] = $this->adminModel->getDataPembimbing2($per_page, $this->uri->segment(3));
		$data['links'] = $this->pagination->create_links();
		
		//$data['dataPembimbing'] = $this->adminModel->getDataPembimbing();
		$this->load->view('V_kelolaPembimbing',$data);
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'id_admin' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('anggota_login/index');
	}

	function getPembimbing_Sekolah($kdPetugas)
	{		
		$data['dataPembimbing'] = $this->adminModel->selectPembimbingByKode($kdPetugas)->row();
		$data['dataSekolah'] = $this->adminModel->selectSekolahByKode2($kdPetugas)->row();		
		$this->load->view('V_detailPembimbing', $data);
	}
	
	function EditPembimbing_Sekolah($kdPetugas)
	{		
		$data['dataPembimbing'] = $this->adminModel->selectPembimbingByKode($kdPetugas)->row();
		$data['dataSekolah'] = $this->adminModel->selectSekolahByKode2($kdPetugas)->row();		
		$this->load->view('V_detailPembimbing2', $data);
	}
	
	function download($filename=NULL){
		$data = file_get_contents(base_url('uploads/'.$filename));
		force_download($filename, $data);
	}
}


