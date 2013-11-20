<script language="JavaScript" src="<?=base_url();?>assets/js/jquery-1.9.1.min.js"></script>
<script>
	$(document).ready(function() {
    $('#btnRight').click(function(e) {
        var selectedOpts = $('#lstBox1 option:selected');
        if (selectedOpts.length == 0) {
            alert("Nothing to move.");
            e.preventDefault();
        }
        
        $('#lstBox2').append($(selectedOpts).clone());
        $(selectedOpts).remove();       
        e.preventDefault();
        $('.z option').attr("selected",true);
        
    });

    $('#btnLeft').click(function(e) {
        var selectedOpts = $('#lstBox2 option:selected');
        if (selectedOpts.length == 0) {
            alert("Nothing to move.");
            e.preventDefault();
        }

        $('#lstBox1').append($(selectedOpts).clone());
        $(selectedOpts).remove();
        e.preventDefault();
    });
    
    
    
});
</script>
<style>
	body
{
    padding:10px;
    font-family:verdana;
    font-size:8pt;
}

 

select
{
	
    font-family:verdana;
    font-size:8pt;
    height:120px;
    width: 150px;
    /*width : 150px;
    height:100px;*/
}
 



input
{
    text-align: center;
    v-align: middle;
}
</style>

<h2>Moving Items Between Lisbox</h2>

<form action="" method="post">
	
	
	
	
	<table style='width:370px;'>
	    <tr>
	        <td style='width:160px;'>
	            <b>Group 1:</b><br/>
	           <select name="data[]" multiple="multiple" id='lstBox1'>
	              <option value="ajax">Ajax</option>
	              <option value="jquery">jQuery</option>
	              <option value="javascript">JavaScript</option>
	              <option value="mootool">MooTools</option>
	              <option value="prototype">Prototype</option>
	              <option value="dojo">Dojo</option>
	               
	              <option value="asp">ASP.NET</option>
		          <option value="c#">C#</option>
		          <option value="vb">VB.NET</option>
		          <option value="java">Java</option>
		          <option value="php">PHP</option>
		          <option value="python">Python</option>
	        </select>
	    </td>
	    <td style='width:50px;text-align:center;vertical-align:middle;'>
	        <input type='button' id='btnRight' value ='  >  '/>
	        <br/><input type='button' id='btnLeft' value ='  <  '/>
	    </td>
	    <td style='width:160px;'>
	        <b>Group 2: </b><br/>
	        <select class="z" name="item[]" multiple="multiple" id='lstBox2'>
	          <!--<option value="asp">ASP.NET</option>
	          <option value="c#">C#</option>
	          <option value="vb">VB.NET</option>
	          <option value="java">Java</option>
	          <option value="php">PHP</option>
	          <option value="python">Python</option>--> 
	        </select>
	    </td>
	</tr>
	</table>
	<input type="submit" />
</form>