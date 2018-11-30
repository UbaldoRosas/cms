<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
    }
    
	public function add($table, $data)
	{	
		if($this->db->insert($table, $data))
			return $this->db->insert_id();
		return false;
    }
    
	public function update($data, $where, $table)
	{
		$this->db->set($data);
		$this->db->where($where);
		return $this->db->update($table);
    }
    
	/*
	this function no delete row, only change column "status"
    */
    
	public function delete($data, $where, $table)
	{
		$this->db->set($data);
		$this->db->where($where);
		return $this->db->update($table);
    }
    
	public function erase($where, $table, $where2 = null)
	{
		$this->db->where($where);

		if ($where2 !== null) {
			$this->db->where($where2);
		}
		
		return $this->db->delete($table);
    }
    
	public function get_data($table, $where = null, $order = null)
	{
		if($where !== null){
			$this->db->where($where);
		}
		if($order !== null){
			$this->db->order_by($order);
		}
		$q = $this->db->get($table);
		return $q->result();
    }
    
	public function get_data_join($select, $table, $table_j, $on, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($table_j, $on);
		$this->db->where($where);
		$q = $this->db->get();
		return $q->result();
	}
	
}

/* End of file Crud_model.php */
/* Location: ./application/models/Crud_model.php */