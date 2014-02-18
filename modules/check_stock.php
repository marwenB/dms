<?php 
include('util.php');
$drugs = getAllDrugs();
?>

<h2 class="sub-header"><span class="glyphicon glyphicon-search"></span> Check Stock</h2>
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
               	  <th>Stock Level</th>
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
                  <td><?php if ($drug['quantity']<=10){?>
                  		<span class='label label-danger'>Stock Level Low</span>
                  		<a class="btn btn-xs btn-primary" href="javascript:load_modal('make_req_modal',<?php echo $drug['drug_id']?>, '<?php echo $drug['name']?>');"><span class="glyphicon glyphicon-shopping-cart"></span> Make Requisition</a>
                  		<?php }else{ ?>
						<span class='label label-success'>Stock Level Normal</span>
				  		<?php }?>
				 </td>
				
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

function load_modal(requested_modal, drug_id, drug_name){
	$('.loading').show();
	
	if(requested_modal=="make_req_modal"){
		var url = "modules/make_req.php";
	}
    $("#modal_body").load(
    	    url, 
    		{drugID: drug_id, drugName:drug_name}, 
    		function() 
    		{
    			$('.loading').hide();
    			$('#'+requested_modal).modal('show');
    			
    		}
    );
}

function save_req(){
     
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
          	 if (result ==1){
          		$('#make_req_modal').modal('hide');
          	 }
 
            }
          });

        }
}
 
</script>
