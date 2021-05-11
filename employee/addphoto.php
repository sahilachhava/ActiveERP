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
        <title>Add Photos :: Active ERP</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/sdap.png">
        <link href="assets/plugins/morris/morris.css" rel="stylesheet">
 <!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
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
                                                <li class="breadcrumb-item active">Photo Gallery</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add New Photo</h4>
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
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Season (Year)</label>
                                                <div class="col-sm-10">
						<?php
							include("../connection.php");
							if(isset($_REQUEST['type']))
							{
								$s = $_REQUEST['type'];
								if($s=="aff")
								{
									echo "<select class='form-control' name='year' required>";
									echo "<option value=''>Select</option>";
									echo "<option value='2015'>Season 1 (2015)</option>";
									echo "<option value='2016'>Season 2 (2016)</option>";
									echo "<option value='2017'>Season 3 (2017)</option>";
									echo "<option value='2018'>Season 4 (2018)</option>";
									echo "</select>";
								}
								else
								{
									echo "<input class='form-control' type='text' value='Season/Year Selection is only for AFF photos' readonly>";
								}
							}
						?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name" placeholder="Title of Photo" value="" id="example-text-input" required>
                                                </div>
                                            </div>
				<div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
						<textarea required class="form-control" placeholder="Photo Description 20-25 Words" name="des" rows="5"></textarea>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Upload</label>
                                                <div class="col-sm-10">
						<input  type="file" name="img" class="form-control" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" />
                                                </div>
                                            </div>
					<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Add Photo</button>
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
	 <script src="assets/plugins/alertify/js/alertify.js"></script>
        <script src="assets/pages/alertify-init.js"></script>
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
                title: 'Select Type of Photo',
                input: 'select',
		inputOptions: {
				'aff':'Ahmedabad Food Fest',
				'led':'IRIS 360 LED Screen',
				'rail':'Railway LED',
				'exi':'Exhibition',
				'out':'Outdoor',
				'other':'Other',
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
			reject('You need to select Type of Photo :)')
		      }else {
			resolve()
		      }
		    })
		  }
		}).then(function (text) {
			window.location.href='addphoto.php?type='+text;
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
		$sql1 = "select name from employee_details where id=".$_SESSION["user_id"];
		$result1 = mysqli_query($conn,$sql1);
		$nm = mysqli_fetch_array($result1);
		$emp = $nm[0];
		
		$sql2 = "select max(id) from photos";
		$resu = mysqli_query($conn,$sql2);
		$nm1 = mysqli_fetch_array($resu);
		$no = $nm1[0];
		
		$name = $_POST['name'];
		$tag = $_GET['type'];
		$year = $_POST['year'];
		$des = $_POST['des'];
		$un = $no + 1;
		
		$pic = $_FILES['img']['name'];
		$url = "image".$un.".jpg";
		move_uploaded_file($_FILES['img']['tmp_name'],"../../photos/".$url);
		
		$sql = "insert into photos(name,des,tag,url,year,emp_name) values('$name','$des','$tag','$url','$year','$emp')";
		$result = mysqli_query($conn,$sql) or die(mysqli_query($conn));
	}
?>