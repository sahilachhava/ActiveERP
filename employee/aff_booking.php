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
        <title>AFF Booking Form :: Active ERP</title>
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
                                                <li class="breadcrumb-item active">AFF Booking</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">AFF Booking Form</h4>
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
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Booking Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="dt" value="<?php echo date("Y/m/d"); ?>" id="example-month-input" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Client Name</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="client" required>
                                                        <option value="">Select</option>
                                                        <?php
							 include("../connection.php");
							 $sup1 = "select name from customer_details where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
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
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Stall Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="stall[]" required>
                                                        <option value="">Select</option>
                                                        <option value="Hotel / ODC">Hotel / ODC</option>
                                                        <option value="Restaurant">Restaurant</option>
						<option value="Cafe">Cafe</option>
                                                        <option value="Street">Street</option>
						<option value="Cart">Own Cart</option>
						<option value="Sponsor">Sponsor</option>
                                                    </select>
                                                </div>
                                            </div>
					 <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Stall Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Stall Number" name="stallno[]" value="" id="example-datetime-local-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Quantity</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Total Stall" name="quan[]" value="" id="example-datetime-local-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Rate</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Rate per Stall" name="rate[]" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Booking Amount</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Advance Payment / Booking Amount" name="amt" id="example-time-input" required>
                                                </div>
                                            </div>
				<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Discount in (%)</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Discount in (%)" name="dis[]" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">M. Charge Rate</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Management Charge Rate in (%)" name="mcrate[]" id="example-time-input" required>
                                                </div>
                                            </div>
					     <div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">GST Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="gs" required>
                                                        <option value="">Select</option>
                                                        <option value="IGST">IGST</option>
                                                        <option value="SGST & CGST">SGST &amp; CGST</option>
                                                    </select>
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
                                                        <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Save Order</button>
						<button type="button" class="btn btn-primary waves-effect waves-light addmore">Add More</button>
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
		    $(wrapper).append('<div><a href="#" class="remove_field"><center>Remove New Item</center></a><br> <div class="form-group row"><label for="example-color-input" class="col-sm-2 col-form-label">Stall Type</label><div class="col-sm-10"><select class="form-control" name="stall[]" required><option value="">Select</option><option value="Hotel / ODC">Hotel / ODC</option><option value="Restaurant">Restaurant</option><option value="Cafe">Cafe</option><option value="Street">Street</option><option value="Cart">Own Cart</option><option value="Sponsor">Sponsor</option></select> </div> </div><div class="form-group row"><label for="example-datetime-local-input" class="col-sm-2 col-form-label">Stall Number</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="Stall Number" name="stallno[]" value="" id="example-datetime-local-input" required></div></div><div class="form-group row"><label for="example-datetime-local-input" class="col-sm-2 col-form-label">Quantity</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="Total Stall" name="quan[]" value="" id="example-datetime-local-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Rate</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Rate per Stall" name="rate[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Discount in (%)</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Discount in (%)" name="dis[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">M. Charge Rate</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Management Charge Rate in (%)" name="mcrate[]" id="example-time-input" required></div></div></div>'); //add input box
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
	if(isset($_POST['save']))
	{
		include("../connection.php");
		$sql1 = "select name from employee_details where id=".$_SESSION["user_id"];
		$result1 = mysqli_query($conn,$sql1);
		$nm = mysqli_fetch_array($result1);
		$emp = $nm[0];
		
		$dt = $_POST['dt'];
		$gsty = $_POST['gs'];
		$client = $_POST['client'];
		$bamt = $_POST['amt'];
		$hs = 996334;
		
		$stall = "";
		if(isset($_POST["stall"]) && is_array($_POST["stall"])){
			$stall = implode(",", $_POST["stall"]); 
		}
		$stallno = "";
		if(isset($_POST["stallno"]) && is_array($_POST["stallno"])){
			$stallno = implode(",", $_POST["stallno"]); 
		}
		$quan = "";
		if(isset($_POST["quan"]) && is_array($_POST["quan"])){
			$quan = implode(",", $_POST["quan"]); 
		}
		$rate = "";
		if(isset($_POST["rate"]) && is_array($_POST["rate"])){
			$rate = implode(",", $_POST["rate"]); 
		}
		$mcrate = "";
		if(isset($_POST["mcrate"]) && is_array($_POST["mcrate"])){
			$mcrate = implode(",", $_POST["mcrate"]); 
		}
		$dis = "";
		if(isset($_POST["dis"]) && is_array($_POST["dis"])){
			$dis = implode(",", $_POST["dis"]); 
		}
		
		$sub[] = $discount[] = $amt[] = $tax[] = $cgst[] = $sgst[] = $gtotal[] = $famt[] = $manch[] = "";
		$quan1 = explode(",",$quan);
		$rate1 = explode(",",$rate);
		$mcrate1 = explode(",",$mcrate);
		$dis1 = explode(",",$dis);
		$le = count($quan1);
		for($i=0; $i<$le; $i++)
		{
			$sub[$i] = $rate1[$i] * $quan1[$i];
			$discount[$i] = $sub[$i] * $dis1[$i] / 100;
			$amt[$i] = $sub[$i] - $discount[$i];
			$manch[$i] = $amt[$i] * $mcrate1[$i] / 100;
			$famt[$i] = $amt[$i] + $manch[$i];
					
			$tax[$i] = $famt[$i] * 18 /100;
			$sgst[$i] = $tax[$i] / 2;
			$cgst[$i] = $sgst[$i];
			
			$gtotal[$i] = $famt[$i] + $tax[$i];
		}
		$sub = implode(",", $sub); 
		$discount = implode(",", $discount); 
		$amt = implode(",", $amt); 
		$famt = implode(",", $famt); 
		$manch = implode(",", $manch); 
		$tax = implode(",", $tax); 
		$cgst = implode(",", $cgst); 
		$sgst = implode(",", $sgst); 
		$gtotal = implode(",", $gtotal); 
		
		$t = $s = $y = $b = $e = $l = "";
		$sql1 = "select * from aff where id=1";
		$result1 = mysqli_query($conn,$sql1);
		while($row=mysqli_fetch_array($result1))
		{
			extract($row);
			$t = $title;
			$s = $season;
			$y = $year;
			$b = $sd;
			$e = $ed;
			$l = $loc;
		}
		
		$sql = "insert into aff_booking(dt,hsn,title,season,year,sd,ed,loc,client,gst_type,stall,stallno,quan,rate,dis,man,manch,bamt,amt,sgst,cgst,igst,gtotal,emp_name) 
		values('$dt','$hs','$t','$s','$y','$b','$e','$l','$client','$gsty','$stall','$stallno','$quan','$rate','$dis','$mcrate','$manch','$bamt','$amt','$sgst','$cgst','$tax','$gtotal','$emp')";
		$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		
		echo "<script type='text/javascript'>window.location.href = 'aff_booking_confirm.php';</script>";
	}
?>