<?php
class CatatamAdmin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html','security','date', 'string'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('adminModel');
		$this->load->model('userModel');
		if(empty($this->session->userdata("login")))
         {
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Session Habis, silakan login lagi.</div>');
			redirect(site_url(),'refresh');
         }
		
		$jml = array();		
		$tes2 = array();
		$angka = $this->adminModel->getAllIDLab();		
		for($i=0;$i<sizeof($angka);$i++){			
			array_push($tes2,$angka['id_lab']);			
		}
		for($x=0;$x<sizeof($tes2);$x++){
			$jml[$x] = $this->adminModel->hitungSiswa_lab($tes2[$x]);	
			$this->adminModel->updateCapLab($tes2[$x],$jml[$x]);
		}		
	}
	
	function index()
	{		
		$tes = $this->input->post('tahun');		
		if($tes==NULL){								
				$year = date('Y');
				$data['jml_sedang'] = $this->adminModel->CountAllSedang($year);
				$data['jml_peminat'] = $this->adminModel->CountPeminatLab($year);
				$data['jml_alumni'] = $this->adminModel->CountAllAlumni($year);
				$data['jml_pengajuan'] = $this->adminModel->CountAllPengajuanSekolah($year);
				$data['total_All_pengajuan'] = $this->adminModel->CountAllPengajuan($year);						
				$data['total_all_peminat'] = $this->adminModel->TotalAllPeminat($year);
				$data['total_all_sedang'] = $this->adminModel->TotalAllSedang($year);
				$data['total_All_alumni'] = $this->adminModel->TotalAllAlumni($year);						
				$this->session->set_flashdata('tahun',$year);
				$this->load->view('V_data',$data);		
		}else{				
				$data['jml_sedang'] = $this->adminModel->CountAllSedang($tes);
				$data['jml_peminat'] = $this->adminModel->CountPeminatLab($tes);
				$data['jml_alumni'] = $this->adminModel->CountAllAlumni($tes);
				$data['jml_pengajuan'] = $this->adminModel->CountAllPengajuanSekolah($tes);
				$data['total_All_pengajuan'] = $this->adminModel->CountAllPengajuan($tes);						
				$data['total_all_peminat'] = $this->adminModel->TotalAllPeminat($tes);
				$data['total_all_sedang'] = $this->adminModel->TotalAllSedang($tes);
				$data['total_All_alumni'] = $this->adminModel->TotalAllAlumni($tes);						
				$this->session->set_flashdata('tahun',$tes);
				$this->load->view('V_data',$data);		
		}
		$this->session->keep_flashdata('tahun');
	}
}


