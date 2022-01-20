<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NameListPrint extends CI_Controller{
 public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        $this->load->database();
    }

    public function BioPrint($id){
        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;
        $this->load->model('Model_NameList');
        
        $data['userDoc']=$this->Model_NameList->getDoc($id);
        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside');
        $this->load->view('printing/bio_interview',$data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
    public function internalFile1($id)
    {
        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;
        $this->load->model('Model_NameList');
        $data['totalCount']=$this->Model_NameList->getCount($id);
        $data['totalFemale']=$this->Model_NameList->getCountFemale($id);
        $data['num_date'] = $this->Model_NameList->getNumDate($id);
        $data['companyName'] = $this->Model_NameList->getCompanyName($id);
        $data['listId']=$id;

        // $data['userDoc'] = $this->Model_NameList->getDoc($id);
        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside');
        $this->load->view('printing/internal_file1',$data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
    public function add_info_form1($id){
        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;
        $this->load->model('Model_NameList');
        $data['company']=$this->Model_NameList->getCompany();
        $data['listId']=$id;
       

        // $data['userDoc'] = $this->Model_NameList->getDoc($id);
        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside');
        $this->load->view('name_list/add_info_form1',$data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
    public function storeForm1($id){
        $this->form_validation->set_rules('arm_num', 'ARM Number', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('month', 'Month', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('company_name', 'Compnay Name', 'required');
        if ($this->form_validation->run()) {
         
                $arm_num = $this->input->post('arm_num');
                $date = $this->input->post('date');
                $month = $this->input->post('month');
                $year = $this->input->post('year');
                $company_name = $this->input->post('company_name');
            
            $this->load->model('Model_NameList');
            $this->Model_NameList->saveForm1($id,$arm_num,$date,$month,$year,$company_name);
            return redirect(base_url('index.php/NameListPrint/internalFile1/'.$id));
        } else {
            return;
        }
    }
    public function internalFile2($id)
    {
        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;
        $this->load->model('Model_NameList');
        $data['totalCount'] = $this->Model_NameList->getCount($id);
        $data['totalFemale'] = $this->Model_NameList->getCountFemale($id);
        $data['num_date'] = $this->Model_NameList->getNumDate($id);
        $data['companyName'] = $this->Model_NameList->getCompanyName($id);
        $data['listId'] = $id;

        // $data['userDoc'] = $this->Model_NameList->getDoc($id);
        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside');
        $this->load->view('printing/internal_file2', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
    public function add_info_form2($id)
    {
        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;
        $this->load->model('Model_NameList');
        $data['company'] = $this->Model_NameList->getCompany();
        $data['listId'] = $id;


        // $data['userDoc'] = $this->Model_NameList->getDoc($id);
        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside');
        $this->load->view('name_list/add_info_form1', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
    public function storeForm2($id)
    {
        $this->form_validation->set_rules('arm_num', 'ARM Number', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('month', 'Month', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('company_name', 'Compnay Name', 'required');
        if ($this->form_validation->run()) {

            $arm_num = $this->input->post('arm_num');
            $date = $this->input->post('date');
            $month = $this->input->post('month');
            $year = $this->input->post('year');
            $company_name = $this->input->post('company_name');

            $this->load->model('Model_NameList');
            $this->Model_NameList->saveForm1($id, $arm_num, $date, $month, $year, $company_name);
            return redirect(base_url('index.php/NameListPrint/internalFile1/' . $id));
        } else {
            return;
        }
    }
    public function app_4visa($id){
        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;
        $this->load->model('Model_NameList');
        
        $data['listId'] = $id;

        $data['userDoc'] = $this->Model_NameList->getData($id);
        $data['company'] = $this->Model_NameList->getCompany4Visa($id);
        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside');
        $this->load->view('printing/app_4visa', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
    public function user_form($id){
        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;
        $this->load->model('Model_NameList');
       
        $data['listId'] = $id;
        $data['userInfo']=$this->Model_NameList->getUserData($id);
        $data['company'] = $this->Model_NameList->getCompany4Visa($id);
        $data['totalCount'] = $this->Model_NameList->getCount($id);

        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside');
        $this->load->view('printing/user_form',$data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }

}