<?php
class DataPembimbingLab extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html','form','download','file'));
		$this->load->library(array('session','pagination'));
		$this->load->model('adminModel');
	}
	
	//index + klik detail only
	function index()
	{		
		$data['dataPembLab'] = $this->adminModel->selectAllPembLabByLab();
		$this->load->view('V_kelolaPembLab',$data);
	}	
	
	function getPembLab($kdPetugas)
	{
		$data['laboratorium'] = $this->adminModel->selectPembLabByKode($kdPetugas)->row();		
		$this->load->view('V_detailPembLab', $data);
	}
	
	function editPembLab($kdPetugas)
	{
		$this->session->set_flashdata('nform',0);
		$this->session->keep_flashdata('nform');
		$data['lab'] = $this->adminModel->selectAllLab();
		$data['laboratorium'] = $this->adminModel->selectPembLabByKode($kdPetugas)->row();				
		$this->load->view('V_detailPembLab2', $data);
	}
	
	function addPembLab()
	{
		$this->session->set_flashdata('nform',1);
		$this->session->keep_flashdata('nform');
		$data['laboratorium'] = $this->adminModel->selectAllLab();		
		$this->load->view('V_detailPembLab2', $data);
	}
}


