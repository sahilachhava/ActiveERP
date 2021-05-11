<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
$date = $ty = $p = $mod = $am = $de = $e = $in = "";
if(isset($_GET['view']))
{
	$vi = $_GET['view'];
	$sql = "select * from expense where id=".$vi;
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	while($row=mysqli_fetch_array($result))
	{
		extract($row);
		$date = $dt;
		$ty = $type;
		$in = $in_no;
		$p = $pur;
		$mod = $mode_p;
		$am = $amt;
		$de = $des;
		$e = $emp;
	}	
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>View Expense :: Active ERP</title>
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
                                                <li class="breadcrumb-item active">View Expense </li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">View Expense </h4>
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
					<form>
					 <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Expense Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" name="dt" value="<?php echo $date; ?>" id="example-month-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Expense Type</label>
                                                <div class="col-sm-10">
                                                      <input class="form-control" type="text" name="type" value="<?php echo $ty; ?>" placeholder="Type of Expense" id="example-search-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Expense Purpose</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="pur" value="<?php echo $p; ?>" placeholder="Short Detail about Expense" id="example-search-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Mode of Payment</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $mod; ?>" name="mod" placeholder="Cheque No/Cash" id="example-tel-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">Total Amount</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $am; ?>" name="amt" placeholder="Total Amount (Including GST)" id="example-password-input" readonly>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Employee Name</label>
                                                <div class="col-sm-10">
                                                      <input class="form-control" type="text" name="emp" value="<?php echo $e; ?>" placeholder="Employee Name" id="example-search-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label for="example-password-input" class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea  readonly class="form-control" name="des" rows="5"><?php echo "Tax Invoice:  T/0".$in_no."\n".$de."\n\n\n"."Note: For Salary, Office Expense and AFF Tax Invoice not be visible, you can just see T/0."; ?></textarea>
                                                    </div>
                                                </div>
						<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="expense.php"><button type="button" class="btn btn-primary waves-effect waves-light">Back to Expense</button></a>
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
  <!-- Sweet-Alert  -->
         <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
         <script src="assets/pages/sweet-alert.init.js"></script> 
        <script src="assets/plugins/skycons/skycons.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/morris/morris.min.js"></script>
        
        <script src="assets/pages/dashborad.js"></script>

	<!-- Bootstrap inputmask js -->
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
	
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>