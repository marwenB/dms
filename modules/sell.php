<?php include('util.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Madawa</title>
  <link rel="stylesheet" href="jquery-ui.css" />
  <script src="jquery-1.9.1.js"></script>
  <script src="jquery-ui.js"></script>
  <script>
  $(function() {
    var results = '<?php echo getDrugsList(); ?>';
  	objct = JSON.parse(results);
  	  	
  	asp = objct.name;
    var drugz = new Array();
    for(index = 0; index < objct.length; index++){	
		  drugz[index] = objct[index]['name'];
    }
	
    var availableTags = drugz;


    /**
    *Autocomplete drug input
    */

    $("#tags").autocomplete({
      source: availableTags,
      select: function(event, ui) {getVariables(ui.item.value);}
    });

    /**
    *Get Variables of selected drug from database
    */
    function getVariables(drug_name){
       $.ajax({
        type: "POST",
        url: "util.php",
        data: {dn:drug_name},
        success: function(result) {
            var drug = JSON.parse(result);
            $("#drug_id").val(drug.drugid);
            $("#drug_form").val(drug.form);
            $("#strength").val(drug.strength);
            $("#quantity").val(drug.quantity);
            $("#current_quantity").val(drug.quantity);
            $("#selling_price").val(drug.sellingprice);
            $("#expiry_date").val(drug.expirydate);
        }
      });
    }

    /**
    *Save entered variables to database
    */
    $("input[type=submit]").click(function(){
      var current_quantity = parseInt($("#current_quantity").val());
      var quantity = parseInt($("#quantity").val());
      if (current_quantity<10){

        alert("Stock is low. Cannot be saved");

      } 
      else

      if(quantity>current_quantity){

        alert("Quantity orderd more than stock level.");
     }
     else
      {
        drug_id = $("#drug_id").val();
        quantity =  $("#quantity").val();

        alert ("Sale Saved.")
        $.ajax({
          type: "POST",
          url: "util.php",
          data: {di:drug_id, q: quantity},
          success: function(result) {
          }
        });

      }
      

    });

  });

  </script>
</head>

<body><fieldset>
<form id="form1" name="form1" method="post" action="">
  <input id="drug_id" type="hidden" name="drug_id"/>
  <input id="current_quantity" type="hidden" name="current_quantity"/>
  <table width="200" border="0">
    <tr>
      <th scope="row">Drug Name </th>
    <td>    	 
		<div class="ui-widget">
		  <label for="tags"></label>
		  <input id="tags" type="text" name="drug" style="width: 150px"/>
		</div>
	</td>
      <td><strong>Quantity</strong></td>
      <td><label>
        <input id="quantity" type="text" name="quantity" />
      </label></td>
    </tr>
    <tr>
      <th scope="row">Form</th>
      <td><label>
        <input id="drug_form" type="text" name="drug_form" />
      </label></td>
      <td><strong>Selling Price </strong></td>
      <td><label>

        <input id="selling_price" type="text" name="selling_price" />
      </label></td>
    </tr>
    <tr>
      <th scope="row">Strength</th>
      <td><label>
        <input id="strength" type="text" name="strength" />
      </label></td>

      <td><strong>Expiry Date </strong></td>
      <td><label>
        <input id="expiry_date" type="text" name="expiry_date" />
      </label></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Save" />
      </label></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

</fieldset>
</body>
</html>
<script type='text/javascript'>

</script>