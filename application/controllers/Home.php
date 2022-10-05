<?php
class Home extends CI_Controller
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
		$data['jml_sedang'] = $this->adminModel->CountAllSedang();
		$data['jml_peminat'] = $this->adminModel->CountPeminatLab();
		$data['laboratorium'] = $this->adminModel->getDataLabLim(5);//load 		
		$data['data_pengajuan'] = $this->adminModel->getDataPengajuanLim(5);//load 		
		$data['dataSiswa'] = $this->adminModel->getDataSiswaLim(5);//load
		$data['dataKegiatan'] = $this->adminModel->getDataKegiatanLim(5);
		$this->load->view('V_homepage',$data);
		/*
		$data['data_pengajuan'] = $this->adminModel->selectAllPengajuan();//load 		
		$this->load->view('V_kelolaPengajuan',$data);
		*/
	}
	
	function Panduan()
	{
		$this->load->view('V_helpAdmin');
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'id_admin' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('Admin_login/index');
	}

	function deleteJurnal($kdPetugas)
	{
			$this->adminModel->deleteJurnal($kdPetugas);

			redirect(site_url('Home'));
	}
		
	function tes()
	{
		//$data['data_pengajuan'] = $this->adminModel->selectAllPengajuan();//load 
		$this->load->view('V_homepage');
	}
	
	public function file_check($str){
		//file yang didukung doc,docx,pdf
        $allowed_mime_type_arr = array('application/pdf');
        $mime = get_mime_by_extension($_FILES['userfile']['name']);
        if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Please select only pdf file.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }					
}


