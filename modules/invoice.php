<?php 
include('util.php');
$drugs = getProcessedRequisitions();
?>

<h2 class="sub-header"><span class="glyphicon glyphicon-list-alt"></span> Handle Invoice</h2>
<div id="check_stock">
<div class="table-responsive">
            <table id="stocks" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Drug Name</th>
                  <th>Date Ordered</th>
                  <th>Quantity Ordered</th>
                  <th>Purchase Price</th>
                  <th>Total Amount</th>
               	  <th> </th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($drugs as $drug){?>
             	 <?php $total_amount = $drug['quantity_ordered']*$drug['purchaseprice'];?>
                <tr>
                  <td><?php echo $drug['req_id']?></td>
                  <td><?php echo $drug['name']?></td>
                  <td><?php echo $drug['date_ordered']?></td>
                  <td><?php echo $drug['quantity_ordered']?></td>
                  <td><?php echo $drug['purchaseprice']?></td>
                  <td><?php echo $total_amount;?>
         		
                  <td><?php if ($drug['paid']==0){?>
                  		<span id="spn<?php echo $drug['req_id']; ?>"class='label label-danger'>Payment Pending</span>
                  		<a id="btn<?php echo $drug['req_id']; ?>"class="btn btn-xs btn-success" href="javascript:load_modal('payment_modal',<?php echo $drug['req_id']?>, '<?php echo $drug['name']?>',<?php echo $drug['quantity_ordered'];?>, <?php echo $total_amount;?>);"><span class="glyphicon glyphicon-usd"></span> Receive Payment</a>
                  		<?php }else{?>
                  		<span id="spn<?php echo $drug['req_id']; ?>" class='label label-success'>Payment Processed</span>
                  		<a id="btn<?php echo $drug['req_id']; ?>" class="btn btn-xs btn-primary" href="javascript:load_modal('process_req_modal',<?php echo $drug['req_id'];?>,'<?php echo $drug['name']?>', <?php echo $drug['quantity_ordered']?>);" disabled><span class="glyphicon glyphicon-usd"></span> Process Request</a>
                  		<?php }?>
				 </td>
				
                </tr>
               <?php }?>
              </tbody>
            </table>
          </div>
</div>


<!-- Modal -->
<div class="modal fade" id="payment_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Recieve Payment</h4>
      </div>
      <div id="modal_body" class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="javascript:process_payment();" class="btn btn-primary"> <span class="glyphicon glyphicon-floppy-disk"></span> Save Payment</a>
      </div>
    </div>
  </div>
</div>

 <script> 
 function load_modal(requested_modal, req_id, drug_name, quantity_ordered, total_amount){
		$('.loading').show();
		
		if(requested_modal=="payment_modal"){
			var url = "modules/process_payment.php";
		}
	    $("#modal_body").load(
	    	    url, 
	    		{reqID: req_id, drugName:drug_name, qo:quantity_ordered, ta:total_amount }, 
	    		function() 
	    		{
	    			$('.loading').hide();
	    			$('#'+requested_modal).modal('show');
	    			
	    		}
	    );
}

function process_payment(){
	     
     var amount_paid = parseInt($("#amount_paid").val());
 
    if (isNaN(amount_paid)){
   	  alert("Please enter valid amount");
    }
    else
     {
       req_id = $("#req_id").val();
       quantity =  $("#quantity_ordered").val();
       alert ("Payment Processed.");
       $.ajax({
         type: "POST",
         url: "modules/util.php",
         data: {pay: 1, req: req_id, qo: quantity, amount:amount_paid},
         success: function(result) {
     
       	 if (result ==1){
       		$('#payment_modal').modal('hide');
       		$('#spn'+req_id).removeClass('label-danger');
       		$('#spn'+req_id).addClass('label-success');
       		$('#spn'+req_id).html('Payment Processed');
       		$('#btn'+req_id).prop('disabled', true);
       	 }

         }
       });

     }
}
</script>
