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
        <title>Active ERP :  Latest Updates</title>
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
                                                <li class="breadcrumb-item active">Updates</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Latest Updates</h4> 
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard starts-->
			    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="card m-b-30">
                                            <div class="card-body">
                
                                                <h4 class="mt-0 header-title">New updates</h4>
                                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingOne">
                                                            <h5 class="mb-0 mt-0 font-16">
                                                                <a data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseOne" aria-expanded="true"
                                                                   aria-controls="collapseOne" class="text-dark">
                                                                   Version 1.3
                                                                </a>
                                                            </h5>
                                                        </div>
                
                                                        <div id="collapseOne" class="collapse show" role="tabpanel"
                                                             aria-labelledby="headingOne">
                                                            <div class="card-body">
							<ul>
							<li>User can delete Request Order. (Newspaper, Radio, Hoarding, LED, Railway).</li>
							<li>Known bugs fixed.</li>
							</ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingTwo">
                                                            <h5 class="mb-0 mt-0 font-16">
                                                                <a class="collapsed text-dark" data-toggle="collapse"
                                                                   data-parent="#accordion" href="#collapseTwo"
                                                                   aria-expanded="false" aria-controls="collapseTwo">
                                                                    Version 1.2
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" role="tabpanel"
                                                             aria-labelledby="headingTwo">
                                                            <div class="card-body">
							    <ul>
								<li>Known bugs fixed.</li>
							</ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingThree">
                                                            <h5 class="mb-0 mt-0 font-16">
                                                                <a class="collapsed text-dark" data-toggle="collapse"
                                                                   data-parent="#accordion" href="#collapseThree"
                                                                   aria-expanded="false" aria-controls="collapseThree">
                                                                    Version 1.0
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseThree" class="collapse" role="tabpanel"
                                                             aria-labelledby="headingThree">
                                                            <div class="card-body">
							<ul>
							<li>Testing and Deploy the Software.</li>
							<li>Known bugs fixed.</li>
							</ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end row-->             
				
			   
                                <!-- dashboard content end -->
				
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