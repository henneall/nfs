<?php
/*error_reporting(0);*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Encode extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        date_default_timezone_set("Asia/Manila");
        $this->load->model('super_model');
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

    public function fullescape($in) { 
      $out = ''; 
      for ($i=0;$i<strlen($in);$i++) 
      { 
        $hex = dechex(ord($in[$i])); 
        if ($hex=='') 
           $out = $out.urlencode($in[$i]); 
        else 
           $out = $out .'%'.((strlen($hex)==1) ? ('0'.strtoupper($hex)):(strtoupper($hex))); 
      } 
      $out = str_replace('+','%20',$out); 
      $out = str_replace('_','%5F',$out); 
      $out = str_replace('.','%2E',$out); 
      $out = str_replace('-','%2D',$out); 
      return $out; 
    }

    public function brandnew_form(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $data['bank'] = $this->super_model->select_all_order_by('bank', 'bank_name', 'ASC');
        $data['insurer'] = $this->super_model->select_all_order_by('insurer', 'insurer_name', 'ASC');
        $this->load->view('encode/brandnew_form',$data);
        $this->load->view('template/footer');
    }


    public function insert_brandnew(){
        $dest= realpath(APPPATH . '../uploads/');
        if(!empty($_FILES['pic1']['name'])){
             $img1= basename($_FILES['pic1']['name']);
             $img1=explode('.',$img1);
             $photo1=$img1[0];
             $ext1=$img1[1];
            
            if($ext1=='php' || ($ext1 != 'png' && $ext1 != 'jpg' && $ext1 != 'jpeg' && $ext1 != 'PNG' && $ext1 != 'JPG' && $ext1 != 'JPEG')){
                $error_ext++;
            } else {
                 $filename1=$photo1.'-1.'.$ext1;
                 move_uploaded_file($_FILES["pic1"]['tmp_name'], $dest.'/'.$filename1);
            }

        } else {
            $filename1="";
        }

        if(!empty($_FILES['pic2']['name'])){
             $img2= basename($_FILES['pic2']['name']);
             $img2=explode('.',$img2);
             $photo2=$img2[0];
             $ext2=$img2[1];
             
            if($ext2=='php' || ($ext2 != 'png' && $ext2 != 'jpg' && $ext2 != 'jpeg' && $ext2 != 'PNG' && $ext2 != 'JPG' && $ext2 != 'JPEG')){
                $error_ext++;
            } else {
                $filename2=$photo2.'-2.'.$ext2;
                move_uploaded_file($_FILES["pic2"]['tmp_name'], $dest.'/'.$filename2);
            }
        } else {
            $filename2="";
        }

        if(!empty($_FILES['pic3']['name'])){
             $img3= basename($_FILES['pic3']['name']);
             $img3=explode('.',$img3);
             $photo3=$img3[0];
             $ext3=$img3[1];
            
            if($ext3=='php' || ($ext3 != 'png' && $ext3 != 'jpg' && $ext3 != 'jpeg' && $ext3 != 'PNG' && $ext3 != 'JPG' && $ext3 != 'JPEG')){
                $error_ext++;
            } else {
                $filename3=$photo3.'-3.'.$ext3;
                move_uploaded_file($_FILES["pic3"]['tmp_name'], $dest.'/'.$filename3);
            }
        } else {
            $filename3="";
        }

        $client = trim($this->input->post('client')," ");
        $insurer = trim($this->input->post('insurer')," ");
        $insurance = trim($this->input->post('insurance')," ");
        $delivery_date = trim($this->input->post('delivery_date')," ");
        $conduction = trim($this->input->post('conduction')," ");
        $unit = trim($this->input->post('unit')," ");
        $bank = trim($this->input->post('bank')," ");
        $policy = trim($this->input->post('policy')," ");
        $amount = trim($this->input->post('amount')," ");
        $date_paid = trim($this->input->post('date_paid')," ");
        $data = array(
            'client_name'=>$client,
            'insurer'=>$insurer,
            'ins_coverage'=>$insurance,
            'delivery_date'=>$delivery_date,
            'conduction_sticker'=>$conduction,
            'unit'=>$unit,
            'bank_id'=>$bank,
            'policy_no'=>$policy,
            'amount'=>$amount,
            'date_paid'=>$date_paid,
            'image1'=>$filename1,
            'image2'=>$filename2,
            'image3'=>$filename3,
            'user_id'=>$_SESSION['user_id'],
            'date_encoded'=>date('Y-m-d'),
        );

        if($this->super_model->insert_into("brand_new", $data)){
           echo "<script>alert('Successfully Added!'); 
                window.location ='".base_url()."index.php/encode/brandnew_form'; </script>";
        }
    }

    public function brandnew_form_update(){
        $brand_id=$this->uri->segment(3);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $data['bank'] = $this->super_model->select_all_order_by('bank', 'bank_name', 'ASC');
        $data['insurer'] = $this->super_model->select_all_order_by('insurer', 'insurer_name', 'ASC');
        $data['brandnew'] = $this->super_model->select_row_where('brand_new', 'brand_id', $brand_id);
        $this->load->view('encode/brandnew_form_update',$data);
        $this->load->view('template/footer');
    }

    public function update_brandnew(){
        $brand_id=$this->input->post('brand_id');
        $dest= realpath(APPPATH . '../uploads/');
        if(!empty($_FILES['pic1']['name'])){
             $img1= basename($_FILES['pic1']['name']);
             $img1=explode('.',$img1);
             $photo1=$img1[0];
             $ext1=$img1[1];
            
            if($ext1=='php' || ($ext1 != 'png' && $ext1 != 'jpg' && $ext1 != 'jpeg' && $ext1 != 'PNG' && $ext1 != 'JPG' && $ext1 != 'JPEG')){
                $error_ext++;
            } else {
                $filename1=$photo1.'-1.'.$ext1;
                move_uploaded_file($_FILES["pic1"]['tmp_name'], $dest.'/'.$filename1);
                $data_pic1 = array(
                    'image1'=>$filename1
                );
                $this->super_model->update_where("brand_new", $data_pic1, "brand_id", $brand_id);
            }

        } 

        if(!empty($_FILES['pic2']['name'])){
             $img2= basename($_FILES['pic2']['name']);
             $img2=explode('.',$img2);
             $photo2=$img2[0];
             $ext2=$img2[1];
             
            if($ext2=='php' || ($ext2 != 'png' && $ext2 != 'jpg' && $ext2 != 'jpeg' && $ext2 != 'PNG' && $ext2 != 'JPG' && $ext2 != 'JPEG')){
                $error_ext++;
            } else {
                $filename2=$photo2.'-2.'.$ext2;
                move_uploaded_file($_FILES["pic2"]['tmp_name'], $dest.'/'.$filename2);
                $data_pic2 = array(
                    'image2'=>$filename2
                );
                $this->super_model->update_where("brand_new", $data_pic2, "brand_id", $brand_id);
            }
        } 

        if(!empty($_FILES['pic3']['name'])){
             $img3= basename($_FILES['pic3']['name']);
             $img3=explode('.',$img3);
             $photo3=$img3[0];
             $ext3=$img3[1];
            
            if($ext3=='php' || ($ext3 != 'png' && $ext3 != 'jpg' && $ext3 != 'jpeg' && $ext3 != 'PNG' && $ext3 != 'JPG' && $ext3 != 'JPEG')){
                $error_ext++;
            } else {
                $filename3=$photo3.'-3.'.$ext3;
                move_uploaded_file($_FILES["pic3"]['tmp_name'], $dest.'/'.$filename3);
                $data_pic3 = array(
                    'image3'=>$filename3
                );
                $this->super_model->update_where("brand_new", $data_pic3, "brand_id", $brand_id);
            }
        }

        $client = trim($this->input->post('client')," ");
        $insurer = trim($this->input->post('insurer')," ");
        $insurance = trim($this->input->post('insurance')," ");
        $delivery_date = trim($this->input->post('delivery_date')," ");
        $conduction = trim($this->input->post('conduction')," ");
        $unit = trim($this->input->post('unit')," ");
        $bank = trim($this->input->post('bank')," ");
        $policy = trim($this->input->post('policy')," ");
        $amount = trim($this->input->post('amount')," ");
        $date_paid = trim($this->input->post('date_paid')," ");
        $data = array(
            'client_name'=>$client,
            'insurer'=>$insurer,
            'ins_coverage'=>$insurance,
            'delivery_date'=>$delivery_date,
            'conduction_sticker'=>$conduction,
            'unit'=>$unit,
            'bank_id'=>$bank,
            'policy_no'=>$policy,
            'amount'=>$amount,
            'date_paid'=>$date_paid,
        );

        if($this->super_model->update_where("brand_new", $data, "brand_id", $brand_id)){
           echo "<script>alert('Successfully Updated!'); 
                window.location ='".base_url()."index.php/encode/brandnew_form_update/$brand_id'; </script>";
        }
    }

    public function client_data(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $data['brand_new'] = $this->super_model->select_all_order_by('brand_new', 'client_name', 'ASC');
        $this->load->view('encode/client_data',$data);
        $this->load->view('template/footer');
    }

    public function insert_client(){
        $client = trim($this->input->post('client')," ");
        $brand = trim($this->input->post('brand')," ");
        $unit = trim($this->input->post('unit')," ");
        $plate_no = trim($this->input->post('plate_no')," ");
        $contact = trim($this->input->post('contact')," ");
        $insurance = trim($this->input->post('insurance')," ");
        $expiry = trim($this->input->post('expiry')," ");
        $data = array(
            'brand_id'=>$client,
            'brand'=>$brand,
            'unit'=>$unit,
            'plate_no'=>$plate_no,
            'contact'=>$contact,
            'insurance'=>$insurance,
            'expiry'=>$expiry,
            'user_id'=>$_SESSION['user_id'],
            'date_encoded'=>date('Y-m-d'),
        );

        if($this->super_model->insert_into("client_data", $data)){
           echo "<script>alert('Successfully Added!'); 
                window.location ='".base_url()."index.php/encode/client_data'; </script>";
        }
    }

    public function client_data_update(){
        $client_id =$this->uri->segment(3);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $data['brand_new'] = $this->super_model->select_all_order_by('brand_new', 'client_name', 'ASC');
        $data['client'] = $this->super_model->select_row_where('client_data', 'client_id', $client_id);
        $this->load->view('encode/client_data_update',$data);
        $this->load->view('template/footer');
    }

    public function update_client(){
        $client_id = trim($this->input->post('client_id')," ");
        $client = trim($this->input->post('client')," ");
        $brand = trim($this->input->post('brand')," ");
        $unit = trim($this->input->post('unit')," ");
        $plate_no = trim($this->input->post('plate_no')," ");
        $contact = trim($this->input->post('contact')," ");
        $insurance = trim($this->input->post('insurance')," ");
        $expiry = trim($this->input->post('expiry')," ");
        $data = array(
            'brand_id'=>$client,
            'brand'=>$brand,
            'unit'=>$unit,
            'plate_no'=>$plate_no,
            'contact'=>$contact,
            'insurance'=>$insurance,
            'expiry'=>$expiry,
        );

        if($this->super_model->update_where("client_data", $data, "client_id", $client_id)){
           echo "<script>alert('Successfully Updated!'); 
                window.location ='".base_url()."index.php/encode/client_data_update/$client_id'; </script>";
        }
    }
}
