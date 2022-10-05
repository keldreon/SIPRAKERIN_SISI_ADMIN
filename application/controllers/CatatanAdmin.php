<?php
class Pengajuan extends CI_Controller
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
	}
	
	function index()
	{
		$data['data_pengajuan'] = $this->adminModel->selectAllPengajuan();//load 		
		$this->load->view('V_homepage',$data);
		/*
		$data['data_pengajuan'] = $this->adminModel->selectAllPengajuan();//load 		
		$this->load->view('V_kelolaPengajuan',$data);
		*/
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'id_admin' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('Admin_login/index');
	}

	function klikPengajuan($kode){		
	    $varId = $this->adminModel->selectIdLabByKode($kode);
		$dataAll['dataSekolah'] = $this->adminModel->selectSekolahByKodeDaftar($kode)->row();
		$dataAll['dataPembimbing'] = $this->adminModel->selectPembimbingByKode($kode)->row();
		$dataAll['dataSiswa'] = $this->userModel->selectSiswaNamaLab($kode);
		$dataAll['dataPemLab'] = $this->adminModel->selectPembimbingLab($varId);
		$this->load->view('V_pengajuan_end', $dataAll);
	}

	function prosesEdit()
		{
			$this->form_validation->set_rules('userfile', '', 'callback_file_check');			
			//$this->form_validation->set_rules('status_pengajuan_lab', 'Status Pengajuan', 'required');
			
			$config['upload_path']          = 'F:/uploads/balasan/';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 15000;
			$this->load->library('upload', $config);
						
			$tanggal = date('Y-m-d H:i:s');						
			$kode_masuk = $this->input->post('kode_masuk');
			$datVal = $this->input->post('dataVal');			
			$stVal= $this->input->post('status_pengajuan_lab');
			$id_siswa = $this->input->post('NIS');			
			$t_awal = $this->input->post('date_start');
			$t_akhir = $this->input->post('date_end');			
			$dataPembLab = $this->input->post('pembimbing_lab');
			
			$this->adminModel->updateStatusLabSiswa($stVal,$id_siswa);//status dan id_siswa							
									
			$kode2 = random_string('numeric', 10);//referal buat siswa 1.
			$kode3 = random_string('numeric', 10);//referal buat siswa 1.
			$kode4 = random_string('numeric', 10);//referal buat siswa 1.
			
			$datakodeRef = array();			
			array_push($datakodeRef,$kode2);
			array_push($datakodeRef,$kode3);
			array_push($datakodeRef,$kode4);
			
			//simpan status_pengajuan_lab pada siswa
			//jangan lupa cek akun_siswa jangan sampai ada kesamaan.
			//pakai ini cek nya $this->adminModel->cekAkunSiswa($idSiswa);			
			$dataAkun = array();
			$dataSiswa = array();
			for($x=0;$x<sizeof($stVal);$x++){
				if($stVal[$x]==1){
						$dataAkun['id_siswa'] = $id_siswa[$x];
						$dataAkun['kode_masuk'] = $kode_masuk;
						$dataAkun['kode_referal']= $datakodeRef[$x];
						$d_tAwal = $t_awal;
						$d_tAkhir = $t_akhir;
						$this->adminModel->insertAkunSiswa($dataAkun);
						$this->adminModel->updateKodePembLabSiswa($dataPembLab[$x], $dataAkun['id_siswa']);//status dan id_siswa	
						$this->adminModel->updateTglMagangSiswa($d_tAwal[$x], $d_tAkhir[$x], $dataAkun['id_siswa']);
						$this->adminModel->updateKodeRefDataSiswa($dataAkun['kode_referal'],$dataAkun['id_siswa']);
				}
			}												
						
			//upload sections
			if(!$this->upload->do_upload('userfile')){
					//$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');				
					redirect('Home/klikPengajuan/' .$kode_masuk);								
			}else{
					$file_data = $this->upload->data();
                    $fname = $file_data['file_name'];//simpan ke data_sekolah + data_pengajuan
					//upload file + nama file rujukan...																			
					
					//update  status_pengajuan_lab & kode_referalnya.ke data_siswa +akun_siswa.
					$this->adminModel->updateFileBalasan($kode_masuk, $fname);				
			}			
			//$this->adminModel->updateStausLabSiswaByNIS($stVal,$id_siswa);
			redirect(site_url('Home'));
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


