<?php include('util.php')?>
<h2 class="sub-header"><span class="glyphicon glyphicon-pencil"></span> Add Drug</h2>

<div id="sell">
<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
  <input id="drug_id" type="hidden" name="drug_id"/>
  <input id="current_quantity" type="hidden" name="current_quantity"/>
  
  
  <div class="form-group">
    <label for="drugname" class="col-sm-2 control-label">Drug Name</label>
    <div class="col-sm-8">
      <input id="tags" type="text" name="drug" class="form-control" placeholder="Enter Drug Name here ...">
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">Description </label>
    <div class="col-sm-8">
      <input id="description" type="text" name="description" class="form-control" placeholder="Enter Drug description ...">
    </div>
  </div>
  
  <div class="form-group">
    <label for="purchase_price" class="col-sm-2 control-label">Purchasing Price</label>
    <div class="col-sm-8">
      <input id="purchase_price" type="text" name="purchase_price" class="form-control" placeholder="Enter Purchasing Price ...">
    </div>
  </div>
  
  <div class="form-group">
    <label for="selling_price" class="col-sm-2 control-label">Selling Price</label>
    <div class="col-sm-8">
      <input id="selling_price" type="text" name="selling_price" class="form-control" placeholder="Enter Selling Price ...">
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="strength" class="col-sm-2 control-label">Dosage</label>
    <div class="col-sm-8">
      <input id="strength" type="text" name="strength" class="form-control" placeholder="Enter Dosage ...">
    </div>
  </div>

 
 	<input  class="btn btn-primary btn-lg" type="submit" name="Submit" value=" Save Drug"/> 
 		
</form>
</div>


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
        url: "modules/util.php",
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
    
      var stregth = parseInt($("#stregth").val());
      var stregth = parseInt($("#stregth").val());
      var stregth = parseInt($("#stregth").val());
  
      if (isNaN(quantity)){
    	  alert("Please enter valid quantity");
      }else
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
        quantity =  $("#quantity_sold").val();
        alert ("Sale Saved.");
        $.ajax({
          type: "POST",
          url: "modules/util.php",
          data: {di:drug_id, q: quantity},
          success: function(result) {
        	 
        	  
              
          }
        });

      }
      

    });

  });
</script>
