<?php 
include('util.php');
$drugs = getAllSales();
$low_stock = getLowStockDrugs();
$received_req = getAllRequisitions();
$paid_in = getPaidRequisitions();
$unpaid_in = getUnPaidRequisitions();
?>

<h2 class="sub-header"><span class="glyphicon glyphicon-tasks"></span> Reports</h2>
<div id="check_stock">
<ul id="myTab" class="nav nav-tabs">
     
      <li class="dropdown">
        <a href="http://getbootstrap.com/javascript/#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Stocks<b class="caret"></b></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
          <li><a href="#low_stock" tabindex="-1" data-toggle="tab">Low Stock</a></li>
        
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="http://getbootstrap.com/javascript/#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Sales <b class="caret"></b></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
          <li><a href="#all_sales" tabindex="-1" data-toggle="tab">All sales</a></li>
          
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="http://getbootstrap.com/javascript/#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Requisitions <b class="caret"></b></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
          <li><a href="#received_req" tabindex="-1" data-toggle="tab">Recieved Orders</a></li>
          <li><a href="#paid_in" tabindex="-1" data-toggle="tab">Paid Invoices</a></li>
          <li><a href="#unpaid_in" tabindex="-1" data-toggle="tab">Not Paid Invoices</a></li>
        </ul>
      </li>
       
    </ul>
<br>

<div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in" id="all_sales">
       <p><b> <span class="label label-info"><?php echo count($drugs)?> total sales.</span></b></p>
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
      <div class="tab-pane fade" id="low_stock">
       <p><b> <span class="label label-info"><?php echo count($low_stock)?> low stock items.</span></b></p>
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
              <?php foreach ($low_stock as $drug){?>
                <tr>
                  <td><?php echo $drug['drug_id']?></td>
                  <td><?php echo $drug['name']?></td>
                  <td><?php echo $drug['purchaseprice']?></td>
                  <td><?php echo $drug['sellingprice']?></td>
                  <td><?php echo $drug['quantity']?></td>
                  <td><?php if ($drug['quantity']<=10){?>
                  		<span class='label label-danger'>Stock Level Low</span>
                  		
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
      <div class="tab-pane fade" id="received_req">
        <p><b> <span class="label label-info"><?php echo count($received_req)?> received requests</span></b></p>
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
              <?php foreach ($received_req as $drug){?>
                <tr>
                  <td><?php echo $drug['req_id']?></td>
                  <td><?php echo $drug['name']?></td>
                  <td><?php echo $drug['date_ordered']?></td>
                  <td><?php echo $drug['quantity_ordered']?></td>
         
                  <td><?php if ($drug['processed']==0){?>
                  		<span id="spn<?php echo $drug['req_id']; ?>" class='label label-danger'>Pending Requisition</span>
                  		
                  		<?php }else{?>
                  		<span id="spn<?php echo $drug['req_id']; ?>" class='label label-success'>Invoiced</span>
                  		
                  		<?php }?>
				 </td>
				
                </tr>
               <?php }?>
              </tbody>
            </table>
          </div>
      </div>
      <div class="tab-pane fade" id="paid_in">
        <p><b><span class="label label-info"> <?php echo count($paid_in)?> paid invoices</span></b></p>
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
              <?php foreach ($paid_in as $drug){?>
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
                  		
                  		<?php }else{?>
                  		<span id="spn<?php echo $drug['req_id']; ?>" class='label label-success'>Payment Processed</span>
                  		
                  		<?php }?>
				 </td>
				
                </tr>
               <?php }?>
              </tbody>
            </table>
      </div>
    </div>
    
       <div class="tab-pane fade" id="unpaid_in">
       <p><b> <span class="label label-info"><?php echo count($unpaid_in)?> unpaid invoices</span></b></p>
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
              <?php foreach ($unpaid_in as $drug){?>
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
                  		
                  		<?php }else{?>
                  		<span id="spn<?php echo $drug['req_id']; ?>" class='label label-success'>Payment Processed</span>
                  		
                  		<?php }?>
				 </td>
				
                </tr>
               <?php }?>
              </tbody>
            </table>
      </div>
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
