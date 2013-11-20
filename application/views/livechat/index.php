<script language="JavaScript" src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>
<style>
	#content{
		width: 200px;
		height: 400px;
		border: solid 1px black;
		overflow-y: scroll;
	}
	#cnc{
		text-decoration: underline;
		padding-left: 5px;
	}
</style>
<div id="content">
	
</div>
<div id="userreg">
	<form action="" method="post" id="myform">
		<input type="text" id="id" name="id" />
		<input type="submit" value="Ok" id="ok" />
	</form>
</div>

<div id="chatdiv" style="display: none;">
	<form action="" method="post" id="chatform">
		<input type="text" id="chat" name="chat" />
		<input type="hidden" id="idchat" />
		<input type="submit" value="Send" id="send" />
	</form>
</div>
<div id="jj"></div>
<script>
	$(document).ready(function(){
		$('#ok').click(function(){
			var myform = $('#myform').serialize();
			$.ajax({
				type:'POST',
				url:'<?=site_url();?>livechat/reg',
				data:myform,
				success:function(data){
					$('#idchat').val($('#id').val());
					$('#chatdiv').show();
					$('#userreg').hide();
				}
			});
			return false;
		});
		
		$('#send').click(function(){
			var myform = $('#chatform').serialize();
			$.ajax({
				type:'POST',
				url:'<?=site_url();?>livechat/send',
				data:myform,
				success:function(data){
					$('#content').append(data);
					
				}
			});
			return false;
		});
		
	});
</script>