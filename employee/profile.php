<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
$n = $s = $a = $c = $st = $p = $e = $ph = $d = "";
$sql1 = "select * from employee_details where id=".$_SESSION["user_id"];
$result1 = mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($result1))
{
	extract($row);
	$n = $name;
	$s = $street;
	$a = $area;
	$d = $dob;
	$c = $city;
	$st = $state;
	$p = $pincode;
	$e = $email;
	$ph = $phone;
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>My Profile :: Active ERP</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Dropzone css -->
        <link href="assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">
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
                                                <li class="breadcrumb-item active">My Profile</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">My Profile</h4>
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
					<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
					<div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Picture</label>
                                                <div class="col-sm-10">
                                                  <input   type="file" name="photo" class="dropify" data-default-file="assets/images/users/profile<?php echo $_SESSION['user_id'];?>.jpg" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name" placeholder="Full Name" value="<?php echo $n;?>" id="example-text-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Street</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="street" value="<?php echo $s;?>" placeholder="Street Address" id="example-search-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Area</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $a;?>" name="area" placeholder="Area / Landmark" id="example-tel-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">City</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $c;?>" name="city" placeholder="City" id="example-password-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">State</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $st;?>" name="state" placeholder="State" id="example-number-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Pincode</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="000000" data-mask="000000" name="pin" value="<?php echo $p;?>" id="example-datetime-local-input" required>
                                                </div>
                                            </div>
					 <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date of Birth</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="dt" value="<?php echo $d; ?>" id="example-month-input" required>
                                                 </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Email Address</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" value="<?php echo $e;?>" placeholder="example@example.com" name="mail" id="example-time-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label">Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $ph;?>" placeholder="(+91) 0000000000" data-mask="0000000000" name="phone" id="example-color-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" value="" name="pass" placeholder="Enter New Password (Ignore, If you don't want to change your password" id="example-number-input">
                                                </div>
                                            </div>
					<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
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
	 <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>

 <!-- Dropzone js -->
        <script src="assets/plugins/dropzone/dist/dropzone.js"></script>
        <script src="assets/plugins/dropify/js/dropify.min.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
<?php
	if(isset($_POST['mail']))
	{
		include("../connection.php");
		//$name = $_POST['name'];
		$dob = $_POST['dt'];
		$street = $_POST['street'];
		$area = $_POST['area'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$pin = $_POST['pin'];
		$mail = $_POST['mail'];
		$phone = $_POST['phone'];
		$pass = $_POST['pass'];
		
		$pic = $_FILES['photo']['name'];
		$pro = "empprofile".$_SESSION['user_id'].".jpg";
		move_uploaded_file($_FILES['photo']['tmp_name'],"assets/images/users/".$pro);
		
		if($pass=="")
		{
			$sql = "update employee_details set image='$pro', street= '$street', area= '$area', city= '$city', state= '$state', dob= '$dob', pincode= '$pin', email= '$mail', phone= '$phone' where id=".$_SESSION["user_id"];
			$result = mysqli_query($conn,$sql);
			echo "<script type='text/javascript'>window.location.href='index.php'</script>";
		}
		else
		{
			$sql = "update employee_details set image='$pro', street= '$street', area= '$area', city= '$city', state= '$state', dob= '$dob', pincode= '$pin', email= '$mail', phone= '$phone', password= '$pass' where id=".$_SESSION["user_id"];
			$result = mysqli_query($conn,$sql);
			echo "<script type='text/javascript'>window.location.href='index.php'</script>";
		}
	}
?>