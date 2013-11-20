<?php
class mssqlcontroller extends CI_Controller{
	
	function add(){
		if($_POST){
			$this->id=$this->input->post('idbarang');
			$this->nama=$this->input->post('nama');
			$this->categori_id=$this->input->post('kategori');
			$this->harga_beli=$this->input->post('harga');
			
			//save
			$this->db->insert('barang',$this);
			redirect('mssqlcontroller');
			
		}else{
			$this->load->view('mssqlcontroller/add');
		}
	}
	
	function index(){
		$data=$this->db->get('barang');
		foreach($data->result() as $datas):
			echo $datas->nama.'-'.$datas->harga_beli.'<br>';
		endforeach;	
	}
	
}
