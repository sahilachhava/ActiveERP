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
        <title>Active ERP :  Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/sdap.png">
	 <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
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
												$sql = "SELECT count(*) FROM `employee_details`";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												$sql1 = "SELECT count(*) FROM `admin_detail`";
												$result1 =mysqli_query($conn,$sql1);
												$s1 = mysqli_fetch_array($result1);
												echo $s[0] + $s1[0];
											?></h5>
                                                        <a href="employee.php"><p class="mb-0 text-muted">Total ERP Users</p></a>                                                             
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
                                                     <a href="customer.php"><div class="round">
                                                        <i class="mdi mdi-account-multiple-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 text-center align-self-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `customer_details`";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                       <p class="mb-0 text-muted">Total Customer</p></a>
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
                                                    <a href="supplier.php"><div class="round ">
                                                        <i class="mdi mdi-account-star"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `supplier_details`";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Total Suppliers</p></a>
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
                                                    <a href="aff_sales_details.php"><div class="round">
                                                        <i class="mdi mdi-store"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `aff_sales`";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">AFF Stall Sales</p></a>
                                                    </div>
                                                </div>
                                               <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- First Column Finished-->
			   <!-- Second Column-->
		
			    <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <a href="led.php"><div class="round">
                                                        <i class="mdi mdi-monitor"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `sales_led`";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">IRIS 360 LED Sales</p></a>
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
												$sql = "SELECT count(*) FROM `sales_newspaper`";
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
												$sql = "SELECT count(*) FROM `sales_radio`";
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
												$sql = "SELECT count(*) FROM `sales_hoarding`";
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
												$sql = "SELECT count(*) FROM `combo`";
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
												$sql = "SELECT count(*) FROM `ncombo`";
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
												$sql = "SELECT count(*) FROM `rcombo`";
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
												$sql = "SELECT count(*) FROM `hcombo`";
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
			   
                                <!-- dashboard content end -->
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
             $('.btn-animation').on('click', function(br) {
            //adding animation
            $('.modal .modal-dialog').attr('class', 'modal-dialog  ' + $(this).data("animation") + '  animated');
            });
        </script>

    </body>
</html>