<?php include('util.php');
$req_id = $_REQUEST['reqID'];
$drug_name = $_REQUEST['drugName'];
$quantity_ordered = $_REQUEST['qo'];
$total_amount = $_REQUEST['ta'];

?>

<div id="make_req">
<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
  <input id="req_id" type="hidden" name="req_id" value ="<?php echo $req_id;?>"/>
  <input id="current_quantity" type="hidden" name="current_quantity"/>
  
  
  <div class="form-group">
    <label for="drugname" class="col-sm-8 control-label">
    Payment for <?php echo $quantity_ordered?>  <?php echo $drug_name?>
    <br>Total = Ksh <?php echo $total_amount?></label>
    
  </div>
  
  <div class="form-group">
    <label for="amount_paid" class="col-sm-2 control-label">Amount Paid</label>
    <div class="col-sm-8">
      <input id="amount_paid" type="text" name="amount_paid" class="form-control" placeholder="" value="<?php echo $total_amount;?>" >
    </div>
  </div>
   
</form>
</div>

<script>

</script>
