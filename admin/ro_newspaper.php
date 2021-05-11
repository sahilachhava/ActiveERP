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
        <title>Add Newspaper RO :: Active ERP</title>
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
                                                <li class="breadcrumb-item active">Add Newspaper RO</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add Newspaper RO</h4>
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
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Newspaper</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="news[]" required>
                                                        <option value="">Select</option>
						<?php
							 include("../connection.php");
							 $sup1 = "select name from product where type='Newspaper'"; 
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
                                                <label for="example-password-input" class="col-sm-2 col-form-label">Edition</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" name="edi[]" placeholder="Edition" id="example-password-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Release Date</label>
                                                <div class="col-sm-10">
                                                  <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="rdt[]" value="" id="example-month-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Size</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="8 X 1 cms" name="size[]" value="" id="example-datetime-local-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Release Page</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Appointment Page etc." name="page[]" id="example-time-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Print</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="print[]" required>
                                                        <option value="">Select</option>
                                                        <option value="Color">Color</option>
                                                        <option value="Black & White">Black &amp; White</option>
                                                    </select>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Quantity</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" value="" placeholder="Quantity in Digit" name="quan[]" id="example-time-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Rate</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Rate per item or cms" name="rate[]" id="example-time-input" required> 
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
		    <?php
							 include("../connection.php");
							 $sup1 = "select name from product where type='Newspaper'"; 
							$sup2 = mysqli_query($conn,$sup1);
		?>
		    $(wrapper).append('<div><a href="#" class="remove_field"><center>Remove New Item</center></a><br><div class="form-group row"><label for="example-tel-input" class="col-sm-2 col-form-label">Newspaper</label><div class="col-sm-10"><select class="form-control" name="news[]" required><option value="">Select</option><?php while($sup3=mysqli_fetch_array($sup2)) { extract($sup3); echo '<option value="'.$name.'">'.$name.'</option>'; } ?></select></div></div><div class="form-group row"><label for="example-password-input" class="col-sm-2 col-form-label">Edition</label><div class="col-sm-10"><input class="form-control" type="text" value="" name="edi[]" placeholder="Edition" id="example-password-input" required></div></div><div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Release Date</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="rdt[]" value="" id="example-month-input" required></div></div><div class="form-group row"><label for="example-datetime-local-input" class="col-sm-2 col-form-label">Size</label><div class="col-sm-10"><input class="form-control" type="text" placeholder="8 X 1 cms" name="size[]" value="" id="example-datetime-local-input" required></div></div><div class="form-group row"> <label for="example-time-input" class="col-sm-2 col-form-label">Release Page</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Appointment Page etc." name="page[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-color-input" class="col-sm-2 col-form-label">Print</label> <div class="col-sm-10"><select class="form-control" name="print[]" required><option value="">Select</option><option value="Color">Color</option><option value="Black & White">Black &amp; White</option></select></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Quantity</label><div class="col-sm-10"><input class="form-control" type="number" value="" placeholder="Quantity in Digit" name="quan[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Rate</label><div class="col-sm-10"><input class="form-control" type="text" value="" placeholder="Rate per item or cms" name="rate[]" id="example-time-input" required></div></div><div class="form-group row"><label for="example-time-input" class="col-sm-2 col-form-label">Discount</label><div class="col-sm-10"><input class="form-control" type="text" value="0" placeholder="Discount in (%)" name="dis[]" id="example-time-input" required></div></div></div>'); //add input box
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
		$sup = $_POST['sup'];
		$dt = $_POST['dt'];
		$bdt = $_POST['bdt'];
		$news = "";
		if(isset($_POST["news"]) && is_array($_POST["news"])){
			$news = implode(",", $_POST["news"]); 
		}
		$client = $_POST['client'];
		$edi = "";
		if(isset($_POST["edi"]) && is_array($_POST["edi"])){
			$edi = implode(",", $_POST["edi"]); 
		}
		$rdt = $_POST['rdt'];
		if(isset($_POST["rdt"]) && is_array($_POST["rdt"])){
			$rdt = implode(",", $_POST["rdt"]); 
		}
		$hs = 998363;
		$size = "";
		if(isset($_POST["size"]) && is_array($_POST["size"])){
			$size = implode(",", $_POST["size"]); 
		}
		$page = "";
		if(isset($_POST["page"]) && is_array($_POST["page"])){
			$page = implode(",", $_POST["page"]); 
		}
		$print = "";
		if(isset($_POST["print"]) && is_array($_POST["print"])){
			$print = implode(",", $_POST["print"]); 
		}
		$quan = "";
		if(isset($_POST["quan"]) && is_array($_POST["quan"])){
			$quan = implode(",", $_POST["quan"]); 
		}
		$rate = "";
		if(isset($_POST["rate"]) && is_array($_POST["rate"])){
			$rate = implode(",", $_POST["rate"]); 
		}
		$dis = "";
		if(isset($_POST["dis"]) && is_array($_POST["dis"])){
			$dis = implode(",", $_POST["dis"]); 
		}
		
		$sub[] = $discount[] = $amt[] = $tax[] = $cgst[] = $sgst[] = $gtotal[] = "";
		$quan1 = explode(",",$quan);
		$rate1 = explode(",",$rate);
		$dis1 = explode(",",$dis);
		$le = count($quan1);
		for($i=0; $i<$le; $i++)
		{
			$sub[$i] = $rate1[$i] * $quan1[$i];
			$discount[$i] = $sub[$i] * $dis1[$i] / 100;
			$amt[$i] = $sub[$i] - $discount[$i];
			
			$tax[$i] = $amt[$i] * 5 /100;
			$sgst[$i] = $tax[$i] / 2;
			$cgst[$i] = $sgst[$i];
			
			$gtotal[$i] = $amt[$i] + $tax[$i];
		}
		$sub = implode(",", $sub); 
		$discount = implode(",", $discount); 
		$amt = implode(",", $amt); 
		$tax = implode(",", $tax); 
		$cgst = implode(",", $cgst); 
		$sgst = implode(",", $sgst); 
		$gtotal = implode(",", $gtotal); 
		/*$sub = $rate * $quan;
		$discount = $sub * $dis / 100;
		$amt = $sub - $discount;
		
		$tax = $amt * 5 / 100;
		$sgst = $tax / 2;
		$cgst = $sgst;
		
		$gtotal = $amt + $tax;*/
		
		$sql = "insert into ro_newspaper(sup,dt,bdt,hsn,news,client,edi,rdt,size,page,print,quan,rate,dis,amt,sgst,cgst,gtotal,emp_name) 
		values('$sup','$dt','$bdt','$hs','$news','$client','$edi','$rdt','$size','$page','$print','$quan','$rate','$dis','$amt','$sgst','$cgst','$gtotal','$emp')";
		$result = mysqli_query($conn,$sql);
		$sql2 = "select id from ro_newspaper where id=(select max(id) from ro_newspaper)";
		$result2 = mysqli_query($conn,$sql2);
		$row = mysqli_fetch_array($result2);
		$ron = $row[0];
		
		$sql6 = "insert into ro(type,type_id) values('newspaper','$ron')";
		$result6 = mysqli_query($conn,$sql6);
		
		$sql7 = "select id from ro where id=(select max(id) from ro)";
		$result7 = mysqli_query($conn,$sql7);
		$row1 = mysqli_fetch_array($result7);
		$inn = $row1[0];
		
		$sql8 = "update ro_newspaper set r_no='$inn' where id=".$ron;
		$result8 = mysqli_query($conn,$sql8);
		
		$sql1 = "insert into ncombo(ro_no,ro_dt,sup,emp_name) values('$inn','$dt','$sup','$emp')";
		$result1 = mysqli_query($conn,$sql1);
		$sql3 = "insert into combo(ro_no,ro_dt,sup,emp_name) values('$inn','$dt','$sup','$emp')";
		$result3 = mysqli_query($conn,$sql3);
		echo "<script type='text/javascript'>
			window.location.href = 'ninvoice.php';
			</script>";
	}
?>