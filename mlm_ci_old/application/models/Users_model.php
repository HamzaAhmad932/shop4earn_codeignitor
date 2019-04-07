<?php
class Users_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
    public function direct_referals($user_id){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('referal_id',$user_id);
		$this->db->where('type','2');
		$query=$this->db->get();
		return $query->num_rows();
	}
	public function get_comission($user_id){
        $this->db->select('comission');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        $comission=$query->row()->comission;   
        return $comission;
    }
    public function booster_com($user_id){
        $this->db->select('booster_com');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        $booster_com=$query->row()->booster_com;   
        return $booster_com;
    }
	public function member_level($user_id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('referal_id',$user_id);
        $this->db->where('type','2');
        $toal_ref=$this->db->get();
        $ref_count= $toal_ref->num_rows();
		return $ref_count;      
    }
    public function get_level1_data(){
        $this->db->select('refer_for_level');
        $this->db->from('levels_settings');
        $this->db->where('id','1');
        $query = $this->db->get();
        $get_level1_data=$query->row()->refer_for_level;   
        return $get_level1_data;
    }
	public function get_level2_data(){
        $this->db->select('refer_for_level');
        $this->db->from('levels_settings');
        $this->db->where('id','2');
        $query = $this->db->get();
        $get_level2_data=$query->row()->refer_for_level;   
        return $get_level2_data;
    }    
    public function get_level3_data(){
        $this->db->select('refer_for_level');
        $this->db->from('levels_settings');
        $this->db->where('id','3');
        $query = $this->db->get();
        $get_level3_data=$query->row()->refer_for_level;   
        return $get_level3_data;
    }     
    public function get_level4_data(){
        $this->db->select('refer_for_level');
        $this->db->from('levels_settings');
        $this->db->where('id','4');
        $query = $this->db->get();
        $get_level4_data=$query->row()->refer_for_level;   
        return $get_level4_data;
    }    
    public function get_level5_data(){
        $this->db->select('refer_for_level');
        $this->db->from('levels_settings');
        $this->db->where('id','5');
        $query = $this->db->get();
        $get_level5_data=$query->row()->refer_for_level;   
        return $get_level5_data;
    }    
    public function get_level6_data(){
        $this->db->select('refer_for_level');
        $this->db->from('levels_settings');
        $this->db->where('id','6');
        $query = $this->db->get();
        $get_level6_data=$query->row()->refer_for_level;   
        return $get_level6_data;
    }    
    public function get_level7_data(){
        $this->db->select('refer_for_level');
        $this->db->from('levels_settings');
        $this->db->where('id','7');
        $query = $this->db->get();
        $get_level7_data=$query->row()->refer_for_level;   
        return $get_level7_data;
    }    
    public function get_level8_data(){
        $this->db->select('refer_for_level');
        $this->db->from('levels_settings');
        $this->db->where('id','8');
        $query = $this->db->get();
        $get_level8_data=$query->row()->refer_for_level;   
        return $get_level8_data;
    }    
    public function get_level9_data(){
        $this->db->select('refer_for_level');
        $this->db->from('levels_settings');
        $this->db->where('id','9');
        $query = $this->db->get();
        $get_level9_data=$query->row()->refer_for_level;   
        return $get_level9_data;
    }    
    public function get_level10_data(){
        $this->db->select('refer_for_level');
        $this->db->from('levels_settings');
        $this->db->where('id','10');
        $query = $this->db->get();
        $get_level10_data=$query->row()->refer_for_level;   
        return $get_level10_data;
    }    
    public function total_earn($user_id){
        $this->db->select_sum('comission');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $this->db->where('(type = 2) ');
        $query = $this->db->get();
        $base_share_amount=$query->row()->comission;
        $this->db->select_sum('booster_com');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $this->db->where('(type = 2) ');
        $query = $this->db->get();
        $boster_share_amount=$query->row()->booster_com;
        $total_earn = $base_share_amount + $boster_share_amount;
        return $total_earn;
    }
    public function chk_current_bal($user_id){
         $this->db->select_sum('comission');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $this->db->where('(type = 2) ');
        $query = $this->db->get();
        $base_share_amount=$query->row()->comission;
        $this->db->select_sum('booster_com');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $this->db->where('(type = 2) ');
        $query = $this->db->get();
        $boster_share_amount=$query->row()->booster_com;
        $chk_current_bal = $base_share_amount + $boster_share_amount;
        return $chk_current_bal;
    }
    public function insert_payment_request($data){
        $this->db->insert('pending_payments',$data);
    }
    public function get_pending_payments($user_id){
        $this->db->select('*');
        $this->db->from('pending_payments');
        $this->db->where('user_id',$user_id);
        $this->db->where('status=0');
        $query=$this->db->get();
        if($query->num_rows()){
            return $query->result();
        }else{
            return false;
        }
    }
    public function get_approved_payments($user_id){
        $this->db->select('*');
        $this->db->from('pending_payments');
        $this->db->where('user_id',$user_id);
        $this->db->where('status=1');
        $query=$this->db->get();
        if($query->num_rows()){
            return $query->result();
        }else{
            return false;
        }
    }
    public function insert_user_level($user_level_data){
        $this->db->insert('users_level',$user_level_data);
    }
    public function chk_user_level_exist($user_id,$cur_level){
        $this->db->select('*');
        $this->db->from('users_level');
        $this->db->where('user_id',$user_id);
        $this->db->where('cur_level',$cur_level);
        $query=$this->db->get();
        return $query->num_rows();
    }
    public function chk_none_level_exist($user_id,$none_level){
        $this->db->select('*');
        $this->db->from('users_level');
        $this->db->where('user_id',$user_id);
        $this->db->where('cur_level',$none_level);
        $query=$this->db->get();
        return $query->num_rows();
    }
    public function get_cur_user_level($user_id){
        $this->db->select('cur_level');
        $this->db->from('users_level');
        $this->db->where('user_id',$user_id);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        $get_cur_level=$query->row()->cur_level;   
        return $get_cur_level;
    }
    public function insert_none_user_level($none_level_data){
        $this->db->insert('users_level',$none_level_data);
    }
    public function chk_basic_level_exist($user_id,$basic_level){
        $this->db->select('*');
        $this->db->from('users_level');
        $this->db->where('user_id',$user_id);
        $this->db->where('cur_level',$basic_level);
        $query=$this->db->get();
        return $query->num_rows();
    }
    public function insert_basic_level($basic_level_data){
        $this->db->insert('users_level',$basic_level_data);
    }
    public function chk_st_level_exist($user_id,$st_level){
        $this->db->select('*');
        $this->db->from('users_level');
        $this->db->where('user_id',$user_id);
        $this->db->where('cur_level',$st_level);
        $query=$this->db->get();
        return $query->num_rows();
    }
    public function insert_standard_level($st_level_data){
        $this->db->insert('users_level',$st_level_data);
    }
    public function chk_silver_level_exist($user_id,$silver_level){
        $this->db->select('*');
        $this->db->from('users_level');
        $this->db->where('user_id',$user_id);
        $this->db->where('cur_level',$silver_level);
        $query=$this->db->get();
        return $query->num_rows();
    }
    public function insert_silver_level($silver_level_data){
        $this->db->insert('users_level',$silver_level_data);
    }
    public function chk_gold_level_exist($user_id,$gold_level){
        $this->db->select('*');
        $this->db->from('users_level');
        $this->db->where('user_id',$user_id);
        $this->db->where('cur_level',$gold_level);
        $query=$this->db->get();
        return $query->num_rows();
    }
    public function insert_gold_level($gold_level_data){
        $this->db->insert('users_level',$gold_level_data);
    }

}