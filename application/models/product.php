<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function get_all_products()
	{
		$query = "SELECT * FROM products ORDER BY updated_at DESC";
		$result = $this->db->query($query)->result_array();
		return $result;
	}

	public function validate_product($post)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Product Name', 'required|trim');
		$this->form_validation->set_rules('description', 'Product Description', 'required|trim');
		$this->form_validation->set_rules('price', 'Product Price', 'required|trim|decimal');

		if($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function create($post)
	{
		$query = "INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?,?,?,NOW(),NOW())";
		$this->db->query($query, $post);
	}

	public function show($id)
	{
		$query = "SELECT * FROM products WHERE id= '$id'";
		$result = $this->db->query($query)->row_array();
		return $result;
	}

	public function edit($post, $id)
	{
		$query = "UPDATE `inventory`.`products` SET `name`= ?, `description`= ?, `price`= ?, updated_at = NOW()  WHERE `id`='$id'";
		$this->db->query($query, $post);

	}
}