<?php
Class  userModel extends CI_Model{
	function __construct(){
		parent::__construct();
		//$this->load->database(); jangan di load, soalnya udah autoload dari autoload.php
	}
	
	//region sekolah
	function selectSekolahByNama($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_sekolah');
		$this->db->where('nama_sekolah',$kdPetugas);
		return $this->db->get();
	}
	
	function selectSekolahByKodeDaftar($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_sekolah');
		$this->db->where('kode_masuk',$kdPetugas);
		return $this->db->get();
	}
	
	function check_Sekolah($username)
	{		
		$sql = "SELECT * FROM data_sekolah WHERE nama_sekolah=?";
		$query = $this->db->query($sql, array($username ));		

		if($query->num_rows() > 0)
		{						
			return $query->num_rows();
		}else
		{
			return false;
		}
	}	
	
	function hitungSiswa_lab($username)
	{		
		$sql = "SELECT * FROM data_siswa WHERE kode_lab=? && status_penerimaan_lab!=?";
		$query = $this->db->query($sql, array($username,2));		

		if($query->num_rows() > 0)
		{						
			return $query->num_rows();
		}else
		{
			return false;
		}
	}

	function selectSiswaNamaLab($kode){
		$sql = "SELECT * FROM data_siswa,laboratorium WHERE data_siswa.kode_lab=laboratorium.id_lab && data_siswa.kode_masuk=?";
		$query = $this->db->query($sql, array($kode));
		return $query;		
	}
	
	function selectKodeSekolahByNama($kdPetugas)
	{
		$this->db->select('id_sekolah');
		$this->db->from('data_sekolah');
		$this->db->where('nama_sekolah',$kdPetugas);
		$query = $this->db->get();
		$row = $query->row();
		return $row->id_sekolah;
	}
	
	function selectKodeLabByKode($kdPetugas)
	{
		$this->db->select('kode_lab');
		$this->db->from('data_siswa');
		$this->db->where('kode_masuk',$kdPetugas);
		$query = $this->db->get();
		$row = $query->row();
		return $row->kode_lab;
	}
	
	function selectKodePembimbingByNama($kdPetugas)
	{
		$this->db->select('id_pembimbing');
		$this->db->from('data_pembimbing');
		$this->db->where('nama_pembimbing',$kdPetugas);
		$query = $this->db->get();
		$row = $query->row();
		return $row->id_pembimbing;
	}
	
	function selectSekolahByKode($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_sekolah');
		$this->db->where('id_sekolah',$kdPetugas);
		return $this->db->get();
	}
	
	//region pembimbing
	function selectPembimbingByNama($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_pembimbing');
		$this->db->where('nama_pembimbing',$kdPetugas);
		return $this->db->get();
	}
	
	function selectPembimbingByKode($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_pembimbing');
		$this->db->where('kode_masuk',$kdPetugas);
		return $this->db->get();
	}
	
	function check_Pembimbing($username)
	{		
		$sql = "SELECT * FROM data_pembimbing WHERE kode_masuk=?";
		$query = $this->db->query($sql, array($username));		

		if($query->num_rows() > 0)
		{						
			return $query->num_rows();
		}else
		{
			return false;
		}
	}
	
	function selectAllbyKode($username)
	{		
		$this->db->select('*');
		$this->db->from('data_pembimbing');
		$this->db->from('data_siswa');
		$this->db->where('kode_masuk',$kdPetugas);
		return $this->db->get();
	}	

	//region siswa
	function selectSiswaByNama($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->where('nama_siswa',$kdPetugas);
		return $this->db->get();
	}
	
	function selectSiswaByNIS($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->where('NIS_siswa',$kdPetugas);
		return $this->db->get();
	}
	
	function selectSiswaByKode($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->where('kode_masuk',$kdPetugas);
		return $this->db->get();
	}
	
	
	function selectSiswaByPembimbing($kdPetugas, $kddua)
	{
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->where('id_pembimbing',$kddua);		
		return $this->db->get();
	}
	
	
	function selectAllSiswa(){
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->order_by('id_siswa');
		
		//dikembalikan pada get
		return $this->db->get();
	}	
	
	function insert_siswa($data)
    {
		return $this->db->insert('data_siswa', $data);
	}
	
	function insert_sekolah($data)
    {
		return $this->db->insert('data_sekolah', $data);
	}
	
	function insert_pembimbing($data)
    {
		return $this->db->insert('data_pembimbing', $data);
	}		

	function selectAllJurnal(){
		$this->db->select('*');
		$this->db->from('jurnal');
		$this->db->where('status',"Layak");
		$this->db->order_by('id_jurnal');
		
		//dikembalikan pada get
		return $this->db->get();
	}
	
	//lab section
	function selectAllLab(){
		$this->db->select('*');
		$this->db->from('laboratorium');		
		$this->db->order_by('id_lab');
		
		//dikembalikan pada get
		return $this->db->get();
	}

	function selectNamaLab(){
		$this->db->select('nama_lab');
		$this->db->from('laboratorium');						
		//dikembalikan pada get
		return $this->db->get();
	}
	
	function selectNamaLabById($idk){
		$this->db->select('nama_lab');
		$this->db->from('laboratorium');	
		$this->db->where('id_lab',$idk);	
		$query = $this->db->get();
		$row = $query->row();
		return $row->nama_lab;
	}
	
	function selectLabByKode($id){
		$this->db->select('*');
		$this->db->from('laboratorium');
		$this->db->where('id_lab',$id);
		return $this->db->get();
	}
		
	function getQuantitybyLabKode($id){
		$this->db->select('kapasitas_isi');
		$this->db->from('laboratorium');
		$this->db->where('id_lab',$id);
		$query =  $this->db->get();
		$row = $query->row();
		return $row->kapasitas_isi;
	}
	
	function insertPengajuan($data){
		$this->db->insert('data_pengajuan', $data);	
	}

	//fungsi login
	function get_akun($uname, $password)
	{
		$this->db->where('uname_user', $uname);
		$this->db->where('pwd_user', md5($password));
		$this->db->where('pengakuan',"Sah");
        $query = $this->db->get('user');
		return $query->result();
	}

	//jaga-jaga jika mau modif data diri, maka perlu get_byid
	function get_user_by_id($id)
	{
		$this->db->where('id_user', $id);
        $query = $this->db->get('user');
		return $query->result();
	}

	function get_jurnal_by_id($id)
	{
		$this->db->where('id_jurnal', $id);
        $query = $this->db->get('jurnal');
		return $query->result();
	}
	
	function updateProfil($id_jurnal, $jml)
	{
		$this->db->where('id_user',$id_jurnal);
		$this->db->update('user',$data);
	}
	
	function updateCapLab($id_jurnal, $jml)
	{
		$sql = "UPDATE laboratorium SET kapasitas_isi =  ? WHERE id_lab = ?";
		$this->db->query($sql, array($jml, $id_jurnal));		
	}

	function insert_user($data)
    {
		return $this->db->insert('user', $data);
	}

	function selectUserByKode($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user',$kdPetugas);
		return $this->db->get();
	}

	function selectJurnalByKode($kdPetugas)
	{
		$this->db->select('*');
		$this->db->from('jurnal');
		$this->db->where('id_jurnal',$kdPetugas);
		return $this->db->get();
	}

	function selectFileByKode($kdPetugas)
	{
		$this->db->select('alamat_file');
		$this->db->from('jurnal');
		$this->db->where('id_jurnal',$kdPetugas);
		return $this->db->get();
	}

	//with oagination
	function getData($awal, $akhir){
		$hasil = $this->db->get('jurnal',$awal,$akhir);
		return $hasil;
	}	

	function cari($keyword, $kategori)
	{
		if($kategori == 'author'){
			$this->db->select('*');
			$this->db->from('jurnal');
			$this->db->like('author',$keyword);
			return $this->db->get();	
		}
		else if($kategori == 'judul_jurnal'){
			$this->db->select('*');
			$this->db->from('jurnal');
			$this->db->like('judul_jurnal',$keyword);
			return $this->db->get();		
		}
		else if($kategori == 'keyword'){
			$this->db->select('*');
			$this->db->from('jurnal');
			$this->db->like('keyword',$keyword);
			return $this->db->get();			
		}
	}
	/*
	pertanyaan :
	1. data siswa sudah mencakup status penerimaan lab atau tidak?
	2. tiap lab perlu entitas sendiri atau ditambahkan juga peminatan lab di data siswa?
	3. kalau surat fomatnya gimana? apa .pdf aja atau gimana? surat cuma dipegang pembimbing dalam db?
	4. status itu terdiri dari ditolak di proses sama di terima. kalau ditolak gak bisa ngeakses lagi?
	5. setelah diterima ngapain aja hak pembimbing itu?
	*/
}
?>