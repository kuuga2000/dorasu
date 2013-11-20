<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<title>jQuery treeview</title>
<!--|-->
<link rel="stylesheet" href="<?=base_url();?>assets/js/jquery-ui.css" type="text/css" />
<script src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery-ui.js"></script>
<!--|--->



<link rel="stylesheet" href="<?=base_url();?>assets/treemenu/large_files/jquery.css">
<link rel="stylesheet" href="<?=base_url();?>assets/treemenu/large_files/red-treeview.htm">
<link rel="stylesheet" href="<?=base_url();?>assets/treemenu/large_files/screen.css">

<!--<script src="<?=base_url();?>assets/treemenu/large_files/jquery_002.js" type="text/javascript"></script>
-->
<script src="<?=base_url();?>assets/treemenu/large_files/jquery.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/treemenu/large_files/jquery_003.js" type="text/javascript"></script>


<style>
	#tree{
		float: left;
	}
	#items{
		float: right;
		margin-right: 50px;
	}
</style>

<script type="text/javascript">
		$(function() {
			$("#tree").treeview({
				collapsed: true,
				animated: "medium",
				control:"#sidetreecontrol",
				persist: "location"
			});
			
			
			//
			$( "#dialog" ).dialog({
				autoOpen: false,
				width:1000,
				height:500,
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
			
			
			
			$('a.add').click(function(){
				var item = $(this).attr('id');
				
				$("#items").append('<br>'+item+'<input type="text" size="3" name="items[]" value="'+item+'" />');
				
			});
			
			$('#submit').click(function(){
				var items = $("#myform").serialize();
				
				$.ajax({
					type:'POST',
					data:items,
					url:'<?=site_url();?>test/insert',
					success:function(data){
						$('#showitems').html(data);
					}
				});
				
				return false;
				
			});
			
		});
		
	</script>

</head>
<body>
<!--
<div id="dialog" title="Basic dialog">
<p><img style="margin-left: 20px;" align="left" class="callout" src="<?=base_url();?>assets/agito-burning.jpg" /></p>
</div>
-->
<button id="opener">Open</button>

<div id="showitems"></div>
	
<div id="dialog" title="Basic dialog">
<!--<div id="sidetree">-->

<!--<div class="treeheader">&nbsp;</div>-->
<!--<div id="sidetreecontrol"><a href="#">Collapse All</a> | <a href="#">Expand All</a></div>-->

<ul class="treeview" id="tree">
	<li class="expandable"><div class="hitarea expandable-hitarea"></div><a href="#"><strong>Home</strong></a>
	<ul style="display: none;">
		<li><a href="#" class="add" id="Airdrie eNewsletters">Airdrie eNewsletters</a></li>
		<li><a href="#" class="add" id="Airdrie Directories">Airdrie Directories</a></li>
		<li><a href="#" class="add" id="Airdrie Life Video">Airdrie Life Video</a></li>

		<li><a href="#" class="add" id="Airdrie News">Airdrie News</a></li>
		<li><a href="#" class="add" id="Airdrie Quick Links">Airdrie Quick Links</a></li>
		<li><a href="#" class="add" id="Airdrie Weather">Airdrie Weather</a></li>
		<li><a href="#">Community Calendar </a></li>
		<li><a href="#">Conditions of Use and Privacy Statement</a></li>
		<li><a href="#">I'd like to find out about... </a></li>
		<li><a href="#">Opportunities</a></li>
		<li><a href="#">Resource Links</a></li>
		<li class="last"><a href="#">Special Notices</a></li>

	</ul>
	</li>
	 

	<li class="expandable"><div class="hitarea expandable-hitarea"></div><span><strong>News</strong></span>
	<ul style="display: none;">
		<li class="expandable"><div class="hitarea expandable-hitarea"></div><a href="#">Airdrie eNewsletters</a>
		<ul style="display: none;">
			<li><a href="#">Airdrie Today eNewsletter</a></li>
			<li><a href="#">Airdrie @Work eNewsletter</a></li>
			<li class="last"><a href="#">Airdrie eNewsletter Archive</a></li>
		</ul>
		</li>
		<li><div class="hitarea expandable-hitarea"></div><a href="#">Community Calendar</a>
			<ul>
				<li><a href="#" class="add" id="sdfdsf">sdfsdf</a></li>
				<li><a href="#" class="add" id="sdf">sdfsdf</a></li>
				<li><a href="#">sdfsdf</a></li>
				<li><a href="#">sdfsdf</a></li>
			</ul>
		</li>
		<li><a href="#">Community News</a></li>
		<li class="expandable"><div class="hitarea expandable-hitarea"></div><a href="#">News Releases</a> (2007)
		<ul style="display: none;">
			<li><a href="#" title="2006 News Releases">2006 News Releases</a></li>

			<li><a href="#" title="2005 News Releases">2005 News Releases</a></li>
			<li class="last"><a href="#" title="2004 News Releases">2004 News Releases</a></li>
		</ul>
		</li>
		<li><a href="#">Notice of Development </a></li>
		<li><a href="#">Photo Gallery</a></li>
		<li class="expandable"><div class="hitarea expandable-hitarea"></div><a href="#">Public Meetings</a>

		<ul style="display: none;">
			<li><a href="#">Appeals</a></li>
			<li><a href="#">Open Houses</a></li>
			<li class="last"><a href="#">Public Hearings</a></li>
		</ul>
		</li>
		<li class="expandable lastExpandable"><div class="hitarea expandable-hitarea lastExpandable-hitarea"></div>
			<a href="#">Publications</a>

		<ul style="display: none;">
			<li><a href="#">Airdrie Life Magazine</a> (16MB, .PDF)</li>
			<li><a href="#">Annual Economic Report</a> (5 MB, .PDF)</li>
			<li class="last"><a href="#">Annual Community Report</a></li>
		</ul>

		</li>
	</ul>
	</li>
	 
	 
	 
	 
	 

</ul>

<!--</div>-->
<form style="float: right; margin-right: 50px;" action="" method="post" id="myform">
	<div id="items">
	
	</div><br>
<input type="submit" id="submit" />
</form>


</div>

 




</body></html>