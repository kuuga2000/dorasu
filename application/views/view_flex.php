<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Learn Flex</title>
<link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>public/css/flexigrid.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/flexigrid.js"></script>
</head>
<body>
<h1>KUUGA</h1>
<div class="egBox" style="float: left;">
	
	<legend>Search Form</legend>
	<form id="nform">
		Search by Name : <input type="text" name="nsearch" id="nsearch" value="" autocomplete="off"/><input type="submit" value="Search" />
	</form>
<br>
<table id="flex1" style="display:none"></table>
</div>
<script type="text/javascript">
 
	

<?php echo $js_grid; ?>

function deleteone(val){
	var al = confirm('Country with id #'+val+' will be deleted, are you sure?');
	if(al){
		
		$.ajax({
			type:'POST',
			url:'<?=site_url();?>test/deleteone/'+val,
			success:function(data){
				//$('#flex1').flexReload();
				$('#flex1').flexReload();
			}
		});
	}
	return false;
}

function test(com,grid){
	if(com=='Add'){
		$( "#dialog" ).dialog( "open" );
	}
    if (com=='Select All'){
		$('.bDiv tbody tr',grid).addClass('trSelected');
    }
    if (com=='DeSelect All'){
		$('.bDiv tbody tr',grid).removeClass('trSelected');
    }
    
    if (com=='Delete')
        {
           if($('.trSelected',grid).length>0){
			   if(confirm('Delete ' + $('.trSelected',grid).length + ' items?')){
		            var items = $('.trSelected',grid);
		            var itemlist ='';
		        	for(i=0;i<items.length;i++){
						itemlist+= items[i].id.substr(3)+",";
					}
					$.ajax({
					   type: "POST",
					   url: "<?php echo site_url("/ajax/deletec");?>",
					   data: "items="+itemlist,
					   success:function(data){
					   		$('#flex1').flexReload();
					  	 	alert(data);
					   }
					});
				}
			} else {
				return false;
			} 
        }          
}



$('#nform').submit(function (){
    var dt = $('#nform').serializeArray();
    var qr = $('#nsearch').val();
	$("#flex1").flexOptions({params: dt});
	$('#flex1').flexOptions({url: "<?php echo site_url(); ?>test/search"});
	$('#flex1').flexOptions({qtype:"name"});
	$('#flex1').flexOptions({query: qr});
	$('#flex1').flexOptions({newp: 1}).flexReload();
	return false;
});


</script>



</body>
</html>

 
<link rel="stylesheet" href="<?=base_url();?>assets/js/jquery-ui.css" type="text/css" />
<!--<script src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>-->
<script src="<?=base_url();?>assets/js/jquery-ui.js"></script>


<script type="text/javascript">
	$(function(){
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