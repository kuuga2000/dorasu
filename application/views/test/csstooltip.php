<script>
$(function() {
$( document ).tooltip({
	track: true
});
});
</script>
<style>
a.tooltip {
	outline:none;
}
a.tooltip strong {
	line-height:30px;
} 
a.tooltip:hover {
	text-decoration:none;
} 
a.tooltip span { 
	z-index:10;
	display:none; 
	padding:14px 20px; 
	margin-top:-30px; 
	margin-left:28px; 
	width:240px; 
	line-height:16px; 
} 

a.tooltip:hover span{ 
	display:inline; 
	position:absolute; 
	color:#111; 
	border:1px solid #DCA; 
	background:#fffAF0;
} 

.callout {
	z-index:20;
	position:absolute;
	top:30px;
	border:0;
	left:-12px;
} 
/*CSS3 extras*/ 
a.tooltip span { 
	border-radius:4px; 
	-moz-border-radius: 4px; 
	-webkit-border-radius: 4px; 
	-moz-box-shadow: 5px 5px 8px #CCC; 
	-webkit-box-shadow: 5px 5px 8px #CCC; 
	box-shadow: 5px 5px 8px #CCC; 
}
</style>

<a href="#" class="tooltip"> Tooltip 
	<span style="height: 300px"> 
		<div style="float: left;">
			<img style="margin-left: 20px;" align="left" class="callout" src="<?=base_url();?>assets/agito-burning.jpg" /> 
		</div>
		<div style="clear: both;">SFSDF</div> 
	</span> 
</a> 
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<a href="#" class="tooltip"> 
	asdasdasdasd
	<span> 
		 
		<strong>CSS only Tooltip</strong><br /> 
		 
			Pure CSS popup tooltips with clean semantic XHTML. 
	</span> 
</a>