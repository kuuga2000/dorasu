<script src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>
<script>
	$(document).ready(function(){
		
		
		function ajx(){
			$.ajax({
				url:"<?=site_url();?>test/anagram",
				success:function(data){
					$('#show').append(data);
				}
			});

		}
		
		function stop(){
			
		}
		
		setInterval(function(e){
				$("#show").append('s')
		},1000)
	});
</script>

<div id="show"></div>