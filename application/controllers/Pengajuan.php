<?php
class Pengajuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html','security','date', 'string'));
        $this->load->library(array('session', 'form_validation','pagination'));
        $this->load->model('adminModel');
		$this->load->model('userModel');
		if(empty($this->session->userdata("login")))
         {
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Session Habis, silakan login lagi.</div>');
			redirect(site_url(),'refresh');
         }
		 $this->perPage = 3;
	}
	
	function index()
	{				
		
		$config['base_url'] = base_url().'index.php/Pengajuan/index';
		
		$jmlRecord = $this->adminModel->selectAllPengajuan()->num_rows();
		$config['total_rows'] = $jmlRecord;
		
		$per_page=10;
		//config for bootstrap pagination class integration		
		
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = true;
        $config['last_link'] = true;
        $config['first_tag_open'] = '<li class="page-item">';
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
		$data['data_pengajuan'] = $this->adminModel->getDataPengajuan($per_page, $this->uri->segment(3,0));
		$data['links'] = $this->pagination->create_links();
		
		//$data['data_pengajuan'] = $this->adminModel->selectAllPengajuan();//load 		
		$this->load->view('V_kelolaPengajuan',$data);
	}
	
	function klikPengajuan($kode){		
	    $varId = $this->adminModel->selectIdLabByKode($kode);
		$dataAll['dataSekolah'] = $this->adminModel->selectSekolahByKodeDaftar($kode)->row();
		$dataAll['dataPembimbing'] = $this->adminModel->selectPembimbingByKode($kode)->row();						
		$varSt = $this->adminModel->getPemrosesan($kode);
		$tes = $varSt['status_pemrosesan'];
		if($tes == 1){
			$dataAll['dataSiswa'] = $this->adminModel->selectSiswaNamaLab2($kode);			
			$this->load->view('V_kelolaPengajuanlock', $dataAll);
		}else if ($tes==0){
			$dataAll['dataSiswa'] = $this->adminModel->selectSiswaNamaLab($kode);
			$dataAll['dataPemLab'] = $this->adminModel->selectPembimbingLab($varId);
			$this->load->view('V_pengajuan_end', $dataAll);
		}	
	}
	
	function EditklikPengajuan($kode){		
	    $varId = $this->adminModel->selectIdLabByKode($kode);
		$dataAll['dataSekolah'] = $this->adminModel->selectSekolahByKodeDaftar($kode)->row();
		$dataAll['dataPembimbing'] = $this->adminModel->selectPembimbingByKode($kode)->row();
		$dataAll['dataSiswa'] = $this->userModel->selectSiswaNamaLab($kode);
		$dataAll['dataPemLab'] = $this->adminModel->selectPembimbingLab($varId);
		$varSt = $this->adminModel->getPemrosesan($kode);
		$tes = $varSt['status_pemrosesan'];
		/*
		$varSt = $this->adminModel->getPemrosesan($kode);
		$tes = $varSt['status_pemrosesan'];
		*/
		$this->session->set_flashdata('upor',$tes);
		$this->load->view('V_pengajuan_end', $dataAll);		
	}
	
	public function getIdSekolah($namaSekolah){
		$q3 = $this->userModel->selectKodeSekolahByNama($namaSekolah);				
		return $q3;
	}	
	
	public function getJumlahIsi($namaSekolah){
		//isi_pake kode
		$q3 = $this->userModel->getQuantitybyLabKode($namaSekolah);				
		return $q3;
	}	
	
	public function getIdPembimbing($namaPembimbing){
		$q3 = $this->userModel->selectKodePembimbingByNama($namaPembimbing);				
		return $q3;
	}
	
	function downloadBalasan($filename=NULL){		
		$data = file_get_contents(FCPATH .  '../sisi_sekolah/uploads/balasan/'.$filename);
		force_download($filename, $data);
	}
	
	function downloadPengajuan($filename=NULL){
		$data = file_get_contents(FCPATH .  '../sisi_sekolah/uploads/pengajuan/'.$filename);
		force_download($filename, $data);
	}
		         
    public function file_check($str){
                $allowed_mime_type_arr = array('application/pdf', 'application/force-download', 'application/x-download', 'binary/octet-stream',
		'application/msword', 'application/vnd.ms-office', 
		'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/msword', 'application/x-zip');
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
	
	function status(){
			$this->load->view('V_topup');
	}	
	
	function hasil(){
			$this->load->view('V_statusDaftar');
	}	
}