<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Ajax extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		$this->load->library('flexigrid');
		$this->load->model('ajax_model');
		$in = (serialize ($_POST));
		log_message('debug', "Ajax module Post -".$in);
	}
	
	function index()
	{
		//$filters = json_decode($this->input->post('filters'), true);
		// print_r($_POST['filters']);
		// $filters = json_decode($_POST['filters'], true);
		// if(isset($filters['rules'])) {
			
			// foreach($filters['rules'] as $v) {
				// switch($v['op']){
					// case 'eq' : $op = '='; break;
					// case 'bt' : $op = '>'; break;
					// case 'st' : $op = '<'; break;
					// case 'nq' : $op = '<>'; break;
				// }
				// echo $v['field'] . " " . $op . " '" . $v['data']. "'<br/>";
			// }
		// }
		//List of all fields that can be sortable. This is Optional.
		//This prevents that a user sorts by a column that we dont want him to access, or that doesnt exist, preventing errors.
		$valid_fields = array('id','iso','name','printable_name','iso3','numcode');
		
		$this->flexigrid->validate_post('id','asc',$valid_fields);
		
		$records = $this->ajax_model->get_countries();
		
		$this->output->set_header($this->config->item('json_header'));
		
		/*
		 * Json build WITH json_encode. If you do not have this function please read
		 * http://flexigrid.eyeviewdesign.com/index.php/flexigrid/example#s3 to know how to use the alternative
		 */
		$record_items = array();
		foreach ($records['records']->result() as $row)
		{
			$record_items[] = array($row->id,
			$row->id,
			$row->iso,
			$row->name,
			'<span style=\'color:#ff4400\'>'.addslashes($row->printable_name).'</span>',
			$row->iso3,
			$row->numcode,
			'<a href=\'#\'><img border=\'0\' src=\''.$this->config->item('base_url').'public/images/close.png\'></a> '
			);
		}
		//Print please
		$this->output->set_output($this->flexigrid->json_build($records['record_count'],$record_items));
	}
	//Function for custom search form
	function search()
	{
		$valid_fields = array('id','iso','name','printable_name','iso3','numcode');
		
		$_POST ['qtype'] = "name";
		$_POST ['query'] = $this->input->post('nsearch');
		
		$this->flexigrid->validate_post('id','asc',$valid_fields);
		
		$records = $this->ajax_model->get_countries();
		
		$this->output->set_header($this->config->item('json_header'));
		
		/*
		 * Json build WITH json_encode. If you do not have this function please read
		 * http://flexigrid.eyeviewdesign.com/index.php/flexigrid/example#s3 to know how to use the alternative
		 */
		$record_items = array();
		foreach ($records['records']->result() as $row)
		{
			$record_items[] = array($row->id,
			$row->id,
			$row->iso,
			$row->name,
			'<span style=\'color:#ff4400\'>'.addslashes($row->printable_name).'</span>',
			$row->iso3,
			$row->numcode,
			'<a href=\'#\'><img border=\'0\' src=\''.$this->config->item('base_url').'public/images/close.png\'></a> '
			);
		}
		//Print please
		$this->output->set_output($this->flexigrid->json_build($records['record_count'],$record_items));
	}
	
	//Delete Country
	function deletec()
	{
		/*
		$countries_ids_post_array = split(",",$this->input->post('items'));
		
		foreach($countries_ids_post_array as $index => $country_id)
			if (is_numeric($country_id) && $country_id > 1) 
				$this->ajax_model->delete_country($country_id);
						
		*/
		
		//add by sharive
		//$this->db->delete('country',array('id'=>$this->input->post("items")));
		//end
		//$id = explode(',',$this->input->post('items'));
		//echo count($id);	
		$error = "Selected countries (id's: ".$this->input->post('items').") deleted with success. Disabled for demo";

		$this->output->set_header($this->config->item('ajax_header'));
		$this->output->set_output($error);
	}
}
?>