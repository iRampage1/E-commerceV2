<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		$this->load->model('product_model');
		$result=$this->product_model->index();
		$data=array('productlist'=>$result);
		$this->load->view("product",$data);
	}
	function insert()
	{
		$id=Null;
		$name=Null;
		$code=Null;
		$stock=Null;
		$image=Null;
		$price=Null;
		extract($_POST);
		$param['produc_name']=$name;
		$param['produc_code']=$code;
		$param['produc_stock']=$stock;
		$param['produc_image']=$image;
		$param['produc_price']=$price;
		if(isset($name))
		{

			$this->load->model('product_model');
			$result = $this->product_model->insert($param);
			$this->index();
		
		}
	}
	function view($x='')
	{
		$data['condition']=array('id'=>$x);
		$this->load->model('product_model');
		$result=$this->product_model->view($data);
		$data=array('index'=>$result);
		$this->load->view('product_edit',$data);
	}
	function update()
	{

		$name=Null;
		$code=Null;
		$stock=Null;
		$image=Null;
		$price=Null;
		extract($_POST);
		$param['id']=$id;
		$param['produc_name']=$name;
		$param['produc_code']=$code;
		$param['produc_stock']=$stock;
		$param['produc_image']=$image;
		$param['produc_price']=$price;
		if(isset($name))
		{

			$this->load->model('product_model');
			$result = $this->product_model->update($param);
			$this->index();
		
		}
		else{
			echo "cannot";
		}
	}
	function delete($x='')
	{
		$data['condition']=array('id'=>$x);
		$this->load->model('product_model');
		$re=$this->product_model->delete($data);
		$this->index();
	}

}
