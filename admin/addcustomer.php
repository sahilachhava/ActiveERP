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
        <title>Add New Customer :: Active ERP</title>
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
                                                <li class="breadcrumb-item active">Add New Customer</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add New Customer</h4>
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
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Company Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name" placeholder="Company/Customer Name" value="" id="example-text-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Street</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="street" value="" placeholder="Street Address" id="example-search-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Area</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" name="area" placeholder="Area / Landmark" id="example-tel-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">City</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" name="city" placeholder="City" id="example-password-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">State</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" name="state" placeholder="State" id="example-number-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Pincode</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="000000" data-mask="000000" name="pin" value="" id="example-datetime-local-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Email Address</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" value="" placeholder="example@example.com" name="mail" id="example-time-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="(+91) 0000000000" name="phone" id="example-color-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">PAN Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="CDXXXXXX6A"  name="pan" id="example-time-input">
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">GSTIN/UIN</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" placeholder="24ACXXXXXXXXXZ1"  name="gst" id="example-time-input">
                                                </div>
                                            </div>
					<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Add Customer</button>
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
<?php
	if(isset($_POST['name']))
	{
		include("../connection.php");
		$sql1 = "select name from admin_detail where id=".$_SESSION["user_id"];
		$result1 = mysqli_query($conn,$sql1);
		$nm = mysqli_fetch_array($result1);
		$emp = $nm[0];
		$mail = $_POST['mail'];
		$phon = $_POST['phone'];
		$pana = $_POST['pan'];
		$gsta = $_POST['gst'];
		$m = $p = $pa = $g = "";
		$sql2 = "select * from customer_details";
		$result2 = mysqli_query($conn,$sql2);
		while($row=mysqli_fetch_array($result2))
		{
			extract($row);
			$m = $email;
			$p = $phone;
			$pa = $pan;
			$g = $gst;
			
			if($mail==$m or $phon==$p or $pana==$pa or $gsta==$g)
			{
				$error = "<script>
				    swal(
					'Duplicate Entry',
					'Pan or GSTIN or Email or Phone is matched with other data',
					'warning'
				    ).then(function () {
				window.location.href='customer.php';
				    });
				</script>";
				exit($error);
			}
		}
		$name = $_POST['name'];
		$street = $_POST['street'];
		$area = $_POST['area'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$pin = $_POST['pin'];
		
		$sql = "insert into customer_details(name,street,area,city,state,pincode,email,phone,pan,gst,emp_name) values('$name','$street','$area','$city','$state','$pin','$mail','$phon','$pana','$gsta','$emp')";
		$result = mysqli_query($conn,$sql);
		
		echo "<script type='text/javascript'>window.location.href = 'customer.php';</script>";
	}
?>