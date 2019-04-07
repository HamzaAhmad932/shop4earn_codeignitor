<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Slider_model');
	}
	public function index(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
 
		$data['row']=$this->Slider_model->get_slider_data();
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);		
	    $this->load->view('Slider/admin_slider',$data);
	    $this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Addnew_image(){
		
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
	 
 
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);	
	    $this->load->view('Slider/add_new_image',$data);
	    $this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function addnew_slider_validate(){			 
			 $config['upload_path']='./images/';
		        $config['allowed_types']='gif|jpg|png';
		        $config['max_size']='1800';
		        $config['max_width']='4024';
		        $config['max_height']='3468';
		    $target_file = $config['upload_path'].basename($_FILES["image"]["name"]);
		        $this->load->library('upload',$config);
			       $this->upload->do_upload('image'); 
			         $data=$this->upload->data();
		date_default_timezone_set("Asia/Karachi");
		$c_date=date("Y-m-d h:i:sa");	     
		 $data = array(
				'img_name' =>$data['file_name'],
				'img_path' =>$target_file,
				'c_date'=>$c_date
				 
				);

		  if($this->Slider_model->insert_slider($data)){
		  	redirect('Slider');
		  }
		  else{
		  	redirect('Slider');
		  	 } 
	}
	public function Slider_edit($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
	 	$data['slider']=$this->Slider_model->get_slider_detail_data($id);
 
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);	
	    $this->load->view('Slider/slider_edit',$data);
	    $this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Update_edit_slider(){
		 $config['upload_path']='./images/';
		        $config['allowed_types']='gif|jpg|png';
		        $config['max_size']='1800';
		        $config['max_width']='4024';
		        $config['max_height']='3468';
		    $target_file = $config['upload_path'].basename($_FILES["image"]["name"]);
		       $this->load->library('upload',$config);
			      if(!$this->upload->do_upload('image')){ 
		 redirect('Slider');
            
        }

        else{
            $data=$this->upload->data();

		$id=$this->input->post('hidden');
		$data = array(
			// 'name'=>$this->input->post('name') , 
			// 	'fname'=>$this->input->post('fname') , 
				'img_name' =>$data['file_name'],
				'img_path' =>$target_file
			 );
		$this->Slider_model->get_slider_update($data,$id);  
		redirect('Slider');

	}
}
	public function Slider_detail($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['full_name']=$sess_data;
		$admin_id = $sess_data['id'];
	 	$data['slider']=$this->Slider_model->get_slider_detail_data($id);
 
		$this->load->view('Admin_header/admin_header');
		$this->load->view('Admin_sidebar/admin_sidebar');
		$this->load->view('Admin_topbar/admin_topbar',$data);
	    $this->load->view('Slider/slider_details',$data);
	    $this->load->view('Admin_footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Slider_delete($id){
		$this->Slider_model->get_slider_delete($id);
		redirect('Slider');
	}
		 
}
