<div id="showform"></div>
<div id="showdata"></div>
<script>
	$(document).ready(function(){
		$("#showform").load("<?=site_url();?>clubs/add");
		$("#showdata").load("<?=site_url();?>clubs");
	});
</script>
