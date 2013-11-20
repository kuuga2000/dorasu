<script language="JavaScript" src="<?=site_url();?>assets/js/jquery-1.9.1.min.js"></script>
<script>
$(document).ready(function(){
  $("#dvContent").append("<ul></ul>");
  $.ajax({
    type: "GET",
    url: "dataxml.xml",
    dataType: "xml",
    success: function(xml){
    $(xml).find('Book').each(function(){
      var sTitle = $(this).find('Title').text();
      var sPublisher = $(this).find('Publisher').text();
      $("<li></li>").html(sTitle + ", " + sPublisher).appendTo("#dvContent ul");
    });
  },
  error: function() {
    alert("An error occurred while processing XML file.");
  }
  });
});
</script>