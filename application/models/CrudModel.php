<?php 
 
class CrudModel extends CI_Model{
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    
    function cek_data($table,$where){		
		return $this->db->get_where($table,$where);
	}
    
    function select_kolom($kolom, $table, $where){
        $this->db->select($kolom);
        $query = $this->db->get_where($table, $where);
        return $query;

    }
    
    function viewgallery(){
        $table = 'gbf_gallery';
		return $this->db->get($table);
	}
    
    function viewdb($table, $where){
		return $this->db->get_where($table,$where);
	}
    
    function viewuser($table,$number,$offset){
        $where = array(
			'access' => '1',
			);
		return $query = $this->db->get_where($table, $where, $number,$offset)->result();	
	}
    
    function viewadmin(){
        $where = array(
			'access' => '0',
			);
        $table = 'gbf_user';
		return $this->db->get_where($table,$where);
	}
    
    function update_data($data,$table,$where){	
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    
    function delete_data($table, $where){
	   $this->db->where( $where);
	   $this->db->delete($table);
    }
    
    function data($table,$number,$offset){
		return $query = $this->db->get($table,$number,$offset)->result();		
	}
 
	function jumlah_data($table){
		return $this->db->get($table)->num_rows();
	}
    
    public function getHistory($table,$number,$offset,$where) {
        $this->db->where($where);
        $this->db->order_by("tanggal", "asc");
        return $query = $this->db->get($table, $number,$offset)->result();   
    }
    function search($keyword, $kolom, $table)
    {
        $this->db->like($kolom,$keyword);
        $query  =   $this->db->get($table);
        return $query->result();
    }
}