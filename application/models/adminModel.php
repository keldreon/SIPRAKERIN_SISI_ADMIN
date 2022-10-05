<?php
class adminModel extends CI_Model{
	function __construct(){
		parent::__construct();
		//$this->load->database(); jangan di load, soalnya udah autoload dari autoload.php
	}
	function hitungSiswa_lab($username)
	{	
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->where('kode_lab',$username);
		$this->db->where('status_penerimaan_lab !=',2);
		$query = $this->db->count_all_results();		
		if(!empty($query)){
			return $query;	
		}else{
			return 0;	
		}
	}
	
	function updateCapLab($id_jurnal, $jml)
	{
		$sql = "UPDATE laboratorium SET kapasitas_isi =  ? WHERE id_lab = ? ";
		$this->db->query($sql, array($jml, $id_jurnal));
	}
	
	function getAllIDLab()
	{			
			$this->db->select('id_lab');				
			$query = $this->db->get('laboratorium');			
			return $query->row_array();
	}
	
	function selectAllPengajuan(){
		$this->db->select('*');
		$this->db->from('data_pengajuan');
		$this->db->order_by('tanggal_pengajuan','DESC');		
		
		//dikembalikan pada get
		return $this->db->get();
	}
	
	function selectAllAkun(){
		$this->db->select('*');
		$this->db->from('akun_siswa');		
		
		//dikembalikan pada get
		return $this->db->get();
	}
			
	function CountPeminatLab($tahun=NULL){		
		if($tahun != NULL){			
			$this->db->select('nama_lab');
			$this->db->select("COUNT(*) as 'total' ");
			$this->db->from('laboratorium');
			$this->db->from('data_siswa');
			$this->db->like('data_siswa.tanggal_pengajuan', $tahun);
			$this->db->where('data_siswa.kode_lab=laboratorium.id_lab');
			$this->db->group_by('nama_lab');			
			$query = $this->db->get();
			if(!empty($query)){
				return $query;	
			}else{
				return 0;	
			}
		}else{			
			$sql = "SELECT nama_lab, COUNT(*) as 'total' FROM  laboratorium,data_siswa where data_siswa.kode_lab=laboratorium.id_lab group by nama_lab;";
			$query = $this->db->query($sql);
			if(!empty($query)){
				return $query;	
			}else{
				return 0;	
			}			
		}
	}
	
	function CountAllSedang($tahun = NULL){
		if($tahun != NULL){
			$this->db->select('nama_lab');
			$this->db->select("COUNT(*) as 'total' ");
			$this->db->from('laboratorium');
			$this->db->from('data_siswa');
			$this->db->from('akun_siswa');
			$this->db->like('data_siswa.tanggal_pengajuan', $tahun);
			$this->db->where('data_siswa.kode_lab=laboratorium.id_lab');			
			$this->db->where('data_siswa.id_siswa=akun_siswa.id_siswa');
			$this->db->where('data_siswa.id_akun!=0');			
			$this->db->where('data_siswa.status_penerimaan_lab=1');			
			$this->db->group_by('nama_lab');					
			$query = $this->db->get();
			if(!empty($query)){
				return $query;	
			}else{
				return 0;	
			}
		}else{			
			$sql = "SELECT nama_lab, COUNT(*) as 'total' FROM  laboratorium,data_siswa where data_siswa.status_penerimaan_lab=1 AND data_siswa.id_akun != 0 AND data_siswa.kode_lab=laboratorium.id_lab group by nama_lab;";
			$query = $this->db->query($sql);
			if(!empty($query)){
				return $query;	
			}else{
				return 0;	
			}			
		}
	}
		
	function CountAllAlumni($tahun=NULL){
		if($tahun != NULL){
			$this->db->select('nama_lab');
			$this->db->select("COUNT(*) as 'total' ");
			$this->db->from('laboratorium');
			$this->db->from('data_siswa');
			$this->db->from('akun_siswa');
			$this->db->like('data_siswa.tanggal_pengajuan', $tahun);
			$this->db->where('data_siswa.kode_lab=laboratorium.id_lab');			
			$this->db->where('data_siswa.id_siswa=akun_siswa.id_siswa');
			$this->db->where('data_siswa.id_akun!=0');
			$this->db->where('data_siswa.status_penerimaan_lab=3');			
			$this->db->group_by('nama_lab');					
			$query = $this->db->get();
			if(!empty($query)){
				return $query;	
			}else{
				return 0;	
			}
		}else{			
			$sql = "SELECT nama_lab, COUNT(*) as 'total' FROM  laboratorium,data_siswa where data_siswa.status_penerimaan_lab=3 AND data_siswa.id_akun != 0 AND data_siswa.kode_lab=laboratorium.id_lab group by nama_lab;";
			$query = $this->db->query($sql);
			if(!empty($query)){
				return $query;	
			}else{
				return 0;	
			}			
		}
	}
	
	function CountAllPengajuanSekolah($tahun){		
		$this->db->select('data_sekolah.nama_sekolah');
		$this->db->select("COUNT(*) as 'total' ");
		$this->db->from('data_sekolah');
		$this->db->from('data_pengajuan');
		$this->db->like('data_pengajuan.tanggal_pengajuan', $tahun);
		$this->db->where('data_sekolah.nama_sekolah=data_pengajuan.nama_sekolah');								
		$this->db->where('data_sekolah.kode_masuk=data_pengajuan.kode_masuk');						
		$this->db->group_by('nama_sekolah');					
		$query = $this->db->get();
		if(!empty($query)){
			return $query;	
		}else{
			return 0;	
		}		
	}
	
		// total pengajuan
	function CountAllPengajuan($tahun=NULL){
		$this->db->select('*');
		$this->db->from('data_pengajuan');		
		if($tahun!=NULL){
			$this->db->like('tanggal_pengajuan',$tahun);
		}				
		$query = $this->db->count_all_results();		
		if(!empty($query)){
			return $query;	
		}else{
			return 0;	
		}
	}
	
	// total sedang prakerin
	function TotalAllSedang($tahun=NULL){
		$this->db->select("*");
		$this->db->from('laboratorium');
		$this->db->from('data_siswa');
		$this->db->from('akun_siswa');							
		if($tahun!=NULL){			
			$this->db->like('data_siswa.tanggal_pengajuan', $tahun);
		}	
		$this->db->where('data_siswa.kode_lab=laboratorium.id_lab');			
		$this->db->where('data_siswa.id_siswa=akun_siswa.id_siswa');
		$this->db->where('data_siswa.id_akun!=0');			
		$this->db->where('data_siswa.status_penerimaan_lab=1');	
		$query = $this->db->count_all_results();		
		if(!empty($query)){
			return $query;	
		}else{
			return 0;	
		}
	}
	
	function TotalAllAlumni($tahun=NULL){		
		$this->db->select("*");
		$this->db->from('laboratorium');
		$this->db->from('data_siswa');
		$this->db->from('akun_siswa');							
		if($tahun!=NULL){			
			$this->db->like('data_siswa.tanggal_pengajuan', $tahun);
		}	
		$this->db->where('data_siswa.kode_lab=laboratorium.id_lab');			
		$this->db->where('data_siswa.id_siswa=akun_siswa.id_siswa');
		$this->db->where('data_siswa.id_akun!=0');			
		$this->db->where('data_siswa.status_penerimaan_lab=3');	
		$query = $this->db->count_all_results();		
		if(!empty($query)){
			return $query;	
		}else{
			return 0;	
		}
	}
	
	function TotalAllPeminat($tahun=NULL){
		$this->db->select("COUNT(*) as 'total' ");
		$this->db->from('data_siswa');	
		$this->db->from('laboratorium');		
		if($tahun!=NULL){
			$this->db->like('tanggal_pengajuan',$tahun);
		}	
		$this->db->where('data_siswa.kode_lab=laboratorium.id_lab');
		$query = $this->db->count_all_results();		
		if(!empty($query)){
			return $query;	
		}else{
			return 0;	
		}
	}
	
	function getDataPengajuan($awal,$akhir){
		$this->db->order_by('tanggal_pengajuan','DESC');		
		$hasil = $this->db->get('data_pengajuan',$awal,$akhir);		
		return $hasil;
	}
	//menambah data
	
	function selectSekolahByKode($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_sekolah');
		$this->db->where('id_sekolah',$kdPetugas);
		return $this->db->get();
	}
	
	function selectSekolahByKode2($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_sekolah');
		$this->db->where('kode_masuk',$kdPetugas);
		return $this->db->get();
	}
	
	function selectUserByKode($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->where('id_siswa',$kdPetugas);
		return $this->db->get();
	}
	
	function getDataSiswa()
	{
		/*
		$sql = "SELECT * FROM data_siswa,laboratorium,data_sekolah,data_pembimbing WHERE data_siswa.kode_lab=laboratorium.id_lab && data_siswa.id_pembimbing=data_pembimbing.id_pembimbing && data_siswa.id_sekolah=data_sekolah.id_sekolah";
		$query = $this->db->query($sql);
		return $query;*/
		
		/*
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->order_by('tanggal_pengajuan','DESC');		
		return $this->db->get();
		*/
		$this->db->select('*');
		$this->db->from('data_siswa');		
		$this->db->join('data_sekolah', 'data_sekolah.id_sekolah = data_siswa.id_sekolah');
		$this->db->join('data_pembimbing', 'data_pembimbing.id_pembimbing = data_siswa.id_pembimbing');
		$this->db->join('laboratorium', 'laboratorium.id_lab= data_siswa.kode_lab');				
		$query = $this->db->get();
		return $query;
	}
	
	function getNamaPembimbingDataSiswa($kode)
	{
		
		$sql = "SELECT nama_pemb_lab FROM data_siswa,pembimbing_lab WHERE data_siswa.kode_masuk = ? && data_siswa.id_pemb_lab=pembimbing_lab.id_pemb_lab";
		$query = $this->db->query($sql,array($kode));
		return $query;
		
		/*
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->order_by('tanggal_pengajuan','DESC');		
		return $this->db->get();
		*/
	}
	
	function getDataAkunSiswa($awal,$akhir)
	{		
		$this->db->select('*');
		$this->db->from('akun_siswa');				
		$this->db->join('data_siswa', 'data_siswa.kode_referal= akun_siswa.kode_referal');	
		$this->db->order_by('akun_siswa.tanggal_daftar','DESC');		
		$hasil = $this->db->limit($awal,$akhir)->get();				
		return $hasil;
		/*
		$sql = "SELECT * FROM data_siswa, akun_siswa WHERE data_siswa.kode_referal=akun_siswa.kode_referal";
		$query = $this->db->query($sql);
		return $query;		*/
	}
	
	
	function check_akun($kodemasuk)
	{
		$this->db->select('id_siswa');
		$this->db->from('akun_siswa');
		$this->db->where('id_siswa',$kodemasuk);
		$query = $this->db->get();
		//affected row
		if($query->num_rows() > 0)
		{						
			return false;
		}else
		{
			return true;
		}		
	}
	
	function getDataPembimbing2($awal,$akhir)
	{		
		$this->db->select('*');
		$this->db->from('data_pembimbing');				
		$this->db->join('data_sekolah', 'data_pembimbing.kode_masuk = data_sekolah.kode_masuk');
		$hasil = $this->db->limit($awal,$akhir)->get();				
		return $hasil;
	}
	
	function getDataPembimbing(){
		$sql = "SELECT * FROM data_sekolah, data_pembimbing WHERE data_pembimbing.kode_masuk=data_sekolah.kode_masuk";
		$query = $this->db->query($sql);
		return $query;		
	}
	
	function selectAllJurnal(){
		$this->db->select('*');
		$this->db->from('jurnal');
		$this->db->order_by('id_jurnal');
		
		//dikembalikan pada get
		return $this->db->get();
	}	
	
	function selectSiswaNamaLab($kode){
		$sql = "SELECT * FROM data_siswa,laboratorium WHERE data_siswa.kode_lab=laboratorium.id_lab &&  data_siswa.kode_masuk=?";
		$query = $this->db->query($sql, array($kode));
		return $query;		
	}
	
	function selectSiswaNamaLab2($kode){
		$sql = "SELECT * FROM data_siswa,laboratorium,pembimbing_lab WHERE data_siswa.kode_lab=laboratorium.id_lab && data_siswa.id_pemb_lab=pembimbing_lab.id_pemb_lab && data_siswa.kode_masuk=?";
		$query = $this->db->query($sql, array($kode));
		return $query;		
	}

	function get_akun($uname, $password)
	{
		$this->db->select('*');
		$this->db->from('data_admin');
		$this->db->where('username_admin',$uname);
		$this->db->where('pass_admin',$password);
		$query = $this->db->get();

		if($query->num_rows() > 0)
		{						
			return $query->num_rows();
		}else
		{
			return false;
		}		
	}

	function get_akun_array($uname, $password)
	{
		$this->db->select('*');
		$this->db->from('data_admin');
		$this->db->where('username_admin',$uname);
		$this->db->where('pass_admin',$password);
		$query = $this->db->get();
		return $query->row_array();	
	}
	
	function get_akun_array2($uname)
	{
		$this->db->select('*');
		$this->db->from('data_admin');
		$this->db->where('username_admin',$uname);		
		$query = $this->db->get();
		return $query->row_array();	
	}
	
	function getAkunSiswaArray($uname)
	{
		$this->db->select('*');
		$this->db->from('akun_siswa');
		$this->db->where('kode_referal',$uname);						
		$query = $this->db->get();
		return $query->row_array();	
	}
	
	function getAkunSiswa($uname)
	{
		$this->db->select('*');
		$this->db->from('akun_siswa');
		$this->db->where('kode_referal',$uname);						
		$query = $this->db->get();
		return $query;
	}

	function get_admin_by_id($id)
	{
		$this->db->where('id_admin', $id);
        $query = $this->db->get('admin');
		return $query->result();
	}
	
	function get_pass_admin_array($uname)
	{
		$this->db->select('*');
		$this->db->from('data_admin');
		$this->db->where('id_admin',$uname);	
		$query = $this->db->get();
		return $query->row_array();	
	}

	function get_user_by_id($id)
	{
		$this->db->where('id_user', $id);
        $query = $this->db->get('user');
		return $query->result();
	}

	function j_selectAll(){
		$this->db->select('*');
		$this->db->from('jurnal');
		$this->db->order_by('id_jurnal');
		
		//dikembalikan pada get
		return $this->db->get();
	}
		
	function updateFileBalasan($id_jurnal, $data)
	{
		$this->db->set('file_surat_balasan', $data);
		$this->db->where('kode_masuk',$id_jurnal);
		$this->db->update('data_pengajuan');
		
		$this->db->set('file_surat_balasan', $data);
		$this->db->where('kode_masuk',$id_jurnal);
		$this->db->update('data_sekolah');
	}
	
	function updatePemrosesan($id_jurnal, $data)
	{
		$this->db->set('status_pemrosesan', $data);
		$this->db->where('kode_masuk',$id_jurnal);
		$this->db->update('data_pengajuan');			
	}
	
	function getPemrosesan($id_jurnal)
	{
		$this->db->select('status_pemrosesan');
		$this->db->from('data_pengajuan');			
		$this->db->where('kode_masuk',$id_jurnal);		
		$query = $this->db->get();
		return $query->row_array();
	}
	
	function updateStatusLabSiswa($data,$data1)
	{	
		for($x =0;$x<sizeof($data);$x++){
			$this->db->set('status_penerimaan_lab', $data[$x]);
			$this->db->where('id_siswa',$data1[$x]);
			$this->db->update('data_siswa');		
		}		
	}
	
	function updateKodeRefDataSiswa($data,$data1)
	{	
		//for($x =0;$x<sizeof($data);$x++){
			$this->db->set('kode_referal', $data);
			$this->db->where('id_siswa',$data1);
			$this->db->update('data_siswa');		
		//}		
	}
	
	function updateKodePembLabSiswa($data,$data1)
	{			
		$this->db->set('id_pemb_lab', $data);
		$this->db->where('id_siswa',$data1);
		$this->db->update('data_siswa');				
	}
	
	function updateTglMagangSiswa($data,$data1, $data2)
	{			
		$this->db->set('tanggal_mulai_praktek', $data);
		$this->db->set('tanggal_selesai_praktek', $data1);
		$this->db->where('id_siswa',$data2);
		$this->db->update('data_siswa');				
	}
	
	function updatePembimbing($data1,$data)
	{					
		$this->db->where('kode_masuk',$data1);
		$this->db->update('data_pembimbing',$data);				
	}
	
	function updateLaboratorium($data1,$data)
	{					
		$this->db->where('id_lab',$data1);
		$this->db->update('laboratorium',$data);				
	}
	
	function updateSekolah($data1,$data)
	{					
		$this->db->where('kode_masuk',$data1);
		$this->db->update('data_sekolah',$data);				
	}
	
	function updateKegiatan($data1,$data)
	{					
		$this->db->where('id_kegiatan',$data1);
		$this->db->update('kegiatan_siswa',$data);				
	}
	
	function insertAkun($data){
		$this->db->insert('akun_siswa',$data);	
	}
	
	function insertPembLabSiswa($data)
	{				
			$this->db->insert('pembimbing_lab',$data);							
	}
	
	function insertLab($data)
	{				
			$this->db->insert('laboratorium',$data);							
	}
	
	function insertAdmin($data)
	{				
			$this->db->insert('data_admin',$data);							
	}	
	
	function selectAllLab(){
		$this->db->select('*');
		$this->db->from('laboratorium');		
		$this->db->order_by('id_lab');
		
		//dikembalikan pada get
		return $this->db->get();
	}
	
	function selectAllPembLabByLab(){
		$sql = "SELECT * FROM pembimbing_lab,laboratorium WHERE pembimbing_lab.id_lab=laboratorium.id_lab";
		$query = $this->db->query($sql);
		return $query;		
	}
	
	function selectLabByKode($id){
		$this->db->select('*');
		$this->db->from('laboratorium');
		$this->db->where('id_lab',$id);
		return $this->db->get();
	}
	
	function selectLabByKodeArray($id){
		$this->db->select('id_lab');
		$this->db->from('laboratorium');
		$this->db->where('id_lab',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	function selectAllPembLab(){
		$this->db->select('*');
		$this->db->from('pembimbing_lab');		
		$this->db->order_by('id_pemb_lab');		
		//dikembalikan pada get
		return $this->db->get();
	}	
	
	function selectPembLabByKode($id){				
		$this->db->select('*');
		$this->db->from('pembimbing_lab');
		$this->db->join('laboratorium', 'laboratorium.id_lab = pembimbing_lab.id_lab');		
		$this->db->where('pembimbing_lab.id_pemb_lab',$id);
		$query = $this->db->get();
		return $query;
	}
	
	function cekAkunSiswa($idSiswa)
	{
		$this->db->select('*');
		$this->db->from('akun_siswa');		
		$this->db->where('id_siswa',$idSiswa);
		$query = $this->db->get();

		if($query->num_rows() > 0)
		{						
			return $query->num_rows();
		}else
		{
			return 0;
		}		
	}

	function updateSiswa($id_jurnal, $id2, $value)
	{
		$this->db->where('NIS_siswa',$id_jurnal);
		$this->db->where('kode_masuk',$id2);
		$this->db->update('data_siswa',$value);
	}
	
	function selectSekolahByKodeDaftar($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_sekolah');	
		$this->db->where('kode_masuk',$kdPetugas);
		return $this->db->get();
	}
	
	function selectPembimbingByKode($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_pembimbing');
		$this->db->where('kode_masuk',$kdPetugas);
		return $this->db->get();
	}	
	
	function selectSiswaByKode($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->where('kode_masuk',$kdPetugas);
		return $this->db->get();
	}
	
	//baru
	function updateSekolahByKodeMasuk($nama ,$kode)
	{
		$this->db->set('file_surat_balasan', $nama);
		$this->db->where('kode_masuk',$kode);
		$this->db->update('data_sekolah');
	}
	
	function updateSuratBalasanSekolah($nama ,$kode)
	{
		$this->db->set('file_surat_balasan', $nama);
		$this->db->where('kode_masuk',$kode);
		$this->db->update('data_sekolah');
	}
	
	function updateSuratBalasanDPengajuan($nama,$kode)
	{
		$this->db->set('file_surat_balasan', $nama);
		$this->db->where('kode_masuk',$kode);
		$this->db->update('data_pengajuan');
	}
	
	function updateStatusLabSiswaByNIS($data)
	{			
		$this->db->update_batch('data_siswa',$data,'id_siswa');
	}	
	
	function updatePassAdmin($nama ,$kode)
	{
		$this->db->set('pass_admin', $nama);
		$this->db->where('id_admin',$kode);
		$this->db->update('data_admin');
	}
	
	function updatePassSiswa($nama ,$kode)
	{
		$this->db->set('password_akun', $nama);
		$this->db->where('kode_referal',$kode);
		$this->db->update('akun_siswa');
	}
	
	//bau

	function deleteDataSiswa($id_jurnal)
	{
		$this->db->where('id_siswa',$id_jurnal);
		$this->db->delete('data_siswa');
	}
	
	function deleteDataSiswaKmasuk($id_jurnal)
	{
		$this->db->where('id_siswa',$id_jurnal);
		$this->db->delete('data_siswa');
	}
	
	function deleteDataAkun($id_jurnal)
	{
		$this->db->where('id_akun',$id_jurnal);
		$this->db->delete('akun_siswa');
	}
	
	function deleteDataAkunKmasuk($id_jurnal)
	{
		$this->db->where('kode_masuk',$id_jurnal);
		$this->db->delete('akun_siswa');
	}
	
	function deletePembimbing($id_jurnal)
	{
		$this->db->where('id_pembimbing',$id_jurnal);
		$this->db->delete('data_pembimbing');
	}
	
	function deletePembimbingKmasuk($id_jurnal)
	{
		$this->db->where('kode_masuk',$id_jurnal);
		$this->db->delete('data_pembimbing');
	}
	
	function deleteSekolah($id_jurnal)
	{
		$this->db->where('id_sekolah',$id_jurnal);
		$this->db->delete('data_sekolah');
	}
	
	function deleteSekolahKmasuk($id_jurnal)
	{
		$this->db->where('kode_masuk',$id_jurnal);
		$this->db->delete('data_sekolah');
	}
	
	function deleteLab($id_jurnal)
	{
		$this->db->where('id_lab',$id_jurnal);
		$this->db->delete('laboratorium');
	}
	
	function deletePembLab($id_jurnal)
	{
		$this->db->where('id_pemb_lab',$id_jurnal);
		$this->db->delete('pembimbing_lab');
	}
	
	function deleteAdmin($id_jurnal)
	{
		$this->db->where('id_admin',$id_jurnal);
		$this->db->delete('data_admin');
	}
	
	function deletePengajuan($id_jurnal)
	{
		$this->db->where('id_pengajuan',$id_jurnal);
		$this->db->delete('data_pengajuan');
	}
	
	function deleteCatKeg($id_jurnal)
	{
		$this->db->where('id_kegiatan',$id_jurnal);
		$this->db->delete('kegiatan_siswa');
	}

	function insertJurnal($data){
		$this->db->insert('jurnal',$data);	
	}

	function updateAdmin($id_jurnal, $data)
	{
		$this->db->where('id_admin',$id_jurnal);
		$this->db->update('data_admin',$data);
	}
	
	function updateSiswaSimple($id_jurnal, $data)
	{
		$this->db->where('id_siswa',$id_jurnal);
		$this->db->update('data_siswa',$data);
	}
	
	function updateAkunSimple($id_jurnal, $data)
	{
		$this->db->where('kode_referal',$id_jurnal);
		$this->db->update('akun_siswa',$data);
	}

	function updateAnggota($id_admin, $data)
	{
		$this->db->where('id_user',$id_admin);
		$this->db->update('user',$data);
	}

	function deleteAnggota($id_anggota)
	{
		$this->db->where('id_user',$id_anggota);
		$this->db->delete('user');
	}	
	
	function selectPembimbingLab($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('pembimbing_lab');
		$this->db->where('id_lab',$kdPetugas);
		return $this->db->get();
	}
	
	function selectIdLabByKode($kdPetugas)
	{
		$this->db->select('kode_lab');
		$this->db->from('data_siswa');
		$this->db->where('kode_masuk',$kdPetugas);
		$query = $this->db->get();
		$row = $query->row();
		return $row->kode_lab;
	}
	
	function getData($awal, $akhir){
		$hasil = $this->db->get('jurnal',$awal,$akhir);
		return $hasil;
	}	
	
	function getDataPembimbingLimit($awal,$akhir)
	{		
		$sql = "SELECT * FROM data_sekolah, data_pembimbing WHERE data_pembimbing.kode_masuk=data_sekolah.kode_masuk LIMIT ?,?";
		$query = $this->db->query($sql,array($awal,$akhir));
		return $query;		
	}
	
	function getDataSiswaLimit($awal,$akhir)
	{			
		/*
		$sql = "SELECT * FROM data_siswa,laboratorium,data_sekolah,data_pembimbing WHERE data_siswa.kode_lab=laboratorium.id_lab && data_siswa.id_pembimbing=data_pembimbing.id_pembimbing && data_siswa.id_sekolah=data_sekolah.id_sekolah LIMIT ?, ?";
		$query = $this->db->query($sql,array($awal,$akhir));
		return $query;		
		*/
		
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->join('data_sekolah', 'data_sekolah.id_sekolah = data_siswa.id_sekolah');
		$this->db->join('data_pembimbing', 'data_pembimbing.id_pembimbing = data_siswa.id_pembimbing');
		$this->db->join('laboratorium', 'laboratorium.id_lab= data_siswa.kode_lab');
		$query = $this->db->limit($awal,$akhir)->get();
		return $query;
		
	}
	
	function setAkunOff($kdPetugas,$val)
	{
		$this->db->set('aktivasi_akun', $val);
		$this->db->where('kode_referal',$kdPetugas);
		$this->db->update('akun_siswa');
	}
	
	function selectSiswaById($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->where('id_siswa',$kdPetugas);
		return $this->db->get();
	}
	
	function selectAllAbsensi(){
		$this->db->select('*');
		$this->db->from('absensi');
		$this->db->order_by('waktu_kehadiran','DESC');		
		//dikembalikan pada get
		return $this->db->get();
	}
	
	function selectAllAbsensi2($awal,$akhir){
		$this->db->select('*');
		$this->db->from('absensi');
		$this->db->order_by('waktu_kehadiran','DESC');		
		//dikembalikan pada get
		return $this->db->limit($awal,$akhir)->get();
	}
	
	function selectAllKegiatan(){
		$this->db->select('*');
		$this->db->from('kegiatan_siswa');
		$this->db->join('akun_siswa', 'akun_siswa.id_akun = kegiatan_siswa.id_akun');		
		$this->db->join('data_siswa', 'data_siswa.id_akun = kegiatan_siswa.id_akun');		
		$this->db->join('pembimbing_lab', 'pembimbing_lab.id_pemb_lab = kegiatan_siswa.id_pemb_lab');				
		$this->db->order_by('kegiatan_siswa.tanggal_nulis','DESC');
		//dikembalikan pada get
		return $this->db->get();
	}
	
	function selectAllKegiatan2($awal,$akhir){
		$this->db->select('*');
		$this->db->from('kegiatan_siswa');
		$this->db->join('akun_siswa', 'akun_siswa.id_akun = kegiatan_siswa.id_akun');		
		$this->db->join('data_siswa', 'data_siswa.id_akun = kegiatan_siswa.id_akun');		
		$this->db->join('pembimbing_lab', 'pembimbing_lab.id_pemb_lab = kegiatan_siswa.id_pemb_lab');				
		$this->db->order_by('kegiatan_siswa.tanggal_nulis','DESC');
		//dikembalikan pada get
		return $this->db->limit($awal,$akhir)->get();
	}
	
	function updateAccKehadiran($data, $data1)
	{			
			$this->db->set('acc_pembimbing', $data);
			$this->db->where('kode_referal',$data1);
			$this->db->update('absensi');			
	}
	
	function updateAccKehadiran2($data, $data1,$data2)
	{			
			$this->db->set('acc_pembimbing', $data);
			$this->db->where('kode_referal',$data1);
			$this->db->where('id_absen',$data2);
			$this->db->update('absensi');			
	}
	
	function updateAccKehadiranSingle($data, $data1)
	{			
			$this->db->set('acc_pembimbing', $data);			
			$this->db->where('id_absen',$data1);
			$this->db->update('absensi');			
	}
	
	function updateAccKegiatan($data, $data1)
	{			
			$this->db->set('acc_pembimbing', $data1);			
			$this->db->where('id_kegiatan',$data);
			$this->db->update('kegiatan_siswa');			
	}
	
	function getStatusAcc($data)
	{			
			$this->db->select('acc_pembimbing');			
			$this->db->where('id_kegiatan',$data);
			$query = $this->db->get('kegiatan_siswa');			
			return $query->row_array();
	}
	
	function getKegiatan($id){
		$this->db->select('*');
		$this->db->from('kegiatan_siswa');
		$this->db->where('kegiatan_siswa.id_kegiatan',$id);
		$this->db->join('akun_siswa', 'akun_siswa.id_akun = kegiatan_siswa.id_akun');		
		$this->db->join('data_siswa', 'data_siswa.id_akun = kegiatan_siswa.id_akun');	
		$this->db->join('data_pembimbing', 'data_pembimbing.kode_masuk = kegiatan_siswa.kode_masuk');
		$this->db->join('pembimbing_lab', 'pembimbing_lab.id_pemb_lab = kegiatan_siswa.id_pemb_lab');						
		//dikembalikan pada get
		return $this->db->get();
	}
	
	function getSKegiatan($id){
		$this->db->select('*');
		$this->db->from('kegiatan_siswa');
		$this->db->where('id_kegiatan',$id);		
		//dikembalikan pada get
		return $this->db->get();
	}
	
	function getDataPengajuanLim($awal){
		$this->db->order_by('tanggal_pengajuan','DESC');	
		$hasil = $this->db->limit($awal)->get('data_pengajuan');		
		return $hasil;
	}
	
	function getDataLabLim($awal){
		$this->db->select('*');
		$this->db->from('laboratorium');		
		$this->db->order_by('id_lab');
		
		//dikembalikan pada get
		return $this->db->limit($awal)->get();
	}
	
	function getDataSiswaLim($awal){
		$hasil = $this->db->limit($awal)->get('data_siswa');		
		return $hasil;
	}
	
	function getDataKegiatanLim($awal){
		$this->db->select('*');
		$this->db->from('kegiatan_siswa');		
		$this->db->join('akun_siswa', 'akun_siswa.id_akun = kegiatan_siswa.id_akun');		
		$this->db->join('data_siswa', 'data_siswa.id_akun = kegiatan_siswa.id_akun');	
		$this->db->join('data_pembimbing', 'data_pembimbing.kode_masuk = kegiatan_siswa.kode_masuk');
		$this->db->join('pembimbing_lab', 'pembimbing_lab.id_pemb_lab = kegiatan_siswa.id_pemb_lab');	
		$this->db->order_by('kegiatan_siswa.tanggal_nulis','DESC');		
		$hasil = $this->db->limit($awal)->get();				
		return $hasil;
	}
	
	function setLabOff($kdPetugas,$val)
	{
		$this->db->set('status', $val);
		$this->db->where('id_lab',$kdPetugas);
		$this->db->update('laboratorium');
	}
	
	function setPrakEnd($kdPetugas,$val)
	{
		$this->db->set('status_penerimaan_lab', $val);
		$this->db->where('id_siswa',$kdPetugas);
		$this->db->update('data_siswa');
	}
	
	function getIsiLab($id){
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->where('data_siswa.kode_lab',$id);
		$this->db->where('data_siswa.status_penerimaan_lab!=',2);
		$this->db->join('data_sekolah', 'data_sekolah.id_sekolah = data_siswa.id_sekolah');		
		//dikembalikan pada get
		return $this->db->get();
	}
	
	function getDetailAkun($id){
		$this->db->select('*');
		$this->db->from('akun_siswa');
		$this->db->where('akun_siswa.kode_referal',$id);		
		$this->db->join('data_siswa', 'data_siswa.kode_referal = akun_siswa.kode_referal');
		//dikembalikan pada get
		return $this->db->get();
	}
}
?>

