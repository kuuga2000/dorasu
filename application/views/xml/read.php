<script language="JavaScript" src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>
<script>
	$(document).ready(function(){
		var siteList = [];
		
		$.ajax({
			type: "GET",
			url: "<?=site_url();?>xml",
			dataType: "xml",
			success: function(xml) {
				$(xml).find('site').each(function(){
					siteList += "<tr>";
					siteList += 	"<td>"+$(this).find('no').text()+"</td>";
					siteList += 	"<td>"+$(this).find('title').text()+"</td>";
					siteList += 	"<td><a href=\"#\">"+$(this).find('url').text()+"</a></td>";
					siteList += "</tr>";
					$('tbody').html(siteList);
				});
				/*
				$(xml).find('Book').each(function(){
      				var sTitle = $(this).find('Title').text();
      				var sPublisher = $(this).find('Publisher').text();
      				$("<li></li>").html(sTitle + ", " + sPublisher).appendTo("#dvContent ul");
    			});*/
			},
		});
	});
</script>
<table border="1" style="border-collapse: collapse;">
	<thead>
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Url</th>
		</tr>
	</thead>
	
	<tbody></tbody>	
	
	
</table>
<div id="dvContent">
	<ul></ul>
</div>
