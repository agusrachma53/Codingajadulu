<!--

indexing

1. function index
2. function Blog

-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

  function __construct(){
    parent::__construct();
  }


// (1)
	public function index()
	{
    $data['latest_post'] = $this->db->get('post', 1);
		$this->load->view('user/user_home',$data);
	}
// end (1)


public function show_blog(){
  $this->load->view('user/user_blog');
}


}
