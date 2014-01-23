<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*  
 *  ----------| User License Agrement For This Software |----------
 *  - Software ini bersifat Gratis dan dapat digunakan untuk kepentingan Edukasi/Umum
 *  - Dilarang Mengkomersialkan Aplikasi ini tanpa izin tertulis dari author Software
 *  - Diperbolehkan Merubah Code/Design dari Aplikasi ini
 *  - Penggunaan dan Pendistribusian Software ini wajib mencantumkan file: license.txt
 *  - Author tidak bertanggung jawab atas resiko yang diakibatkan dari penggunaan software ini
 *  - Author dibebaskan dari segala tuntutan yang diakibatkan oleh penggunaan software ini
 *     
 *
 *     Copyright (c) 2013, Rio Bahtiar
 *     http://www.rio.my.id | akhibahtiar@gmail.com | lang: id(INDONESIA)
 *     DILARANG MENGHAPUS KOMENTAR LISENSI INI
 *  ----------| Copyright 2013 Author & EllisLab, Inc. |----------
 */

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
    }

    function index($id=NULL)
    {
        $data['homes'] = $this->home_m->get_pengumuman();
        $data['links_sch'] = $this->home_m->get_links_sch();
        $data['links_pt'] = $this->home_m->get_links_pt();
        
         

        $jml = $this->db->get('pengumuman');

        $config["base_url"] = base_url() . "home/index";

        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = 1;
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
        $data['query'] = $this->home_m->c_pengumuman($config['per_page'], $id);
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/konten',$data);
        $this->load->view('home/footer',$data);
    }


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */