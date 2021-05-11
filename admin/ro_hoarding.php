<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Add Hoarding RO :: Active ERP</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/sdap.png">
        <link href="assets/plugins/morris/morris.css" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


   <?php include('header.php'); ?>

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">ERP</a></li>
                                                <li class="breadcrumb-item active">Add Hoarding RO</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add Hoarding RO</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard content write below-->
			    <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Fill out the form</h4>
					<br>			
					<form action="<?php $_PHP_SELF ?>" method="post">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Name</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control" name="sup" required>
                                                        <option value="">Select</option>
                                                        <?php
							 include("../connection.php");
							 $sup1 = "select name from supplier_details"; 
							$sup2 = mysqli_query($conn,$sup1);
							while($sup3=mysqli_fetch_array($sup2))
							{
								extract($sup3);
								echo "<option value='".$name."'>".$name."</option>";
							}
						?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">RO Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="dt" value="<?php echo date("Y/m/d"); ?>" id="example-month-input" required>
                                                </div>
                                            </div>
					 <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Bill Issue Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="bdt" value="" id="example-month-input" required>
                                                </div>
                                            </div>
					<!--<div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Hoarding Company</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="news" required>
                                                        <option value="">Select</option>
						<?php
							 include("../connection.php");
							 $sup1 = "select name from product where type='Hoarding'"; 
							$sup2 = mysqli_query($conn,$sup1);
							while($sup3=mysqli_fetch_array($sup2))
							{
								extract($sup3);
								echo "<option value='".$name."'>".$name."</option>";
							}
						?>
                                                    </select>
                                                </div>
                                            </div>-->
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Client Name</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="client" required>
                                                        <option value="">Select</option>
                                                        <?php
							 include("../connection.php");
							 $sup1 = "select name from customer_details"; 
							$sup2 = mysqli_query($conn,$sup1);
							while($sup3=mysqli_fetch_array($sup2))
							{
								extract($sup3);
								echo "<option value='".$name."'>".$name."</option>";
							}
						?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">Location</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" name="loc[]" placeholder="Location" id="example-password-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">Size</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" name="size[]" placeholder="Ex. 30 X 15" id="example-password-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Start Date</label>
                                                <div class="col-sm-10">
                                                  <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="sd[]" value="" id="example-month-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">End Date</label>
                                                <div class="col-sm-10">
                                                  <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="ed[]" value="" id="example-month-input" required>
                                                </div>
                                            </div>
				<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Number of  Days</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" value="" placeholder="Days in Digit" name="quan[]" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Rate</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Rate per day" name="rate[]" id="example-time-input" required> 
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Printing Rate</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Printing Rate per Square Feet" name="prate[]" id="example-time-input" required> 
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Mounting Rate</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Mounting Rate per Square Feet" name="mrate[]" id="example-time-input" required> 
                                                </div>
                                            </div>
					    <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Discount</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="0" placeholder="Discount in (%)" name="dis[]" id="example-time-input" required>
                                                </div>
                                            </div>
					    <div class="amore">
				
					</div>
					<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save Order</button>
						<button type="button" class="btn btn-primary waves-effect waves-light addmore">Add More Item</button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">Reset Form</button>
                                                    </div>
                                                </div>
						</form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/skycons/skycons.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/morris/morris.min.js"></script>
        
        <script src="assets/pages/dashborad.js"></script>

	<!-- Bootstrap inputmask js -->
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
	
        <!-- App js -->
        <script src="assets/js/app.js"></script>
	<script>
	$(document).ready(function() {
	    var max_fields      = 100; //maximum input boxes allowed
	    var wrapper         = $(".amore"); //Fields wrapper
	    var add_button      = $(".addmore"); //Add button ID
    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
		    x++; //text box increment
		    $(wrapper).append('<div><a href="#" class="remove_field"><center>Remove New Item</center></a><br><div class="form-group row"><label for="example-password-input" class="col-sm-2 col-form-label">Location</label><div class="col-sm-10"><input class="form-control" type="text" value="" name="loc[]" placeholder="Location" id="example-password-input" required></div></div><div class="form-group row"><label for="example-password-input" class="col-sm-2 col-form-label">Size</label><div class="col-sm-10"><input class="form-control" type="text" value="" name="size[]" placeholder="Ex. 30 X 15" id="example-password-input" required></div></div><div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Start Date</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="sd[]" value="" id="example-month-input" required></div></div><div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">End Date</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="ed[]" value="" id="example-month-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Number of  Days</label><div class="col-sm-10"><input class="form-control" type="number" value="" placeholder="Days in Digit" name="quan[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Rate</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Rate per day" name="rate[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Printing Rate</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Printing Rate per Square Feet" name="prate[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Mounting Rate</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Mounting Rate per Square Feet" name="mrate[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Discount</label><div class="col-sm-10"><input class="form-control" type="text" value="0" placeholder="Discount in (%)" name="dis[]" id="example-time-input" required></div></div></div>'); //add input box
		}
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
    </body>
</html>
<?php
	if(isset($_POST['rate']))
	{
		include("../connection.php");
		$sql1 = "select name from admin_detail where id=".$_SESSION["user_id"];
		$result1 = mysqli_query($conn,$sql1);
		$nm = mysqli_fetch_array($result1);
		$emp = $nm[0];
		$sup = $_POST['sup'];
		$dt = $_POST['dt'];
		$bdt = $_POST['bdt'];
		//$news = $_POST['news'];
		$client = $_POST['client'];
		$edi = "";
		if(isset($_POST["loc"]) && is_array($_POST["loc"])){
			$edi = implode("~", $_POST["loc"]); 
		}
		$ss  = "";
		if(isset($_POST["size"]) && is_array($_POST["size"])){
			$ss = implode(",", $_POST["size"]); 
		}
		$rdt = "";
		if(isset($_POST["sd"]) && is_array($_POST["sd"])){
			$rdt = implode(",", $_POST["sd"]); 
		}
		$size = "";
		if(isset($_POST["ed"]) && is_array($_POST["ed"])){
			$size = implode(",", $_POST["ed"]); 
		}
		$quan = "";
		if(isset($_POST["quan"]) && is_array($_POST["quan"])){
			$quan = implode(",", $_POST["quan"]); 
		}
		$rate = "";
		if(isset($_POST["rate"]) && is_array($_POST["rate"])){
			$rate = implode(",", $_POST["rate"]); 
		}
		$prate = "";
		if(isset($_POST["prate"]) && is_array($_POST["prate"])){
			$prate = implode(",", $_POST["prate"]); 
		}
		$mrate = "";
		if(isset($_POST["mrate"]) && is_array($_POST["mrate"])){
			$mrate = implode(",", $_POST["mrate"]); 
		}
		$dis = "";
		if(isset($_POST["dis"]) && is_array($_POST["dis"])){
			$dis = implode(",", $_POST["dis"]); 
		}
		$hs = 998361;
		
		$sqft[] = $pamt[] = $mamt[] = $sub[] = $discount[] = $amt[] = $famt[] = $tax[] = $cgst[] = $sgst[] = $gtotal[] = "";
		$quan1 = explode(",",$quan);
		$ss1 = explode(",",$ss);
		$size1 = explode(",",$size);
		$rate1 = explode(",",$rate);
		$prate1 = explode(",",$prate);
		$mrate1 = explode(",",$mrate);
		$dis1 = explode(",",$dis);
		$le = count($quan1);
		for($i=0; $i<$le; $i++)
		{
			$val = explode("x",$ss1[$i]); 
			$va1 = $val[0];
			$va2 = $val[1]; 
			$sqft[$i] = $va1 * $va2;
			
			$pamt[$i] = $prate1[$i] * $sqft[$i];
			$mamt[$i] = $mrate1[$i] * $sqft[$i];
			
			$sub[$i] = $rate1[$i] * $quan1[$i];
			$discount[$i] = $sub[$i] * $dis1[$i] / 100;
			$amt[$i] = $sub[$i] - $discount[$i];
			
			$famt[$i] = $amt[$i] + $pamt[$i] + $mamt[$i];
			
			$tax[$i] = $famt[$i] * 18 / 100;
			$sgst[$i] = $tax[$i] / 2;
			$cgst[$i] = $sgst[$i];
			
			$gtotal[$i] = $famt[$i] + $tax[$i];
		}
		$sub = implode(",", $sub); 
		$sqft = implode(",", $sqft); 
		$discount = implode(",", $discount); 
		$amt = implode(",", $amt); 
		$pamt = implode(",", $pamt); 
		$mamt = implode(",", $mamt); 
		$famt = implode(",", $famt); 
		$tax = implode(",", $tax); 
		$cgst = implode(",", $cgst); 
		$sgst = implode(",", $sgst); 
		$gtotal = implode(",", $gtotal); 
		
		$sql = "insert into ro_hoarding(sup,dt,bdt,client,hsn,loc,size,sd,ed,quan,rate,prate,mrate,dis,amt,pamt,mamt,sgst,cgst,gtotal,emp_name) 
		values('$sup','$dt','$bdt','$client','$hs','$edi','$ss','$rdt','$size','$quan','$rate','$prate','$mrate','$dis','$amt','$pamt','$mamt','$sgst','$cgst','$gtotal','$emp')";
		$result = mysqli_query($conn,$sql);
		
		$sql2 = "select id from ro_hoarding where id=(select max(id) from ro_hoarding)";
		$result2 = mysqli_query($conn,$sql2);
		$row = mysqli_fetch_array($result2);
		$ron = $row[0];
		
		$sql6 = "insert into ro(type,type_id) values('hoarding','$ron')";
		$result6 = mysqli_query($conn,$sql6);
		
		$sql7 = "select id from ro where id=(select max(id) from ro)";
		$result7 = mysqli_query($conn,$sql7);
		$row1 = mysqli_fetch_array($result7);
		$inn = $row1[0];
		
		$sql8 = "update ro_hoarding set r_no='$inn' where id=".$ron;
		$result8 = mysqli_query($conn,$sql8);
		
		$sql1 = "insert into hcombo(ro_no,ro_dt,sup,emp_name) values('$inn','$dt','$sup','$emp')";
		$result1 = mysqli_query($conn,$sql1);
		$sql3 = "insert into combo(ro_no,ro_dt,sup,emp_name) values('$inn','$dt','$sup','$emp')";
		$result3 = mysqli_query($conn,$sql3);
		echo "<script type='text/javascript'>
			window.location.href = 'hinvoice.php';
			</script>";
	}
?>