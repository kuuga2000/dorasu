<link rel="stylesheet" href="<?=base_url();?>assets/js/jquery-ui.css" type="text/css" />
<script src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery-ui.js"></script>
<script>
	$(function() {
	   $("#open-dialog").click(function(){
	      $("#dialog").dialog({
	         resizable: false,
	         modal: true,
	         draggable: false,
	         width: 500,
	         height: 210,
	         buttons: {
	            "Ya, Hapus": function(){
	               alert("Anda menghapus data");
	            },
	            "Tidak, Batalkan": function(){
	               $(this).dialog("close");
	            }
	         }
	      });
	      return false;
	   });
	});
</script>
<input type="button" value="confirmasi" id="open-dialog" />

<div style="height: auto; height: auto;" id="dialog" style="display: none;">sd
	<p>
	<img style="margin-left: 20px;" align="left" class="callout" src="<?=base_url();?>assets/agito-burning.jpg" /> 
	</p>
</div>