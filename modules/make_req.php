<?php include('util.php');
$drug_id = $_REQUEST['drugID'];
$drug_name = $_REQUEST['drugName'];

?>

<div id="make_req">
<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
  <input id="drug_id" type="hidden" name="drug_id" value ="<?php echo $drug_id;?>"/>
  <input id="current_quantity" type="hidden" name="current_quantity"/>
  
  
  <div class="form-group">
    <label for="drugname" class="col-sm-2 control-label">Drug Name</label>
    <div class="col-sm-8">
      <input id="tags" type="text" name="drug" class="form-control" placeholder="" value ="<?php echo $drug_name;?>" disabled>
    </div>
  </div>
  
  <div class="form-group">
    <label for="quantity_ordered" class="col-sm-2 control-label">Quantity</label>
    <div class="col-sm-8">
      <input id="quantity_ordered" type="text" name="quantity_ordered" class="form-control" placeholder="Enter the Quantity you are ordering..." >
    </div>
  </div>
   
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
 
        }
      });
    }

    /**
    *Save entered variables to database
    */
    $("input[type=submit]").click(function(){
      var current_quantity = parseInt($("#current_quantity").val());
      var quantity = parseInt($("#quantity_ordered").val());
  
     if (isNaN(quantity)){
    	  alert("Please enter valid quantity");
     }
     else
      {
        drug_id = $("#drug_id").val();
        quantity =  $("#quantity_ordered").val();
        alert ("Requisition Saved.");
        $.ajax({
          type: "POST",
          url: "modules/util.php",
          data: {di:drug_id, qr: quantity},
          success: function(result) {
        	 
        	  
              
          }
        });

      }
      

    });

  });
</script>
