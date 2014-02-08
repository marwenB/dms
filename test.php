<?php include('util.php')?>	
<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
  $(function() {
  	
  	  	
  	var results = '<?php echo getDrugsList("A"); ?>';
  		objct = JSON.parse(results);
  	  	
  	console.log(objct);
  	asp = objct.name;

	var drugz = new Array();
	
	for(index = 0; index < objct.length; index++){	
		drugz[index] = objct[index]['name'];
	}
	
    var availableTags = drugz;

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