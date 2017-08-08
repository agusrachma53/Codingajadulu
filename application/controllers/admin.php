<!--

indexing

1. function index
2. function insert product

-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('admin_proses');
  }


// (1)
	public function index()
	{
    $table_array = array('post');
    $data['category_brand'] = $this->admin_proses->show_post($table_array);
		$this->load->view('admin/admin_home');
	}
// end (1)

// (2)
  public function insert_product(){
    $tombol = $this->input->post('insert');
    if($tombol != 'Insert'){
      echo "Error";
    }else{
      $product_array = array(
        'name_product' => $this->input->post('name_product'),
        'category' => $this->input->post('category'),
        'brand' => $this->input->post('brand'),
        'qty' => $this->input->post('qty'),
        'price' => $this->input->post('price'),
        'discount' => $this->input->post('discount'),
        'image' => $_FILES['userfile']['name']
      );
      $data = $this->admin_proses->insert('product',$product_array);
    }
  }
// end (2)


}
