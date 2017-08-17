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
  // $date = date('Y/m/d');
  // $sql = "SELECT * FROM post WHERE 'date' <= " . $date;
  // $data = $this->db->query($sql);
  // if($data){
  //   foreach($data->result() as $year){
  //     $yearstr = substr($year->date,0,4);
  //     echo "<div style='display:block'>
  //         <ul>
  //           <li>" . $yearstr . "
  //             <ul>
  //               <li>" .
  //                 $bulan = substr($year->date,5,2);
  //                 print_r($bulan)
  //               . "</li>
  //             </ul>
  //           </li>
  //         </ul>
  //     </div>";
  //   }
  // }
  //     exit;


  $this->load->view('user/user_blog');
}


}
