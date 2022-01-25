<?php 
class Model_WorkerParent extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
	
	public function all()
	{
		$result_set = $this->db->get('worker_parents');
		return $result_set->result_array();
	}
	
	public function get_by($id)
	{
		$where['worker_id'] = $id;
		$result_set = $this->db->get_where('worker_parents', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)) {
			return $result_arr[0];
		}
	}
	
	public function update($id, $new_data)
	{
		$where['worker_id'] = $id;
		$this->db->update('worker_parents', $new_data, $where);
	}
	
	public function get_detail_by($id)
	{
		$sql = "SELECT worker_parents.*, job_title.name ";
		$sql .= "FROM worker_parents ";
		$sql .= "INNER JOIN job_title ON (worker_parents.f_accupation = job_title.id) ";
		$sql .= "WHERE worker_parents.worker_id = $id ";
		
		$result_set = $this->db->query($sql);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)) {
			return $result_arr[0];
		}
	}
	public function getAdd($id){
		$sql = 'Select worker_parents.*, ';
		$sql .= 'provinces.name empname, ';
		$sql .= 'districts.name emdname, ';
		$sql .= 'communes.name emcname, ';
		$sql .= 'villages.name emvname ';
		$sql .= 'FROM worker_parents ';
		$sql .= 'INNER JOIN provinces ON (worker_parents.pcur_add_province = provinces.id) ';
		$sql .= 'INNER JOIN districts ON (worker_parents.pcur_add_district = districts.id) ';
		$sql .= 'INNER JOIN communes ON (worker_parents.pcur_add_commune = communes.id) ';
		$sql .= 'INNER JOIN villages ON (worker_parents.pcur_add_village = villages.id) ';
		$sql .= "WHERE worker_id = {$id}";
		$result_set = $this->db->query($sql);
		$result_arr = $result_set->result_array();
		if (!empty($result_arr)) {
			return $result_arr[0];
		}
	}
}