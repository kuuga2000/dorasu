<script src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>
<script>
	$(document).ready(function(){
		var dt=[]; 
		/*$.getJSON('?=site_url();?>/doras/index',function(data){
			$.each(data, function(key,val){
				dt += val.name;
			});
			$('#dis').html(dt);
		});*/
		
		function showData(){
			$.ajax({
				type:'POST',
				url:'<?=site_url();?>/doras/index',
				dataType:'json',
				success:function(data){
					for(var x=0;x<data.length;x++){
						dt += data[x].name;
					}
					$('#dis').html(dt);
				}
			});
		}
		
		showData();
		
	});
</script>
<div id="dis"></div>
