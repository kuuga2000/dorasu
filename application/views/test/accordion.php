<link rel="stylesheet" href="<?=base_url();?>assets/js/jquery-ui.css" type="text/css" />
<script src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery-ui.js"></script>
<script>
	$(function() {
		$( "#accordion" ).accordion({
			collapsible : true
		});

	});
</script>

<style>
	#accordion{
		font-size:10px;
		font-family:Arial;
		width: 200px;
	}
</style> 

<div id="accordion">
<h3>Section 1</h3>
<div>
<p>
Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
</p>
</div>
<h3>Section 2</h3>
<div>
<p>
Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
suscipit faucibus urna.
</p>
</div>
<h3>Section 3</h3>
<div>
<p>
Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
</p>
</div>
<h3>Section 4</h3>
<div>
<p>
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
Class aptent taciti sociosqu ad litora torquent per conubia nostra.
</p>
</div>
</div>