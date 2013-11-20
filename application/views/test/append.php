<script language="JavaScript" src="<?=site_url();?>assets/js/jquery-1.9.1.min.js"></script>
<style>
	#words{
		background: #999;
		height: 600;
		overflow:scroll;
		width: 500px;
		text-indent: 50px;
		text-decoration: underline;
	}
</style>
<div id="words">
	
</div>
<form id="form-data">
	<input type="text" id="textchat" size="70px" /> <input type="button" name="send" value="Send" id="send" />
</form>
<script>
$(document).ready(function(){
	/*setInterval(function(){
		$('#words').append('<p>HAHAHA</p>');
	},1000);*/

	/*
	function sendChat(){
		
		
		
		var text = $('#textchat').val();
		$('#words').append('<p>'+text+'</p>');
			
		return false;
	}*/
	
	$('#form-data').keypress(function(e){
		if(e.which==13){
			$('#send').click();
			return false;
		}
		 
	});
	
	
	
	/*function stopRKey(evt) {
		var evt = (evt) ? evt : ((event) ? event : null);
  		var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
  		if ((evt.keyCode == 13) && (node.type=="text"))  {return false;}
	}

	
	document.onkeypress = stopRKey;*/ 
	
	//$('#words').append('<p>KAMU CRAZY</p>');
	//$('#words').append('<p>KAMU JUGa CRAZY :P</p>');	
	
	$('#send').click(function(){
		var text = $('#textchat').val();
		$('#words').append('<p>'+text+'</p>');
		return false;
	});
	
 }) ;
</script>