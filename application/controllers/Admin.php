<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __Construct(){
		parent::__Construct();
		$this->load->model('Admin_model');
	}
	public function index(){	 
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
$data['total_register_member']=$this->Admin_model->total_register_member();
$data['base_share_amount']=$this->Admin_model->base_share_amount();
$data['boster_share_amount']=$this->Admin_model->boster_share_amount();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Admin_body/admin_body',$data);
		$this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Home/Login');
		}
	}

	public function approve_users($id){	 
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');

		//print_r($id);die();
		 
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$this->Admin_model->approve_users($id);
	    redirect ('Admin/customer_list');
		}
		else{
				redirect('Home/Sign_in');
		}
	}

		public function customer_list(){	 
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['row']=$this->Admin_model->get_customers();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Admin_customer/admin_customer',$data);
		$this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Home/Login');
		}
	}
	public function customer_tree($id){	 
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();

		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['row']=$this->Admin_model->get_customers_tree($id);
		$data['parent_data']=$this->Admin_model->get_customers_id_data($id);
		// echo "<pre>";
		// print_r($data['row']);die();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Admin_customer/customer_tree',$data);
		$this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Home/Login');
		}
	}
	public function Upline($parent_id){	 
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();

		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['level1']=$this->Admin_model->get_upline_data($parent_id);
		//$data['level1']=$this->Admin_model->get_upline_data($parent_id);
		 
		// echo "<pre>";
		// print_r($data['level1']);
	 // die();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Admin_customer/Upline',$data);
		$this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Home/Login');
		}
	}
	public function Downline($user_id){	 
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();

		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['row']=$this->Admin_model->get_downline_data($user_id);
		 
		// echo "<pre>";
		// print_r($data['row']);die();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Admin_customer/Downline',$data);
		$this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Home/Login');
		}
	}
	public function level_criteria_se(){	 
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['default_parent_id']=$this->Admin_model->get_default_parent_id();
		//print_r($data['row']);die();
		$data['levels']=$this->Admin_model->get_levels_setting();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Levels/level_criteria_setting',$data);
		$this->load->view('Admin_footer/admin_footer');

		}
		else{
				redirect('Home/Login');
		}
	}
	public function update_criteria_settings(){	 
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
 
		      $level_standard = $this->input->post('level_number');
                $ref_per_level = $this->input->post('refer_for_level');
                $name_pkg = $this->input->post('package');
                
                foreach( $level_standard as $key => $n ) 
                {
                    $this->db->where('level_number',$level_standard[$key]);
                    $this->db->update('levels_settings',array('level_number'=>$level_standard[$key], 'refer_for_level'=> $ref_per_level[$key],'package'=>$name_pkg[$key]));
                   
                    //$level = $this->input->post('');
                }
                 
                 redirect('Admin/level_criteria_se');

		}
		else{
				redirect('Home/Login');
		}
	}
	public function comission_setting(){	 
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['comission']=$this->Admin_model->get_comission_setting();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Levels/comission_setting',$data);
		$this->load->view('Admin_footer/admin_footer');

		}
		else{
				redirect('Home/Login');
		}
	}
	 public function update_levels_settings(){
			if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
                $level = $this->input->post('level');
                $basic = $this->input->post('basic');
                $standard = $this->input->post('standard');
                $silver = $this->input->post('silver');
                $gold = $this->input->post('gold');
                $diamond = $this->input->post('diamond');
               
                foreach( $basic as $key => $n ) 
                {
                    $tital = $basic[$key] + $standard[$key] + $silver[$key] + $gold[$key] + $diamond[$key];
                     $this->db->where('level_number',$level[$key]);
                    $this->db->update('comission_seting',array('basic'=>$basic[$key], 'standard'=> $standard[$key], 'silver'=>$silver[$key], 'gold'=>$gold[$key], 'diamond'=>$diamond[$key],'total'=>$tital));
                   
                    //$level = $this->input->post('');
                }
                 redirect('Admin/comission_setting');
            }
             else{
                redirect('Home/Login');
            }
        }
	public function update_default_id(){	 
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$admin_id = $sess_data['id'];
		$parent_id=$this->input->post('default_parent_id');
		if($data['row']=$this->Admin_model->get_update_parent_id($parent_id,$admin_id)){
			redirect('Admin/level_criteria_se');
		 

		}
		else{
			redirect('Admin/level_criteria_se');
		}
	}
		else{
				redirect('Home/Login');
		}
		 
	}
	public function Products(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['row']=$this->Admin_model->get_product_data();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Products/view_products',$data);
		$this->load->view('Admin_footer/admin_footer');

		}
		else{
				redirect('Home/Login');
		}
	}
	public function addnew_product(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['colors'] = $this->Admin_model->get_all_colors();
		$data['sizes'] = $this->Admin_model->get_all_sizes();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Products/addnew_product',$data);
		$this->load->view('Admin_footer/admin_footer');

		}
		else{
				redirect('Home/Login');
		}
	}
	public function addnew_product_validate(){

		date_default_timezone_set("Asia/Karachi");
        $c_date=date("h:i:sa");

		  $config['upload_path']='./images/';
		        $config['allowed_types']='gif|jpg|png';
		        $config['max_size']='1800';
		        $config['max_width']='4024';
		        $config['max_height']='3468';
		    $target_file = $config['upload_path'].basename($_FILES["image"]["name"]);
		        $this->load->library('upload',$config);
			       $this->upload->do_upload('image'); 
			         $data=$this->upload->data();     
		 $data = array(
		 		'product_code'=>$this->input->post('product_code') , 
			 	'product_name'=>$this->input->post('product_name') , 
			 	'basic_vol'=>$this->input->post('basic_volume') , 
			 	'booster_vol'=>$this->input->post('booster_volume') , 
			 	'purchase_cost'=>$this->input->post('purchase_cost') , 
			 	'product_des'=>$this->input->post('product_des') , 
			 	'product_cat'=>$this->input->post('product_cat') , 
			 	'related_product'=>$this->input->post('related_products') , 
			 	'product_price'=>$this->input->post('rate') , 
			 	'qty'=>$this->input->post('qty') , 
			 	'discount'=>$this->input->post('discount') , 
			 	'net_amount'=>$this->input->post('net_amount') , 
			 	'c_date'=>$c_date,
			 	'status'=>'0',
				'img_name' =>$data['file_name'],
				'img_path' =>$target_file,
				 
				);

		  if($this->Admin_model->insert_product($data)){
		  	// echo "data not inserted";
		  	redirect('Admin/addnew_product');
		  }
		  else{
		  	redirect('Admin/Products');
		  } 
	}
	public function approve_products($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		if($this->Admin_model->approve_product($id)){
	    redirect ('Admin/Products');
		}
		else{
			redirect ('Admin/Products');
		}

		}
		else{
				redirect('Home/Login');
		}
	}
	public function products_view($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['products']=$this->Admin_model->get_product_view($id);
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Products/single_product_view',$data);
		$this->load->view('Admin_footer/admin_footer');

		}
		else{
				redirect('Home/Login');
		}
	}
	public function products_edit($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['products']=$this->Admin_model->get_product_view($id);
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Products/products_edit',$data);
		$this->load->view('Admin_footer/admin_footer');

		}
		else{
				redirect('Home/Login');
		}
	}
	public function product_edit_update(){
				date_default_timezone_set("Asia/Karachi");
                $m_date=date("h:i:sa");

                $config['upload_path']='./images/';
		        $config['allowed_types']='gif|jpg|png';
		        $config['max_size']='1800';
		        $config['max_width']='4024';
		        $config['max_height']='3468';
		    $target_file = $config['upload_path'].basename($_FILES["image"]["name"]);
		       $this->load->library('upload',$config);
			      if(!$this->upload->do_upload('image')){ 
			      	$id=$this->input->post('hidden');
			      $data = array(
			    'product_code'=>$this->input->post('product_code') , 
			 	'product_name'=>$this->input->post('product_name') , 
			 	'basic_vol'=>$this->input->post('basic_volume') , 
			 	'booster_vol'=>$this->input->post('booster_volume') , 
			 	'purchase_cost'=>$this->input->post('purchase_cost') , 
			 	'product_des'=>$this->input->post('product_des') , 
			 	'product_cat'=>$this->input->post('product_cat') , 
			 	'related_product'=>$this->input->post('related_products') , 
			 	'product_price'=>$this->input->post('rate') , 
			 	'qty'=>$this->input->post('qty') , 
			 	'discount'=>$this->input->post('discount') , 
			 	'net_amount'=>$this->input->post('net_amount') , 
			 	'm_date'=>$m_date
				 
			 );
		$this->Admin_model->get_product_update($data,$id);  
		redirect('Admin/Products');
        }

        else{
            $data=$this->upload->data();

		$id=$this->input->post('hidden');
		$data = array(
			    'product_code'=>$this->input->post('product_code') , 
			 	'product_name'=>$this->input->post('product_name') , 
			 	'basic_vol'=>$this->input->post('basic_volume') , 
			 	'booster_vol'=>$this->input->post('booster_volume') , 
			 	'purchase_cost'=>$this->input->post('purchase_cost') , 
			 	'product_des'=>$this->input->post('product_des') , 
			 	'product_cat'=>$this->input->post('product_cat') , 
			 	'related_product'=>$this->input->post('related_products') , 
			 	'product_price'=>$this->input->post('rate') , 
			 	'qty'=>$this->input->post('qty') , 
			 	'discount'=>$this->input->post('discount') , 
			 	'net_amount'=>$this->input->post('net_amount') , 
			 	'm_date'=>$m_date,
				'img_name' =>$data['file_name'],
				'img_path' =>$target_file,
			 );
		$this->Admin_model->get_product_update($data,$id);  
		redirect('Admin/Products');
	}	 
}
	public function products_delete($id){
		$this->Admin_model->get_product_delete($id);
		redirect('Admin/Products');
	}
	public function Category(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['row']=$this->Admin_model->get_category_data();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Category/view_category',$data);
		$this->load->view('Admin_footer/admin_footer');

		}
		else{
				redirect('Home/Login');
		}
	}
	public function addnew_category(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Category/addnew_category',$data);
		$this->load->view('Admin_footer/admin_footer');

		}
		else{
				redirect('Home/Login');
		}
	}
	public function addnew_category_validate(){
				date_default_timezone_set("Asia/Karachi");
                $c_date=date("h:i:sa");
		 $data = array(
		 		'cat_name'=>$this->input->post('cat_name'),
		 		'c_date'=>$c_date,
		 		'c_by'=>'Admin',
		 		'status'=>'0'
				);
		  if($this->Admin_model->insert_category($data)){
		  	// echo "data not inserted";
		  	redirect('Admin/addnew_category');
		  }
		  else{
		  	redirect('Admin/Category');
		  } 
	}
	public function category_view($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['category']=$this->Admin_model->get_category_view($id);
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Category/single_category_view',$data);
		$this->load->view('Admin_footer/admin_footer');

		}
		else{
				redirect('Home/Login');
		}
	}
	public function category_edit($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		$data['category']=$this->Admin_model->get_category_view($id);
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Category/category_edit',$data);
		$this->load->view('Admin_footer/admin_footer');

		}
		else{
				redirect('Home/Login');
		}
	}
	public function category_edit_update(){
				date_default_timezone_set("Asia/Karachi");
                $m_date=date("h:i:sa");      
                 	$id=$this->input->post('hidden');           
			      $data = array(
			    'cat_name'=>$this->input->post('cat_name') , 
			 	'm_date'=>$m_date
				 
			 );
		$this->Admin_model->get_category_update($data,$id);  
		redirect('Admin/Category');
    

   
}
	public function category_delete($id){
		$this->Admin_model->get_category_delete($id);
		redirect('Admin/Category');
	}
	public function approve_category($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
		if($this->Admin_model->approve_category($id)){
	    redirect ('Admin/Category');
		}
		else{
			redirect ('Admin/Category');
		}

		}
		else{
				redirect('Home/Login');
		}
	}
	public function pending_payments(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
		
		$data['row']=$this->Admin_model->get_pending_payments();
		//print_r($data['row']);die();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);		
		$this->load->view('Admin/pending_payments',$data);
		$this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function admin_approved_payments($id){
	    if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
		$status="1";
		$this->Admin_model->admin_approved_payments($id,$status);
	    redirect ('Admin/pending_payments');
		}
		else{
				redirect('Login');
		}
	}
	public function approve_payments(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];

		$data['row']=$this->Admin_model->get_approved_payments();
		//print_r($data['row']);die();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Admin/approved_payments',$data);
		$this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function All_orders(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];

 		$data['row']=$this->Admin_model->get_orders();
		//print_r($data['row']);die();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Order/all_orders',$data);
		$this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Deliver_orders(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];

 
		//print_r($data['row']);die();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
		$this->load->view('Order/deliver_orders');
		$this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}

}
