<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
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
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>AFF Setting :: Active ERP</title>
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
                                                <li class="breadcrumb-item active">AFF Setting</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">AFF Setting</h4>
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
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Event Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $t; ?>" placeholder="Ahmedabad Food Fest" name="title" id="example-time-input" readonly>
                                                </div>
                                            </div>
					
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Season No</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $s; ?>" placeholder="Season Number" name="season" id="example-time-input" required>
                                                </div>
                                            </div>
					    
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Event Year</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $y; ?>" placeholder="Event Year" data-mask="****" name="year" id="example-time-input" required>
                                                </div>
                                            </div>
					
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Start Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="sd" value="<?php echo $b; ?>" id="example-month-input" required>
                                                </div>
                                            </div>
					    
					 <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">End Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="ed" value="<?php echo $e; ?>" id="example-month-input" required>
                                                </div>
                                            </div>
					
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Location</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $l; ?>" placeholder="Location" name="loc" id="example-time-input" required>
                                                </div>
                                            </div>
					    
					<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Save New Setting</button>
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
    </body>
</html>
<?php
	if(isset($_POST['save']))
	{
		include("../connection.php");
		
		$title = $_POST['title'];
		$sea = $_POST['season'];
		$year = $_POST['year'];
		$sd = $_POST['sd'];
		$ed = $_POST['ed'];
		$loc = $_POST['loc'];
		
		$sql = "update aff set title='$title', season='$sea', year='$year', sd='$sd', ed='$ed', loc='$loc' where id=1";
		$result = mysqli_query($conn,$sql);
		
		echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
	}
?>