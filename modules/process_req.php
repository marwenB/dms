<?php include('util.php');
$req_id = $_REQUEST['reqID'];
$drug_name = $_REQUEST['drugName'];
$quantity_ordered = $_REQUEST['qo'];

?>

<div id="make_req">
<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
  <input id="req_id" type="hidden" name="req_id" value ="<?php echo $req_id;?>"/>
  <input id="current_quantity" type="hidden" name="current_quantity"/>
  
  
  <div class="form-group">
    <label for="drugname" class="col-sm-2 control-label">Drug Name</label>
    <div class="col-sm-8">
      <input id="tags" type="text" name="drug" class="form-control" placeholder="" value ="<?php echo $drug_name;?>" disabled>
    </div>
  </div>
  
  <div class="form-group">
    <label for="quantity_ordered" class="col-sm-2 control-label">Quantity Ordered</label>
    <div class="col-sm-8">
      <input id="quantity_ordered" type="text" name="quantity_ordered" class="form-control" placeholder="" value="<?php echo $quantity_ordered;?>" disabled>
    </div>
  </div>
   
</form>
</div>

<script>

</script>
