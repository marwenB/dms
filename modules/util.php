<?php
$host = "localhost";
$user = "root";
$pass = "admin123";
$dbname = "madawa";

$mysqli = new mysqli($host, $user, $pass, $dbname) or die(mysqli_error());

class Drugs
{
	public $drugid;
	public $drugname;
	public $description; 
	public $strength;
	public $form;
	public $route;
	public $manufacturer;
	public $purchaseprice;
	public $sellingprice;
	public $expirydate;
	public $quantity;
	
	public static function getObject($record)
	{
		$drug = new Drugs;
		
		$drug->drugid = $record['drug_id'];
		$drug->drugname = $record['name'];
		$drug->description = $record['description'];
		$drug->strength = $record['strength'];
		$drug->form = $record['form'];
		$drug->route = $record['route'];
		$drug->manufacturer = $record['manufucture'];
		$drug->purchaseprice = $record['purchaseprice'];
		$drug->sellingprice = $record['sellingprice'];
		$drug->expirydate = $record['expirydate'];
		$drug->quantity = $record['quantity'];
		
		return $drug;
	}	
}

class Sale
{
	public $sale_id;
	public $drug_id;
	public $quantity;
	public $date_of_sale;

	public static function getObject($record)
	{
		$sale = new Sale;

		$drug->sale_id = $record['sale_id'];
		$drug->drug_id = $record['drug_id'];
		$drug->quantity = $record['quantity'];
		$drug->date_of_sale = $record['date_of_sale'];


		return $drug;
	}
}

function checkLogin($username, $password){
	global $mysqli;
	$password = md5($password);
	
	$sql = "select * from users where username = '".$username."' and password = '".$password."'";
	$res = $mysqli->query($sql);
	$row = $res->fetch_assoc();
	
	if (!empty($row)){
		return true;	
	}else 
		return false;
}

function getDrug($drugid){
	global $mysqli;
	
	$sql = "select * from drugs where drug_id = ".$drugid;	
	$res = $mysqli->query($sql);
	$row = $res->fetch_assoc();
	
	$drugs = Drugs::getObject($row);
	
	return json_encode($drugs);
}

function getDrugByName($drug_name){
	global $mysqli;
	
	$sql = "SELECT * FROM drugs where NAME = '".$drug_name."'";
	
	$res = $mysqli->query($sql);
	$row = $res->fetch_assoc();
	
	$drug = Drugs::getObject($row);
	
	return json_encode($drug);
}

function getDrugsList(){
		
	global $mysqli;
	
	$sql = "select * from drugs";

	$res = $mysqli->query($sql);
	$results = array();
	while($row = $res->fetch_assoc()){
		$results[] = $row;	
	}
	
	return json_encode($results);
}

function getAllDrugs(){

	global $mysqli;

	$sql = "select * from drugs";

	$res = $mysqli->query($sql);
	$results = array();
	while($row = $res->fetch_assoc()){
		$results[] = $row;
	}

	return $results;
}

function reduceDrugQuantity($drug_id, $quantity){
		
	global $mysqli;

	$sql = "UPDATE drugs SET quantity = (quantity - ".$quantity.") WHERE drug_id =".$drug_id;

	$res = $mysqli->query($sql);
}

function getSale($sale_id){
	global $mysqli;
	
	$sql = "SELECT * FROM sales WHERE sale_id = ".$sale_id;	
	$res = $mysqli->query($sql);
	$row = $res->fetch_assoc();
	
	$sale = Sale::getObject($row);
	
	return json_encode($drugs);
}

function getSales(){
		
	global $mysqli;
	
	$sql = "SELECT * FROM sales ";

	$res = $mysqli->query($sql);
	$results = array();
	while($row = $res->fetch_assoc()){
		$results[] = $row;	
	}
	
	return json_encode($results);
}

function addSale($drug_id, $quantity){
	global $mysqli;
	$sql = "INSERT INTO sales (drug_id, quantity, date_of_sale) VALUES(".$drug_id.",".$quantity.", '".date("Y-m-d H:i:s")."')";
	$res = $mysqli->query($sql);
	if($res){
		reduceDrugQuantity($drug_id, $quantity);
		return 1;
	}
	return 0;
}

if(isset($_REQUEST['dn'])){
	echo getDrugByName($_REQUEST['dn']);
}

if(isset($_REQUEST['di']) && isset($_REQUEST['q'])){
	echo addSale($_REQUEST['di'],$_REQUEST['q']);
}

?>
