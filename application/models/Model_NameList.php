<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_NameList extends CI_Model {

    public function fetch(){
        // $this->db->from('name_list');
        // $this->db->order_by("id", "desc");
        $query = $this->db->query('SELECT *FROM name_list ORDER BY id DESC');
        return $query->result();
    }

    public function insertData($data=array()){
        $this->db->insert('name_list',$data);
    }
    public function workersList($id){
        $query=$this->db->query("SELECT *FROM workers WHERE name_list_id='$id'");
        return $query->result_array();
    }
  
    public function move_toList($user_id,$nameList_id){
        $query=$this->db->query("UPDATE workers SET name_list_id='$nameList_id' WHERE id='$user_id'");
        
    }
    public function cancel_move($id){
        $this->db->query("UPDATE workers SET name_list_id=0 WHERE id='$id'");

    }
    public function getNameList($nl_id){
        $where['id'] = $nl_id;
        $result_set = $this->db->get_where('name_list', $where);
        $result_arr = $result_set->result_array();
        if (!empty($result_arr)) {
            return $result_arr[0];
        }
    }
    public function edit($id){
        $where['id']=$id;
        $query=$this->db->get_where('name_list',$where);
        return $query->result();
    }
    public function update($name,$note,$id){
        $query=$this->db->query("UPDATE name_list set name='$name',note='$note' WHERE id='$id'");
    }
    
    public function getDoc($id){
        $query=$this->db->query("SELECT worker_attached.file_name,worker_attached.number,workers.k_fname,
        workers.k_lname,workers.e_fname,workers.e_lname,workers.gender,workers.dob,workers.birth_province,
        provinces.name,affiliates.name as aname FROM workers INNER JOIN worker_attached 
        ON workers.id=worker_attached.worker_id  JOIN provinces ON provinces.id=workers.birth_province
         JOIN affiliates ON affiliates.id=workers.affiliate WHERE worker_attached.doc_type=2 AND 
         workers.name_list_id='$id'");
        return $query->result();
    }
    public function getCount($id){
        $query=$this->db->query("SELECT COUNT(*) as total FROM workers INNER JOIN worker_attached 
        ON workers.id=worker_attached.worker_id  JOIN provinces ON provinces.id=workers.birth_province
         JOIN affiliates ON affiliates.id=workers.affiliate WHERE worker_attached.doc_type=2 AND 
         workers.name_list_id='$id'");
         $result_arr=$query->result_array();
        if (!empty($result_arr)) {
            return $result_arr[0];
        }

    }
    public function getCountFemale($id)
    {
        $query = $this->db->query("SELECT COUNT(*) as total FROM workers INNER JOIN worker_attached 
        ON workers.id=worker_attached.worker_id  JOIN provinces ON provinces.id=workers.birth_province
         JOIN affiliates ON affiliates.id=workers.affiliate WHERE worker_attached.doc_type=2 AND 
         workers.name_list_id='$id' AND workers.gender='Female'");
        $result_arr = $query->result_array();
        if (!empty($result_arr)) {
            return $result_arr[0];
        }
    }
    public function getCompany(){
        $query=$this->db->query("SELECT *FROM employers");
        return $query->result();
    }
    public function saveForm1($id, $arm_num, $date, $month, $year, $company_name){
        $query=$this->db->query("UPDATE name_list SET arm_num='$arm_num', day='$date', month='$month', year='$year', company_name='$company_name' WHERE id='$id'");

    }
    public function getNumDate($id){
        $query=$this->db->query("SELECT *FROM name_list WHERE id='$id'");
        $result_arr=$query->result_array();
        if (!empty($result_arr)) {
            return $result_arr[0];
        }
    }
    public function getCompanyName($id)
    {
        $query = $this->db->query("SELECT employers.e_name,employers.add1 FROM employers JOIN name_list on employers.id=name_list.company_name WHERE name_list.id='$id'");
        $result_arr = $query->result_array();
        if (!empty($result_arr)) {
            return $result_arr[0];
        }
    }
    public function getData($id){
        $query=$this->db->query("SELECT workers.e_fname,workers.e_lname,provinces.en_name,workers.dob,worker_attached.number,
                                    worker_attached.issue_date,worker_attached.expired_date,villages.en_name as c_village,
                                    communes.en_name as c_communes ,districts.en_name as c_districts,provinces.en_name as c_provinces,worker_attached.file_name 
                                    FROM workers 
                                    JOIN provinces ON workers.birth_province=provinces.id 
                                    JOIN worker_attached on workers.id=worker_attached.worker_id
                                    JOIN villages on villages.id=workers.cur_add_village
                                    JOIN communes on communes.id=workers.cur_add_commune
                                    JOIN districts on districts.id=workers.cur_add_district
                                    WHERE workers.name_list_id='$id'");
        $data=$query->result();
        if(!empty($data)){
            return $data;
        }
    }
    public function getCompany4Visa($id){
        $query=$this->db->query( "SELECT e_name,add1,mobile FROM employers WHERE id='$id'");
        $result_arr=$query->result_array();
        if(!empty($result_arr)){
            return $result_arr[0];
        }
    }
    public function getUserData($id){
        
    }
}