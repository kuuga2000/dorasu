<?php
/*$s=json_decode($djson);	
foreach($s as $d=>$val):
	echo $val;
endforeach;*/
/*
foreach($data as $data):
	echo $data->name.' - '.$data->club.'<br>';
endforeach;	*/

foreach($tt as $rt): echo $rt['name'].' - '.$rt['club'].'<br>'; endforeach;
?>
<br>
<a href="<?=site_url();?>players/add">Add</a>