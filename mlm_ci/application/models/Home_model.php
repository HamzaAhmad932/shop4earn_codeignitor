<?php
class Home_model extends CI_Model{
    public function __construct(){
            parent::__construct();
    }
    public function get_slider_data(){
            $q=$this->db->get('slider');
            return $q->result();
    }
    public function insertData($data){
        if($this->db->insert('users',$data))
        {
            // Code here after successful insert
            return true;   // to the controller
        }
        else{
            return false;
        }

    }
    public function updateData($user_id,$data){
        $this->db->where('user_id', $user_id);
        $this->db->update('users', $data);
    }
    public function insert_cart_data($data){
            $this->db->insert('card',$data);

    }
    public function login($username,$password){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('full_name',$username);
        $this->db->where('password',$password);
        $query=$this->db->get();
        if($query->row()){
                return $query->row();
        }else{
                return false;
        }
    }
    public function get_parent_id(){
        $this->db->select_max('parent_id');
        $this->db->from('users');
        $this->db->where("type", "1");
        $query=$this->db->get();
        $par_id = $query->row();
        $parent_id= $par_id->parent_id;
        return $parent_id;
    }
    public function get_user_parent_id($parent_id){
        $this->db->select('*');
            $this->db->from('users');
            $this->db->where('parent_id',$parent_id);
            $this->db->where('type !=1');
            $total_credit=$this->db->get();
            $total_count= $total_credit->num_rows();
            return $total_count;
    }
    public function get_count_parent_id($parent_id){
        $this->db->select('*');
            $this->db->from('users');
            $this->db->where('parent_id',$parent_id);
            $this->db->where('type !=1');
            $total_credit=$this->db->get();
            $total_count= $total_credit->num_rows();
            return $total_count;
    }
    public function get_referal_id($referal_id){
        $this->db->select('*');
            $this->db->from('users');
            $this->db->where('parent_id',$referal_id);
            $this->db->where('type !=1');
            $total_credit=$this->db->get();
            $total_count= $total_credit->num_rows();
            return $total_count;
    }
    public function select_min_parent_id($parent_id){
    $this->db->select("GROUP_CONCAT(user_id) as my_ids");
    $this->db->where("parent_id", $parent_id);
    $this->db->where("type !=1");
    $query = $this->db->get('users')->result_array();
    $my_ids     =   $query[0]['my_ids'];    
    $my_array   =   explode(',',$my_ids);  
    //2nd level
 	$this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$my_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $o_array   =   explode(',',$ids);
    //3rd level
 	$this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$o_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $third_array   =   explode(',',$ids);
        //4th level
 	$this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$third_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $fourth_array   =   explode(',',$ids);
            //5th level
 	$this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$fourth_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $fifth_array   =   explode(',',$ids);
        //6th level
 	$this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$fifth_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $sixth_array   =   explode(',',$ids);
            //7th level
 	$this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$sixth_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $seaven_array   =   explode(',',$ids);
    //8th level
    $this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$seaven_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $eight_array   =   explode(',',$ids);
    //9th level
    $this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$eight_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $ninth_array   =   explode(',',$ids);
    //10th level
    $this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$ninth_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $ten_array   =   explode(',',$ids);
    //11th level
    $this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$ten_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $eleven_array   =   explode(',',$ids);
    //12th level
    $this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$eleven_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $twelve_array   =   explode(',',$ids);
        //13th level
    $this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$twelve_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $thirteen_array   =   explode(',',$ids);
    $add_att = array_merge($my_array, $o_array,$third_array,$fourth_array,$fifth_array,$sixth_array,$seaven_array,$eight_array,$ninth_array,$ten_array,$eleven_array,$twelve_array,$thirteen_array);
    $return=array();
    foreach($add_att as $key => $id) {
        $this->db->select("*");
        $this->db->where("parent_id", $id);
        $this->db->where("type !=1");
        $query = $this->db->get('users')->num_rows();
         if(!is_array($id) &&  $query!=2){

     $return[]=$id;

    }
    }
    return $return;    
    }
    public function chk_referal_id($referal_id){
    $this->db->select("GROUP_CONCAT(user_id) as my_ids");
    $this->db->where("parent_id", $referal_id);
    $this->db->where("type !=1");
    $query = $this->db->get('users')->result_array();
    $my_ids     =   $query[0]['my_ids'];    
    $my_array   =   explode(',',$my_ids);  
    $this->db->select("GROUP_CONCAT(user_id) as ids");
    $this->db->where_in('parent_id',$my_array);
    $query = $this->db->get('users')->result_array();
    $ids     =   $query[0]['ids']; 
    $o_array   =   explode(',',$ids);
    $add_att = array_merge($my_array, $o_array);
    $return=array();
    foreach($add_att as $key => $id) {
    $this->db->select("*");
    $this->db->where("parent_id", $id);
    $this->db->where("type !=1");
    $query = $this->db->get('users')->num_rows();
     if(!is_array($id) &&  $query!=2){
    $return[]=$id;
    }
    }
    return $return;    
    } 
    public function get_user_id(){
            $this->db->select_max('user_id');
        $this->db->from('users');
        $this->db->where('user_id !=0');
        $query = $this->db->get();
        $ret = $query->row();
        $user_id= $ret->user_id;
        return $user_id;	 
    }
    public function get_products_data(){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where('status=1');
            $query=$this->db->get();
            if($query->num_rows()){
                    return $query->result();
            }else{
                    return false;
            }
    }
    public function get_product_detail($id){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where('id',$id);
            $query=$this->db->get();
            if($query->num_rows()){
                    return $query->result();
            }else{
                    return false;
            }
    }
    public function get_cart_data($user_id){
            $this->db->select('*');
            $this->db->from('card');
            $this->db->where('user_id',$user_id);
            $query=$this->db->get();
            if($query->num_rows()){
                    return $query->result();
            }else{
                    return false;
            }
    }
    public function get_payment_data($user_id){
            $this->db->select('*');
            $this->db->from('payment_method');
            $this->db->where('user_id',$user_id);
            $query=$this->db->get();
            if($query->num_rows()){
                    return $query->result();
            }else{
                    return false;
            }
    }
    public function get_user_data($user_id){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('id',$user_id);
            $query=$this->db->get();
            if($query->num_rows()){
                    return $query->result();
            }else{
                    return false;
            }
    }
    public function insert_shipping_data($data){
            $this->db->insert('shipping_address',$data);

    }	 
    public function insert_payment_data($data){
            $this->db->insert('payment_method',$data);

    }
    public function insert_confirm_order_data($data){
            $this->db->insert('confirm_orders',$data);

    }
    public function get_upline_users($user_id,$pid){
        $PV_for_DRF = $this->db->get_where('products',array('product_code'=>$pid))->result_array();
        $product_price=$PV_for_DRF[0]['basic_vol'];//PV of product
        // $product_price="1000";
        $this->db->select('refer_for_level'); 
        $this->db->from('levels_settings');   
        $level_set_query=$this->db->get()->result_array();
        $level_set_ten= implode ((array)$level_set_query['9']); 
        $level_set_ninth= implode ((array)$level_set_query['8']); 
        $level_set_eight= implode ((array)$level_set_query['7']); 
        $level_set_seven= implode ((array)$level_set_query['6']); 
        $level_set_six= implode ((array)$level_set_query['5']); 
        $level_set_five= implode ((array)$level_set_query['4']); 
        $level_set_four= implode ((array)$level_set_query['3']); 
        $level_set_three= implode ((array)$level_set_query['2']); 
        $level_set_two= implode ((array)$level_set_query['1']); 
        $level_set_one= implode ((array)$level_set_query['0']); 

        $this->db->select('basic'); 
        $this->db->from('comission_seting');   
        $query=$this->db->get()->result_array();
        $ten_com = implode ((array)$query['9']); 
        $ninth_com = implode ((array)$query['8']); 
        $eight_com = implode ((array)$query['7']); 
        $seven_com = implode ((array)$query['6']); 
        $six_com = implode ((array)$query['5']); 
        $five_com = implode ((array)$query['4']); 
        $four_com = implode ((array)$query['3']); 
        $three_com = implode ((array)$query['2']); 
        $two_com = implode ((array)$query['1']); 
        $one_com = implode ((array)$query['0']);  

        $this->db->select('parent_id');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $this->db->where('type','2'); 
        $query=$this->db->get();
        $level1_id = $query->row();
        $level1_id= $level1_id->parent_id;
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('referal_id',$level1_id);
        $this->db->where('type','2');
        $query=$this->db->get();
        $level_1_basic=$query->num_rows();
      if($level_1_basic >0)
      {
        if(($level_1_basic==$level_set_one) || ($level_1_basic==$level_set_two) || ($level_1_basic==$level_set_three) || ($level_1_basic==$level_set_four) || ($level_1_basic==$level_set_five) || ($level_1_basic > $level_set_five && $level_1_basic<=$level_set_six) ||
          ($level_1_basic > $level_set_six && $level_1_basic<=$level_set_seven) ||
          ($level_1_basic > $level_set_seven && $level_1_basic<=$level_set_eight) || 
          ($level_1_basic > $level_set_eight && $level_1_basic<=$level_set_ninth) || 
          ($level_1_basic > $level_set_ninth && $level_1_basic<=$level_set_ten))
        {
            $comission=$product_price * $ten_com/100;		 
            $this->db->set('comission', "comission + $comission", FALSE);
            $this->db->where('user_id', $level1_id);
            $this->db->where('type','2');              
            $this->db->update('users');
        }
        
      }
            //return $level1_id;
            //level 2  
            if($level1_id=='' || $level1_id=='2' || $level1_id=='3'){
                    return $level1_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level1_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level2_id = $query->row();
            $level2_id= $level2_id->parent_id;

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level2_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_2_basic=$query->num_rows();
            if($level_2_basic >0)
            {
                if(($level_2_basic==$level_set_one) || ($level_2_basic==$level_set_two) || ($level_2_basic==$level_set_three) || ($level_2_basic==$level_set_four) || ($level_2_basic==$level_set_five) || ($level_2_basic > $level_set_five && $level_2_basic<=$level_set_six) || ($level_2_basic > $level_set_six && $level_2_basic<=$level_set_seven) || ($level_2_basic > $level_set_seven && $level_2_basic<=$level_set_eight) || ($level_2_basic > $level_set_eight && $level_2_basic<=$level_set_ninth) || ($level_2_basic > $level_set_ninth && $level_2_basic<=$level_set_ten))
              {
                $comission=$product_price * $ninth_com/100;
                $this->db->set('comission', "comission + $comission", FALSE);		 
                $this->db->where('user_id', $level2_id);
                $this->db->where('type','2');              
                $this->db->update('users');
              } 
            }
            }
            //level 3  
            if($level2_id=='' || $level2_id=='2' || $level2_id=='3'){
                            return $level2_id;
                    }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level2_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level3_id = $query->row();
            $level3_id= $level3_id->parent_id;
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level3_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_3_basic=$query->num_rows();
            if($level_3_basic > 0)
           {
                if(($level_3_basic==$level_set_one) || ($level_3_basic==$level_set_two) || ($level_3_basic==$level_set_three) || ($level_3_basic==$level_set_four) || ($level_3_basic==$level_set_five) || ($level_3_basic > $level_set_five && $level_3_basic<=$level_set_six) || ($level_3_basic > $level_set_six && $level_3_basic<=$level_set_seven) || ($level_3_basic > $level_set_seven && $level_3_basic<=$level_set_eight) || ($level_3_basic > $level_set_eight && $level_3_basic<=$level_set_ninth) || ($level_3_basic > $level_set_ninth && $level_3_basic<=$level_set_ten))
              {
                $comission=$product_price * $eight_com/100;
                $this->db->set('comission', "comission + $comission", FALSE);	 
                $this->db->where('user_id', $level3_id);
                $this->db->where('type','2');              
                $this->db->update('users');
              }
           }
            }
            //level 4 
            if($level3_id=='' || $level3_id=='2' || $level3_id=='3'){
                    return $level3_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level3_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level4_id = $query->row();
            $level4_id= $level4_id->parent_id;
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level4_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_4_basic=$query->num_rows();
            if($level_4_basic > 0)
          {
            if(($level_4_basic==$level_set_one) || ($level_4_basic==$level_set_two) || ($level_4_basic==$level_set_three) || ($level_4_basic==$level_set_four) || ($level_4_basic==$level_set_five) || ($level_4_basic > $level_set_five && $level_4_basic<=$level_set_six) || ($level_4_basic > $level_set_six && $level_4_basic<=$level_set_seven) || ($level_4_basic > $level_set_seven && $level_4_basic<=$level_set_eight) || ($level_4_basic > $level_set_eight && $level_4_basic<=$level_set_ninth) || ($level_4_basic > $level_set_ninth && $level_4_basic<=$level_set_ten))
            {
            $comission=$product_price * $seven_com/100;
            $this->db->set('comission', "comission + $comission", FALSE);	 
            $this->db->where('user_id', $level4_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
        }
           //level 5 
            if($level4_id=='' || $level4_id=='2' || $level4_id=='3'){
            return $level4_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level4_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level5_id = $query->row();
            $level5_id= $level5_id->parent_id;
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level5_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_5_basic=$query->num_rows();
            if($level_5_basic >0)
          {
            if(($level_5_basic==$level_set_one) || ($level_5_basic==$level_set_two) || ($level_5_basic==$level_set_three) || ($level_5_basic==$level_set_four) || ($level_5_basic==$level_set_five) || ($level_5_basic > $level_set_five && $level_5_basic<=$level_set_six) || ($level_5_basic > $level_set_six && $level_5_basic<=$level_set_seven) || ($level_5_basic > $level_set_seven && $level_5_basic<=$level_set_eight) || ($level_5_basic > $level_set_eight && $level_5_basic<=$level_set_ninth) || ($level_5_basic > $level_set_ninth && $level_5_basic<=$level_set_ten))
            {
            $comission=$product_price * $six_com/100;
            $this->db->set('comission', "comission + $comission", FALSE);	 
            $this->db->where('user_id', $level5_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
        }
            //level 6
            if($level5_id=='' || $level5_id=='2' || $level5_id=='3'){
                    return $level5_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level5_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level6_id = $query->row();
            $level6_id= $level6_id->parent_id;
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level6_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_6_basic=$query->num_rows();
            if($level_6_basic >0)
          {
            if(($level_6_basic==$level_set_one) || ($level_6_basic==$level_set_two) || ($level_6_basic==$level_set_three) || ($level_6_basic==$level_set_four) || ($level_6_basic==$level_set_five) || ($level_6_basic > $level_set_five && $level_6_basic<=$level_set_six) || ($level_6_basic > $level_set_six && $level_6_basic<=$level_set_seven) || ($level_6_basic > $level_set_seven && $level_6_basic<=$level_set_eight) || ($level_6_basic > $level_set_eight && $level_6_basic<=$level_set_ninth) || ($level_6_basic > $level_set_ninth && $level_6_basic<=$level_set_ten)){
            $comission=$product_price * $five_com/100;
            $this->db->set('comission', "comission + $comission", FALSE);	 
            $this->db->where('user_id', $level6_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
    }
            //level 7
            if($level6_id=='' || $level6_id=='2' || $level6_id=='3'){
            return $level6_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level6_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level7_id = $query->row();
            $level7_id= $level7_id->parent_id;
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level7_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_7_basic=$query->num_rows();
            if($level_7_basic >0)
          {
            if(($level_7_basic==$level_set_one) || ($level_7_basic==$level_set_two) || ($level_7_basic==$level_set_three) || ($level_7_basic==$level_set_four) || ($level_7_basic==$level_set_five) || ($level_7_basic > $level_set_five && $level_7_basic<=$level_set_six) || ($level_7_basic > $level_set_six && $level_7_basic<=$level_set_seven) || ($level_7_basic > $level_set_seven && $level_7_basic<=$level_set_eight) || ($level_7_basic > $level_set_eight && $level_7_basic<=$level_set_ninth) || ($level_7_basic > $level_set_ninth && $level_7_basic<=$level_set_ten)){
            $comission=$product_price * $four_com/100;
            $this->db->set('comission', "comission + $comission", FALSE);	 
            $this->db->where('user_id', $level7_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
    }
            //level 8
            if($level7_id=='' || $level7_id=='2' || $level7_id=='3'){
            return $level7_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level7_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level8_id = $query->row();
            $level8_id= $level8_id->parent_id;
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level8_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_8_basic=$query->num_rows();
            if($level_8_basic >0)
          {
            if(($level_8_basic==$level_set_one) || ($level_8_basic==$level_set_two) || ($level_8_basic==$level_set_three) || ($level_8_basic==$level_set_four) || ($level_8_basic==$level_set_five) || ($level_8_basic > $level_set_five && $level_8_basic<=$level_set_six) || ($level_8_basic > $level_set_six && $level_8_basic<=$level_set_seven) || ($level_8_basic > $level_set_seven && $level_8_basic<=$level_set_eight) || ($level_8_basic > $level_set_eight && $level_8_basic<=$level_set_ninth) || ($level_8_basic > $level_set_ninth && $level_8_basic<=$level_set_ten)){
            $comission=$product_price * $three_com/100;
            $this->db->set('comission', "comission + $comission", FALSE);	 
            $this->db->where('user_id', $level8_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
    }
            //level 9
            if($level8_id=='' || $level8_id=='2' || $level8_id=='3'){
            return $level8_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level8_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level9_id = $query->row();
            $level9_id= $level9_id->parent_id;
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level9_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_9_basic=$query->num_rows();
            if($level_9_basic >0)
          {
            if(($level_9_basic==$level_set_one) || ($level_9_basic==$level_set_two) || ($level_9_basic==$level_set_three) || ($level_9_basic==$level_set_four) || ($level_9_basic==$level_set_five) || ($level_9_basic > $level_set_five && $level_9_basic<=$level_set_six) || ($level_9_basic > $level_set_six && $level_9_basic<=$level_set_seven) || ($level_9_basic > $level_set_seven && $level_9_basic<=$level_set_eight) || ($level_9_basic > $level_set_eight && $level_9_basic<=$level_set_ninth) || ($level_9_basic > $level_set_ninth && $level_9_basic<=$level_set_ten)){
            $comission=$product_price * $two_com/100;
            $this->db->set('comission', "comission + $comission", FALSE);		 
            $this->db->where('user_id', $level9_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
    }
            //level 10
            if($level9_id=='' || $level9_id=='2' || $level9_id=='3'){
                    return $level9_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level9_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level10_id = $query->row();
            $level10_id= $level10_id->parent_id;
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level10_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_10_basic=$query->num_rows();
           if($level_10_basic > 0)
          {
            if(($level_10_basic==$level_set_one) || ($level_10_basic==$level_set_two) || ($level_10_basic==$level_set_three) || ($level_10_basic==$level_set_four) || ($level_10_basic==$level_set_five) || ($level_10_basic > $level_set_five && $level_10_basic<=$level_set_six) || ($level_10_basic > $level_set_six && $level_10_basic<=$level_set_seven) || ($level_10_basic > $level_set_seven && $level_10_basic<=$level_set_eight) || ($level_10_basic > $level_set_eight && $level_10_basic<=$level_set_ninth) || ($level_10_basic > $level_set_ninth && $level_10_basic<=$level_set_ten)){
            $comission=$product_price * $one_com/100;
            $this->db->set('comission', "comission + $comission", FALSE);	 
            $this->db->where('user_id', $level10_id);
            $this->db->where('type','2');              
            $this->db->update('users'); 
            }
          }
        }
    }
        public function insert_boster($user_id,$pid){
            $PV_for_DRF = $this->db->get_where('products',array('product_code'=>$pid))->result_array();
            $booster_comission=$PV_for_DRF[0]['booster_vol'];//PV of product
        
            $this->db->select('refer_for_level'); 
	    $this->db->from('levels_settings');   
	    $level_set_query=$this->db->get()->result_array();
	    $level_set_ten= implode ((array)$level_set_query['9']); 
	    $level_set_ninth= implode ((array)$level_set_query['8']); 
	    $level_set_eight= implode ((array)$level_set_query['7']); 
	    $level_set_seven= implode ((array)$level_set_query['6']); 
	    $level_set_six= implode ((array)$level_set_query['5']); 
	    $level_set_five= implode ((array)$level_set_query['4']); 
	    $level_set_four= implode ((array)$level_set_query['3']); 
	    $level_set_three= implode ((array)$level_set_query['2']); 
	    $level_set_two= implode ((array)$level_set_query['1']); 
	     
	    //return $level_set_two;
		$this->db->select('standard'); 
	    $this->db->from('comission_seting');   
	    $st_query=$this->db->get()->result_array();
	    $st_ten= implode ((array)$st_query['9']); 
	    $st_ninth= implode ((array)$st_query['8']); 
	    $st_eight= implode ((array)$st_query['7']); 
	    $st_seven= implode ((array)$st_query['6']); 
	    $st_six= implode ((array)$st_query['5']); 
	    $st_five= implode ((array)$st_query['4']); 
	    $st_four= implode ((array)$st_query['3']); 
	    $st_three= implode ((array)$st_query['2']); 
	    $st_two= implode ((array)$st_query['1']); 
	    $st_one= implode ((array)$st_query['0']); 

	    $this->db->select('silver'); 
	    $this->db->from('comission_seting');   
	    $silver_query=$this->db->get()->result_array();
	    $silver_ten= implode ((array)$silver_query['9']); 
	    $silver_ninth= implode ((array)$silver_query['8']); 
	    $silver_eight= implode ((array)$silver_query['7']); 
	    $silver_seven= implode ((array)$silver_query['6']); 
	    $silver_six= implode ((array)$silver_query['5']); 
	    $silver_five= implode ((array)$silver_query['4']); 
	    $silver_four= implode ((array)$silver_query['3']); 
	    $silver_three= implode ((array)$silver_query['2']); 
	    $silver_two= implode ((array)$silver_query['1']); 
	    $silver_one= implode ((array)$silver_query['0']); 
	    //Gold
	    $this->db->select('gold'); 
	    $this->db->from('comission_seting');   
	    $gold_query=$this->db->get()->result_array();
	    $gold_ten= implode ((array)$gold_query['9']); 
	    $gold_ninth= implode ((array)$gold_query['8']); 
	    $gold_eight= implode ((array)$gold_query['7']); 
	    $gold_seven= implode ((array)$gold_query['6']); 
	    $gold_six= implode ((array)$gold_query['5']); 
	    $gold_five= implode ((array)$gold_query['4']); 
	    $gold_four= implode ((array)$gold_query['3']); 
	    $gold_three= implode ((array)$gold_query['2']); 
	    $gold_two= implode ((array)$gold_query['1']); 
	    $gold_one= implode ((array)$gold_query['0']); 
	    //Diamond
	    $this->db->select('diamond'); 
	    $this->db->from('comission_seting');   
	    $diamond_query=$this->db->get()->result_array();
	    $diamond_ten= implode ((array)$diamond_query['9']); 
	    $diamond_ninth= implode ((array)$diamond_query['8']); 
	    $diamond_eight= implode ((array)$diamond_query['7']); 
	    $diamond_seven= implode ((array)$diamond_query['6']); 
	    $diamond_six= implode ((array)$diamond_query['5']); 
	    $diamond_five= implode ((array)$diamond_query['4']); 
	    $diamond_four= implode ((array)$diamond_query['3']); 
	    $diamond_three= implode ((array)$diamond_query['2']); 
	    $diamond_two= implode ((array)$diamond_query['1']); 
	    $diamond_one= implode ((array)$diamond_query['0']); 

            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$user_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level1_id = $query->row();
            $level1_id= $level1_id->parent_id;
	    // $level1_id;
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level1_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_1_boster=$query->num_rows();
            if($level_1_boster > 0)
          {
            //return $level1_id;
            if(($level_1_boster==$level_set_two) || ($level_1_boster==$level_set_three) || ($level_1_boster==$level_set_four) || ($level_1_boster==$level_set_five) || ($level_1_boster > $level_set_five && $level_1_boster<=$level_set_six) || ($level_1_boster > $level_set_six && $level_1_boster<=$level_set_seven) || ($level_1_boster > $level_set_seven && $level_1_boster<=$level_set_eight) || ($level_1_boster > $level_set_eight && $level_1_boster<=$level_set_ninth) || ($level_1_boster > $level_set_ninth && $level_1_boster<=$level_set_ten))
            {
            $comission=$booster_comission * $st_ten/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level1_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            if (($level_1_boster==$level_set_three) || ($level_1_boster==$level_set_four) || ($level_1_boster==$level_set_five) || ($level_1_boster > $level_set_five && $level_1_boster<=$level_set_six) || ($level_1_boster > $level_set_six && $level_1_boster<=$level_set_seven) || ($level_1_boster > $level_set_seven && $level_1_boster<=$level_set_eight) || ($level_1_boster > $level_set_eight && $level_1_boster<=$level_set_ninth) || ($level_1_boster > $level_set_ninth && $level_1_boster<=$level_set_ten)) {
            $comission=$booster_comission * $silver_ten/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level1_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            if (($level_1_boster==$level_set_four) || ($level_1_boster==$level_set_five) || ($level_1_boster > $level_set_five && $level_1_boster<=$level_set_six) || ($level_1_boster > $level_set_six && $level_1_boster<=$level_set_seven) || ($level_1_boster > $level_set_seven && $level_1_boster<=$level_set_eight) || ($level_1_boster > $level_set_eight && $level_1_boster<=$level_set_ninth) || ($level_1_boster > $level_set_ninth && $level_1_boster<=$level_set_ten)) {
            $comission=$booster_comission * $gold_ten/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level1_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            if (($level_1_boster==$level_set_five) || ($level_1_boster > $level_set_five && $level_1_boster<=$level_set_six) || ($level_1_boster > $level_set_six && $level_1_boster<=$level_set_seven) || ($level_1_boster > $level_set_seven && $level_1_boster<=$level_set_eight) || ($level_1_boster > $level_set_ninth && $level_1_boster<=$level_set_ninth) || ($level_1_boster > $level_set_ninth && $level_1_boster<=$level_set_ten)) {
            $comission=$booster_comission * $diamond_ten/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level1_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
            //return $level1_id;
            //level 2  
            if($level1_id=='' ||  $level1_id=='2' || $level1_id=='3'){
                return $level1_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level1_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level2_id = $query->row();
            $level2_id= $level2_id->parent_id;

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level2_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_2_boster=$query->num_rows();
            if($level_2_boster > 0)
          {
            if(($level_2_boster==$level_set_two) || ($level_2_boster==$level_set_three) || ($level_2_boster==$level_set_four) || ($level_2_boster==$level_set_five) || ($level_2_boster > $level_set_five && $level_2_boster<=$level_set_six) || ($level_2_boster > $level_set_six && $level_2_boster<=$level_set_seven) || ($level_2_boster > $level_set_seven && $level_2_boster<=$level_set_eight) || ($level_2_boster > $level_set_eight && $level_2_boster<=$level_set_ninth) || ($level_2_boster > $level_set_ninth && $level_2_boster<=$level_set_ten)){

            $comission=$booster_comission * $st_ninth/100;
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 	 
            $this->db->where('user_id', $level2_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            if (($level_2_boster==$level_set_three) || ($level_2_boster==$level_set_four) || ($level_2_boster==$level_set_five) || ($level_2_boster > $level_set_five && $level_2_boster<=$level_set_six) || ($level_2_boster > $level_set_six && $level_2_boster<=$level_set_seven) || ($level_2_boster > $level_set_seven && $level_2_boster<=$level_set_eight) || ($level_2_boster > $level_set_eight && $level_2_boster<=$level_set_ninth) || ($level_2_boster > $level_set_ninth && $level_2_boster<=$level_set_ten)) {
            $comission=$booster_comission * $silver_ninth/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level2_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //gold
            if (($level_2_boster==$level_set_four) || ($level_2_boster==$level_set_five) || ($level_2_boster > $level_set_five && $level_2_boster<=$level_set_six) || ($level_2_boster > $level_set_six && $level_2_boster<=$level_set_seven) || ($level_2_boster > $level_set_seven && $level_2_boster<=$level_set_eight) || ($level_2_boster > $level_set_eight && $level_2_boster<=$level_set_ninth) || ($level_2_boster > $level_set_ninth && $level_2_boster<=$level_set_ten)) {
            $comission=$booster_comission * $gold_ninth/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level2_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //diamond
            if (($level_2_boster==$level_set_five) || ($level_2_boster > $level_set_five && $level_2_boster<=$level_set_six) || ($level_2_boster > $level_set_six && $level_2_boster<=$level_set_seven) || ($level_2_boster > $level_set_seven && $level_2_boster<=$level_set_eight) || ($level_2_boster > $level_set_eight && $level_2_boster<=$level_set_ninth) || ($level_2_boster > $level_set_ninth && $level_2_boster<=$level_set_ten)) {
            $comission=$booster_comission * $diamond_ninth/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level2_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
            
            }
            //level 3  
            if($level2_id=='' ||  $level2_id=='2' || $level2_id=='3'){
                    return $level2_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level2_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level3_id = $query->row();
            $level3_id= $level3_id->parent_id;

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level3_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_3_boster=$query->num_rows();
            if($level_3_boster >0)
          {
            if(($level_3_boster==$level_set_two) || ($level_3_boster==$level_set_three) || ($level_3_boster==$level_set_four) || ($level_3_boster==$level_set_five) || ($level_3_boster > $level_set_five && $level_3_boster<=$level_set_six) || ($level_3_boster > $level_set_six && $level_3_boster<=$level_set_seven) || ($level_3_boster > $level_set_seven && $level_3_boster<=$level_set_eight) || ($level_3_boster >$level_set_eight && $level_3_boster<=$level_set_ninth) || ($level_3_boster > $level_set_ninth && $level_3_boster<=$level_set_ten)){

            $comission=$booster_comission * $st_eight/100;
            //return $comission;
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 	 
            $this->db->where('user_id', $level3_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            if (($level_3_boster==$level_set_three) || ($level_3_boster==$level_set_four) || ($level_3_boster==$level_set_five) || ($level_3_boster > $level_set_five && $level_3_boster<=$level_set_six) || ($level_3_boster > $level_set_six && $level_3_boster<=$level_set_seven) || ($level_3_boster > $level_set_seven && $level_3_boster<=$level_set_eight) || ($level_3_boster > $level_set_eight && $level_3_boster<=$level_set_ninth) || ($level_3_boster > $level_set_ninth && $level_3_boster<=$level_set_ten)) {
            $comission=$booster_comission * $silver_eight/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level3_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //gold
            if (($level_3_boster==$level_set_four) || ($level_3_boster==$level_set_five) || ($level_3_boster > $level_set_five && $level_3_boster<=$level_set_six) || ($level_3_boster > $level_set_six && $level_3_boster<=$level_set_seven) || ($level_3_boster > $level_set_seven && $level_3_boster<=$level_set_eight) || ($level_3_boster > $level_set_eight && $level_3_boster<=$level_set_ninth) || ($level_3_boster > $level_set_ninth && $level_3_boster<=$level_set_ten)) {
            $comission=$booster_comission * $gold_eight/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level3_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //diamond
            if (($level_3_boster==$level_set_five) || ($level_3_boster > $level_set_five && $level_3_boster<=$level_set_six) || ($level_3_boster > $level_set_six && $level_3_boster<=$level_set_seven) || ($level_3_boster > $level_set_seven && $level_3_boster<=$level_set_eight) || ($level_3_boster > $level_set_eight && $level_3_boster<=$level_set_ninth) || ($level_3_boster > $level_set_ninth && $level_3_boster<=$level_set_ten)) {
            $comission=$booster_comission * $diamond_eight/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level3_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
            
            }
            //level 4  
            if($level3_id=='' ||  $level3_id=='2' || $level3_id=='3'){
                    return $level3_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level3_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level4_id = $query->row();
            $level4_id= $level4_id->parent_id;

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level4_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_4_boster=$query->num_rows();
            if($level_4_boster >0)
          {
            if(($level_4_boster==$level_set_two) || ($level_4_boster==$level_set_three) || ($level_4_boster==$level_set_four) || ($level_4_boster==$level_set_five) || ($level_4_boster > $level_set_five && $level_4_boster<=$level_set_six) || ($level_4_boster > $level_set_six && $level_4_boster<=$level_set_seven) || ($level_4_boster > $level_set_seven && $level_4_boster<=$level_set_eight) || ($level_4_boster > $level_set_eight && $level_4_boster<=$level_set_ninth) || ($level_4_boster > $level_set_ninth && $level_4_boster<=$level_set_ten)){

            $comission=$booster_comission * $st_seven/100;
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 		 
            $this->db->where('user_id', $level4_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            if (($level_4_boster==$level_set_three) || ($level_4_boster==$level_set_four) || ($level_4_boster==$level_set_five) || ($level_4_boster > $level_set_five && $level_4_boster<=$level_set_six) || ($level_4_boster > $level_set_six && $level_4_boster<=$level_set_seven) || ($level_4_boster > $level_set_seven && $level_4_boster<=$level_set_eight) || ($level_4_boster > $level_set_eight && $level_4_boster<=$level_set_ninth) || ($level_4_boster > $level_set_ninth && $level_4_boster<=$level_set_ten)) {
            $comission=$booster_comission * $silver_seven/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level4_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //gold
            if (($level_4_boster==$level_set_four) || ($level_4_boster==$level_set_five) || ($level_4_boster > $level_set_five && $level_4_boster<=$level_set_six) || ($level_4_boster > $level_set_six && $level_4_boster<=$level_set_seven) || ($level_4_boster > $level_set_seven && $level_4_boster<=$level_set_eight) || ($level_4_boster > $level_set_eight && $level_4_boster<=$level_set_ninth) || ($level_4_boster > $level_set_ninth && $level_4_boster<=$level_set_ten)) {
            $comission=$booster_comission * $gold_seven/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level4_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //diamond
            if (($level_4_boster==$level_set_five) || ($level_4_boster > $level_set_five && $level_4_boster<=$level_set_six) || ($level_4_boster > $level_set_six && $level_4_boster<=$level_set_seven) || ($level_4_boster > $level_set_seven && $level_4_boster<=$level_set_eight) || ($level_4_boster > $level_set_eight && $level_4_boster<=$level_set_ninth) || ($level_4_boster > $level_set_ninth && $level_4_boster<=$level_set_ten)) {
            $comission=$booster_comission * $diamond_seven/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level4_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
            
            }
            
            //level 5  
            if($level4_id=='' ||  $level4_id=='2' || $level4_id=='3'){
                    return $level4_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level4_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level5_id = $query->row();
            $level5_id= $level5_id->parent_id;

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level5_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_5_boster=$query->num_rows();
            if($level_5_boster >0)
          {
            if(($level_5_boster==$level_set_two) || ($level_5_boster==$level_set_three) || ($level_5_boster==$level_set_four) || ($level_5_boster==$level_set_five) || ($level_5_boster > $level_set_five && $level_5_boster<=$level_set_six) || ($level_5_boster > $level_set_six && $level_5_boster<=$level_set_seven) || ($level_5_boster > $level_set_seven && $level_5_boster<=$level_set_eight) || ($level_5_boster > $level_set_eight && $level_5_boster<=$level_set_ninth) || ($level_5_boster > $level_set_ninth && $level_5_boster<=$level_set_ten)){

            $comission=$booster_comission * $st_six/100;
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 	 
            $this->db->where('user_id', $level5_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            if (($level_5_boster==$level_set_three) || ($level_5_boster==$level_set_four) || ($level_5_boster==$level_set_five) || ($level_5_boster > $level_set_five && $level_5_boster<=$level_set_six) || ($level_5_boster > $level_set_six && $level_5_boster<=$level_set_seven) || ($level_5_boster > $level_set_seven && $level_5_boster<=$level_set_eight) || ($level_5_boster > $level_set_eight && $level_5_boster<=$level_set_ninth) || ($level_5_boster > $level_set_ninth && $level_5_boster<=$level_set_ten)) {
            $comission=$booster_comission * $silver_six/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level5_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //gold
            if (($level_5_boster==$level_set_four) || ($level_5_boster==$level_set_five) || ($level_5_boster > $level_set_five && $level_5_boster<=$level_set_six) || ($level_5_boster > $level_set_six && $level_5_boster<=$level_set_seven) || ($level_5_boster > $level_set_seven && $level_5_boster<=$level_set_eight) || ($level_5_boster > $level_set_eight && $level_5_boster<=$level_set_ninth) || ($level_5_boster > $level_set_ninth && $level_5_boster<=$level_set_ten)) {
            $comission=$booster_comission * $gold_six/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level5_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //diamond
            if (($level_5_boster==$level_set_five) || ($level_5_boster > $level_set_five && $level_5_boster<=$level_set_six) || ($level_5_boster > $level_set_six && $level_5_boster<=$level_set_seven) || ($level_5_boster > $level_set_seven && $level_5_boster<=$level_set_eight) || ($level_5_boster > $level_set_eight && $level_5_boster<=$level_set_ninth) || ($level_5_boster > $level_set_ninth && $level_5_boster<=$level_set_ten)) {
            $comission=$booster_comission * $diamond_six/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level5_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
            
            }
            //level 6  
            if($level5_id=='' ||  $level5_id=='2' || $level5_id=='3'){
                    return $level5_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level5_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level6_id = $query->row();
            $level6_id= $level6_id->parent_id;

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level6_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_6_boster=$query->num_rows();
            if($level_6_boster >0)
         {
            if(($level_6_boster==$level_set_two) || ($level_6_boster==$level_set_three) || ($level_6_boster==$level_set_four) || ($level_6_boster==$level_set_five) || ($level_6_boster > $level_set_five && $level_6_boster<=$level_set_six) || ($level_6_boster > $level_set_six && $level_6_boster<=$level_set_seven) || ($level_6_boster > $level_set_seven && $level_6_boster<=$level_set_eight) || ($level_6_boster > $level_set_eight && $level_6_boster<=$level_set_ninth) || ($level_6_boster > $level_set_ninth && $level_6_boster<=$level_set_ten)){

            $comission=$booster_comission * $st_five/100;
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 	 
            $this->db->where('user_id', $level6_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            if (($level_6_boster==$level_set_three) || ($level_6_boster==$level_set_four) || ($level_6_boster==$level_set_five) || ($level_6_boster > $level_set_five && $level_6_boster<=$level_set_six) || ($level_6_boster > $level_set_six && $level_6_boster<=$level_set_seven) || ($level_6_boster > $level_set_seven && $level_6_boster<=$level_set_eight) || ($level_6_boster > $level_set_eight && $level_6_boster<=$level_set_ninth) || ($level_6_boster > $level_set_ninth && $level_6_boster<=$level_set_ten)) {
            $comission=$booster_comission * $silver_five/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level6_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //gold
            if (($level_6_boster==$level_set_four) || ($level_6_boster==$level_set_five) || ($level_6_boster > $level_set_five && $level_6_boster<=$level_set_six) || ($level_6_boster > $level_set_six && $level_6_boster<=$level_set_seven) || ($level_6_boster > $level_set_seven && $level_6_boster<=$level_set_eight) || ($level_6_boster > $level_set_eight && $level_6_boster<=$level_set_ninth) || ($level_6_boster > $level_set_ninth && $level_6_boster<=$level_set_ten)) {
            $comission=$booster_comission * $gold_five/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level6_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //diamond
            if (($level_6_boster==$level_set_five) || ($level_6_boster > $level_set_five && $level_6_boster<=$level_set_six) || ($level_6_boster > $level_set_six && $level_6_boster<=$level_set_seven) || ($level_6_boster > $level_set_seven && $level_6_boster<=$level_set_eight) || ($level_6_boster > $level_set_eight && $level_6_boster<=$level_set_ninth) || ($level_6_boster > $level_set_ninth && $level_6_boster<=$level_set_ten)) {
            $comission=$booster_comission * $diamond_five/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level6_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
         }
            
            }
            //level 7 
            if($level6_id=='' ||  $level6_id=='2' || $level6_id=='3'){
                    return $level6_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level6_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level7_id = $query->row();
            $level7_id= $level7_id->parent_id;

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level7_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_7_boster=$query->num_rows();
            if($level_7_boster >0)
         {
            if(($level_7_boster==$level_set_two) || ($level_7_boster==$level_set_three) || ($level_7_boster==$level_set_four) || ($level_7_boster==$level_set_five) || ($level_7_boster > $level_set_five && $level_7_boster<=$level_set_six) || ($level_7_boster > $level_set_six && $level_7_boster<=$level_set_seven) || ($level_7_boster > $level_set_seven && $level_7_boster<=$level_set_eight) || ($level_7_boster > $level_set_eight && $level_7_boster<=$level_set_ninth) || ($level_7_boster > $level_set_ninth && $level_7_boster<=$level_set_ten)){

            $comission=$booster_comission * $st_four/100;
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 	 
            $this->db->where('user_id', $level7_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            if (($level_7_boster==$level_set_three) || ($level_7_boster==$level_set_four) || ($level_7_boster==$level_set_five) || ($level_7_boster > $level_set_five && $level_7_boster<=$level_set_six) || ($level_7_boster > $level_set_six && $level_7_boster<=$level_set_seven) || ($level_7_boster > $level_set_seven && $level_7_boster<=$level_set_eight) || ($level_7_boster > $level_set_eight && $level_7_boster<=$level_set_ninth) || ($level_7_boster > $level_set_ninth && $level_7_boster<=$level_set_ten)) {
            $comission=$booster_comission * $silver_four/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level7_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //gold
            if (($level_7_boster==$level_set_four) || ($level_7_boster==$level_set_five) || ($level_7_boster > $level_set_five && $level_7_boster<=$level_set_six) || ($level_7_boster > $level_set_six && $level_7_boster<=$level_set_seven) || ($level_7_boster > $level_set_seven && $level_7_boster<=$level_set_eight) || ($level_7_boster > $level_set_eight && $level_7_boster<=$level_set_ninth) || ($level_7_boster > $level_set_ninth && $level_7_boster<=$level_set_ten)) {
            $comission=$booster_comission * $gold_four/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level7_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //diamond
            if (($level_7_boster==$level_set_five) || ($level_7_boster > $level_set_five && $level_7_boster<=$level_set_six) || ($level_7_boster > $level_set_six && $level_7_boster<=$level_set_seven) || ($level_7_boster > $level_set_seven && $level_7_boster<=$level_set_eight) || ($level_7_boster > $level_set_eight && $level_7_boster<=$level_set_ninth) || ($level_7_boster > $level_set_ninth && $level_7_boster<=$level_set_ten)) {
            $comission=$booster_comission * $diamond_four/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level7_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
         }
            
            }
		//level 8  
            if($level7_id=='' ||  $level7_id=='2' || $level7_id=='3'){
            return $level7_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level7_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level8_id = $query->row();
            $level8_id= $level8_id->parent_id;

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level8_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_8_boster=$query->num_rows();
            if($level_8_boster >0)
         {
            if(($level_8_boster==$level_set_two) || ($level_8_boster==$level_set_three) || ($level_8_boster==$level_set_four) || ($level_8_boster==$level_set_five) || ($level_8_boster > $level_set_five && $level_8_boster<=$level_set_six) || ($level_8_boster > $level_set_six && $level_8_boster<=$level_set_seven) || ($level_8_boster > $level_set_seven && $level_8_boster<=$level_set_eight) || ($level_8_boster > $level_set_eight && $level_8_boster<=$level_set_ninth) || ($level_8_boster > $level_set_ninth && $level_8_boster<=$level_set_ten)){

            $comission=$booster_comission * $st_three/100;
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 	 
            $this->db->where('user_id', $level8_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            if (($level_8_boster==$level_set_three) || ($level_8_boster==$level_set_four) || ($level_8_boster==$level_set_five) || ($level_8_boster > $level_set_five && $level_8_boster<=$level_set_six) || ($level_8_boster > $level_set_six && $level_8_boster<=$level_set_seven) || ($level_8_boster > $level_set_seven && $level_8_boster<=$level_set_eight) || ($level_8_boster > $level_set_eight && $level_8_boster<=$level_set_ninth) || ($level_8_boster > $level_set_ninth && $level_8_boster<=$level_set_ten)) {
            $comission=$booster_comission * $silver_three/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level8_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //gold
            if (($level_8_boster==$level_set_four) || ($level_8_boster==$level_set_five) || ($level_8_boster > $level_set_five && $level_8_boster<=$level_set_six) || ($level_8_boster > $level_set_six && $level_8_boster<=$level_set_seven) || ($level_8_boster > $level_set_seven && $level_8_boster<=$level_set_eight) || ($level_8_boster > $level_set_eight && $level_8_boster<=$level_set_ninth) || ($level_8_boster > $level_set_ninth && $level_8_boster<=$level_set_ten)) {
            $comission=$booster_comission * $gold_three/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level8_id);
            $this->db->where('type','2');              
            $this->db->update('users');
                    }
            //diamond
            if (($level_8_boster==$level_set_five) || ($level_8_boster > $level_set_five && $level_8_boster<=$level_set_six) || ($level_8_boster > $level_set_six && $level_8_boster<=$level_set_seven) || ($level_8_boster > $level_set_seven && $level_8_boster<=$level_set_eight) || ($level_8_boster > $level_set_eight && $level_8_boster<=$level_set_ninth) || ($level_8_boster > $level_set_ninth && $level_8_boster<=$level_set_ten)) {
            $comission=$booster_comission * $diamond_three/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level8_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            
          }
            }
            //level 9  
            if($level8_id=='' ||  $level8_id=='2' || $level8_id=='3'){
                    return $level8_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level8_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level9_id = $query->row();
	    $level9_id= $level9_id->parent_id;

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level9_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_9_boster=$query->num_rows();
            if($level_9_boster >0)
          {
            if(($level_9_boster==$level_set_two) || ($level_9_boster==$level_set_three) || ($level_9_boster==$level_set_four) || ($level_9_boster==$level_set_five) || ($level_9_boster > $level_set_five && $level_9_boster<=$level_set_six) || ($level_9_boster > $level_set_six && $level_9_boster<=$level_set_seven) || ($level_9_boster > $level_set_seven && $level_9_boster<=$level_set_eight) || ($level_9_boster > $level_set_eight && $level_9_boster<=$level_set_ninth) || ($level_9_boster > $level_set_ninth && $level_9_boster<=$level_set_ten)){

            $comission=$booster_comission * $st_two/100;
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 	 
            $this->db->where('user_id', $level9_id);
            $this->db->where('type','2');              
            $this->db->update('users');
                }
            if (($level_9_boster==$level_set_three) || ($level_9_boster==$level_set_four) || ($level_9_boster==$level_set_five) || ($level_9_boster > $level_set_five && $level_9_boster<=$level_set_six) || ($level_9_boster > $level_set_six && $level_9_boster<=$level_set_seven) || ($level_9_boster > $level_set_seven && $level_9_boster<=$level_set_eight) || ($level_9_boster > $level_set_eight && $level_9_boster<=$level_set_ninth) || ($level_9_boster > $level_set_ninth && $level_9_boster<=$level_set_ten)) {
            $comission=$booster_comission * $silver_two/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level9_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //gold
            if (($level_9_boster==$level_set_four) || ($level_9_boster==$level_set_five) || ($level_9_boster > $level_set_five && $level_9_boster<=$level_set_six) || ($level_9_boster > $level_set_six && $level_9_boster<=$level_set_seven) || ($level_9_boster > $level_set_seven && $level_9_boster<=$level_set_eight) || ($level_9_boster > $level_set_eight && $level_9_boster<=$level_set_ninth) || ($level_9_boster > $level_set_ninth && $level_9_boster<=$level_set_ten)) {
            $comission=$booster_comission * $gold_two/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level9_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //diamond
            if (($level_9_boster==$level_set_five) || ($level_9_boster > $level_set_five && $level_9_boster<=$level_set_six) || ($level_9_boster > $level_set_six && $level_9_boster<=$level_set_seven) || ($level_9_boster > $level_set_seven && $level_9_boster<=$level_set_eight) || ($level_9_boster > $level_set_eight && $level_9_boster<=$level_set_ninth) || ($level_9_boster > $level_set_ninth && $level_9_boster<=$level_set_ten)) {
            $comission=$booster_comission * $diamond_two/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level9_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
          }
            
            }
            //level 10  
            if($level9_id=='' ||  $level9_id=='2' || $level9_id=='3'){
                    return $level9_id;
            }
            else{
            $this->db->select('parent_id');
            $this->db->from('users');
            $this->db->where('user_id',$level9_id);
            $this->db->where('type','2'); 
            $query=$this->db->get();
            $level10_id = $query->row();
            $level10_id= $level10_id->parent_id;

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('referal_id',$level10_id);
            $this->db->where('type','2');
            $query=$this->db->get();
            $level_10_boster=$query->num_rows();
            if($level_10_boster >0)
          {
            if(($level_10_boster==$level_set_two) || ($level_10_boster==$level_set_three) || ($level_10_boster==$level_set_four) || ($level_10_boster==$level_set_five) || ($level_10_boster > $level_set_five && $level_10_boster<=$level_set_six) || ($level_10_boster > $level_set_six && $level_10_boster<=$level_set_seven) || ($level_10_boster > $level_set_seven && $level_10_boster<=$level_set_eight) || ($level_10_boster > $level_set_eight && $level_10_boster<=$level_set_ninth) || ($level_10_boster > $level_set_ninth && $level_10_boster<=$level_set_ten)){

            $comission=$booster_comission * $st_one/100;
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 	 
            $this->db->where('user_id', $level10_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            if (($level_10_boster==$level_set_three) || ($level_10_boster==$level_set_four) || ($level_10_boster==$level_set_five) || ($level_10_boster > $level_set_five && $level_10_boster<=$level_set_six) || ($level_10_boster > $level_set_six && $level_10_boster<=$level_set_seven) || ($level_10_boster > $level_set_seven && $level_10_boster<=$level_set_eight) || ($level_10_boster > $level_set_eight && $level_10_boster<=$level_set_ninth) || ($level_10_boster > $level_set_ninth && $level_10_boster<=$level_set_ten)) {
            $comission=$booster_comission * $silver_one/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level10_id);
            $this->db->where('type','2');              
            $this->db->update('users');
                }
		//gold
            if (($level_10_boster==$level_set_four) || ($level_10_boster==$level_set_five) || ($level_10_boster > $level_set_five && $level_10_boster<=$level_set_six) || ($level_10_boster > $level_set_six && $level_10_boster<=$level_set_seven) || ($level_10_boster > $level_set_seven && $level_10_boster<=$level_set_eight) || ($level_10_boster > $level_set_eight && $level_10_boster<=$level_set_ninth) || ($level_10_boster > $level_set_ninth && $level_10_boster<=$level_set_ten)) {
            $comission=$booster_comission * $gold_one/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level10_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            //diamond
            if (($level_10_boster==$level_set_five) || ($level_10_boster > $level_set_five && $level_10_boster<=$level_set_six) || ($level_10_boster > $level_set_six && $level_10_boster<=$level_set_seven) || ($level_10_boster > $level_set_seven && $level_10_boster<=$level_set_eight) || ($level_10_boster > $level_set_eight && $level_10_boster<=$level_set_ninth) || ($level_10_boster > $level_set_ninth && $level_10_boster<=$level_set_ten)) {
            $comission=$booster_comission * $diamond_one/100;	
            $this->db->set('booster_com', "booster_com + $comission", FALSE); 
            $this->db->where('user_id', $level10_id);
            $this->db->where('type','2');              
            $this->db->update('users');
            }
            
          }
            }
            }
        public function insertcart($data){
           $this->db->insert('tbl_cart',$data);     
        }
        public function insertcartproductdetail($insert_id,$pid,$price,$qty,$user_id,$ip){
            //pay PV to direct reffernce ID
            $PV_for_DRF = $this->db->get_where('products',array('product_code'=>$pid))->result_array();
            $PV_for_DRF[0]['basic_vol'];//PV of product
            $PV_for_DRF[0]['booster_vol'];//BV of product
            //DirectRefferID
            //add to checkout
            $this->db->set('product_cart_id',$insert_id);
            $this->db->set('product_id',$pid);
            $this->db->set('product_price',$price);
            $this->db->set('quantity',$qty);
            $this->db->set('pv',$PV_for_DRF[0]['basic_vol']);
            $this->db->set('bv',$PV_for_DRF[0]['booster_vol']);
            $this->db->set('user_id',$user_id);
            $this->db->set('ip',$ip);
            $this->db->insert('tbl_cart_product');  
        }
}