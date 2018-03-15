<?php
class Product_model extends CI_Model{

	public function __construct()
	{

		parent::__construct();
	}
	function index()

	{
		//select * from tblproduct
		return $this->db->get('tblproduct');
	}
	function insert($param)
	{
		$field=array(
			'pro_name'=>$param['produc_name'],
			'pro_code'=>$param['produc_code'],
			'pro_stock'=>$param['produc_stock'],
			'pro_image'=>$param['produc_image'],
			'pro_price'=>$param['produc_price']
			);
		$this->db->insert("tblproduct",$field);
	}
	function view($param)
	{
		$query=$this->db->get_where('tblproduct',$param['condition']);
		return $query->row_array();
	}
	function update($param)
	{
		$field=array(
			'pro_name'=>$param['produc_name'],
			'pro_code'=>$param['produc_code'],
			'pro_stock'=>$param['produc_stock'],
			'pro_image'=>$param['produc_image'],
			'pro_price'=>$param['produc_price']
			);
		$condition=array('id'=>$param['id']);
		$query=$this->db->get_where('tblproduct',$condition);
		$result=$query->result_array();
		if(!empty($result))
		{
			$this->db->where($condition);
			$this->db->update('tblproduct',$field);
		}
	}
	function delete($param)
	{
		$this->db->delete('tblproduct',$param['condition']);
	}

	
	
}