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
        <title>Add Expense :: Active ERP</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
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
                                                <li class="breadcrumb-item active">Add Expense</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add Expense</h4>
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
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Expense Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="dt" value="<?php echo date("Y/m/d"); ?>" id="example-month-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">RO No</label>
                                                <div class="col-sm-10">
						 <?php
							include("../connection.php");
							if(isset($_REQUEST['type']))
							{
								$s = $_REQUEST['type'];
								/*if($s=="Ahmedabad Food Fest")
								{
									echo "<select class='form-control' name='ro' required>";
									echo "<option value=''>Select</option>";
									$sup1 = "select in_no,client from aff_sales";
									$sup2 = mysqli_query($conn,$sup1);
									while($sup3=mysqli_fetch_array($sup2))
									{
										extract($sup3);
										echo "<option value='".$in_no."'>T/0".$in_no." - ".$client."</option>";
									}
									echo "</select>";
								}*/
								if($s=="IRIS 360 LED Screen")
								{
									echo "<select class='form-control' name='ro' required>";
									echo "<option value=''>Select</option>";
									$sup1 = "select rono,client from ro_led";
									$sup2 = mysqli_query($conn,$sup1);
									while($sup3=mysqli_fetch_array($sup2))
									{
										extract($sup3);
										echo '<option value="'.$rono.'">'.$rono.' - '.$client.'</option>';
									}
									echo "</select>";
								}
								elseif($s=="Railway Expense")
								{
									echo "<select class='form-control' name='ro' required>";
									echo "<option value=''>Select</option>";
									$sup1 = "select rono,client from ro_rail";
									$sup2 = mysqli_query($conn,$sup1);
									while($sup3=mysqli_fetch_array($sup2))
									{
										extract($sup3);
										echo '<option value="'.$rono.'">'.$rono.' - '.$client.'</option>';
									}
									echo "</select>";
								}
								else
								{
									echo "<input class='form-control' type='text' value='No Need to Select for Office Expense, Salary and AFF' readonly>";
								}
							}
						?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Expense Purpose</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="pur" value="" placeholder="Short Detail about Expense" id="example-search-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Mode of Payment</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" name="mod" placeholder="Cheque No/Cash" id="example-tel-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">Total Amount</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" name="amt" placeholder="Total Amount (Excluding GST)" id="example-password-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label for="example-password-input" class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea required class="form-control" placeholder="Write detailed description about expense" name="des" rows="5"></textarea>
                                                    </div>
                                                </div>
					<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Add Expense</button>
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
	 <script src="assets/plugins/alertify/js/alertify.js"></script>
        <script src="assets/pages/alertify-init.js"></script>
	<!-- Bootstrap inputmask js -->
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
	
        <!-- App js -->
        <script src="assets/js/app.js"></script>
	<script type="text/javascript">
	$('document').ready(function () {
		swal({
                title: 'Select Type of Expense',
                input: 'select',
		inputOptions: {
				'Office Expenses':'Office Expenses',
				'Salary':'Salary',
				'IRIS 360 LED Screen':'IRIS 360 LED Screen',
				'Railway Expense':'Railway Expense',
				'Ahmedabad Food Fest':'Ahmedabad Food Fest',
			},
			inputPlaceholder:'Select',
		 showCancelButton: true,
                confirmButtonText: 'Submit',
                showLoaderOnConfirm: true,
		allowOutsideClick: false,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
		inputValidator: function (value) {
		    return new Promise(function (resolve, reject) {
		      if (value == '') {
			reject('You need to select Type of Expense :)')
		      }else {
			resolve()
		      }
		    })
		  }
		}).then(function (text) {
			window.location.href='addexpense.php?type='+text;
                    },function (dismiss) {
                if (dismiss === 'cancel') {
                    swal(
                        'No, problem',
                        'redirecting... you...to... where you come from :)',
                        'error'
                    ).then(function() {
		swal.closeModal();
		window.history.back();
		});
                }
            })
	    });
	</script>
    </body>
</html>
<?php
	if(isset($_GET['type']))
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
		$sql1 = "select name from admin_detail where id=".$_SESSION["user_id"];
		$result1 = mysqli_query($conn,$sql1);
		$nm = mysqli_fetch_array($result1);
		$emp = $nm[0];
		$dt = $_POST['dt'];
		$type = $_REQUEST['type'];
		$ro = $_POST['ro'];
		$pur = $_POST['pur'];
		$mod = $_POST['mod'];
		$amt = $_POST['amt'];
		$des = $_POST['des'];
		
		$sql = "insert into expense(type,in_no,dt,pur,mode_p,amt,des,emp) values('$type','$ro','$dt','$pur','$mod','$amt','$des','$emp')";
		$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		
		echo "<script type='text/javascript'>window.location.href = 'expense.php';</script>";
	}
?>