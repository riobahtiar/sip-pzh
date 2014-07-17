<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
    }

    function index($id=NULL)
    {
        
        $data['links_sch'] = $this->home_m->get_links_sch();
        $data['links_pt'] = $this->home_m->get_links_pt();
		$data['links_pondok'] = $this->home_m->get_links_pondok();
        

        $jml = $this->db->get('pengumuman');

        $config["base_url"] = base_url() . "home/index";

        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = 5;
        $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul><!–pagination–>';
        
        $config['first_link'] = '&laquo; Awal';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Akhir &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = 'Selanjutnya &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&larr; Sebelumnya';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
         
        //buat pagination
        $data['halaman'] = $this->pagination->create_links();
        $data['homes'] = $this->home_m->c_pengumuman($config['per_page'], $id);
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/konten',$data);
        //$this->load->view('home/register');
        $this->load->view('home/footer',$data);
    }
public function halaman_ilang()
      { 
      $this->load->view('admin/admin_404');  
      }
public function tampilpengumuman()
      { 
        $data['select_pengumuman']=$this->db->get_where('pengumuman',array('id_pengumuman' =>$this->uri->segmen(3)));
        $this->load->view('home/tampilpengumuman',$data);
        $data['links_sch'] = $this->home_m->get_links_sch();
        $data['links_pt'] = $this->home_m->get_links_pt();
        $data['links_pondok'] = $this->home_m->get_links_pondok();  
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/register');
        $this->load->view('home/footer',$data);
      }
public function tentang_website()
      {  
        $data['links_sch'] = $this->home_m->get_links_sch();
        $data['links_pt'] = $this->home_m->get_links_pt();
        $data['links_pondok'] = $this->home_m->get_links_pondok();  
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/hubungi_kami');
        $this->load->view('home/widget');
        $this->load->view('home/footer',$data);
      }
public function santri_daftar()
      {  
           $this->load->library('form_validation');
    
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('warga_negara', 'Warga Negara', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'trim|required');
        $this->form_validation->set_rules('tahun_lulus', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('sekolah_asal', 'Sekolah Asal', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $data['links_sch'] = $this->home_m->get_links_sch();
        $data['links_pt'] = $this->home_m->get_links_pt();
        $data['links_pondok'] = $this->home_m->get_links_pondok();  
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/register');
        $this->load->view('home/footer',$data);
      }
public function santri_lengkapi_data()
      {  
        $data['links_sch'] = $this->home_m->get_links_sch();
        $data['links_pt'] = $this->home_m->get_links_pt();
        $data['links_pondok'] = $this->home_m->get_links_pondok();  
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/register');
        $this->load->view('home/footer',$data);
      }
public function santri_konfirmasi()
      {  
        $data['links_sch'] = $this->home_m->get_links_sch();
        $data['links_pt'] = $this->home_m->get_links_pt();
        $data['links_pondok'] = $this->home_m->get_links_pondok();  
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/register');
        $this->load->view('home/footer',$data);
      }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */