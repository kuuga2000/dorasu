<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
   
  $(function() {
    var availableTags = [
      <? foreach($players as $player): ?>
      "<?=$player->name;?> - <?=$player->country;?>",
      <? endforeach;?>
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags" />
</div>
 
 
</body>
</html>