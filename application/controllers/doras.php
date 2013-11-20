<?php
class doras extends CI_Controller{
	public function index(){
		/*
		select ply.id, ply.name as tackler, playersrisk.playerIDtackled as tackled, playersrisk.risk
		FROM players ply 
		left join playersrisk on ply.id = playersrisk.playerIDtackler
		*/
		$data=$this->db->from('playersrisk')
				 ->join('players','players.id=playersrisk.playerIDtackler','left')
				 ->select('players.name,playersrisk.risk')
				 ->get()->result();					   
		foreach($data as $data2):
			$datajs[]=$data2;
			/*array(
				'name'=>$data2->name,
				'risk'=>$data2->risk
			);*/
		endforeach;	 
		echo json_encode($datajs);
	}
	
	public function handle(){
		$this->load->view('doras/handle');
	}
	
	public function dialog(){
		$this->load->view('doras/dialog');
	}
	
	public function getAllPlayers(){
		
		//$this->load->helper('xml');
		header('Content-type: text/json');
		header('Content-type: application/json');
		$this->db->order_by('id','DESC');
		$data = $this->db->get("players")->result();
		foreach($data as $dj):
			$datajs[] = $dj;
		endforeach;
		//echo xml_convert($datajs);
		//echo json_encode(array('players'=>$datajs));
		echo json_encode($datajs);	
	}
	
	
	public function addplayer(){
		$this->name = $this->input->post('name');
		$this->country = $this->input->post('country');
		$this->db->insert('players',$this);
	}
	
	public function xmlx(){
		// THIS IS ABSOLUTELY ESSENTIAL - DO NOT FORGET TO SET THIS 
		@date_default_timezone_set("GMT"); 
		
		$writer = new XMLWriter(); 
		$writer->openMemory();
		// Output directly to the user 
		
		$writer->openURI('php://output'); 
		$writer->startDocument('1.0'); 
		
		$writer->setIndent(4); 
		
		// declare it as an rss document 
		$writer->startElement('rss'); 
		$writer->writeAttribute('version', '2.0'); 
		$writer->writeAttribute('xmlns:atom', 'http://www.w3.org/2005/Atom'); 
		
		
		$writer->startElement("channel"); 
		//---------------------------------------------------- 
		//$writer->writeElement('ttl', '0'); 
		$writer->writeElement('title', 'Latest Products'); 
		$writer->writeElement('description', 'This is the latest products from our website.'); 
		$writer->writeElement('link', 'http://www.domain.com/link.htm'); 
		$writer->writeElement('pubDate', date("D, d M Y H:i:s e")); 
		    $writer->startElement('image'); 
		        $writer->writeElement('title', 'Latest Products'); 
		        $writer->writeElement('link', 'http://www.domain.com/link.htm'); 
		        $writer->writeElement('url', 'http://www.iab.net/media/image/120x60.gif'); 
		        $writer->writeElement('width', '120'); 
		        $writer->writeElement('height', '60'); 
		    $writer->endElement(); 
		//---------------------------------------------------- 
		
		
		
		//---------------------------------------------------- 
		$writer->startElement("item"); 
		$writer->writeElement('title', 'New Product 8'); 
		$writer->writeElement('link', 'http://www.domain.com/link.htm'); 
		$writer->writeElement('description', 'Description 8 Yeah!'); 
		$writer->writeElement('guid', 'http://www.domain.com/link.htm?tiem=1234'); 
		
		$writer->writeElement('pubDate', date("D, d M Y H:i:s e")); 
		
		$writer->startElement('category'); 
		    $writer->writeAttribute('domain', 'http://www.domain.com/link.htm'); 
		    $writer->text('May 2008'); 
		$writer->endElement(); // Category 
		
		// End Item 
		$writer->endElement(); 
		//---------------------------------------------------- 
		
		
		// End channel 
		$writer->endElement(); 
		
		// End rss 
					$writer->endElement(); 
		
					$writer->endDocument(); 
					
				$writer->outputMemory();	

		//$writer->flush(); 
	}

}