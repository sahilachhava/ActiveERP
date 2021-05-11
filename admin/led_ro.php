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
        <title>Add LED RO :: Active ERP</title>
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
                                                <li class="breadcrumb-item active">Add LED RO</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add LED RO</h4>
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
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Client's RO Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="dt" value="<?php echo date("Y/m/d"); ?>" id="example-month-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Release Order No.</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Client's RO Number" name="ro" id="example-time-input" required>
                                                </div>
                                            </div>
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
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Campaign Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Campaign/Promotion Name" name="cn[]" value="" id="example-datetime-local-input" required>
                                                </div>
                                            </div>
					    
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">Start Date</label>
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
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Creative Duration</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Advertisement Size/Duration in Seconds" name="cd[]" value="" id="example-datetime-local-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Spot Per Day</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Spots Offered Per Day" name="spd[]" id="example-time-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Total Spots Offered</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Total Spots Offered in Campaign" name="spot[]" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Quantity / Seconds</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Total Seconds in Campaign" name="dur[]" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Rate per second</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Rate per second" name="rate[]" id="example-time-input" required>
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
		    $(wrapper).append('<div><a href="#" class="remove_field"><center>Remove New Item</center></a><br><div class="form-group row"><label for="example-datetime-local-input" class="col-sm-2 col-form-label">Campaign Name</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="Campaign/Promotion Name" name="cn[]" value="" id="example-datetime-local-input" required></div></div><div class="form-group row"><label for="example-password-input" class="col-sm-2 col-form-label">Start Date</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="sd[]" value="" id="example-month-input" required></div></div><div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">End Date</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="ed[]" value="" id="example-month-input" required></div></div><div class="form-group row"><label for="example-datetime-local-input" class="col-sm-2 col-form-label">Creative Duration</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="Advertisement Size/Duration in Seconds" name="cd[]" value="" id="example-datetime-local-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Spot Per Day</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Spots Offered Per Day" name="spd[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-color-input" class="col-sm-2 col-form-label">Total Spots Offered</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Total Spots Offered in Campaign" name="spot[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-color-input" class="col-sm-2 col-form-label">Quantity / Seconds</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Total Seconds in Campaign" name="dur[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Rate per second</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Rate per second" name="rate[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Discount in (%)</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Discount in (%)" name="dis[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">M. Charge Rate</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Management Charge Rate in (%)" name="mcrate[]" id="example-time-input" required></div></div></div>'); //add input box
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
		$sql1 = "select name from admin_detail where id=".$_SESSION["user_id"];
		$result1 = mysqli_query($conn,$sql1);
		$nm = mysqli_fetch_array($result1);
		$emp = $nm[0];
		$dt = $_POST['dt'];
		$client = $_POST['client'];
		$rono = $_POST['ro'];
		$gsty = $_POST['gs'];
		
		$cn = "";
		if(isset($_POST["cn"]) && is_array($_POST["cn"])){
			$cn = implode("~", $_POST["cn"]); 
		}
		$sd = "";
		if(isset($_POST["sd"]) && is_array($_POST["sd"])){
			$sd = implode(",", $_POST["sd"]); 
		}
		$ed = "";
		if(isset($_POST["ed"]) && is_array($_POST["ed"])){
			$ed = implode(",", $_POST["ed"]); 
		}
		$cd = "";
		if(isset($_POST["cd"]) && is_array($_POST["cd"])){
			$cd = implode(",", $_POST["cd"]); 
		}
		$spd = "";
		if(isset($_POST["spd"]) && is_array($_POST["spd"])){
			$spd = implode(",", $_POST["spd"]); 
		}
		$spot = "";
		if(isset($_POST["spot"]) && is_array($_POST["spot"])){
			$spot = implode(",", $_POST["spot"]); 
		}
		$dur = "";
		if(isset($_POST["dur"]) && is_array($_POST["dur"])){
			$dur = implode(",", $_POST["dur"]); 
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
		$hs = 998361;
		
		$sub[] = $discount[] = $amt[] = $tax[] = $cgst[] = $sgst[] = $gtotal[] = $famt[] = $manch[] = "";
		$dur1 = explode(",",$dur);
		$rate1 = explode(",",$rate);
		$mcrate1 = explode(",",$mcrate);
		$dis1 = explode(",",$dis);
		$le = count($dur1);
		for($i=0; $i<$le; $i++)
		{
			$sub[$i] = $rate1[$i] * $dur1[$i];
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
		
		$sql = "insert into ro_led(dt,hsn,client,gst_type,rono,cn,sd,ed,cd,spd,spot,dur,rate,dis,man,manch,amt,sgst,cgst,igst,gtotal,emp_name) 
		values('$dt','$hs','$client','$gsty','$rono','$cn','$sd','$ed','$cd','$spd','$spot','$dur','$rate','$dis','$mcrate','$manch','$amt','$sgst','$cgst','$tax','$gtotal','$emp')";
		$result = mysqli_query($conn,$sql);
		
		/*$sql2 = "select id from sales_led where id=(select max(id) from sales_led)";
		$result2 = mysqli_query($conn,$sql2);
		$row = mysqli_fetch_array($result2);
		$ron = $row[0];
		
		$sql6 = "insert into invoice(type,type_id) values('led','$ron')";
		$result6 = mysqli_query($conn,$sql6);
		
		$sql7 = "select id from invoice where id=(select max(id) from invoice)";
		$result7 = mysqli_query($conn,$sql7);
		$row1 = mysqli_fetch_array($result7);
		$inn = $row1[0];
		
		$sql8 = "update sales_led set in_no='$inn' where id=".$ron;
		$result8 = mysqli_query($conn,$sql8);*/
		
		echo "<script type='text/javascript'>window.location.href = 'ledro.php';</script>";
	}
?>