<?php 
include('util.php');
$drugs = getAllRequisitions();
?>

<h2 class="sub-header"><span class="glyphicon glyphicon-shopping-cart"></span> Supply Drugs</h2>
<div id="check_stock">
<div class="table-responsive">
            <table id="stocks" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Drug Name</th>
                  <th>Date Ordered</th>
                  <th>Quantity Ordered</th>
               	  <th> </th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($drugs as $drug){?>
                <tr>
                  <td><?php echo $drug['req_id']?></td>
                  <td><?php echo $drug['name']?></td>
                  <td><?php echo $drug['date_ordered']?></td>
                  <td><?php echo $drug['quantity_ordered']?></td>
         
                  <td><?php if ($drug['processed']==0){?>
                  		<span id="spn<?php echo $drug['req_id']; ?>" class='label label-danger'>Pending Requisition</span>
                  		<a id="btn<?php echo $drug['req_id']; ?>" class="btn btn-xs btn-primary" href="javascript:load_modal('process_req_modal',<?php echo $drug['req_id'];?>,'<?php echo $drug['name']?>', <?php echo $drug['quantity_ordered']?>);"><span class="glyphicon glyphicon-shopping-cart"></span> Process Request</a>
                  		<?php }else{?>
                  		<span id="spn<?php echo $drug['req_id']; ?>" class='label label-success'>Invoiced</span>
                  		<a id="btn<?php echo $drug['req_id']; ?>" class="btn btn-xs btn-primary" href="javascript:load_modal('process_req_modal',<?php echo $drug['req_id'];?>,'<?php echo $drug['name']?>', <?php echo $drug['quantity_ordered']?>);" disabled><span class="glyphicon glyphicon-shopping-cart"></span> Process Request</a>
                  		<?php }?>
				 </td>
				
                </tr>
               <?php }?>
              </tbody>
            </table>
          </div>
</div>


<!-- Modal -->
<div class="modal fade" id="process_req_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Process Request</h4>
      </div>
      <div id="modal_body" class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="javascript:receive_req();" class="btn btn-primary"> <span class="glyphicon glyphicon-floppy-disk"></span> Receive & Invoice</a>
      </div>
    </div>
  </div>
</div>

 <script>
 
function load_modal(requested_modal, req_id, drug_name, quantity_ordered){
		$('.loading').show();
		
		if(requested_modal=="process_req_modal"){
			var url = "modules/process_req.php";
		}
	    $("#modal_body").load(
	    	    url, 
	    		{reqID: req_id, drugName:drug_name, qo:quantity_ordered}, 
	    		function() 
	    		{
	    			$('.loading').hide();
	    			$('#'+requested_modal).modal('show');
	    			
	    		}
	    );
}

function receive_req(){
	     
        var quantity = parseInt($("#quantity_ordered").val());
    
       if (isNaN(quantity)){
      	  alert("Please enter valid quantity");
       }
       else
        {
          req_id = $("#req_id").val();
          quantity =  $("#quantity_ordered").val();
          alert ("Requisition Received and Invoiced.");
          $.ajax({
            type: "POST",
            url: "modules/util.php",
            data: {pr: 1, req: req_id, qo: quantity},
            success: function(result) {
        
          	 if (result ==1){
          		$('#process_req_modal').modal('hide');
          		$('#spn'+req_id).removeClass('label-danger');
          		$('#spn'+req_id).addClass('label-success');
          		$('#spn'+req_id).html('Invoiced');
          		$('#btn'+req_id).prop('disabled', true);
          	 }
 
            }
          });

        }
}
</script>
