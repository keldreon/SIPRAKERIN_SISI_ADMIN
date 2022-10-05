<?php
class Laboratorium extends CI_Controller
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
	
	//index + klik detail only
	function index()
	{			
		$data['dataLab'] = $this->adminModel->selectAllLab();
		$this->load->view('V_kelolaLab',$data);
	}
	
	function addLab()
	{					
		$this->load->view('V_detailLab2');
	}

	function getLab($kdPetugas)
	{		
		$data['laboratorium'] = $this->adminModel->selectLabByKode($kdPetugas)->row();
		$data['isiLab'] = $this->adminModel->getIsiLab($kdPetugas);
		$data['iLab'] = $this->adminModel->selectAllPembLab();
		$this->load->view('V_detailLab', $data);
	}	

	function download($filename=NULL){
		$data = file_get_contents(base_url('uploads/'.$filename));
		force_download($filename, $data);
	}
}


