<link rel="stylesheet" href="<?=base_url();?>assets/js/jquery-ui.css" type="text/css" />
<script src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery-ui.js"></script>
<style>
	body {
	font-family: "Trebuchet MS", "Helvetica", "Arial",  "Verdana", "sans-serif";
	font-size: 62.5%;
}
</style>
<script>
	$(function(){
		
		//$('#dialog').dialog();
		
		 
		
		
	});
</script>
 
<!--
<div id="dialog" title="Basic dialog">
<p>
	<img style="margin-left: 20px;" align="left" class="callout" src="<?=base_url();?>assets/agito-burning.jpg" />
</p>
</div>-->

<hr>
<script>
$(function() {
	//
	$( "#dialog" ).dialog({
		autoOpen: false,
		/*show: {
			effect: "blind",
			duration: 1000
		},
		hide: {
			effect: "explode",
			duration: 1000
		}*/
	});
	$( "#opener" ).click(function() {
		$( "#dialog" ).dialog( "open" );
	});
});
</script>
<div id="dialog" title="Basic dialog">
<p><img style="margin-left: 20px;" align="left" class="callout" src="<?=base_url();?>assets/agito-burning.jpg" /></p>
</div>
<button id="opener">Open Dialog</button>