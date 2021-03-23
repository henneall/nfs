<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

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

    public function brandnew_report(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $data['bank']=$this->super_model->select_all_order_by("bank","bank_name","ASC");
        $data['client_list']=$this->super_model->select_all_order_by("brand_new","client_name","ASC");
        foreach($this->super_model->select_all_order_by("brand_new","delivery_date","DESC") AS $b){
            $bank=$this->super_model->select_column_where("bank","bank_name","bank_id",$b->bank_id);
            $bank_location=$this->super_model->select_column_where("bank","bank_location","bank_id",$b->bank_id);
            $data['brandnew'][]=array(
                "brand_id"=>$b->brand_id,
                "delivery_date"=>$b->delivery_date,
                "client_name"=>$b->client_name,
                "ins_coverage"=>$b->ins_coverage,
                "bank"=>$bank,
                "bank_location"=>$bank_location,
            );
        }
        $this->load->view('report/brandnew_report',$data);
        $this->load->view('template/footer');
    }

    public function view_brandnew(){
        $brand_id=$this->uri->segment(3);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        foreach($this->super_model->select_row_where("brand_new","brand_id",$brand_id) AS $b){
            $bank=$this->super_model->select_column_where("bank","bank_name","bank_id",$b->bank_id);
            $bank_location=$this->super_model->select_column_where("bank","bank_location","bank_id",$b->bank_id);
            $data['brandnew'][]=array(
                "brand_id"=>$b->brand_id,
                "delivery_date"=>$b->delivery_date,
                "client_name"=>$b->client_name,
                "ins_coverage"=>$b->ins_coverage,
                "insurer"=>$b->insurer,
                "unit"=>$b->unit,
                "date_paid"=>$b->date_paid,
                "policy_no"=>$b->policy_no,
                "conduction_sticker"=>$b->conduction_sticker,
                "image1"=>$b->image1,
                "image2"=>$b->image2,
                "image3"=>$b->image3,
                "amount"=>$b->amount,
                "bank"=>$bank,
                "bank_location"=>$bank_location,
            );
        }
        $this->load->view('report/view_brandnew',$data);
        $this->load->view('template/footer');
    }

    public function filter_brandnew(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $data['client_list']=$this->super_model->select_all_order_by("brand_new","client_name","ASC");
        $data['bank']=$this->super_model->select_all_order_by("bank","bank_name","ASC");
        if(!empty($this->input->post('del_from'))){
            $data['del_from'] = $this->input->post('del_from');
        } else {
            $data['del_from']= "null";
        }

        if(!empty($this->input->post('del_to'))){
            $data['del_to'] = $this->input->post('del_to');
        } else {
            $data['del_to']= "null";
        }

        if(!empty($this->input->post('datep_from'))){
            $data['datep_from'] = $this->input->post('datep_from');
        } else {
            $data['datep_from']= "null";
        }

        if(!empty($this->input->post('datep_to'))){
            $data['datep_to'] = $this->input->post('datep_to');
        } else {
            $data['datep_to']= "null";
        }

        if(!empty($this->input->post('client'))){
            $data['client'] = $this->input->post('client');
        } else {
            $data['client']= "null";
        }

        if(!empty($this->input->post('bank'))){
            $data['banks'] = $this->input->post('bank');
        } else {
            $data['banks']= "null";
        }

        if(!empty($this->input->post('insurer'))){
            $data['insurer'] = $this->input->post('insurer');
        } else {
            $data['insurer']= "null";
        }

        if(!empty($this->input->post('insurance'))){
            $data['insurance'] = $this->input->post('insurance');
        } else {
            $data['insurance']= "null";
        }

        if(!empty($this->input->post('unit'))){
            $data['unit'] = $this->input->post('unit');
        } else {
            $data['unit']= "null";
        }

        if(!empty($this->input->post('policy_no'))){
            $data['policy_no'] = $this->input->post('policy_no');
        } else {
            $data['policy_no']= "null";
        }

        if(!empty($this->input->post('conduction'))){
            $data['conduction'] = $this->input->post('conduction');
        } else {
            $data['conduction']= "null";
        }

        if(!empty($this->input->post('amount'))){
            $data['amount'] = $this->input->post('amount');
        } else {
            $data['amount']= "null";
        }

        $sql="";
        $filter = "";
        if(!empty($this->input->post('del_from')) && !empty($this->input->post('del_to'))){
            $del_from = $this->input->post('del_from');
            $del_to = $this->input->post('del_to');
            $sql.= " delivery_date BETWEEN '$del_from' AND '$del_to' OR";
            $filter .= "Delivery Date - ".$del_from.' <strong>To</strong> '.$del_to.", ";
        }

        if(!empty($this->input->post('datep_from')) && !empty($this->input->post('datep_to'))){
            $datep_from = $this->input->post('datep_from');
            $datep_to = $this->input->post('datep_to');
            $sql.= " date_paid BETWEEN '$datep_from' AND '$datep_to' OR";
            $filter .= "Date Paid - ".$datep_from.' <strong>To</strong> '.$datep_to.", ";
        }

        if(!empty($this->input->post('client'))){
            $client = $this->input->post('client');
            $sql.=" client_name LIKE '%$client%' OR";
            $filter .= "Client Name - ".$client.", ";
        }

        if(!empty($this->input->post('bank'))){
            $bank = $this->input->post('bank');
            $sql.=" bank_id = '$bank' OR";
            $bank_name = $this->super_model->select_column_where("bank","bank_name","bank_id",$bank);
            $filter .= "Bank Name - ".$bank_name.", ";
        }

        if(!empty($this->input->post('insurer'))){
            $insurer = $this->input->post('insurer');
            $sql.=" insurer LIKE '%$insurer%' OR";
            $filter .= "Insurer - ".$insurer.", ";
        }

        if(!empty($this->input->post('insurance'))){
            $insurance = $this->input->post('insurance');
            $sql.=" ins_coverage LIKE '%$insurance%' OR";
            $filter .= "Insurance Coverage - ".$insurance.", ";
        }

        if(!empty($this->input->post('unit'))){
            $unit = $this->input->post('unit');
            $sql.=" unit LIKE '%$unit%' OR";
            $filter .= "Unit - ".$unit.", ";
        }

        if(!empty($this->input->post('policy_no'))){
            $policy_no = $this->input->post('policy_no');
            $sql.=" policy_no LIKE '%$policy_no%' OR";
            $filter .= "Policy Number - ".$policy_no.", ";
        }

        if(!empty($this->input->post('conduction'))){
            $conduction = $this->input->post('conduction');
            $sql.=" conduction_sticker LIKE '%$conduction%' OR";
            $filter .= "Conduction Sticker - ".$conduction.", ";
        }

        if(!empty($this->input->post('amount'))){
            $amount = $this->input->post('amount');
            $sql.=" amount LIKE '%$amount%' OR";
            $filter .= "Amount - ".$amount.", ";
        }

        $query=substr($sql, 0, -3);
        $data['filt']=substr($filter, 0, -2);
        foreach($this->super_model->custom_query("SELECT * FROM brand_new WHERE ".$query) AS $b){
            $bank=$this->super_model->select_column_where("bank","bank_name","bank_id",$b->bank_id);
            $bank_location=$this->super_model->select_column_where("bank","bank_location","bank_id",$b->bank_id);
            $data['brandnew'][]=array(
                "brand_id"=>$b->brand_id,
                "delivery_date"=>$b->delivery_date,
                "client_name"=>$b->client_name,
                "ins_coverage"=>$b->ins_coverage,
                "bank"=>$bank,
                "bank_location"=>$bank_location,
            );
        }
        $this->load->view('report/brandnew_report',$data);
        $this->load->view('template/footer');
    }

    public function export_brandnew(){
        require_once(APPPATH.'../assets/js/phpexcel/Classes/PHPExcel/IOFactory.php');
        $objPHPExcel = new PHPExcel();
        $exportfilename="Brand New Report.xlsx";
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', "Brand New Report");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', "Delivery Date");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B2', "Client Name");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C2', "Signature");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D2', "Insurer");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E2', "Bank");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F2', "Unit");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G2', "Insurance Coverage");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H2', "Date Paid");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I2', "Policy Number");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J2', "Conduction Sticker");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K2', "Amount");

        $styleArray = array(
          'borders' => array(
            'allborders' => array(
              'style' => PHPExcel_Style_Border::BORDER_THIN
            )
          )
        );

        foreach(range('A','K') as $columnID){
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }

        $client = str_replace("%20"," ",$this->uri->segment(3));
        $del_from = $this->uri->segment(4);
        $del_to = $this->uri->segment(5);
        $datep_from = $this->uri->segment(6);
        $datep_to = $this->uri->segment(7);
        $banks = $this->uri->segment(8);
        $insurer = str_replace("%20"," ",$this->uri->segment(9));
        $insurance = str_replace("%20"," ",$this->uri->segment(10));
        $unit = str_replace("%20"," ",$this->uri->segment(11));
        $policy_no = str_replace("%20"," ",$this->uri->segment(12));
        $conduction = str_replace("%20"," ",$this->uri->segment(13));
        $amount = $this->uri->segment(14);
        

        $sql="";
        $filter = "";
        if($del_from!='null' && $del_to!='null'){
            $sql.= " delivery_date BETWEEN '$del_from' AND '$del_to' OR";
            $filter .= $del_from;
        }

        if($datep_from!='null' && $datep_to!='null'){
            $sql.= " date_paid BETWEEN '$datep_from' AND '$datep_to' OR";
            $filter .= $datep_from;
        }

        if($client!='null'){
            $sql.=" client_name LIKE '%$client%' OR";
            $filter .= $client;
        }

        if($banks!='null'){
            $sql.=" bank_id = '$banks' OR";
            $filter .= $banks;
        }

        if($insurer!='null'){
            $sql.=" insurer LIKE '%$insurer%' OR";
            $filter .= $insurer;
        }

        if($insurance!='null'){
            $sql.=" ins_coverage LIKE '%$insurance%' OR";
            $filter .= $insurance;
        }

        if($unit!='null'){
            $sql.=" unit LIKE '%$unit%' OR";
            $filter .= $unit;
        }

        if($policy_no!='null'){
            $sql.=" policy_no LIKE '%$policy_no%' OR";
            $filter .= $policy_no;
        }

        if($conduction!='null'){
            $sql.=" conduction_sticker LIKE '%$conduction%' OR";
            $filter .= $conduction;
        }

        if($amount!='null'){
            $sql.=" amount LIKE '%$amount%' OR";
            $filter .= $amount;
        }

        $query=substr($sql, 0, -3);
        $filter=substr($filter, 0, -2);
        $num=3;
        if($filter!=''){
            foreach($this->super_model->custom_query("SELECT * FROM brand_new WHERE ".$query) AS $b){
                $bank = $this->super_model->select_column_where("bank","bank_name","bank_id",$b->bank_id);
                $bank_location = $this->super_model->select_column_where("bank","bank_location","bank_id",$b->bank_id);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$num, $b->delivery_date);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$num, $b->client_name);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$num, "");
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$num, $b->insurer);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$num, $bank." - ".$bank_location);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$num, $b->unit);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$num, $b->ins_coverage);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$num, $b->date_paid);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$num, $b->policy_no);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$num, $b->conduction_sticker);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$num, $b->amount);
                $objPHPExcel->getActiveSheet()->getStyle("A".$num.':K'.$num)->applyFromArray($styleArray);
                $objPHPExcel->getActiveSheet()->getStyle('A'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $objPHPExcel->getActiveSheet()->getStyle('H'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $objPHPExcel->getActiveSheet()->getStyle('K'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $objPHPExcel->getActiveSheet()->getStyle('K'.$num)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                $num++;
            }
        }else{
            foreach($this->super_model->select_all_order_by("brand_new","client_name","ASC") AS $b){
                $bank = $this->super_model->select_column_where("bank","bank_name","bank_id",$b->bank_id);
                $bank_location = $this->super_model->select_column_where("bank","bank_location","bank_id",$b->bank_id);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$num, $b->delivery_date);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$num, $b->client_name);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$num, "");
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$num, $b->insurer);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$num, $bank." - ".$bank_location);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$num, $b->unit);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$num, $b->ins_coverage);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$num, $b->date_paid);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$num, $b->policy_no);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$num, $b->conduction_sticker);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$num, $b->amount);
                $objPHPExcel->getActiveSheet()->getStyle("A".$num.':K'.$num)->applyFromArray($styleArray);
                $objPHPExcel->getActiveSheet()->getStyle('A'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $objPHPExcel->getActiveSheet()->getStyle('H'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $objPHPExcel->getActiveSheet()->getStyle('K'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $objPHPExcel->getActiveSheet()->getStyle('K'.$num)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                $num++;
            }
        }
        $objPHPExcel->getActiveSheet()->getStyle('A2:K2')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('A2:K2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('A2:K2')->getFont()->setBold(true)->setName('Arial')->setSize(9.5);
        $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->getFont()->setBold(true)->setName('Arial Black')->setSize(12);
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        if (file_exists($exportfilename))
        unlink($exportfilename);
        $objWriter->save($exportfilename);
        unset($objPHPExcel);
        unset($objWriter);   
        ob_end_clean();
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Brand New Report.xlsx"');
        readfile($exportfilename);
    }

    public function client_report(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $data['client_list']=$this->super_model->select_all_order_by("brand_new","client_name","ASC");
        $data['bank']=$this->super_model->select_all_order_by("bank","bank_name","ASC");
        foreach($this->super_model->select_all_order_by("client_data","expiry","DESC") AS $b){
            $client_name=$this->super_model->select_column_where("brand_new","client_name","brand_id",$b->brand_id);
            $data['client'][]=array(
                "client_id"=>$b->client_id,
                "expiry"=>$b->expiry,
                "client_name"=>$client_name,
                "brand"=>$b->brand,
                "unit"=>$b->unit,
                "plate_no"=>$b->plate_no,
                "contact"=>$b->contact,
                "insurance"=>$b->insurance,
            );
        }
        $this->load->view('report/client_report',$data);
        $this->load->view('template/footer');
    }

    public function filter_client(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        if(!empty($this->input->post('exp_from'))){
            $data['exp_from'] = $this->input->post('exp_from');
        } else {
            $data['exp_from']= "null";
        }

        if(!empty($this->input->post('exp_to'))){
            $data['exp_to'] = $this->input->post('exp_to');
        } else {
            $data['exp_to']= "null";
        }

        if(!empty($this->input->post('client'))){
            $data['clients'] = $this->input->post('client');
        } else {
            $data['clients']= "null";
        }

        if(!empty($this->input->post('brand'))){
            $data['brand'] = $this->input->post('brand');
        } else {
            $data['brand']= "null";
        }

        if(!empty($this->input->post('unit'))){
            $data['unit'] = $this->input->post('unit');
        } else {
            $data['unit']= "null";
        }

        if(!empty($this->input->post('plate_no'))){
            $data['plate_no'] = $this->input->post('plate_no');
        } else {
            $data['plate_no']= "null";
        }

        if(!empty($this->input->post('contact'))){
            $data['contact'] = $this->input->post('contact');
        } else {
            $data['contact']= "null";
        }

        if(!empty($this->input->post('insurance'))){
            $data['insurance'] = $this->input->post('insurance');
        } else {
            $data['insurance']= "null";
        }
        $sql="";
        $filter = "";
        if(!empty($this->input->post('exp_from')) && !empty($this->input->post('exp_to'))){
            $exp_from = $this->input->post('exp_from');
            $exp_to = $this->input->post('exp_to');
            $sql.= " expiry BETWEEN '$exp_from' AND '$exp_to' OR";
            $filter .= "Expiry Date - ".$exp_from.' <strong>To</strong> '.$exp_to.", ";
        }

        if(!empty($this->input->post('client'))){
            $client = $this->input->post('client');
            $sql.=" brand_id = '$client' OR";
            $client_name = $this->super_model->select_column_where("brand_new","client_name","brand_id",$client);
            $filter .= "Client Name - ".$client_name.", ";
        }

        if(!empty($this->input->post('brand'))){
            $brand = $this->input->post('brand');
            $sql.=" brand LIKE '%$brand%' OR";
            $filter .= "Brand - ".$brand.", ";
        }

        if(!empty($this->input->post('unit'))){
            $unit = $this->input->post('unit');
            $sql.=" unit LIKE '%$unit%' OR";
            $filter .= "Unit - ".$unit.", ";
        }

        if(!empty($this->input->post('plate_no'))){
            $plate_no = $this->input->post('plate_no');
            $sql.=" plate_no LIKE '%$plate_no%' OR";
            $filter .= "Plate Number - ".$plate_no.", ";
        }

        if(!empty($this->input->post('contact'))){
            $contact = $this->input->post('contact');
            $sql.=" contact LIKE '%$contact%' OR";
            $filter .= "Contact - ".$contact.", ";
        }

        if(!empty($this->input->post('insurance'))){
            $insurance = $this->input->post('insurance');
            $sql.=" insurance LIKE '%$insurance%' OR";
            $filter .= "Insurance - ".$insurance.", ";
        }

        $query=substr($sql, 0, -3);
        $data['filt']=substr($filter, 0, -2);
        $data['client_list']=$this->super_model->select_all_order_by("brand_new","client_name","ASC");
        $data['bank']=$this->super_model->select_all_order_by("bank","bank_name","ASC");
        foreach($this->super_model->custom_query("SELECT * FROM client_data WHERE ".$query) AS $b){
            $client_name=$this->super_model->select_column_where("brand_new","client_name","brand_id",$b->brand_id);
            $data['client'][]=array(
                "client_id"=>$b->client_id,
                "expiry"=>$b->expiry,
                "client_name"=>$client_name,
                "brand"=>$b->brand,
                "unit"=>$b->unit,
                "plate_no"=>$b->plate_no,
                "contact"=>$b->contact,
                "insurance"=>$b->insurance,
            );
        }
        $this->load->view('report/client_report',$data);
        $this->load->view('template/footer');
    }

    public function export_client(){
        require_once(APPPATH.'../assets/js/phpexcel/Classes/PHPExcel/IOFactory.php');
        $objPHPExcel = new PHPExcel();
        $exportfilename="Client Data Report.xlsx";
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', "Client Data Report");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', "Expiry Date");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B2', "Client Name");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C2', "Plate Number");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D2', "Unit");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E2', "Brand");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F2', "Contact");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G2', "Insurance");

        $styleArray = array(
          'borders' => array(
            'allborders' => array(
              'style' => PHPExcel_Style_Border::BORDER_THIN
            )
          )
        );

        foreach(range('A','G') as $columnID){
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }

        $client = $this->uri->segment(3);
        $exp_from = $this->uri->segment(4);
        $exp_to = $this->uri->segment(5);
        $brand = $this->uri->segment(6);
        $unit = str_replace("%20"," ",$this->uri->segment(7));
        $plate_no = str_replace("%20"," ",$this->uri->segment(8));
        $contact = str_replace("%20"," ",$this->uri->segment(9));
        $insurance = str_replace("%20"," ",$this->uri->segment(10));
        
        

        $sql="";
        $filter = "";
        if($exp_from!='null' && $exp_to!='null'){
            $sql.= " expiry BETWEEN '$exp_from' AND '$exp_to' OR";
            $filter .= $exp_from;
        }

        if($client!='null'){
            $sql.=" brand_id LIKE '%$client%' OR";
            $filter .= $client;
        }

        if($brand!='null'){
            $sql.=" brand LIKE '%$brand%' OR";
            $filter .= $brand;
        }

        if($unit!='null'){
            $sql.=" unit LIKE '%$unit%' OR";
            $filter .= $unit;
        }

        if($plate_no!='null'){
            $sql.=" plate_no LIKE '%$plate_no%' OR";
            $filter .= $plate_no;
        }

        if($contact!='null'){
            $sql.=" contact LIKE '%$contact%' OR";
            $filter .= $contact;
        }

        if($insurance!='null'){
            $sql.=" insurance LIKE '%$insurance%' OR";
            $filter .= $insurance;
        }

        $query=substr($sql, 0, -3);
        $filter=substr($filter, 0, -2);
        echo $query;
        $num=3;
        if($filter!=''){
            foreach($this->super_model->custom_query("SELECT * FROM client_data WHERE ".$query) AS $b){
                $client_name=$this->super_model->select_column_where("brand_new","client_name","brand_id",$b->brand_id);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$num, $b->expiry);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$num, $client_name);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$num, $b->plate_no);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$num, $b->unit);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$num, $b->brand);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$num, $b->contact);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$num, $b->insurance);
                $objPHPExcel->getActiveSheet()->getStyle("A".$num.':G'.$num)->applyFromArray($styleArray);
                $objPHPExcel->getActiveSheet()->getStyle('A'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $objPHPExcel->getActiveSheet()->getStyle('C'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $objPHPExcel->getActiveSheet()->getStyle('G'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $num++;
            }
        }else{
            foreach($this->super_model->select_all_order_by("client_data","expiry","DESC") AS $b){
                $client_name=$this->super_model->select_column_where("brand_new","client_name","brand_id",$b->brand_id);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$num, $b->expiry);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$num, $client_name);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$num, $b->plate_no);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$num, $b->unit);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$num, $b->brand);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$num, $b->contact);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$num, $b->insurance);
                $objPHPExcel->getActiveSheet()->getStyle("A".$num.':G'.$num)->applyFromArray($styleArray);
                $objPHPExcel->getActiveSheet()->getStyle('A'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $objPHPExcel->getActiveSheet()->getStyle('C'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $objPHPExcel->getActiveSheet()->getStyle('G'.$num)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $num++;
            }
        }
        $objPHPExcel->getActiveSheet()->getStyle('A2:G2')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getStyle('A2:G2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('A2:G2')->getFont()->setBold(true)->setName('Arial')->setSize(9.5);
        $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->getFont()->setBold(true)->setName('Arial Black')->setSize(12);
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        if (file_exists($exportfilename))
        unlink($exportfilename);
        $objWriter->save($exportfilename);
        unset($objPHPExcel);
        unset($objWriter);   
        ob_end_clean();
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Client Data Report.xlsx"');
        readfile($exportfilename);
    }
}
