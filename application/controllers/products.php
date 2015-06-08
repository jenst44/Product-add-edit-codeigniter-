<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(true);
	}

	public function index()
	{
		$this->load->model('product');
		$products = $this->product->get_all_products();
		$this->load->view('index', array('products' => $products));
	}

	public function NewProduct()
	{
		$this->load->view('newProducts');
	}

	public function AddProduct()
	{
		$this->load->model('product');
		if($this->product->validate_product($this->input->post()) == FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('/products/NewProductRedirect');
		}
		else
		{
			$this->product->create($this->input->post());
			$this->session->set_flashdata('create_success', 'Product creation was successful!');
			redirect('/');
		}
	}

	public function NewProductRedirect()
	{
		$this->load->view('newProducts', array('error' => $this->session->flashdata('error')));
	}

	public function Show($id)
	{
		$this->load->model('product');
		$product = $this->product->show($id);
		$this->load->view('show', array('product' => $product));
	}

	public function Edit($id)
	{
		$this->load->model('product');
		$product = $this->product->show($id);
		$this->load->view('edit', array('id' => $id, 'product' => $product));
	}

	public function EditProduct($id)
	{
		$this->load->model('product');
		if($this->product->validate_product($this->input->post()) == FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('/products/edit/'.$this->input->post('id'));
		}
		else
		{
			$this->product->edit($this->input->post(),$id);
			$this->session->set_flashdata('create_success', 'Product edit was successful!');
			redirect('/');
		}
	}
}
