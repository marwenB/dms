<?php 
session_start();
include_once('modules/util.php');

if(!isset($_SESSION['dms-username'])){
	header('Location: login.php');
	return;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.ico"-->

    <title>Madawa Management System</title>

    <!--  CSS -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/dashboard.css" rel="stylesheet"/>
	<link href="css/jquery-ui.css" rel="stylesheet"/>
   
  	<style id="clearly_highlighting_css" type="text/css">
  		/* selection */ 
  		html.clearly_highlighting_enabled ::-moz-selection { background: rgba(246, 238, 150, 0.99); } 
  		html.clearly_highlighting_enabled ::selection { background: rgba(246, 238, 150, 0.99); } 
  		/* cursor */ 
  		html.clearly_highlighting_enabled {    /* cursor and hot-spot position -- requires a default cursor, after the URL one */    cursor: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--cursor.png") 14 16, text; } 
  		/* highlight tag */ 
  		em.clearly_highlight_element {    font-style: inherit !important; font-weight: inherit !important;    background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--yellow.png");    background-repeat: repeat-x; background-position: top left; background-size: 100% 100%; } 
  		/* the delete-buttons are positioned relative to this */ 
  		em.clearly_highlight_element.clearly_highlight_first { position: relative; } 
  		/* delete buttons */ 
  		em.clearly_highlight_element a.clearly_highlight_delete_element {    display: none; cursor: pointer;    padding: 0; margin: 0; line-height: 0;    position: absolute; width: 34px; height: 34px; left: -17px; top: -17px;    background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--delete-sprite.png"); background-repeat: no-repeat; background-position: 0px 0px; } 
  		em.clearly_highlight_element a.clearly_highlight_delete_element:hover { background-position: -34px 0px; } /* retina */ @media (min--moz-device-pixel-ratio: 2), (-webkit-min-device-pixel-ratio: 2), (min-device-pixel-ratio: 2) {    em.clearly_highlight_element { background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--yellow@2x.png"); }    
  		em.clearly_highlight_element a.clearly_highlight_delete_element { background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--delete-sprite@2x.png"); background-size: 68px 34px; } } 
  	</style>
  	<style id="holderjs-style" type="text/css"></style>
  	<style>
  		[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }
  		[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }
  		[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }
  		[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }
  	</style>
  	
  	<style type="text/css">
  		.loading
  		{
	  		display: block;
		    margin-left: auto;
		    margin-right: auto;
  		}
  		#user-controls
  		{
	  		margin-top: 8px;
  		}
  	</style>
  	<style type="text/css" title="currentStyle">
			@import "css/demo_page.css";
			@import "css/demo_table.css";
			@import "css/datepicker.css";
	</style>
</head> 
 <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""> Madawa Management System</a>
        </div>
        <div class="navbar-collapse collapse">
            <div id="user-controls" class="btn-group navbar-right">
			  <button type="button" class="btn btn-primary"><?php echo $_SESSION['dms-username'];?></button>
			  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			    <span class="caret"></span>
			    <span class="sr-only">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			    <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Profile Settings</a></li>
			    <li class="divider"></li>
			    <li><a href="login.php?logout=true"> <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			  </ul>
			</div>
         
          
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <?php if($_SESSION['dms-role']=="admin" || $_SESSION['dms-role']=="pharma"){?>
            <li>
	            <a href="modules/sell.php"><span class="glyphicon glyphicon-barcode"></span> Sell drugs</a>
            </li>
           <?php }?>
           <?php if($_SESSION['dms-role']=="admin"  ||  $_SESSION['dms-role']=="pharma"){?>
            <li>
            	<a href="modules/check_stock.php"><span class="glyphicon glyphicon-search"></span> Check Stock</a>
            </li>
            <?php }?>
             <?php if($_SESSION['dms-role']=="admin" || $_SESSION['dms-role']=="kemsa"){?>
            <li>
            	<a href="modules/add_drug.php"><span class="glyphicon glyphicon-pencil"></span> Add Drug</a>
            </li>
            <?php }?>
            <?php if($_SESSION['dms-role']=="admin" || $_SESSION['dms-role']=="kemsa"){?>
            <li>
            	<a href="modules/supply_drugs.php"><span class="glyphicon glyphicon-shopping-cart"></span> Supply drugs</a>
            </li>
            <?php }?>
            <?php if($_SESSION['dms-role']=="admin" ||$_SESSION['dms-role']=="kemsa"){?>
            <li>
            	<a href="modules/invoice.php"><span class="glyphicon glyphicon-list-alt"></span> Handle Invoice</a>
            </li>
            <?php }?>
            <?php if($_SESSION['dms-role']=="admin" || $_SESSION['dms-role']=="kemsa"){?>
            <li>
            	<a href="modules/reports.php"><span class="glyphicon glyphicon-tasks"></span> Reports</a>
            </li>
            <?php }?>
          </ul>
        </div>
        <img class="loading" alt="loading..." src="images/loading.gif" style="display:none;"/>
        <div id="right_pane" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery-1.10.2.min.js" type="text/javascript" ></script>
    <script src="./js/bootstrap.min.js" type="text/javascript" ></script>
    <script src="./js/docs.min.js" type="text/javascript" ></script>
  	<script src="./js/jquery-ui.js" type="text/javascript" ></script>
	<script src="./js/jquery.dataTables.js" type="text/javascript" ></script>
	<script src="./js/bootstrap-datepicker.js" type="text/javascript" ></script>
    <script type="text/javascript">
    


    $(document).ready(function(){
		//right_load('modules/sell.php');

		$lis = $('.nav-sidebar li').click(function(e) {
		    $lis.filter(".active").removeClass("active");
		    $(this).addClass('active');
		    e.preventDefault();

		    var href = $('a', this).attr('href');
		    
		    right_load(href);
		});
    });

    function right_load(url){
    	
    	$('.loading').show();
	    $("#right_pane").load(
	    	    url, 
	    		{}, 
	    		function() 
	    		{
	    			$('.loading').hide();
	    			$('#stocks').dataTable({
	    		        "sPaginationType": "full_numbers"
	    		    });
	    		}
	    );
    }
    </script>
  

</body></html>