<?php


defined('BASEPATH') or exit('No direct script access allowed');


class NameList extends CI_Controller
{

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
        $this->load->view('name_list/index', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }

    public function create()
    {
        log_message('debug', 'My First Log');

        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;

        $data['groups'] = $this->Model_Group->all();


        //print_r($data['groups']);
        //	  print_r($group['0']['name']);
        $this->load->model('Model_NameList');
        $data['company'] = $this->Model_NameList->getCompany();

        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside', $data);
        $this->load->view('name_list/create', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
    public function store()
    {
        $this->form_validation->set_rules('name', 'Name List', 'required');
        if ($this->form_validation->run()) {
            $data = [
                'name' => $this->input->post('name'),
                'note' => $this->input->post('note'),
                'day' => '0',
                'month' => '0',
                'year' => '0',
                'arm_num' => '0',
                'company_name' => $this->input->post('company_name'),
            ];
            $this->load->model('Model_NameList');
            $this->Model_NameList->insertData($data);
            return redirect(base_url('index.php/NameList'));
        } else {
            $this->create();
        }
    }
    public function view_detail($id)
    {
        log_message('debug', 'My First Log');

        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;
        $this->load->model('Model_NameList');
        $data['nameLists'] = $this->Model_NameList->workersList($id);
        $data['listId'] = $id;

        //print_r($data['groups']);
        //	  print_r($group['0']['name']); 

        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside');
        $this->load->view('name_list/name_list_detail', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
    public function add_worker($id)
    {
        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;
        $this->load->model('Model_NameList');

        $data['workers'] = $this->Model_Worker->all_workers();
        $data['listId'] = $id;
        $data['order_by'] = $this->Model_NameList->getOrderBy();



        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside', $data);
        $this->load->view('name_list/add_worker', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
    public function move($user_id, $nameList_id, $order_by)
    {
        $this->load->model('Model_NameList');
        $data['order_by'] = $this->Model_NameList->getOrderBy();
        $this->Model_NameList->move_toList($user_id, $nameList_id, $order_by);
        return redirect(base_url('index.php/NameList/add_worker/' . $nameList_id));
    }
    public function moveOn()
    {
        // $data['call_method'] =  $this->router->fetch_method();
        // $worker_id = $_POST['worker_id'];
        // $listId = $_POST['listId'];
        // $order_by = $_POST['order_by'];
        // $this->load->model('Model_NameList');
        // $this->Model_NameList->move_toList($worker_id, $listId, $order_by);
        return redirect(base_url('index.php/NameList/add_worker/' . 5));
    }
    public function cancel_move($user_id, $nameList_id)
    {
        $this->load->model('Model_NameList');
        $this->Model_NameList->cancel_move($user_id);
        return redirect(base_url('index.php/NameList/view_detail/' . $nameList_id));
    }
    public function edit($id)
    {
        $userdata['user_name'] = $this->session->fname;
        $userdata['user_email'] = $this->session->email;
        $userdata['user_id'] = $this->session->id;
        $userdata['avata'] = $this->session->image_file;

        $this->load->model('Model_NameList');
        $data['edit_data'] = $this->Model_NameList->edit($id);
        $data['company'] = $this->Model_NameList->getCompany();
        $data['comName'] = $this->Model_NameList->getCom($id);


        $this->load->view('included/head');
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside', $data);
        $this->load->view('name_list/edit', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
    }
    public function update($id)
    {
        $name = $this->input->post('name');
        $note = $this->input->post('note');
        $company = $this->input->post('company_name');
        $this->load->model('Model_NameList');
        $this->Model_NameList->update($name, $note, $company, $id);
        return redirect(base_url('index.php/NameList'));
    }
}
