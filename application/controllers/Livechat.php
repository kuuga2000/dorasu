<?php
class Livechat extends CI_Controller{
	
	public $user_i;
	
	public function __construct(){
		parent::__construct();
		session_start();
		
	}
	
	public function index(){
		$this->load->view("livechat/index");
	}
	
	public function reg(){
		$data = array(
			'name' =>$this->input->post('id'),
		);	
		
		$this->db->insert('users',$data);
		$_SESSION['uid'] = mysql_insert_id();
	}
	
	public function send(){
		
		$data = array(
			'chat' =>$this->input->post('chat'),
			'user_id'=> $_SESSION['uid']
		);
		
		
		
		$this->db->insert('threads',$data);
		
		$threads=$this->db->query("SELECT users.name,threads.chat 
						  FROM users,threads
						  WHERE users.id = threads.user_id 
						  AND threads.user_id=(
    					  SELECT max(id) FROM users)")->row();
		
		
		echo "<div id=cnc>".$threads->name ." : " . $threads->chat."</div>";
		
		//echo $this->input->post("idchat");

	}
	
}