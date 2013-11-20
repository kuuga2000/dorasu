<?php
class Test extends CI_Controller{
	
	public $food = array(
        'Healthy'   => array('Salad','Rice','Vegtables' => array('Tomatto','Onion')),
        'UnHealthy' => array('pasta', 'Vegetables' =>array('potatto', 'Corn')));
	
	function __construct(){
		parent::__construct();
		$this->load->helper('flexigrid');
		$this->load->library('flexigrid');
		//$this->load->model('ajax_model');
		$this->load->model('CouuntryModel');
		$in = (serialize ($_POST));
		log_message('debug', "Ajax module Post -".$in);
	}
	
	public function tree(){
		//if($_POST){
				
			//foreach($_POST['items'] as $item=>$val):
				//echo $val.'<br>';
			//endforeach;
		
		//}else{
			$this->load->view('test/tree');
		//}
		
		
	}
	
	public function insert(){
		
		$items = $this->input->post('items');
		
		foreach($items as $item=>$val):
			echo $val.'<br>';
		endforeach;	
		
	}
	
	
	public function rnd(){
		$numbers = range(0, 5);
		shuffle($numbers);
		foreach ($numbers as $number) {
    		echo "$number ";
		}
		
		//echo rand() . "\n";
		//echo rand() . "\n";

		//rand(5, 0-5);
	}
	
	public function enter(){
		$a = "TEST1";
		$a .= " TEST2";
		$a .= " TEST3";
		
		echo $a;
	}
	
	
	public function callanagram(){
		$this->load->view('test/callanagram');
	}
	
	public function anagram(){
		$words = "BAKAR";
		echo "<br>";
		/*
		 * M   
		 * A   
		 * K   
		 * A   
		 * N   
		 */
		//$break = explode("", $words);
		$count = strlen($words);
		$pst=$count-1;
		for($i=0; $i<$count; $i++){
			$takeapart[] = substr($words,$i, 1);
			//echo $takeapart[$i];
			//echo $takeapart[$pst];
			//echo $pst; 
	    	$pst=$pst-1;
		}
		
		$numbers = range(0, 4);
		shuffle($numbers);
		foreach ($numbers as $number) {
    		echo $takeapart[$number];
		}
		
		//$position=0;
		//foreach($takeapart as $take=>$val):
			//echo $take[1];
			//for($puts=0;$puts<$count;$puts++){
			//	echo $takeapart[$puts];
			//}
		//$position++;
		//endforeach;
		
		//print_r($takeapart);
		
		//echo "<br>";
		//echo substr("PALEMBANG", 1,4);
		
		for($p=0; $p<$count; $p++){
			
		}
		
		
	}
	
	
	public function nmove_items_between_ListBox(){
		if($_POST){
			$this->load->view('test/nmove_items_between_listBox');	
			foreach($_POST['item'] as $item=>$value):
				echo $value.'<br>';
			endforeach;
			
		}else{
			$this->load->view('test/nmove_items_between_listBox');
		}
		
	} 
	
    public function recursive_loop($array){
        foreach($array as $key => $value){
            if(is_array($value)){
                $this->recursive_loop($value);
            }else{
                echo $value . PHP_EOL;
            }
        }
    }

    public function hh(){
    	echo $this->recursive_loop(($this->food));
    }
    
	public function s(){
		echo str_replace('.','-','2.00');
	}
	
	
	public function deleteone($val=NULL){
		$this->db->delete('country',array('id'=>$val));
	}
	
	
	public function search(){
		$valid_fields = array('id','iso','name','printable_name','iso3','numcode');
		
		$_POST['qtype'] = 'name';
		$_POST['query'] = $this->input->post('nsearch');
		
		$this->flexigrid->validate_post('id','asc',$valid_fields);
		
		$records = $this->CouuntryModel->get_countries();
		
		$this->output->set_header($this->config->item('json_header'));
		
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
			'<a href=\'#\'><img height=\'16\' width=\'16\' border=\'0\' src=\''.$this->config->item('base_url').'public/images/edit-file-icon.png\'></a>',
			'<a href="javascript:void(0);" onclick="deleteone(' . $row->id . ');"><img border=\'0\' src=\''.$this->config->item('base_url').'public/images/close.png\'></a> ',
			);
		}
		//Print please
		$this->output->set_output($this->flexigrid->json_build($records['record_count'],$record_items));
	}
	
	
	
	
	public function ajasonflexi(){
		$colModel['id']=array('ID',40,TRUE,'center',2);
		$colModel['iso']=array('ISO',40,TRUE,'center',0);
		$colModel['name']=array('Name',200,TRUE,'LEFT',1);
		$colModel['printable_name']=array('Printable Name',120,TRUE,'left',0);
		$colModel['iso3']=array('ISO3',130,TRUE,'left',0);
		$colModel['numcode']=array('Number Code',80,TRUE,'right',1);
		$colModel['actions']= array('',15,FALSE,'right',2);
		$colModel['actions2']= array('',15,FALSE,'right',2);
		
		$gridParams = array(
			'width' => 900,
			'height' => 400,
			'rp' =>15,
			'rpOptions'=>'[10,15,20,25,40]',
			'pagestat' => 'Displaying: {from} to {to} of {total} items.',
			'blockOpacity' =>0.5,
			'title'=>'Hello',
			'usepager'=>TRUE,
			'useRp'=>TRUE,
			'showTableToggleBtn' => TRUE
		);
		
		$buttons[] = array('Add','add','test');
		$buttons[] = array('Delete','delete','test');
		$buttons[] = array('separator');
		$buttons[] = array('Select All','add','test');
		$buttons[] = array('DeSelect All','delete','test');
		$buttons[] = array('separator');
		
		
		
		$grid_js = build_grid_js('flex1',site_url("test/getcountrydata"),$colModel,'id','ASC',$gridParams,$buttons);
		
		$data['js_grid'] = $grid_js;
		//$data['version'] = '';//"0.36";
		//$data['download_file'] = '';//"Flexigrid_CI_v0.36.rar";
		
		$this->load->view('view_flex',$data);
		
	}
	
	public function getCountryData(){
		
		$valid_fields = array('id','iso','name','printable_name','iso3','numcode');
		
		$this->flexigrid->validate_post('id','asc',$valid_fields);
		$records = $this->CouuntryModel->selectAllCountry();
		$this->output->set_header($this->config->item('json_header'));
		
		$record_items = array();
		foreach($records['records']->result() as $row){
			$record_items[]=array(
				$row->id,
				$row->id,
				$row->iso,
				$row->name,
				'<span style=\'color:#ff4400\'>'.addslashes($row->printable_name).'</span>',
				$row->iso3,
				$row->numcode,
				'<a href=\'#\'><img height=\'16\' width=\'16\' border=\'0\' src=\''.$this->config->item('base_url').'public/images/edit-file-icon.png\'></a>',
				//'<a href=\'#\' class=deleteone><img border=\'0\' src=\''.$this->config->item('base_url').'public/images/close.png\'></a> ',
				'<a href="javascript:void(0);" onclick="deleteone(' . $row->id . ');"><img border=\'0\' src=\''.$this->config->item('base_url').'public/images/close.png\'></a> ',

			);
		}
		
		$this->output->set_output($this->flexigrid->json_build($records['record_count'],$record_items));
		
	}
	
	public function dialog(){
		$this->load->view('test/dialog');
	}
	
	public function confirm(){
		$this->load->view('test/confirm');
	}
	
	//tool tip image	
	public function csstooltip(){
		$this->load->view('test/csstooltip');
	}	
	
	public function tooltip(){
		$this->load->view('test/tooltip');
	}
	
	public function accordion(){
		$this->load->view('test/accordion');
	}
	
	public function jsonprocess(){
		$this->load->view('test/jsonprocess');
	}
	
	public function jsonxperiment(){
		$edit_link = '<a href="javascript:void(0);" onclick="edit();" class="edit" id="1">Edit</a>';
		$delete_link = '<a href="javascript:void(0);" class="delete" onclick="edit();" id="2">Edit</a>';
		$data[]=array(
			'edit'=>$edit_link,
			'delete'=>$delete_link,
		);
		
		echo json_encode($data);
		
	}
	
	public function tabcontent(){
		$this->load->view('test/tabcontent');
	}
	
	public function index(){
		$this->load->view('test/index');
	}
	public function append(){
		$this->load->view('test/append');
	}
	
	public function xml(){
		$this->load->view('test/xml');
	}
	
	public function data(){
		$this->load->view('test/dataxml.xml');
	}
	
	public function json(){
		header('Content-type: text/json');
		header('Content-type: application/json');
			
		//$data['clubs']=$this->db->get('clubs')->result();
		$getData=$this->db->get('clubs')->result();
		foreach($getData as $fetc):
			$dJson[]=$fetc;
		endforeach;
		//print_r ($dJson);exit;	
		echo $json=json_encode($dJson);
		//echo $data['data']=json_decode($json,TRUE);
		//$this->load->view('clubs/index',$data);
	}
	
	public function display(){
		$this->load->view('test/display_json');
	}
	
	public function autocomplete(){
		$p=$this->db->get('players')->result();
		
		/*foreach($p as $s){
			$sd[]=$s;
		}*/
		
		$data['players']=$p;
		//echo $data['players']=json_encode($p);
		$this->load->view("test/autocomplete",$data);
	}
}