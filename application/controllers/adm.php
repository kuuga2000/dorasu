<?php
class Adm extends CI_Controller{
	function club(){
		//$this->output->cache(1);
		$data['content']='clubs/vclubs';
		$this->load->view('template/main',$data);
	}
}
?>