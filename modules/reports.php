<?php 
include('util.php');
$drugs = getAllSales();
?>

<h2 class="sub-header"><span class="glyphicon glyphicon-tasks"></span> Reports</h2>
<div id="check_stock">
<div class="table-responsive">
            <table id="stocks" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Drug Name</th>
                  <th>Sale Date</th>
                  <th>Quantity Sold</th>
               	  
               	 
                </tr>
              </thead>
              <tbody>
              <?php foreach ($drugs as $drug){?>
                <tr>
                  <td><?php echo $drug['sale_id'];?></td>
                  <td><?php echo $drug['name'];?></td>
                  <td><?php echo $drug['date_of_sale'];?></td>
                  <td><?php echo $drug['qs'];?></td>
              
				
                </tr>
               <?php }?>
              </tbody>
            </table>
          </div>
</div>


<!-- Modal -->
<div class="modal fade" id="make_req_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Make Requisition</h4>
      </div>
      <div id="modal_body" class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="javascript:save_req();" class="btn btn-primary"> <span class="glyphicon glyphicon-floppy-disk"></span> Make Requisition</a>
      </div>
    </div>
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

   
  });
</script>
