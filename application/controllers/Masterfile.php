<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterfile extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->model('super_model');
        date_default_timezone_set("Asia/Manila");
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/welcome
	 *	- or -
	 * 		http://example.com/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	  function arrayToObject($array){
            if(!is_array($array)) { return $array; }
            $object = new stdClass();
            if (is_array($array) && count($array) > 0) {
                foreach ($array as $name=>$value) {
                    $name = strtolower(trim($name));
                    if (!empty($name)) { $object->$name = arrayToObject($value); }
                }
                return $object;
            } 
            else {
                return false;
            }
        }

	}

    public function index(){  
        $this->load->view('masterfile/login');
    }

    public function dashboard()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('masterfile/dashboard');
        $this->load->view('template/footer');
    }

	public function login(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $count=$this->super_model->login_user($username,$password);
        if($count>0){   
            $password1 =md5($this->input->post('password'));
            $fetch=$this->super_model->select_custom_where("users", "username = '$username' AND (password = '$password' OR password = '$password1')");
            foreach($fetch AS $d){
                $userid = $d->user_id;
                $username = $d->username;
                $fullname = $d->fullname;
                $usertype = $d->usertype;
            }
            $newdata = array(
               'user_id'=> $userid,
               'username'=> $username,
               'fullname'=> $fullname,
               'usertype'=> $usertype,
               'logged_in'=> TRUE
            );
            $this->session->set_userdata($newdata);
            redirect(base_url().'index.php/masterfile/dashboard/');
        }
        else{
            $this->session->set_flashdata('error_msg', 'Username And Password Do not Exist!');
            $this->load->view('masterfile/login');     
        }
    }


    public function user_logout(){
        $this->session->sess_destroy();
        $this->load->view('masterfile/login');
        echo "<script>alert('You have successfully logged out.'); 
        window.location ='".base_url()."index.php/masterfile/index'; </script>";
    }

    public function users_list(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $data['users'] = $this->super_model->select_all_order_by('users', 'fullname', 'ASC');
        $this->load->view('masterfile/users_list',$data);
        $this->load->view('template/footer');
    }

    public function insert_user(){
        $fullname = trim($this->input->post('fullname')," ");
        $username = trim($this->input->post('username')," ");
        $usertype = trim($this->input->post('usertype')," ");
        $data = array(
            'fullname'=>$fullname,
            'username'=>$username,
            'password'=>'1234',
            'usertype'=>$usertype,
        );
        if($this->super_model->insert_into("users", $data)){
           echo "<script>alert('Successfully Added!'); 
                window.location ='".base_url()."index.php/masterfile/users_list'; </script>";
        }
    }

    public function update_user(){
        $user_id = $this->input->post('user_id');
        $fullname = trim($this->input->post('fullname')," ");
        $username = trim($this->input->post('username')," ");
        $usertype = trim($this->input->post('usertype')," ");
        $data = array(
            'fullname'=>$fullname,
            'username'=>$username,
            'usertype'=>$usertype,
        );
        if($this->super_model->update_where('users', $data, 'user_id', $user_id)){
            echo "<script>alert('Successfully Updated!'); 
                window.location ='".base_url()."index.php/masterfile/users_list'; </script>";
        }
    }

    public function delete_user(){
        $user_id=$this->uri->segment(3);
        if($this->super_model->delete_where('users', 'user_id', $user_id)){
            echo "<script>alert('Succesfully Deleted'); 
                window.location ='".base_url()."index.php/masterfile/users_list'; </script>";
        }
    }

    public function bank_list(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $data['bank'] = $this->super_model->select_all_order_by('bank', 'bank_name', 'ASC');
        $this->load->view('masterfile/bank_list',$data);
        $this->load->view('template/footer');
    }

    public function insert_bank(){
        $bank_name = trim($this->input->post('bank')," ");
        $location = trim($this->input->post('location')," ");
        $data = array(
            'bank_name'=>$bank_name,
            'bank_location'=>$location,
        );
        if($this->super_model->insert_into("bank", $data)){
           echo "<script>alert('Successfully Added!'); 
                window.location ='".base_url()."index.php/masterfile/bank_list'; </script>";
        }
    }

    public function update_bank(){
        $bank_id = $this->input->post('bank_id');
        $bank_name = trim($this->input->post('bank')," ");
        $location = trim($this->input->post('location')," ");
        $data = array(
            'bank_name'=>$bank_name,
            'bank_location'=>$location,
        );
        if($this->super_model->update_where('bank', $data, 'bank_id', $bank_id)){
            echo "<script>alert('Successfully Updated!'); 
                window.location ='".base_url()."index.php/masterfile/bank_list'; </script>";
        }
    }

    public function delete_bank(){
        $bank_id=$this->uri->segment(3);
        if($this->super_model->delete_where('bank', 'bank_id', $bank_id)){
            echo "<script>alert('Succesfully Deleted'); 
                window.location ='".base_url()."index.php/masterfile/bank_list'; </script>";
        }
    }

    public function insurer_list(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $data['insurer'] = $this->super_model->select_all_order_by('insurer', 'insurer_name', 'ASC');
        $this->load->view('masterfile/insurer_list',$data);
        $this->load->view('template/footer');
    }

    public function insert_insurer(){
        $insurer = trim($this->input->post('insurer')," ");
        $data = array(
            'insurer_name'=>$insurer,
        );
        if($this->super_model->insert_into("insurer", $data)){
           echo "<script>alert('Successfully Added!'); 
                window.location ='".base_url()."index.php/masterfile/insurer_list'; </script>";
        }
    }

    public function update_insurer(){
        $insurer_id = $this->input->post('insurer_id');
        $insurer_name = trim($this->input->post('insurer')," ");
        $data = array(
            'insurer_name'=>$insurer_name,
        );
        if($this->super_model->update_where('insurer', $data, 'insurer_id', $insurer_id)){
            echo "<script>alert('Successfully Updated!'); 
                window.location ='".base_url()."index.php/masterfile/insurer_list'; </script>";
        }
    }

    public function delete_insurer(){
        $insurer_id=$this->uri->segment(3);
        if($this->super_model->delete_where('insurer', 'insurer_id', $insurer_id)){
            echo "<script>alert('Succesfully Deleted'); 
                window.location ='".base_url()."index.php/masterfile/insurer_list'; </script>";
        }
    }
}
