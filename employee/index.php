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
        <title>Active ERP :: Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/sdap.png">

        <link href="assets/plugins/morris/morris.css" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
	 <!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/alertify/css/alertify.css" rel="stylesheet" type="text/css">
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
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title"><?php echo $name[0]; ?>'s Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard content write below-->
			   <div class="row">
                                <!-- Column -->
				
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-account-multiple"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT id FROM `employee_details` where name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <a href="profile.php"><p class="mb-0 text-muted">Your Employee ID</p></a>                                                                 
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                   <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>5.26%</span></h6>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-newspaper"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 text-center align-self-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `ro_newspaper` where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <a href="newspaper.php"><p class="mb-0 text-muted">Newspaper RO</p></a>
                                                    </div>
                                                </div>
                                               <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                                                </div> -->                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round ">
                                                        <i class="mdi mdi-radio"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `ro_radio` where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <a href="radio.php"><p class="mb-0 text-muted">Total Radio RO</p></a>
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-bulletin-board"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `ro_hoarding` where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <a href="hoarding.php"><p class="mb-0 text-muted">Total Hoarding RO</p></a>
                                                    </div>
                                                </div>
                                               <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
				</div>
                                <!-- Column -->
				 <!-- Second Column-->
		
			    <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-account-multiple-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `customer_details` where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <a href="customer.php"><p class="mb-0 text-muted">Total Customer</p></a>
                                                    </div>
                                                </div>
                                               <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-newspaper"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `sales_newspaper` where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <a href="sale_newspaper.php"><p class="mb-0 text-muted">Newspaper Sales</p></a>                                                                 
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                   <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>5.26%</span></h6>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-radio"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 text-center align-self-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `sales_radio` where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <a href="sale_radio.php"><p class="mb-0 text-muted">Total Radio Sales</p></a>
                                                    </div>
                                                </div>
                                               <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                                                </div> -->                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round ">
                                                        <i class="mdi mdi-bulletin-board"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `sales_hoarding` where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <a href="sale_hoarding.php"><p class="mb-0 text-muted">T - Hoarding Sales</p></a>
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
			   <!-- Second Column finished-->
			   <!-- Third Column-->
			    
			    <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-account-star"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `combo` where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <a href="creport.php"><p class="mb-0 text-muted">Combo Report</p></a>
                                                    </div>
                                                </div>
                                               <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-newspaper"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `ncombo` where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                         <a href="ncreport.php"><p class="mb-0 text-muted">Newspaper Reports</p></a>                                           
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                   <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>5.26%</span></h6>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-radio"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 text-center align-self-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `rcombo` where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                      <a href="rcreport.php"><p class="mb-0 text-muted">Radio Reports</p></a>  
                                                    </div>
                                                </div>
                                               <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                                                </div> -->                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round ">
                                                        <i class="mdi mdi-bulletin-board"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `hcombo` where emp_name=(select name from employee_details where id=".$_SESSION["user_id"].")";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                         <a href="hcreport.php"><p class="mb-0 text-muted">Hoarding Reports</p></a>
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                               </div>
                                <!-- Column -->
			   <!-- third Column finished-->
				<?php include('../footer.php'); ?>
			   
			   
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
        
        <script src="assets/pages/dashborad.js"></script>
	 <!-- Sweet-Alert  -->
         <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <!-- <script src="assets/pages/sweet-alert.init.js"></script> -->

	<script src="assets/plugins/alertify/js/alertify.js"></script>
        <script src="assets/pages/alertify-init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
       <script type="text/javascript">
	$('#adds').click(function () {
            swal({
                title: 'Student have Aadhaar ?',
                text: "You don't have to fill all details..!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, available !',
                cancelButtonText: 'Not, available!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                buttonsStyling: false
            }).then(function () {
		    alertify
            .defaultValue("Enter Aadhaar Number")
            .prompt("Enter 12 Digit Aadhaar Number", function (str, ev) {
                ev.preventDefault();
		    if(str.length != 12)
		    {
			swal(
				'Invalid',
				'Invalid Aadhaar Number' + '  ' + str,
				'error')
		    }
		    else
		    {
			window.location.href='addstudenta.php?anum='+str;
		}
		
            }, function(ev) {
                ev.preventDefault();
                alertify.error("You've clicked Cancel");
            });
            }, function (dismiss) {
                if (dismiss === 'cancel') {
                    swal(
                        'No, problem',
                        'You are redirecting :)',
                        'error'
                    ).then(function() {
		window.location.href = "addstudent.php";
		});
                }
            })
        });
</script>

    </body>

</html>
<?php

if(isset($_GET['ch']))
{
	$a = $_GET['ch'];
	if($a == 0)
	{
	echo "<script type='text/javascript'>
	swal(
	'Invalid Aadhaar',
	'Aadhaar Doesn\'t Exist',
	'error');
	</script>";
	}
	else
	{
	echo "<script type='text/javascript'>
	swal(
	'Duplicate Entry',
	'Student Already Enrolled',
	'error');
	</script>";
	}
}
?>