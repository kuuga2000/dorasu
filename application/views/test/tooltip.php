<link rel="stylesheet" href="<?=base_url();?>assets/js/jquery-ui.css" type="text/css" />
<script src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery-ui.js"></script>
<script>
$(function() {
$( document ).tooltip({
	track: true
});
});
</script>
<style>
label {
display: inline-block;
width: 5em;
}

</style>

<p><a href="#" title="That's what this widget is">Tooltips</a> can be attached to any element. When you hover
the element with your mouse, the title attribute is displayed in a little box next to the element, just like a native tooltip.</p>
<p>But as it's not a native tooltip, it can be styled. Any themes built with
<a href="http://themeroller.com" title="ThemeRoller: jQuery UI's theme builder application">ThemeRoller</a>
will also style tooltips accordingly.</p>
<p>Tooltips are also useful for form elements, to show some additional information in the context of each field.</p>
<p><label for="age">Your age:</label><input id="age" title="We ask for your age only for statistical purposes." /></p>
<p>Hover the field to see the tooltip.</p>

<hr>
<a href="#">About</a>

<script>
$(document).ready(function(){
	
/*
$('#aboutshop').qtip({
   content: {
      text: $('#tooltip1') 
   }
});
});*/

$(document).ready(function(){
	// Match all <A/> links.
	$('a').qtip({
		content: {
			text: '<img src="<?=base_url();?>assets/agito-burning.jpg" width="500" height="500" />',
		}
   	});
});

</script>