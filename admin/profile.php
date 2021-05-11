<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
$n = $e = "";
$sql1 = "select * from admin_detail where id=".$_SESSION['user_id']; 
$result1 = mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($result1))
{
	extract($row);
	$n = $name;
	$e = $email;
	$d = $dob;
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Active ERP :  My Profile</title>
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
                                                    <input class="form-control" type="text" name="name" placeholder="Full Name" value="<?php echo $n; ?>" id="example-text-input" readonly>
                                                </div>
                                            </div>
					 <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date of Birth</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="dt" value="<?php echo $d; ?>" id="example-month-input" required>
                                                 </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" name="mail" placeholder="New Email Address" value="<?php echo $e; ?>" id="example-text-input" required>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" name="pass" placeholder="Enter New Password (Ignore, If you don't want to change your password)" value="" id="example-text-input">
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
    </body>
</html>
<?php
	if(isset($_POST['mail']))
	{
		include("../connection.php");
		//$name = $_POST['name'];
		$mail = $_POST['mail'];
		$pass = $_POST['pass'];
		$dob = $_POST['dt'];
			
		$pic = $_FILES['photo']['name'];
		$pro = "profile".$_SESSION['user_id'].".jpg";
		move_uploaded_file($_FILES['photo']['tmp_name'],"assets/images/users/".$pro);
		
		if($pass=="")
		{
			$sql = "update admin_detail set image= '$pro', dob= '$dob', email = '$mail' where id=".$_SESSION['user_id']; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			echo "<script type='text/javascript'>window.location.href='index.php'</script>";
		}
		else
		{
			$sql = "update admin_detail set email = '$mail', image= '$pro', dob='$dob', password = '$pass' where id=".$_SESSION['user_id']; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			echo "<script type='text/javascript'>window.location.href='index.php'</script>";
		}
		
		/*if($pass=="")
		{
			$sql = "update admin_detail set image= '$fileName', dob= '$dob', email = '$mail' where id=".$_SESSION['user_id']; 
			$result = mysqli_query($conn,$sql);
			echo "<script type='text/javascript'>window.location.href='index.php'</script>";
		}
		else
		{
			$sql = "update admin_detail set email = '$mail', image= '$fileName', dob='$dob', password = '$pass' where id=".$_SESSION['user_id']; 
			$result = mysqli_query($conn,$sql);
			echo "<script type='text/javascript'>window.location.href='index.php'</script>";
		}*/
	}
?>