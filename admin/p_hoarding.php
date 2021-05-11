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
        <title>Add Hoarding Purchase :: Active ERP</title>
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
                                                <li class="breadcrumb-item active">Add Hoarding Purchase</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add Hoarding Purchase</h4>
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
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Invoice Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="dt" value="" id="example-month-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">Hoarding RO No</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control" name="ro" required>
                                                        <option value="">Select Hoarding Request Order Number</option>
                                                        <?php
							 include("../connection.php");
							 $sup1 = "select r_no,client from ro_hoarding where status=0";
							$sup2 = mysqli_query($conn,$sup1);
							while($sup3=mysqli_fetch_array($sup2))
							{
								extract($sup3);
								echo "<option value='".$r_no."'>R/0".$r_no." - ".$client."</option>";
							}
						?>
                                                    </select>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Supplier Invoice</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="Supplier Invoice Number" name="si" id="example-time-input" required> 
                                                </div>
                                            </div>
					<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Add Purchase</button>
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
<!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/alertify/css/alertify.css" rel="stylesheet" type="text/css">
	 <!-- Sweet-Alert  -->
         <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="assets/plugins/skycons/skycons.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/morris/morris.min.js"></script>
        
        <script src="assets/pages/dashborad.js"></script>

	<!-- Bootstrap inputmask js -->
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
	
        <!-- App js -->
        <script src="assets/js/app.js"></script>
	<script type="text/javascript">
	$('document').ready(function () {
            swal({
                title: 'Order Rates Changed ?',
                text: "Click yes if RO rates are changed..!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, it changed !',
                cancelButtonText: 'No, not changed!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                buttonsStyling: false,
	allowOutsideClick: false
            }).then(function () {
			swal({
                title: 'Select Hoarding RO No',
                input: 'select',
		inputOptions: {
			<?php
				$sl = "select * from ro_hoarding where status=0";
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
	    var rr = text;
                swal({
                    type: 'success',
                    title: 'Please enter changed rate and discount',
                    html: '' ,
                }).then(function () {
		window.location.href='hrate.php?rno='+text;
                    })
	    });
			//window.location.href='rate.php';
            }, function (dismiss) {
                if (dismiss === 'cancel') {
                    swal(
                        'No, problem',
                        'Closing this box :)',
                        'error'
                    ).then(function() {
		swal.closeModal();
		});
                }
            })
        });
</script>
    </body>
</html>
<?php
	if(isset($_GET['disabled']))
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
		$ron = $_POST['ro'];
	
		$sql1 = "select * from ro_hoarding where r_no=".$ron;
		$result1 = mysqli_query($conn,$sql1);
		while($row=mysqli_fetch_array($result1))
		{
			extract($row);
			$supp = $sup;
			$cus = $client;
			$start = $sd;
			$end = $ed;
			$lo = $loc;
			$sze = $size;
			$qu = $quan;
			$hs = $hsn;
			$pt = $amt;
			$ptt = $pamt;
			$pttt = $mamt;
			$ggg = $cgst;
			$rt = $rate;
			$rtt = $prate;
			$rttt = $mrate;
			$dc = $dis;
			$gtt = $gtotal;
			$ch = $s_total;
			$ch1 = $profit;
			$emp = $emp_name;
		}
		$ggg1 = explode(",",$ggg);
		$le = count($ggg);
		$ttt = "";
		for($i=0;$i<=$le;$i++)
		{
			$ttt[$i] = $ggg1[$i] * 2;
		}
		$ttt = implode(",", $ttt);
		$dt = $_POST['dt'];
		$si = $_POST['si'];
	
			$famt = $ptt + $pt + $pttt;
			$sql = "insert into purchase_hoarding(sup,sup_in,dt,hsn,client,loc,size,sd,ed,quan,rate,prate,mrate,dis,amt,pamt,mamt,sgst,cgst,gtotal,ro_no,s_total,profit,emp_name) 
				values('$supp','$si','$dt','$hs','$cus','$lo','$sze','$start','$end','$qu','$rt','$rtt','$rttt','$dc','$pt','$ptt','$pttt','$ggg','$ggg','$gtt','$ron','$ch','$ch1','$emp')";
			$result = mysqli_query($conn,$sql) or die("error");
			
			$sql6 = "insert into purchase(type,type_id) values('hoarding','$ron')";
			$result6 = mysqli_query($conn,$sql6);
			
			$sql7 = "select id from purchase where id=(select max(id) from purchase)";
			$result7 = mysqli_query($conn,$sql7);
			$row1 = mysqli_fetch_array($result7);
			$inn = $row1[0];
			
			$sql8 = "update purchase_hoarding set p_no='$inn' where ro_no=".$ron;
			$result8 = mysqli_query($conn,$sql8);
			
			$sql3 = "update ro_hoarding set status = 1 where r_no=".$ron;
			$result3 = mysqli_query($conn,$sql3);
			
			$sql1 = "update hcombo set sup_in = '$si', sup_dt = '$dt', p_amt = '$famt', p_gst = '$ttt', p_total = '$gtt' where ro_no=".$ron;
			$result1 = mysqli_query($conn,$sql1);
			$sql2 = "update combo set sup_in = '$si', sup_dt = '$dt', p_amt = '$famt', p_gst = '$ttt', p_total = '$gtt' where ro_no=".$ron;
			$result2 = mysqli_query($conn,$sql2);
			echo "<script type='text/javascript'>
			window.location.href = 'hoarding_purchase.php';
			</script>";
			
		/*elseif(isset($_POST['rate']) and $dis == "0")
		{
			$pamt = $rtt * $sqft;
			$mamt = $rttt * $sqft;
			
			$sub = $rate * $qu;
			$discount = $sub * $dc / 100;
			$amt = $sub - $discount;
			
			$famt = $amt + $pamt + $mamt;
			
			$tax = $famt * 18 / 100;
			$sgst = $tax / 2;
			$cgst = $sgst;
			
			$gtotal = $famt + $tax;
				
			$sql = "insert into purchase_hoarding(sup,dt,sup_in,hsn,client,loc,size,sd,ed,quan,rate,prate,mrate,dis,amt,pamt,mamt,sgst,cgst,gtotal,ro_no,emp_name) 
		values('$supp','$dt','$si','$hs','$cus','$lo','$sze','$start','$end','$qu','$rate','$rtt','$rttt','$dc','$amt','$pamt','$mamt','$sgst','$cgst','$gtotal','$ron','$emp')";
			$result = mysqli_query($conn,$sql);
			
			$sql6 = "insert into purchase(type,type_id) values('hoarding','$ron')";
			$result6 = mysqli_query($conn,$sql6);
			
			$sql7 = "select id from purchase where id=(select max(id) from purchase)";
			$result7 = mysqli_query($conn,$sql7);
			$row1 = mysqli_fetch_array($result7);
			$inn = $row1[0];
			
			$sql8 = "update purchase_hoarding set p_no='$inn' where ro_no=".$ron;
			$result8 = mysqli_query($conn,$sql8);
			
			$sql1 = "update hcombo set sup_in = '$si', sup_dt = '$dt', p_amt = '$famt', p_gst = '$tax', p_total = '$gtotal' where ro_no=".$ron;
			$result1 = mysqli_query($conn,$sql1);
			$sql2 = "update combo set sup_in = '$si', sup_dt = '$dt', p_amt = '$famt', p_gst = '$tax', p_total = '$gtotal' where ro_no=".$ron;
			$result2 = mysqli_query($conn,$sql2);
			echo "<script type='text/javascript'>
			window.location.href = 'hoarding_purchase.php';
			</script>";
		}
		elseif($rate == "" and $dis != 0)
		{
			$pamt = $rtt * $sqft;
			$mamt = $rttt * $sqft;
			
			$sub = $rt * $qu;
			$discount = $sub * $dis / 100;
			$amt = $sub - $discount;
			
			$famt = $amt + $pamt + $mamt;
			
			$tax = $famt * 18 / 100;
			$sgst = $tax / 2;
			$cgst = $sgst;
			
			$gtotal = $famt + $tax;
				
			$sql = "insert into purchase_hoarding(sup,dt,sup_in,hsn,client,loc,size,sd,ed,quan,rate,prate,mrate,dis,amt,pamt,mamt,sgst,cgst,gtotal,ro_no,emp_name) 
		values('$supp','$dt','$si','$hs','$cus','$lo','$sze','$start','$end','$qu','$rt','$rtt','$rttt','$dis','$amt','$pamt','$mamt','$sgst','$cgst','$gtotal','$ron','$emp')";
			$result = mysqli_query($conn,$sql);
			
			$sql6 = "insert into purchase(type,type_id) values('hoarding','$ron')";
			$result6 = mysqli_query($conn,$sql6);
			
			$sql7 = "select id from purchase where id=(select max(id) from purchase)";
			$result7 = mysqli_query($conn,$sql7);
			$row1 = mysqli_fetch_array($result7);
			$inn = $row1[0];
			
			$sql8 = "update purchase_hoarding set p_no='$inn' where ro_no=".$ron;
			$result8 = mysqli_query($conn,$sql8);
			
			$sql1 = "update hcombo set sup_in = '$si', sup_dt = '$dt', p_amt = '$famt', p_gst = '$tax', p_total = '$gtotal' where ro_no=".$ron;
			$result1 = mysqli_query($conn,$sql1);
			$sql2 = "update combo set sup_in = '$si', sup_dt = '$dt', p_amt = '$famt', p_gst = '$tax', p_total = '$gtotal' where ro_no=".$ron;
			$result2 = mysqli_query($conn,$sql2);
			echo "<script type='text/javascript'>
			window.location.href = 'hoarding_purchase.php';
			</script>";
		}
		else
		{
			$pamt = $rtt * $sqft;
			$mamt = $rttt * $sqft;
			
			$sub = $rate * $qu;
			$discount = $sub * $dis / 100;
			$amt = $sub - $discount;
			
			$famt = $amt + $pamt + $mamt;
			
			$tax = $famt * 18 / 100;
			$sgst = $tax / 2;
			$cgst = $sgst;
			
			$gtotal = $famt + $tax;
				
			$sql = "insert into purchase_hoarding(sup,dt,sup_in,hsn,client,loc,size,sd,ed,quan,rate,prate,mrate,dis,amt,pamt,mamt,sgst,cgst,gtotal,ro_no,emp_name) 
		values('$supp','$dt','$si','$hs','$cus','$lo','$sze','$start','$end','$qu','$rate','$rtt','$rttt','$dis','$amt','$pamt','$mamt','$sgst','$cgst','$gtotal','$ron','$emp')";
			$result = mysqli_query($conn,$sql);
			
			$sql6 = "insert into purchase(type,type_id) values('hoarding','$ron')";
			$result6 = mysqli_query($conn,$sql6);
			
			$sql7 = "select id from purchase where id=(select max(id) from purchase)";
			$result7 = mysqli_query($conn,$sql7);
			$row1 = mysqli_fetch_array($result7);
			$inn = $row1[0];
			
			$sql8 = "update purchase_hoarding set p_no='$inn' where ro_no=".$ron;
			$result8 = mysqli_query($conn,$sql8);
			
			$sql1 = "update hcombo set sup_in = '$si', sup_dt = '$dt', p_amt = '$famt', p_gst = '$tax', p_total = '$gtotal' where ro_no=".$ron;
			$result1 = mysqli_query($conn,$sql1);
			$sql3 = "update combo set sup_in = '$si', sup_dt = '$dt', p_amt = '$famt', p_gst = '$tax', p_total = '$gtotal' where ro_no=".$ron;
			$result3 = mysqli_query($conn,$sql3);
			echo "<script type='text/javascript'>
			window.location.href = 'hoarding_purchase.php';
			</script>";
		}*/
	}
?>