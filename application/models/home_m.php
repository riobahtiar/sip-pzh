<?php
/**
 * File Model
 */
class Home_m extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function get_links_pt(){
        $query=$this->db->get_where('lembaga_pendidikan',array('tingkat'=>'universitas'));
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
    function get_links_sch(){
        $query=$this->db->get_where('lembaga_pendidikan',array('tingkat'=>'sekolah'));
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
	function get_links_pondok(){
        $query=$this->db->get_where('lembaga_pendidikan',array('tingkat'=>'pondok'));
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
function get_pengumuman($num, $offset){
    
        $query = $this->db->query('SELECT 
  pengumuman.id_pengumuman,
  pengumuman.judul_pengumuman,
  kategori.nama_kategori 
FROM
  simp.pengumuman 
  INNER JOIN simp.kategori 
    ON (
      pengumuman.id_kategori = kategori.id_kategori
    ) 
ORDER BY pengumuman.id_pengumuman DESC LIMIT $num, $offset');
        return $query->result();
    }


    function get_by_id($id){
        $this->db->where('nim',$id);
        $query=$this->db->get('mahasiswa');
        return $query->result();
    }
    function c_pengumuman($num, $offset){
        $this->db->order_by('id_pengumuman', 'ASC');
        $data = $this->db->get('pengumuman', $num, $offset);
        return $data->result();    
    }
    function c_kategori($num){
        $this->db->order_by('id_kategori', 'ASC');
        $data = $this->db->get('kategori', $num);
        return $data->result();    
    }
        function get_by_idkat($iid){
        $this->db->where('id_kategori',$iid);
        $query=$this->db->get('kategori');
        return $query->result();
    }
    public function get_child($id)
    {
       $data = array();
       $this->db->from('kabupaten');
       $this->db->where('induk',$id);
       $result = $this->db->get();
       foreach($result->result() as $row)
       {
          $data[$row->id] = $row->nama;
       }
       return $data;
    }
function select_pengumuman(){
        $konten=$this->db->query("SELECT * from pengumuman");
        if($konten->num_rows()>0){
            foreach ($konten ->result() as $row) {
                $data[]=$row;
            }
            return $data;
            }
        }

}