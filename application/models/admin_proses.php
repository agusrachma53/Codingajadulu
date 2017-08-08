<!--

indexing
1. show category and brand
2. insert product


-->


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_proses extends CI_Model {


// 1. show category and brand
public function show_brand_category($table_array = ''){
  $this->db->select("*");
  $this->db->from($table_array[1]);
  $data = $this->db->join($table_array[0], "$table_array[0].id = $table_array[1].id" );
  $query = $this->db->get();
  if($query){
    $data = $query->result();
    return $data;
  }else{
    return false;
  }
}
// end (1)

// 2. insert product
public function insert($table = '', $query = ''){
  $data = $this->db->insert($table,$query);
}
// end (2)

// 3. Show Post

public function show_post($table_array = ''){
  $data = $this->db->get($table_array[0]);
  if($data){
    $data = $data->result();
    return $data;
  }else{
    return false;
  }
}


// end (3)

}
