<script language="JavaScript" src="<?=site_url();?>assets/js/jquery-1.9.1.min.js"></script>
<!--<input type="text" id="number" /> x <input type="text" id="number_2" /> = 
<span id="display"></span>-->

<?php
$n=1000;
for($i=1;$i<=5;$i++){
?>
<br><input type="text" value="<?=$n*$i+3;?>" id="price<?=$i;?>" /> x <input class="nmbr" type="text" id="quantity<?=$i;?>" /> = <span id="display<?=$i;?>"></span>
<? } ?>

<script>
	$(document).ready(function(){
	/*	$("#number").keyup(function(){
			var value=$('#number').val();
			var value_2 =$('#number_2').val();
			$('#display').html(value*value_2);
		});$("#number_2").keyup(function(){
			var value=$('#number').val();
			var value_2 =$('#number_2').val();
			$('#display').html(value*value_2);
		});*/
		
		$('.nmbr').click(function(){
			
			var qty=$(this).val();
						
		});
		
		
		
	});
</script>