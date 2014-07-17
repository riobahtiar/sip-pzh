<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
   }
   public function index()
   {
      if($this->auth->is_logged_in() == false)
      {
         $this->login();
      }
      else
      {
         $this->template->set('title','Selamat Datang | SIPMP Pesantren Zainul Hasan Genggong');
         $this->template->load('admin/login');
      }
   }
   public function login()
   {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('email', 'Email', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');
      $this->form_validation->set_error_delimiters('<div class="loginmsg">', '</div>');
 
      if ($this->form_validation->run() == FALSE)
      {
      	 $data['title']="Selamat Datang Silahkan Login | SIPMP Pesantren Zainul Hasan Genggong";
         $this->load->view('admin/login',$data);
      }
      else
      {
         $email = $this->input->post('email');
         $password = $this->input->post('password');
         $success = $this->auth->do_login($email,$password);
         if($success)
         {
            // lemparkan ke halaman index user
   			$tingkat=$this->session->userdata('level');
   			if($tingkat=="1"){
               redirect('admin/dashboard_admin');
   			}elseif($tingkat=="2"){
   				redirect('admin/dashboard_pip');
   			}elseif($tingkat=="3"){
   				redirect('admin/dashboard_keamanan');
   			}elseif($tingkat=="4"){
               redirect('admin/dashboard_sekolah');
            }elseif($tingkat=="5"){
               redirect('admin/dashboard_walisantri');
               }else{
                  redirect('admin/login');
               }

         }else
         {
			$data['title']="Login Error | SIPMP Pesantren Zainul Hasan Genggong";
            $data['login_info'] = "Maaf, Email dan Password salah!, Hubungi Kami jika anda lupa kata sandi";
            $this->load->view('admin/login',$data);
         }
      }
   }
   function logout(){
      $cx1=$this->session->set_userdata('id_user');
      $cx2=$this->session->set_userdata('nama_lengkap');
      $cx3=$this->session->set_userdata('level');
      $this->session->unset_userdata($cx3);
      $this->session->unset_userdata($cx2);
      $this->session->unset_userdata($cx1);
      redirect('admin/login');
   }
   public function dashboard_admin()
   {  
      $this->auth->restrict();
      $data['title']="Halaman Administrator | SIPMP Pesantren Zainul Hasan Genggong";
	   $data['konten_view']='admin/dashboard/dashboard_admin';
		$this->load->view('admin/admin_view',$data);
   }
   public function dashboard_pip()
   {  
      $data['title']="Halaman Staff PIP | SIPMP Pesantren Zainul Hasan Genggong";
	   $data['konten_view']='admin/dashboard/dashboard_pip';
      $this->load->view('admin/admin_view',$data);  
   }
   public function dashboard_keamanan()
   {  
      $data['title']="Halaman Staff Keamanan| SIPMP Pesantren Zainul Hasan Genggong";
	   $data['konten_view']='admin/dashboard/dashboard_keamanan';
      $this->load->view('admin/admin_view',$data);
   }
   public function dashboard_sekolah()
   {
      $data['title']="Halaman Staff Sekolah | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/dashboard/dashboard_sekolah';
      $this->load->view('admin/admin_view_nosidebar',$data);
   }
   public function dashboard_walisantri()
   {  
      $data['title']="Halaman Staff Sekolah | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/dashboard/dashboard_admin';
      $this->load->view('admin/admin_view',$data);  
   }
   public function psb()
   {  
      $data['title']="PSB | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/psb/psb';
      $this->load->view('admin/admin_view',$data);  
   }
   public function psb_tambah()
   {  
      $data['title']="PSB | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/psb/psb_tambah';
      $this->load->view('admin/admin_view',$data);  
   }
   public function psb_edit()
   {  
      $data['title']="PSB | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/psb/psb_edit';
      $this->load->view('admin/admin_view',$data);  
   }
   public function pelanggaran()
   {  
      $data['title']="Manajemen Pelanggaran Santri | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/pelanggaran/pelanggaran';
      $this->load->view('admin/admin_view',$data);  
   }
   public function pelanggaran_tambah()
   {  
      $data['title']="Manajemen Pelanggaran Santri | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/pelanggaran/pelanggaran_tambah';
      $this->load->view('admin/admin_view',$data);  
   }
   public function pelanggaran_edit()
   {  
      $data['title']="Manajemen Pelanggaran Santri | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/pelanggaran/pelanggaran_edit';
      $this->load->view('admin/admin_view',$data);  
   }
   public function perizinan()
   {  
      $data['title']="Manajemen Perizinan Santri | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/perizinan/perizinan';
      $this->load->view('admin/admin_view',$data);  
   }
   public function perizinan_tambah()
   {  
      $data['title']="Manajemen Perizinan Santri | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/perizinan/perizinan_tambah';
      $this->load->view('admin/admin_view',$data);  
   }
   public function perizinan_edit()
   {  
      $data['title']="Manajemen Perizinan Santri | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/perizinan/perizinan_edit';
      $this->load->view('admin/admin_view',$data);  
   }
   public function pengumuman()
   {  
      $data['title']="Manajemen Pengumuman | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/pengumuman/pengumuman';
      $this->load->view('admin/admin_view',$data);  
   }
   public function pengumuman_tambah()
   {  
      $data['title']="Manajemen Pengumuman | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/pengumuman/pengumuman_tambah';
      $this->load->view('admin/admin_view',$data);  
   }
   public function pengumuman_edit()
   {  
      $data['title']="Manajemen Pengumuman | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/pengumuman/pengumuman_edit';
      $this->load->view('admin/admin_view',$data);  
   }
   public function lembaga()
   {  
      $data['title']="Manajemen Lembaga | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/lembaga/lembaga';
      $this->load->view('admin/admin_view',$data);  
   }
   public function lembaga_tambah()
   {  
      $data['title']="Manajemen Lembaga | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/lembaga/lembaga_tambah';
      $this->load->view('admin/admin_view',$data);  
   }
   public function lembaga_edit()
   {  
      $data['title']="Manajemen Lembaga | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/lembaga/lembaga_edit';
      $this->load->view('admin/admin_view',$data);  
   }
   public function user()
   {  
      $data['title']="Manajemen User | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/user/user';
      $this->load->view('admin/admin_view',$data);  
   }
   public function user_tambah()
   {  
      $data['title']="Manajemen User | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/user/user_tambah';
      $this->load->view('admin/admin_view',$data);  
   }
   public function user_edit()
   {  
      $data['title']="Manajemen User | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/user/user_edit';
      $this->load->view('admin/admin_view',$data);  
   }
   public function santri()
   {  
      $data['title']="Manajemen Data Santri | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/santri/santri';
      $this->load->view('admin/admin_view',$data);  
   }
   public function santri_tambah()
   {  
      $data['title']="Manajemen Data Santri | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/santri/santri_tambah';
      $this->load->view('admin/admin_view',$data);  
   }
   public function santri_edit()
   {  
      $data['title']="Manajemen Data Santri | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/santri/santri_edit';
      $this->load->view('admin/admin_view',$data);  
   }
   public function priode()
   {  
      $data['title']="Manajemen priode Daftar | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/priode/priode';
      $this->load->view('admin/admin_view',$data);  
   }
   public function priode_tambah()
   {  
      $data['title']="Manajemen priode Daftar | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/priode/priode_tambah';
      $this->load->view('admin/admin_view',$data);  
   }
   public function priode_edit()
   {  
      $data['title']="Manajemen priode Daftar | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/priode/priode_edit';
      $this->load->view('admin/admin_view',$data);  
   }      
   public function konfigurasi()
   {  
      $data['title']="Manajemen konfigurasi | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/konfigurasi/konfigurasi';
      $this->load->view('admin/admin_view',$data);  
   }
   public function laporan()
   {  
      $data['title']="Manajemen Laporan | SIPMP Pesantren Zainul Hasan Genggong";
      $data['konten_view']='admin/laporan/laporan';
      $this->load->view('admin/admin_view',$data);  
   } 
 


}