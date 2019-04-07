<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
    public function __Construct(){
        parent::__Construct();
        $this->load->model('Home_model');
    }

        public function index(){
            
        if(isset($this->session->userdata['logged_in'])) {
            $sess_data=$this->session->userdata('logged_in');
            //print_r($sess_data); die();
            $data['username']=$sess_data;
            $user_id = $sess_data['id'];
            $data['products']=$this->Home_model->get_products_data();
            $data['slider']=$this->Home_model->get_slider_data();
            $this->load->view('Header/header');
            $this->load->view('Shop/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Slider/slider',$data);
            $this->load->view('Shop/body',$data);
            $this->load->view('Body_slider/body_slider');
            $this->load->view('Banner/banner');
            $this->load->view('Footer/footer');
        }
        else{
                redirect('Home/Login');
        }
             
        }public function Product_details($id){

            if(isset($this->session->userdata['logged_in'])) {
            $sess_data=$this->session->userdata('logged_in');
            //print_r($sess_data); die();
            $data['username']=$sess_data;
            $user_id = $sess_data['id'];
            $data['products']=$this->Home_model->get_product_detail($id);
            $this->load->view('Header/header');
            $this->load->view('Shop/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Shop/products_details',$data); 
            $this->load->view('Footer/footer');
        }
        else{
                redirect('Home/Login');
        }
        }
        public function Add_cart(){
                $data = array(
                      'id' => $this->input->post('product_code') ,
                        'name' => $this->input->post('product_name') , 
                        'price' => $this->input->post('product_price') , 
                        'qty' =>$this->input->post('qty')

                  
                );
             $this->cart->insert($data);
            redirect('Shop/Cart');

        }
         public function Cart(){
            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Shop/cart'); 
            $this->load->view('Footer/footer');
        }
        public function Confirm_order(){
            if(isset($this->session->userdata['logged_in'])) {
            $sess_data=$this->session->userdata('logged_in');
            //print_r($sess_data); die();
            $data['username']=$sess_data;
            $user_id = $sess_data['user_id'];
            $c_date=date('Y-m-d');
                $CartConts = $this->cart->contents();
                                        if(!empty($CartConts))
                                        {
        $total = 0;
        $qu=0;

        $total_cart=$this->cart->total_items();
        $data=array(
            'userid' =>$user_id ,
            'created_date'=>$c_date,
            'total_cart'=>$total_cart 
        );
        $this->Home_model->insertcart($data);
        $insert_id=$this->db->insert_id();
        foreach ($this->cart->contents() as $items):
        $ip = $_SERVER['REMOTE_ADDR'];
        $total = $total + (($items['qty']) * ($items['price']));
            $qu = $qu + $items['qty'];
        $this->Home_model->insertcartproductdetail($insert_id,$items['id'],$items['price'],$items['qty'],$user_id,$ip);
         $pid=$items['id'];
          endforeach;
          $upline_users=$this->Home_model->get_upline_users($user_id,$pid);
          $insert_boster=$this->Home_model->insert_boster($user_id,$pid);

          $this->cart->destroy();
                                        }

            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Shop/confirm_order'); 
            $this->load->view('Footer/footer');
        }
        else{
            redirect('Home/Login');
        }
    }
         public function checkout(){
             if(isset($this->session->userdata['logged_in'])) {
            $sess_data=$this->session->userdata('logged_in');
            //print_r($sess_data); die();
            $data['username']=$sess_data;
            $user_id['user_id'] = $sess_data['id'];
            // $data['user_data']=$this->Home_model->get_user_data($user_id);
            $this->load->view('Header/header');
            $this->load->view('Shop/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Shop/checkout',$user_id); 
            $this->load->view('Footer/footer');
        }
        else{
                redirect('Home/Login');
        }
        }
         public function checkout_2(){
             if(isset($this->session->userdata['logged_in'])) {
            $sess_data=$this->session->userdata('logged_in');
            //print_r($sess_data); die();
            $data['username']=$sess_data;
            $user_id = $sess_data['id'];
            $data = array(
                'first_name'=>$this->input->post('fname') , 
                'last_name'=>$this->input->post('lname') , 
                'phone'=>$this->input->post('phone') , 
                'email'=>$this->input->post('email') , 
                'city'=>$this->input->post('city') , 
                'province'=>$this->input->post('province') ,
                'cnic'=>$this->input->post('cnic') ,
                'address'=>$this->input->post('address') ,
                'user_id'=>$user_id
                  
                );
            $this->Home_model->insert_shipping_data($data);
     
            $this->load->view('Header/header');
            $this->load->view('Shop/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Shop/checkout_2',$data); 
            $this->load->view('Footer/footer');
        }
        else{
                redirect('Home/Login');
        }
        }
        public function checkout_3(){
             if(isset($this->session->userdata['logged_in'])) {
            $sess_data=$this->session->userdata('logged_in');
            //print_r($sess_data); die();
            $data['username']=$sess_data;
            $user_id = $sess_data['id'];
            $data = array(
                'payment_method'=>$this->input->post('payment') , 
                'user_id'=>$user_id
                  
                );
            $this->Home_model->insert_payment_data($data);
            $data['cart']=$this->Home_model->get_cart_data($user_id);
            $data['payment_data']=$this->Home_model->get_payment_data($user_id);
            $this->load->view('Header/header');
            $this->load->view('Shop/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Shop/checkout_3',$data); 
            $this->load->view('Footer/footer');
        }
        else{
                redirect('Home/Login');
        }
        }
        public function finish_order(){
             if(isset($this->session->userdata['logged_in'])) {
            $sess_data=$this->session->userdata('logged_in');
            //print_r($sess_data); die();
            $data['username']=$sess_data;
            $u_id= $sess_data['id'];
            $user_id = $sess_data['user_id'];

            $product_price=$this->input->post('basic_vol');
            $booster_comission=$this->input->post('booster_comission');
            //print_r($booster_comission);die();
            $upline_users=$this->Home_model->get_upline_users($user_id,$product_price);
            $insert_boster=$this->Home_model->insert_boster($user_id,$booster_comission);
            //print_r($insert_boster);die();
       
            $data = array(
                'product_name'=>$this->input->post('product_name') , 
                'product_des'=>$this->input->post('product_des') , 
                'product_price'=>$this->input->post('product_price') , 
                'qty'=>$this->input->post('qty') , 
                'payment_method'=>$this->input->post('payment_method') , 
                'user_id'=>$user_id
                );
            $this->Home_model->insert_confirm_order_data($data);
            $this->load->view('Header/header');
            $this->load->view('Shop/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Shop/finish_order'); 
            $this->load->view('Footer/footer');
        }
        else{
                redirect('Home/Login');
        }
        }
        
        
}
