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
        <title>Add Hoarding Sales :: Active ERP</title>
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
                                                <li class="breadcrumb-item active">Add Hoarding Sales</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add Hoarding Sales</h4>
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
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="dt" value="<?php echo date("Y/m/d"); ?>" id="example-month-input" required>
                                                </div>
                                            </div>
                                           <?php
						include("../connection.php");
						if(isset($_GET['po']))
						{
						$s = $_GET['po'];
						$size1 = $new = "";
						$sql1 = "select * from ro_hoarding where r_no=".$s;
						$result1 = mysqli_query($conn,$sql1);
						while($row1=mysqli_fetch_array($result1))
						{
							extract($row1);
							$j = 0;
							$new = explode(",",$quan);
							$rt = explode(",",$rate);
							$prt = explode(",",$prate);
							$mrt = explode(",",$mrate);
							$di = explode(",",$dis);
							$lc = explode(",",$loc);
							$amt1 = explode(",",$amt);
							$pamt1 = explode(",",$pamt);
							$mamt1 = explode(",",$mamt);
							$size1 = explode(",",$size);
							$le = count($new);
							for($i=0; $i<$le; $i++)
							{
								$j++;
								echo "<div class='form-group row'>";
								echo "<label for='example-time-input' class='col-sm-2 col-form-label'>Item $j Details</label>";
								echo "<div class='col-sm-10'>";
								echo "<input class='form-control' type='text' value='$lc[$i], Size:  $size1[$i],  Amount: $amt1[$i]' id='example-time-input' disabled> 
								</div>
							    </div>";
								echo "<div class='form-group row'>";
								echo "<label for='example-time-input' class='col-sm-2 col-form-label'>Client's Rate</label>";
								echo "<div class='col-sm-10'>";
								echo "<input class='form-control' type='text' value='' placeholder='Rate per day' name='rate[]' id='example-time-input' required> 
								</div>
							    </div>";
							    echo "<div class='form-group row'>";
								echo "<label for='example-time-input' class='col-sm-2 col-form-label'>Printing Rate</label>";
								echo "<div class='col-sm-10'>";
								echo "<input class='form-control' type='text' value='' placeholder='Rate per sqft' name='prate[]' id='example-time-input' required> 
								</div>
							    </div>";
							    echo "<div class='form-group row'>";
								echo "<label for='example-time-input' class='col-sm-2 col-form-label'>Mounting Rate</label>";
								echo "<div class='col-sm-10'>";
								echo "<input class='form-control' type='text' value='' placeholder='Rate per sqft' name='mrate[]' id='example-time-input' required> 
								</div>
							    </div>";
							    echo "<div class='form-group row'>";
								echo "<label for='example-time-input' class='col-sm-2 col-form-label'>Client's Discount</label>";
								echo "<div class='col-sm-10'>";
								echo "<input class='form-control' type='text' value='' placeholder='Discount in (%)' name='dis[]' id='example-time-input' required> 
								</div>
							    </div><br><br>";
							}
						}
						}
					?>
					<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Add Sales</button>
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

	<!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/alertify/css/alertify.css" rel="stylesheet" type="text/css">
	 <!-- Sweet-Alert  -->
         <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
	<!-- Bootstrap inputmask js -->
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
	
        <!-- App js -->
        <script src="assets/js/app.js"></script>
	<script type="text/javascript">
	$('document').ready(function () {
		swal({
                title: 'Select Hoarding RO No',
                input: 'select',
		inputOptions: {
			<?php
				$sl = "select * from ro_hoarding where s=0 and emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
				$rel = mysqli_query($conn,$sl);
				while($rw = mysqli_fetch_array($rel))
				{
					extract($rw);
					echo "$r_no:'R/0$r_no - $client',";
				}
			?>
			},
			inputPlaceholder:'Select',
		//html:'<select class="form-control" name="issue"><option value="Select">Select</option><option value="Family Financial Issue">Family Financial Issue</option><option value="Not Interested in Further Studies">Not Interested in Further Studies</option><option value="Lack of Higher Studies in Village">Lack of Higher Studies in Village</option><option value="Co-Education System">Co-Education System</option><option value="Social Issue">Social Issue</option><option value="Other">Other</option></select>',
                showCancelButton: true,
	allowOutsideClick: false,
                confirmButtonText: 'Submit',
                showLoaderOnConfirm: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
		inputValidator: function (value) {
		    return new Promise(function (resolve, reject) {
		      if (value == '') {
			reject('You need to select Order Number :)')
		      }else {
			resolve()
		      }
		    })
		  }
		}).then(function (text) {
		window.location.href='s_hoarding.php?po='+text;
	    }, function (dismiss) {
				if (dismiss === 'cancel') {
				   window.history.back();
				}
			    });
        });
</script>
    </body>
</html>
<?php
	if(isset($_GET['po']))
	{
		echo "<script>
		$(window).load(function(){
			       swal.closeModal();
			      });
			</script>";
	}
	if(isset($_POST['save']))
	{
		include("../connection.php");
		$ron = $_GET['po'];
	
		$sql1 = "select * from ro_hoarding where r_no=".$ron;
		$result1 = mysqli_query($conn,$sql1);
		while($row=mysqli_fetch_array($result1))
		{
			extract($row);
			$supp = $sup;
			//$rd = $radio;
			$cus = $client;
			$start = $sd;
			$end = $ed;
			$lo = $loc;
			$sze = $size;
			$qu = $quan;
			$hs = $hsn;
			$pt = $amt + $pamt + $mamt;
			$ttt = $cgst;
			$ttt1 = $sgst;
			$emp = $emp_name;
		}
		
		$dt = $_POST['dt'];
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
		
		$sqft = $pamt = $mamt = $sub = $discount = $amt = $famt = $tax = $cgst = $sgst = $gtotal = $profit = $mgst = $gss = $dps = "";
		$rate1 = explode(",",$rate);
		$prate1 = explode(",",$prate);
		$mrate1 = explode(",",$mrate);
		$cgs = explode(",",$ttt);
		$sgs = explode(",",$ttt1);
		$dis1 = explode(",",$dis);
		$le = count($new);
		for($i=0; $i<$le; $i++)
		{
			$val = explode("x",$size1[$i]); 
			$va1 = $val[0];
			$va2 = $val[1]; 
			$sqft[$i] = $va1 * $va2;
			
			$pamt[$i] = $prate1[$i] * $sqft[$i];
			$mamt[$i] = $mrate1[$i] * $sqft[$i];
			
			$sub[$i] = $rate1[$i] * $new[$i];
			$discount[$i] = $sub[$i] * $dis1[$i] / 100;
			$amt[$i] = $sub[$i] - $discount[$i];
			
			$famt[$i] = $amt[$i] + $pamt[$i] + $mamt[$i];
			
			$tax[$i] = $famt[$i] * 18 / 100;
			$sgst[$i] = $tax[$i] / 2;
			$cgst[$i] = $sgst[$i];
			
			$gtotal[$i] = $famt[$i] + $tax[$i];
			
			$dps[$i] = $amt1[$i] + $pamt1[$i] + $mamt1[$i];
			$profit[$i] = $famt[$i] - $dps[$i];
			$gss[$i] = $cgs[$i] + $sgs[$i];
			$mgst[$i] = $tax[$i] - $gss[$i];
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
		$profit = implode(",", $profit); 
		$mgst = implode(",", $mgst);
		
		$sql = "insert into sales_hoarding(sup,dt,hsn,client,loc,size,sd,ed,quan,rate,prate,mrate,dis,amt,pamt,mamt,sgst,cgst,gtotal,ro_no,p_total,profit,emp_name) 
		values('$supp','$dt','$hs','$cus','$lo','$sze','$start','$end','$qu','$rate','$prate','$mrate','$dis','$amt','$pamt','$mamt','$sgst','$cgst','$gtotal','$ron','$pt','$profit','$emp')";
		$result = mysqli_query($conn,$sql);
		$sql1 = "update ro_hoarding set s_total= '$famt', profit='$profit', s=1 where r_no=".$ron;
		$result1 = mysqli_query($conn,$sql1);
		$sql1 = "update purchase_hoarding set s_total= '$famt', profit='$profit' where r_no=".$ron;
		$result1 = mysqli_query($conn,$sql1);
		$sql4 = "select id from sales_hoarding where id=(select max(id) from sales_hoarding)";
		$result4 = mysqli_query($conn,$sql4);
		$row = mysqli_fetch_array($result4);
		$son = $row[0];
		
		$sql6 = "insert into invoice(type,type_id) values('hoarding','$son')";
		$result6 = mysqli_query($conn,$sql6);
		
		$sql7 = "select id from invoice where id=(select max(id) from invoice)";
		$result7 = mysqli_query($conn,$sql7);
		$row1 = mysqli_fetch_array($result7);
		$inn = $row1[0];
		
		$sql8 = "update sales_hoarding set in_no='$inn' where id=".$son;
		$result8 = mysqli_query($conn,$sql8);
		
		$sql3 = "update hcombo set sale_in='$inn', sale_dt='$dt', sale_amt='$famt', sale_gst='$tax', sale_total='$gtotal', profit='$profit', gst='$mgst' where ro_no=".$ron;
		$result3 = mysqli_query($conn,$sql3);
		$sql5 = "update combo set sale_in='$inn', sale_dt='$dt', sale_amt='$famt', sale_gst='$tax', sale_total='$gtotal', profit='$profit', gst='$mgst' where ro_no=".$ron;
		$result5 = mysqli_query($conn,$sql5);
		echo "<script type='text/javascript'>
			window.location.href = 'hoarding_invoice.php';
			</script>";
	}
?>