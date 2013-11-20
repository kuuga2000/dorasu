<?php
class Players extends CI_Controller{
	
	function dialog(){
		$this->load->view('players/dialog');
	}
	
	function add(){
		
		
		 
		if(!$_POST){
			$this->load->view('players/add');
		}else{
			/*$data=array(
				'name'=>$this->input->post('name'),
				'club'=>$this->input->post('club'),
			);*/
			$this->name=$this->input->post('name');
			$this->club=$this->input->post('club');
			$this->db->insert('players',$this);
			redirect('players');
		}
	}
	
	function index(){
		//$this->output->cache(10);
		
		/* */
		$data=$this->db->get('players')->result();
		//$data['data']=$this->db->get('players')->result();
		
		//foreach($data as $dd): echo $dd->name.' - '.$dd->club.'<br>'; endforeach;
		
		//foreach($data as $d): echo $d->name;endforeach;
		
		$djson=json_encode($data);
		
		$tt['tt'] =json_decode($djson,TRUE);
		
		$this->load->view('players/index',$tt);
		//foreach($tt as $rt): echo $rt['name'].' - '.$rt['club'].'<br>'; endforeach;
		
		
		
		//echo "<hr>";
		//var_dump($tt);
		/*foreach($djson as $rr):
			echo $rr['name'][1];
		endforeach;	
		*/
		
		//$string = '{"foo": "bar", "cool": "attr"}';
		//$result = json_decode($string);
		 
		// Result: object(stdClass)#1 (2) { ["foo"]=> string(3) "bar" ["cool"]=> string(4) "attr" }
		//var_dump($result);
		 
		// Prints "bar"
		//echo $result->foo;
		 
		// Prints "attr"
		//echo $result->cool;
		
		//foreach($result as $rt): echo '<br>'.$rt; endforeach;

		
		//$rr=array('1','2','3');
		 
		
		//$this->load->view('players/index',$djson);	
		
		/*
		echo "<hr>";
		$string='[
			{
				"name":{"first":"John","last":"Adams"},
                                "age":"40"
			},
			{
				"name":{"first":"Thomas","last":"Jefferson"},
                                "age":"35"
			}
         ]';
		 //echo $string[0]['age'];
		// object method
		echo $string[1]->name;*/
		
		
		/*$string='{"person":[
			{
				"name":{"first":"John","last":"Adams"},
                "age":"40"
			},
			{
				"name":{"first":"Thomas","last":"Jefferson"},
                "age":"35"
			}
		 ]}';

		$json_a=json_decode($string,true);
		
		$json_o=json_decode($string);
		// array method
		foreach($json_a['person'] as $p)
		{
		echo '
		
		Name: '.$p['name']['first'].' '.$p['name']['last'].'
		
		Age: '.$p['age'].'
		
		';
		
		}
		// object method
		/*foreach($json_o->person as $p)
		{
			echo '
			
			Name: '.$p->name->first.' '.$p->name->last.'
			
			Age: '.$p->age.'
			
			';
		}*/
	}
}
