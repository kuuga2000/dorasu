<form id="myform" action="" method="post">
<table>
	<tr>
		<td>Name</td>
		<td>:</td>
		<td><input type="text" name="name" /></td>
	</tr>
	<tr>
		<td>Country</td>
		<td>:</td>
		<td><input type="text" name="country" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="button" id="save" value="Save" /></td>
	</tr>
</table>
</form>
<span id="dis"></span>
<script>
	$(document).ready(function(){
		/*$("#save").click(function(){
			//var dataForm = ("#myform").serialize();
			$.post("?=site_url();?>clubs/add", $("#myform").serialize(), function(data){
								
			});
		});*/
		
		function getAllData(){
			$('#dis').html('AAA');
		}
		
		$("#save").click(function(){
			var dataForm = $("#myform").serialize();
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>clubs/add",
				data:dataForm,
				success:function(){
					$("#showdata").load("<?=site_url();?>clubs");
					getAllData();
				}
			});
		});
	});
</script>