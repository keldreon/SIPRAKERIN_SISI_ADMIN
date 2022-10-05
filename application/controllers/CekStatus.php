 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CekStatus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html','security','date', 'string'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('userModel');        
    }

    public function index()
    {
        // get form input
        $username = $this->input->post("kode");//kode_pembimbing
        //$no_rek = $this->input->post("no_rek");//no_rekening?        
        //$nominal_koin = $this->input->post("nominal_koin");//nominal_koin
        //insert harga koin

        // form validation
        $this->form_validation->set_rules("kode", "Kode Pengajuan", "trim|required|xss_clean");               
        
        if ($this->form_validation->run() == FALSE)
        {
            // validation fail
            $this->load->view('V_topup');
        }
        else
        {
            // check for user credentials
            $uresult = $this->userModel->check_Pembimbing($username);
            if ($uresult > 0)
            {	
				$no_lab = $this->getNoLab($username);				
                $data['data_siswa'] = $this->userModel->selectSiswaByKode($username);
				$data['data_sekolah'] = 	$this->userModel->selectSekolahByKodeDaftar($username)->row();
				$data['data_pembimbing'] = 	$this->userModel->selectPembimbingByKode($username)->row();
				$data['dat_lab'] = 	$this->userModel->selectLabByKode($no_lab)->row();
                $this->load->view('V_statusDaftar', $data);
				//$this->load->view('V_statusDaftar', $data2);
            }
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Data Tidak Ditemukan.</div>');
                redirect('CekStatus/index');
            }
        }
    }

    //fungsi upload jurnal
        public function do_topup()
        {
            // get form input
            $username = $this->input->post("username");
            $nominal = $this->input->post("nominal");
            $tanggal_pembelian = $this->input->post("tanggal_pembelian");                

            // form validation
            $this->form_validation->set_rules("username", "username", "trim|required|xss_clean");
            $this->form_validation->set_rules("abstraksi", "abstraksi", "trim|required|xss_clean");
            $this->form_validation->set_rules("tanggal_pembelian", "tanggal_pembelian", "trim|required|xss_clean");                
                                                                    
            $kode = random_string('alnum', 25);
                        
            $data['pembeli_coin'] = $username;
            $data['kode'] = $kode;
            $data['nominal'] = $nominal;
            $data['tanggal_pembelian'] = $tanggal_pembelian;                        
                        
            $this->coinModel->insertTransaksi($data);   
            $sata['data'] = $this->coinModel->selectByPembeli($username)->row();

            $this->load->view('topup/V_topup_end', $sata);                
        }
		
		public function getNoLab($lab){
			$q1 = $this->userModel->selectKodeLabByKode($lab);
			return $q1;
		}
}
?>