<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CurdController extends CI_Controller {

	
	public function index()
    { $addData = $this->db->get('adduser');
      
        print_r( $addData);
		 $this->load->view('show');
    }
    
    public function add()
	{
		$this->load->view('adddata');
    }
    public function addData()
	{
         
      $data = array();
      $data['name'] = $this->input->post('name');
      $data['email'] =  $this->input->post('email');
      $hobby = array( $this->input->post('hobby'));

      for($i=0;$i<count($hobby);$i++){
        $data['hobby']  = $hobby[$i];     
    }


      
      if(!$data){
         echo "please fill all the data";
      }


      $this->db->insert('adduser',$data);

      return redirect('CurdController/index');

     
	
    }
    
}
