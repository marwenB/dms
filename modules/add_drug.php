<?php include('util.php')?>
<h2 class="sub-header"><span class="glyphicon glyphicon-pencil"></span> Add Drug</h2>

<div id="sell">
<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
  <input id="drug_id" type="hidden" name="drug_id"/>
  <input id="current_quantity" type="hidden" name="current_quantity"/>
  
  
  <div class="form-group">
    <label for="drugname" class="col-sm-2 control-label">Drug Name</label>
    <div class="col-sm-8">
      <input id="drugname" type="text" name="drugname" class="form-control" placeholder="Enter Drug Name here ...">
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

 
 	 <button type="button" onclick="add_drug()" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-floppy-disk"></span> Save Drug</button>
 		
</form>
</div>

<script>
/**
 *Save entered variables to database
 */
	function add_drug(){

		var drugname = $("#drugname").val();
		var description = $("#description").val();
		var purchase_price = parseInt($("#purchase_price").val());
	   	var selling_price = parseInt($("#selling_price").val());
	 	var strength = parseInt($("#strength").val());
	   	
	 	if (drugname==null || drugname == ""){
			alert("Please enter drug name");
		}else
	 	if (description==null || description == ""){
			alert("Please enter description");
		}else
	   	if (isNaN(purchase_price)){
			alert("Please enter valid purchase price");
		}else
	 	if (isNaN(selling_price)){
			alert("Please enter valid selling price");
		}else
	 	if (isNaN(strength)){
			alert("Please enter valid dosage");
		}else
	   	{
	        alert ("Drug Saved.");
	        $.ajax({
	          type: "POST",
	          url: "modules/util.php",
	          data: {add_drug:1, dn:drugname, dd: description, pp:purchase_price, sp:selling_price, s:strength},
	          success: function(result){
		          $("#drugname").val('');
		          $("#description").val('');
		          $("#purchase_price").val('');
		          $("#selling_price").val('');
	          	  $("#strength").val('');
		      }
	        });
		}
 	}
</script>
