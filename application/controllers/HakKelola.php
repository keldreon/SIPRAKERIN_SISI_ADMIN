<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//crud
class HakKelola extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html','security','date', 'string','download','file'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('adminModel');				
	}
	
	//semua Create, Update, Delete,  function dari seluruh data yang ada selain pengajuan....
	/*public function index(){
		
			delete file
			$path_to_file = '/project/folder/file_to_delete';
			if(unlink($path_to_file)) {
				echo 'deleted successfully';
			}
			else {
				echo 'errors occured;
			}	
		
		$data['dataAnggota'] = $this->adminModel->selectAll()->result();
		$this->load->view('V_mAnggota',$data);
	}*/				
	function prosesEditPengajuan()
		{			
			//$this->form_validation->set_rules('userfile', '', 'callback_file_check');			
			//$this->form_validation->set_rules('status_pengajuan_lab', 'Status Pengajuan', 'required');
			
			$config['upload_path']          =  FCPATH .  '../sisi_sekolah/uploads/balasan/';
			//$config['upload_path']          = '.../.../sisi_sekolah/uploads/balasan/';
			$config['allowed_types']        = 'pdf|doc|docx';
			$config['max_size']             = 15000;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
						
			$tanggal = date('Y-m-d H:i:s');						
			$kode_masuk = $this->input->post('kode_masuk');
			$datVal = $this->input->post('dataVal');			
			$stVal= $this->input->post('status_pengajuan_lab');
			$id_siswa = $this->input->post('NIS');	
			$t_awal = $this->input->post('date_start');
			$t_akhir = $this->input->post('date_end');
			$dataPembLab = $this->input->post('pembimbing_lab');
															
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
												
						
			//upload sections
			if(!$this->upload->do_upload('userfile')){
					//$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');				
					redirect('Pengajuan/klikPengajuan/' .$kode_masuk);								
			}else{					
					$file_data = $this->upload->data();
                    $fname = $file_data['file_name'];//simpan ke data_sekolah + data_pengajuan
					//upload file + nama file rujukan...																			
					
					//update  status_pengajuan_lab & kode_referalnya.ke data_siswa +akun_siswa.
					for($x=0;$x<sizeof($stVal);$x++){
						if($stVal[$x]==1){
							$dataAkun['id_siswa'] = $id_siswa[$x];
							$dataAkun['kode_masuk'] = $kode_masuk;
							$dataAkun['kode_referal']= $datakodeRef[$x];
							$d_tAwal = $t_awal;
							$d_tAkhir = $t_akhir;
							//if($this->adminModel->check_akun($dataAkun['id_siswa')){}						
							$this->adminModel->updateKodePembLabSiswa($dataPembLab[$x], $dataAkun['id_siswa']);//status dan id_siswa	
							$this->adminModel->updateTglMagangSiswa($d_tAwal[$x], $d_tAkhir[$x], $dataAkun['id_siswa']);
							$this->adminModel->updateKodeRefDataSiswa($dataAkun['kode_referal'],$dataAkun['id_siswa']);
							$this->adminModel->insertAkun($dataAkun);
						}
					}			
					$this->adminModel->updateStatusLabSiswa($stVal,$id_siswa);//status dan id_siswa							
					$this->adminModel->updateFileBalasan($kode_masuk, $fname);
					$this->adminModel->updatePemrosesan($kode_masuk, 1);
			}			
			//$this->adminModel->updateStausLabSiswaByNIS($stVal,$id_siswa);
			redirect(site_url('Pengajuan'));
		}
		
	function prosesUpdatePengajuan()
		{
			//$this->form_validation->set_rules('userfile', '', 'callback_file_check');			
			//$this->form_validation->set_rules('status_pengajuan_lab', 'Status Pengajuan', 'required');
			
			$config['upload_path']          =  FCPATH .  '../sisi_sekolah/uploads/balasan/';
			//$config['upload_path']          =  FCPATH .  '/sisi_sekolah/uploads/balasan/';
			$config['allowed_types']        = 'pdf|doc|docx';
			$config['max_size']             = 15000;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
						
			$tanggal = date('Y-m-d H:i:s');						
			$kode_masuk = $this->input->post('kode_masuk');
			$datVal = $this->input->post('dataVal');			
			$stVal= $this->input->post('status_pengajuan_lab');
			$id_siswa = $this->input->post('NIS');			
			$t_awal = $this->input->post('date_start');
			$t_akhir = $this->input->post('date_end');			
			$dataPembLab = $this->input->post('pembimbing_lab');
															
			//simpan status_pengajuan_lab pada siswa
			//jangan lupa cek akun_siswa jangan sampai ada kesamaan.
			//pakai ini cek nya $this->adminModel->cekAkunSiswa($idSiswa);			
			$dataAkun = array();
			$dataSiswa = array();
														
			//upload sections
			if(!$this->upload->do_upload('userfile')){
					//$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');				
					redirect('Pengajuan/klikPengajuan/' .$kode_masuk);								
			}else{
					$file_data = $this->upload->data();
                    $fname = $file_data['file_name'];//simpan ke data_sekolah + data_pengajuan
					//upload file + nama file rujukan...																			
					
					for($x=0;$x<sizeof($stVal);$x++){
						if($stVal[$x]==1){
							$dataAkun['id_siswa'] = $id_siswa[$x];
							$dataAkun['kode_masuk'] = $kode_masuk;
							$dataAkun['kode_referal']= $datakodeRef[$x];
							$d_tAwal = $t_awal;
							$d_tAkhir = $t_akhir;
							//if($this->adminModel->check_akun($dataAkun['id_siswa')){}						
							$this->adminModel->updateKodePembLabSiswa($dataPembLab[$x], $dataAkun['id_siswa']);//status dan id_siswa	
							$this->adminModel->updateTglMagangSiswa($d_tAwal[$x], $d_tAkhir[$x], $dataAkun['id_siswa']);
							$this->adminModel->updateKodeRefDataSiswa($dataAkun['kode_referal'],$dataAkun['id_siswa']);
						}
					}						
					$this->adminModel->updateStatusLabSiswa($stVal,$id_siswa);//status dan siswa
					$this->adminModel->updateFileBalasan($kode_masuk, $fname);
					$this->adminModel->updatePemrosesan($kode_masuk, 1);
			}			
			//$this->adminModel->updateStausLabSiswaByNIS($stVal,$id_siswa);
			redirect(site_url('Pengajuan'));
		}

	function deletePengajuan($kdPetugas)
	{
		//delete pengajuan, data_siswa, data_pembimbing, data_sekolah, file_pengajuan & file balasan...			
			$this->adminModel->deletePengajuan($kdPetugas);
			redirect(site_url('Pengajuan'));
	}
	
	function deleteSiswa($kdPetugas)
	{
		//termasuk akun
			$this->adminModel->deleteDataSiswaKmasuk($kdPetugas);
			$this->adminModel->deleteDataAkunKmasuk($kdPetugas);
			redirect(site_url('DataSiswa'));
	}	
	
	function deleteAkun($kdPetugas){
		$this->adminModel->deleteDataAkun($kdPetugas);
		redirect(site_url('DataSiswa/dataAkun'));
	}
	
	function matikanAkun($kdPetugas){
		//kode_referal
		$this->adminModel->setAkunOff($kdPetugas,0);
		redirect(site_url('DataSiswa/dataAkun'));
	}
	
	function aktifkanAkun($kdPetugas){
		//kode_referal
		$this->adminModel->setAkunOff($kdPetugas,1);
		redirect(site_url('DataSiswa/dataAkun'));
	}
	
	function deletePembimbing($kdPetugas)
	{
		//termasuk data_sekolah 
			$this->adminModel->deletePembimbingKmasuk($kdPetugas);
			$this->adminModel->deleteSekolahKmasuk($kdPetugas);			
			redirect(site_url('DataPembimbing_SekolahSiswa'));
	}
	
	function deletePembimbingLab($kdPetugas)
	{
		//termasuk data_sekolah 
			$this->adminModel->deletePembLab($kdPetugas);
			redirect(site_url('DataPembimbingLab'));
	}
	
	function deleteLab($kdPetugas)
	{
		//termasuk data_sekolah		
			$this->adminModel->deleteLab($kdPetugas);
			redirect(site_url('Laboratorium'));
	}	
	
	function deleteCatatankegiatan($kdPetugas)
	{
		//termasuk data_sekolah		
			$this->adminModel->deleteCatKeg($kdPetugas);
			redirect(site_url('DataSiswa/CatatanKegiatan'));
	}	
	
	function deleteAdmin($kdPetugas)
	{
		//termasuk data_sekolah		
			$this->adminModel->deleteAdmin($kdPetugas);
			redirect(site_url('data_admin'));
	}

	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'id_admin' => '','kekuasaan'=>'');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('admin_login/index');
	}

	function prosesEditSiswa()
	{	
			//update data_siswa
			//perlu upload foto gak??
			$id_user = $this->input->post('id_siswa');		
			$data['nama_siswa'] = $this->input->post('nama');
			$data['jurusan_siswa'] = $this->input->post('jurusan');
			$data['NIS_siswa'] = $this->input->post('nis');			

			$this->adminModel->updateSiswaSimple($id_user, $data);
			
			redirect(site_url('DataSiswa'));
	}
	
	function prosesEditAkun()
	{	
	//update akun_siswa
	//boleh reset password, dengan syarat ingat password/kode_referal dan kode_masuk (pembimbing)
			$id_user = $this->input->post('ref');		
			$data['username_akun'] = $this->input->post('uname');

			$this->adminModel->updateAkunSimple($id_user, $data);
			
			redirect(site_url('DataSiswa/dataAkun'));
	}
	
	function prosesEditLab()
	{	
	//update lab	
			$id_user = $this->input->post('id_lab');
			$data['nama_lab'] = $this->input->post('nama');
			$data['kapasitas_maksimum'] = $this->input->post('maks');	
			$data['desk_lab'] = $this->input->post('desk_lab');	

			$this->adminModel->updateLaboratorium($id_user, $data);
			
			redirect(site_url('Laboratorium'));
	}
	
	function prosesEditPembLab()
	{	
	//update pembimbing lab, bisa pindah lab	
			$id_user = $this->input->post('id_pemb_lab');
			$data['nama_pemb_lab'] = $this->input->post('nama');
			$data['id_lab'] = $this->input->post('lab_id');			

			$this->adminModel->updateAnggota($id_user, $data);
			
			redirect(site_url('DataPembimbingLab'));
	}
	
	function prosesEditPemb_Sekolah()
	{	
	//update sekolah dan pembimbing
			$id_user = $this->input->post('kode_masuk');
			$data['nama_pembimbing'] = $this->input->post('nama');
			$data['email_pembimbing'] = $this->input->post('email');
			$data['jabatan_pembimbing'] = $this->input->post('job');
			$data['kontak_pembimbing'] = $this->input->post('kontak');
			$data2['nama_sekolah'] = $this->input->post('nama_sekolah');
			$data2['alamat_sekolah'] = $this->input->post('alamat_sekolah');
			$data2['kontak_sekolah'] = $this->input->post('kontak_sekolah');

			$this->adminModel->updatePembimbing($id_user, $data);			
			$this->adminModel->updateSekolah($id_user, $data2);			
			redirect(site_url('DataPembimbing_SekolahSiswa'));
	}
	
	function prosesEditAdmin()
	{	
	//update akun_admin	
		
			$id_admin = $this->session->userdata('id_admin');
			$pwd = $this->input->post('password');
			$hash  = password_hash($pwd, PASSWORD_DEFAULT);
			
			$data['username_admin'] = $this->input->post('username');
			$data['pass_admin'] =  $hash;
			$data['nama_admin'] = $this->input->post('nama');			

			$this->adminModel->updateAdmin($id_admin, $data);
			
			redirect(site_url('Home'));
			//harusnya kepake buat profil/menu edit admin oleh master
	}			
	
	function prosesEditAbsen()
	{	
	//update absen...do it when emergency
			$id_user = $this->input->post('id_akun');
			$data['acc_pembimbing'] = $this->input->post('acc_pemb');
			$data['keterangan'] = $this->input->post('keterangan');			

			$this->adminModel->updateAbsensi($id_user, $data);
			
			redirect(site_url('Absensi'));
	}

	function prosesEditIsiKegiatan()
	{	
			//update data_siswa
			//perlu upload foto gak??
			$id_user = $this->input->post('id_kegiatan');		
			$data['judul_tulisan'] = $this->input->post('judul');
			$data['isi_tulisan'] = $this->input->post('teks');				

			$this->adminModel->updateKegiatan($id_user, $data);
			
			redirect(site_url('DataSiswa/CatatanKegiatan'));
	}
	
	function prosesEditAccKegiatan($red)
	{	
			//update data_siswa
			//perlu upload foto gak??
			$tes = $this->adminModel->getStatusAcc($red);
			$acc = $tes['acc_pembimbing'];			
			$val =0;
			if($acc==0){
				$val = 1;
			}else if($acc==1){
				$val = 0;
			}			
			$this->adminModel->updateAccKegiatan($red, $val);
			
			redirect(site_url('DataSiswa/CatatanKegiatan'));
	}
	
	function prosesInsertAdmin()
	{	
	//insert admin
	//username, password, nama, 
			//$id_admin = $this->session->userdata('id_admin');
			$pwd = $this->input->post('password');
			$hash  = password_hash($pwd, PASSWORD_DEFAULT);
			
			$data['username_admin'] = $this->input->post('username');
			$data['pass_admin'] =  $hash;
			$data['nama_admin'] = $this->input->post('nama');			

			$this->adminModel->insertAdmin($data);
			
			redirect(site_url('Home'));					
	}			
	
	function prosesInsertLab()
	{	
	//insert lab
			$data['nama_lab'] = $this->input->post('nama_lab');			
			$data['kapasitas_maksimum'] = $this->input->post('maks');
			$data['desk_lab'] = $this->input->post('desk_lab');

			$this->adminModel->insertLab($data);
			
			redirect(site_url('Laboratorium'));
	}
	
	function prosesAbsensi(){
		$id = $this->input->post('id_absen');
		$val = $this->input->post('accAbsen');		
		$ref = $this->input->post('kode_referal');
		for($x=0;$x<sizeof($val);$x++){
			 //$this->userModel->updateAccKehadiran()			
			 if($val[$x]==NULL){
				 $val[$x] = 0;
			 }
			 $this->adminModel->updateAccKehadiran2($val[$x],$ref[$x],$id[$x]);
		}		
		redirect(site_url('DataSiswa/absensi'));
	}	
	
	function cancelAbsensi($red){				
		$val = 0;
		$ref = $red;
		$this->adminModel->updateAccKehadiranSingle($val,$red);
		redirect(site_url('DataSiswa/absensi'));
	}	
	
	function hadirAbsensi($red){
		$val = 1;		
		$this->adminModel->updateAccKehadiranSingle($val,$red);
		redirect(site_url('DataSiswa/absensi'));
	}	
	
	function prosesInsertPembLab()
	{	
	//insert admin
	//username, password, nama, 
			$id_lab = $this->input->post('id_lab');
			$data['nama_pemb_lab'] = $this->input->post('nama');
			$data['id_lab'] = $this->input->post('lab_id');

			$this->adminModel->insertPembLabSiswa($data);
			
			redirect(site_url('DataPembimbingLab'));
	}	
	
	public function updatePassword(){
		/*
		$password = $this->input->post("password");//kode_referal pas di acc.
		$hash = password_hash($password, PASSWORD_DEFAULT); 
		*/				
		if($this->session->flashdata('username') == NULL){			
			redirect('Admin_login/index');
		}else{
			$this->form_validation->set_rules("password", "password", "trim|required|min_length[5]|max_length[30]");        
			$password = $this->input->post("password");//kode_referal pas di acc.		
		
			$uname = $this->input->post("username");
			$tes = $this->adminModel->get_akun_array2($uname);		
			$id = $tes['id_admin'];
				
			$hash = password_hash($password, PASSWORD_DEFAULT); 
			//$res = password_verify($pass, $hash);		
		
			if ($this->form_validation->run() == FALSE)
			{
				// validation fail
				$this->load->view('V_lupaPass2');
			}
			else
			{						
					/*$data_sis = $this->SiswaModel->getAkunSiswaByUnameArray($username);
					$kodRef = $this->SiswaModel->selectKRByUsername($data_sis['username_akun']);
					$hash = $this->SiswaModel->selectPassByReferal($kodRef);
					$res = password_verify($pass, $hash); 			
					$act = $data_sis['aktivasi_akun'];*/				
					$this->adminModel->updatePassAdmin($hash,$id);
					redirect('Admin_login/index');				
					/*
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Password tidak cocok, silakan coba lagi...</div>');                                
					redirect('PasswordVer');			*/
			}		
		}		
	}
	
	public function PasswordVer()
	{	
		$this->form_validation->set_rules("password", "password", "trim|required|min_length[5]|max_length[30]");        
		$password = $this->input->post("password");//kode_referal pas di acc.
		//$hash = password_hash($password, PASSWORD_DEFAULT); 
		$id = $this->session->userdata('id_admin');
		$df = $this->adminModel->get_pass_admin_array($id);		
		$pass = $df['pass_admin'];		
		$res = password_verify($password,$pass);		
		
		if ($this->form_validation->run() == FALSE)
		{
			// validation fail
			$this->load->view('V_Adminver');
		}
		else
		{			
			if($res == TRUE ){				
				$this->session->set_tempdata('lanjut', $res , 600);
				redirect('AdminRegister');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Password tidak cocok, silakan coba lagi...</div>');                                
				redirect('AdminRegister/index');
			}			
		}				
	}		

	public function lupaPassword(){
		/*
		$password = $this->input->post("password");//kode_referal pas di acc.
		$hash = password_hash($password, PASSWORD_DEFAULT); 
		*/
		$this->form_validation->set_rules("username", "username", "trim|required|min_length[5]|max_length[30]");        
		$uname = $this->input->post("username");//kode_referal pas di acc.
		//$hash = password_hash($password, PASSWORD_DEFAULT); 
		/*
		$id = $this->session->userdata('id_admin');
		$df = $this->adminModel->get_pass_admin_array($id);		
		$pass = $df['pass_admin'];
		$hash = password_hash($pass, PASSWORD_DEFAULT); 
		*/
		//$res = password_verify($pass, $hash);		
		$tes = $this->adminModel->get_akun_array2($uname);		
		$uname = $tes['username_admin'];
		$nama = $tes['nama_admin'];
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('V_lupaPass');
		}
		else
		{											
			if($uname == NULL){
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');				
				redirect('HakKelola/lupaPassword');
			}else{
				$this->session->set_flashdata('username',$uname);
				redirect('HakKelola/updatePassword');
			}			
		}		
	}
	
	function downloadPengajuan($filename=NULL){
		$data = file_get_contents(FCPATH .  '../sisi_sekolah/uploads/pengajuan/'.$filename);
		force_download($filename, $data);
	}
	
	function downloadBalasan($filename=NULL){
		$data = file_get_contents(FCPATH .  '../sisi_sekolah/uploads/balasan/'.$filename);
		force_download($filename, $data);
	}
	
	function matikanLab($kdPetugas){
		//kode_referal
		$this->adminModel->setLabOff($kdPetugas,0);
		redirect(site_url('Laboratorium/index'));
	}
	
	function aktifkanLab($kdPetugas){
		//kode_referal
		$this->adminModel->setLabOff($kdPetugas,1);
		redirect(site_url('Laboratorium/index'));
	}
	
	function akhiriPrakerin($kdPetugas){
		//kode_referal
		$this->adminModel->setPrakEnd($kdPetugas,3);
		$tes = $this->adminModel->selectSiswaById($kdPetugas)->row_array();
		$ref = $tes['kode_referal'];
		$this->adminModel->setAkunOff($ref,0);
		redirect(site_url('DataSiswa/index'));
	}
	
	public function file_check($str){
		//file yang didukung doc,docx,pdf
		//'pdf'	=>	array('application/pdf', 'application/force-download', 'application/x-download', 'binary/octet-stream'),
		//'doc'	=>	array('application/msword', 'application/vnd.ms-office'),
	//'docx'	=>	array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/msword', 'application/x-zip'),
        $allowed_mime_type_arr = array('application/pdf', 'application/force-download', 'application/x-download', 'binary/octet-stream',
		'application/msword', 'application/vnd.ms-office', 
		'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/msword', 'application/x-zip');
        $mime = get_mime_by_extension($_FILES['userfile']['name']);
        if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Please select only document file.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }

	public function resetPasswordSiswa(){		
		$this->form_validation->set_rules("username", "username", "trim|required|min_length[5]|max_length[30]");        
		$uname = $this->input->post("username");//kode_referal pas di acc.
		//$hash = password_hash($password, PASSWORD_DEFAULT); 
		/*
		$id = $this->session->userdata('id_admin');
		$df = $this->adminModel->get_pass_admin_array($id);		
		$pass = $df['pass_admin'];
		$hash = password_hash($pass, PASSWORD_DEFAULT); 
		*/
		//$res = password_verify($pass, $hash);				
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('V_lupaPassSiswa2');
		}
		else
		{											
			$tes = $this->adminModel->getAkunSiswaArray($uname);		
			$uname = $tes['kode_referal'];
			if($uname == NULL){
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');				
				redirect('HakKelola/resetPasswordSiswa');
				//8701952643
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Akun ditemukan.</div>');				
				$data['akunSiswa'] = $this->adminModel->getAkunSiswa($uname)->row();
				$this->load->view('V_lupaPassSiswa',$data);
			}			
		}		
	}

	public function updatePasswordSiswa(){
		/*
		$password = $this->input->post("password");//kode_referal pas di acc.
		$hash = password_hash($password, PASSWORD_DEFAULT); 
		*/						
			$this->form_validation->set_rules("password", "password", "trim|required|min_length[5]|max_length[30]");
			$password = $this->input->post("password");//kode_referal pas di acc.		
			$akun =  $this->input->post("ref");	
			//$res = password_verify($pass, $hash);		
		
			if ($this->form_validation->run() == FALSE)
			{
				// validation fail
				$this->load->view('V_lupaPassSiswa2');
			}
			else
			{						
					/*$data_sis = $this->SiswaModel->getAkunSiswaByUnameArray($username);
					$kodRef = $this->SiswaModel->selectKRByUsername($data_sis['username_akun']);
					$hash = $this->SiswaModel->selectPassByReferal($kodRef);
					$res = password_verify($pass, $hash); 			
					$act = $data_sis['aktivasi_akun'];*/	
					$tes = $this->adminModel->getAkunSiswaArray($akun);
					$id = $tes['kode_referal'];
				
					$hash = password_hash($password, PASSWORD_DEFAULT); 					
					$this->adminModel->updatePassSiswa($hash,$id);
					redirect('DataSiswa/dataAkun');				
					/*
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Password tidak cocok, silakan coba lagi...</div>');                                
					redirect('PasswordVer');			*/			
			}		
		}
}