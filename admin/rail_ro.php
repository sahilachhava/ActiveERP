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
        <title>Add Railway RO :: Active ERP</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/sdap.png">
        <link href="assets/plugins/morris/morris.css" rel="stylesheet">
	<!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" />

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
                                                <li class="breadcrumb-item active">Add Railway RO</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add Railway RO</h4>
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
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="dt" value="" id="example-month-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Release Order No.</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Client's RO Number" name="ro" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Tender No.</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Tender Number" name="ten" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Tender Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="tdt" value="" id="example-month-input" required>
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
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Product Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Ex: Infotainment Systems for LHB Double Dacker" name="pn[]" value="" id="example-datetime-local-input" required>
                                                </div>
                                            </div>
				
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Product Description</label>
                                                <div class="col-sm-10">
					<textarea required class="form-control summernote" placeholder="Ex. LED Destination Board Display with Provision of Integration of Coach Diagnostic and Information System also add Packing Instructions" name="des[]" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">PL Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Ex. 35982883" name="pl[]" id="example-time-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Demand Covered</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Ex. 11717311" name="dc[]" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Case Covered</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Ex. 024180002" name="cc[]" id="example-time-input" required>
                                                </div>
                                            </div>
					    <div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Allocation</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Ex. 3712820" name="al[]" id="example-time-input" required>
                                                </div>
                                            </div>
					     <div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Item HSN/SAC</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Ex. 8543" name="hsn[]" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Despatched</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Ex. By Rail, Air and Road" name="desp[]" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Destination</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Ex. Kapoorthala [Punjab]" name="dest[]" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Quantity / Set</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" value="" placeholder="Total Set / Quantity" name="quan[]" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Rate per set</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" value="" placeholder="Rate per set" name="rate[]" id="example-time-input" required>
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
                                                    <input class="form-control" type="number" value="" placeholder="Management Charge Rate in (%)" name="mcrate[]" id="example-time-input" required>
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
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">GST Rate</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" value="" placeholder="Maximum GST Rate on set" name="gsrate" id="example-time-input" required>
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
        <!--Summernote js-->
        <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="assets/pages/dashborad.js"></script>
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
		    $(wrapper).append('<div><a href="#" class="remove_field"><center>Remove New Item</center></a><br><div class="form-group row"><label for="example-datetime-local-input" class="col-sm-2 col-form-label">Product Name</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="Ex: Infotainment Systems for LHB Double Dacker" name="pn[]" value="" id="example-datetime-local-input" required></div></div><div class="form-group row"><label for="example-datetime-local-input" class="col-sm-2 col-form-label">Product Description</label><div class="col-sm-10"><textarea required class="form-control" id="summernote" placeholder="Ex. LED Destination Board Display with Provision of Integration of Coach Diagnostic and Information System also add Packing Instructions" name="des[]" rows="5"></textarea></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">PL Number</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Ex. 35982883" name="pl[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-color-input" class="col-sm-2 col-form-label">Demand Covered</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Ex. 11717311" name="dc[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-color-input" class="col-sm-2 col-form-label">Case Covered</label><div class="col-sm-10"> <input class="form-control" type="text" value="" placeholder="Ex. 024180002" name="cc[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-color-input" class="col-sm-2 col-form-label">Allocation</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Ex. 3712820" name="al[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-color-input" class="col-sm-2 col-form-label">Item HSN/SAC</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Ex. 8543" name="hsn[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-color-input" class="col-sm-2 col-form-label">Despatched</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Ex. By Rail, Air and Road" name="desp[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-color-input" class="col-sm-2 col-form-label">Destination</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Ex. Kapoorthala [Punjab]" name="dest[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-color-input" class="col-sm-2 col-form-label">Quantity / Set</label><div class="col-sm-10"><input class="form-control" type="number" value="" placeholder="Total Set / Quantity" name="quan[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Rate per set</label><div class="col-sm-10"><input class="form-control" type="number" value="" placeholder="Rate per set" name="rate[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Discount in (%)</label><div class="col-sm-10"><input class="form-control" type="number" value="" placeholder="Discount in (%)" name="dis[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">M. Charge Rate</label><div class="col-sm-10"><input class="form-control" type="number" value="" placeholder="Management Charge Rate in (%)" name="mcrate[]" id="example-time-input" required></div></div></div>'); //add input box
			$('#summernote').summernote({
                        height: 150,                 // set editor height
                        minHeight: null,             // set minimum height of editor
                        maxHeight: null,             // set maximum height of editor
                        focus: false                 // set focus to editable area after initializing summernote
                    });
		}
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<!-- Bootstrap inputmask js -->
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
                jQuery(document).ready(function(){
                    $('.summernote').summernote({
                        height: 150,                 // set editor height
                        minHeight: null,             // set minimum height of editor
                        maxHeight: null,             // set maximum height of editor
                        focus: false                 // set focus to editable area after initializing summernote
                    });
                });
            </script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
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
		$ten = $_POST['ten'];
		$tdt = $_POST['tdt'];
		$gsty = $_POST['gs'];
		$grate = $_POST['gsrate'];
		
		$pn = "";
		if(isset($_POST["pn"]) && is_array($_POST["pn"])){
			$pn = implode("~", $_POST["pn"]); 
		}
		$des = "";
		if(isset($_POST["des"]) && is_array($_POST["des"])){
			$des = implode("~", $_POST["des"]); 
		}
		$pl = "";
		if(isset($_POST["pl"]) && is_array($_POST["pl"])){
			$pl = implode(",", $_POST["pl"]); 
		}
		$dc = "";
		if(isset($_POST["dc"]) && is_array($_POST["dc"])){
			$dc = implode(",", $_POST["dc"]); 
		}
		$cc = "";
		if(isset($_POST["cc"]) && is_array($_POST["cc"])){
			$cc = implode(",", $_POST["cc"]); 
		}
		$al = "";
		if(isset($_POST["al"]) && is_array($_POST["al"])){
			$al = implode(",", $_POST["al"]); 
		}
		$hsn = "";
		if(isset($_POST["hsn"]) && is_array($_POST["hsn"])){
			$hsn = implode(",", $_POST["hsn"]); 
		}
		$desp = "";
		if(isset($_POST["desp"]) && is_array($_POST["desp"])){
			$desp = implode("~", $_POST["desp"]); 
		}
		$dest = "";
		if(isset($_POST["dest"]) && is_array($_POST["dest"])){
			$dest = implode("~", $_POST["dest"]); 
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
					
			$tax[$i] = $famt[$i] * $grate /100;
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
		
		$sql = "insert into ro_rail(dt,hsn,tender,ten_dt,client,gst_type,rono,p_name,p_des,pl_no,dc,cc,aloc,desp,dest,quan,rate,grate,dis,man,manch,amt,sgst,cgst,igst,gtotal,emp_name) 
		values('$dt','$hsn','$ten','$tdt','$client','$gsty','$rono','$pn','$des','$pl','$dc','$cc','$al','$desp','$dest','$quan','$rate','$grate','$dis','$mcrate','$manch','$amt','$sgst','$cgst','$tax','$gtotal','$emp')";
		$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		
		echo "<script type='text/javascript'>window.location.href = 'railro.php';</script>";
	}
?>