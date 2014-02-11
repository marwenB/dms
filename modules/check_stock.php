<?php 
include('util.php');
$drugs = getAllDrugs();
?>

<h2 class="sub-header">Check Stock</h2>
<div id="check_stock">
<div class="table-responsive">
            <table id="stocks" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Drug Name</th>
                  <th>Purchase Price</th>
                  <th>Selling Price</th>
                  <th>Quantity</th>
               	  <th>Expiry Date</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($drugs as $drug){?>
                <tr>
                  <td><?php echo $drug['drug_id']?></td>
                  <td><?php echo $drug['name']?></td>
                  <td><?php echo $drug['purchaseprice']?></td>
                  <td><?php echo $drug['sellingprice']?></td>
                  <td><?php echo $drug['quantity']?></td>
                  <td><?php echo $drug['expirydate']?></td>
                </tr>
               <?php }?>
              </tbody>
            </table>
          </div>
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
