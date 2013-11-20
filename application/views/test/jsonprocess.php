<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Facebook like ajax post - jQuery - ryancoughlin.com</title>

<script language="JavaScript" src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>


<script type="text/javascript">
 /*$.getJSON(url, data, function(json) {
    $(json).each(function() {
         YOUR CODE HERE 
    });
});*/
/* <![CDATA[ */
$(document).ready(function(){
	var table = '<table border=1><tr>';
		table += '<th>Nama</th>';
		table += '<th>Country</th>';
		table += '<th>#</th>';
	table +='</tr>';
    $.getJSON("<?=site_url();?>test/jsonxperiment",function(data){
    	$.each(data, function(key,value){
    		/*content += '<p>' + data.id + '</p>';
    		content += '<p>' + data.name + '</p>';
    		content += '<p' + data.country_id + '</p>';
    		content += '<br/>';
    		$(content).appendTo("#posts");*/
    		//myArr.push(value.name);
    		table += '<tr><td>'+ value.name +'</td>';
    		table += '<td>'+ value.country_id +'</td>';
    		table += "<td><a href=<?=site_url();?>test/edit/"+ value.id +">"+ value.id +"</a></td>";
    		table +='</tr>';
    	});
    	
    	table += '</table>';
    	
    	$("#content").html(table);
    
    });
    //$("#content").load('?=site_url();?>test/json');
     

});
/* ]]> */
</script>
</head>
<body>
	<div id="content"></div>    
</body>
</html>