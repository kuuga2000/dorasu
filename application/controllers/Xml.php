<?php
class Xml extends CI_Controller{
	
	public function index(){
		$this->load->view('xml/index');
	}
	
	public function read(){
		$this->load->view('xml/read');
	}
	
}
