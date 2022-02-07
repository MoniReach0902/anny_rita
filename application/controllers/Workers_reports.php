<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class Workers_reports extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        $this->load->database();
    }
    public function index()
    {
        log_message('debug', 'My First Log');

        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;
        $this->load->model('Model_NameList');
        $data['nameLists'] = $this->Model_NameList->fetch();

        //print_r($data['groups']);
        //	  print_r($group['0']['name']);

        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside');
        $this->load->view('workers_reports/index', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
    public function search(){
        $this->load->model('Model_NameList');
        $this->load->helper('date');
        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;

        $f_date = $this->input->post('from_date'); 
        $t_date = $this->input->post('to_date');
        
        
        $data['results'] = $this->Model_NameList->searchDate($f_date, $t_date);

        //print_r($data['groups']);
        //	  print_r($group['0']['name']);

        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside');
        $this->load->view('workers_reports/report1', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
}