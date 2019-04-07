<?php
class Slider_model extends CI_Model{
	public function __Construct(){
		parent::__Construct();
	}
 	public function insert_slider($data){
		$this->db->insert('slider',$data);
	}
	public function get_slider_data(){
		$q=$this->db->get('slider');
		return $q->result();
	}
	public function get_slider_detail_data($id){
		$this->db->where('id',$id);
		$r=$this->db->get("slider");
		return $r->result();
	}
	public function get_slider_delete($id){
		$this->db->where('id',$id);
		$this->db->delete("slider");
	}
	public function get_slider_update($data,$id){
		$this->db->where('id',$id);
		$this->db->update("slider",$data);
	}
 
 
	 
	 

	
}