<?php
class Clubs extends CI_Controller{
	function add(){
		if(!$_POST){
			$this->load->view('clubs/add');
		}else{
			$this->name=$this->input->post('name');
			$this->country_id=$this->input->post('country');
			
			$this->db->insert('clubs',$this);
		}
	}
	
	function index(){
		
		//$data['clubs']=$this->db->get('clubs')->result();
		$getData=$this->db->get('clubs')->result();
		foreach($getData as $fetc):
			$dJson[]=$fetc;
		endforeach;	
		$json=json_encode($dJson);
		$data['data']=json_decode($json,TRUE);
		$this->load->view('clubs/index',$data);
	}
}
?>