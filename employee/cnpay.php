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
        <title>Our Debtors (Newspaper) :: Active ERP</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/sdap.png">

        <link href="assets/plugins/morris/morris.css" rel="stylesheet">
	<!-- Sweet Alert -->
	<link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/alertify/css/alertify.css" rel="stylesheet" type="text/css">
	
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
	
	<!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                                                <li class="breadcrumb-item active">Our Debtors</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Our Debtors (Newspaper)</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard content write below-->
			    <?php
				$sql2 = "select gtotal from sales_newspaper where pay=0 and emp_name=(select name from employee_details where id=".$_SESSION['user_id'].")";
				$result2 = mysqli_query($conn,$sql2);
				$row = mysqli_fetch_array($result2);
				$gto = $row[0];
				$total = explode(",",$gto);
			?>
			 <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title"><?php echo "Total Our Debtors (Newspaper) :"." "."Rs. ".array_sum($total); ?></h4> <br>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
						<th>View</th>
						<th>In No.</th>
						<th>Invoice Date</th>
                                                    <th>Supplier</th>
                                                    <th>Customer</th>
						<th>Employee</th>
						<th>Total</th>
						<th>All Paid</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                include("../connection.php");
						$sql = "select * from sales_newspaper where pay=0 and emp_name=(select name from employee_details where id=".$_SESSION['user_id'].")";
						    
						$result = mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($result))
						{
							extract($row);
							$amt1 = explode(",",$gtotal);
							echo "<tr>";
							echo "<td><a href='newspaper_invoice.php?sid=".$id."'><button class='btn btn-primary waves-effect waves-light dro'>View</button></a></td>";
							echo "<td> T/0$in_no </td>";
							echo "<td> $dt </td>";
							echo "<td> $sup </td>";
							echo "<td> $client </td>";
							echo "<td> $emp_name </td>";
							echo "<td>Rs.".array_sum($amt1)."</td>";
							echo "<td><button class='btn btn-primary waves-effect waves-light dro' onClick='back(this.id)' id='$id'>All Paid</button></td>";
							echo "</tr>";
						}
					?>
                                                </tbody>
                                            </table>
            
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
        <!-- App js -->
        <script src="assets/js/app.js"></script>
	 <script type="text/javascript">
	 function back(but) 
	 {
	    var result = but;
            swal({
                title: 'Are u sure ?',
                text: "Click yes if client paid the amount..!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, all paid !',
                cancelButtonText: 'No, not paid !',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                buttonsStyling: false,
	allowOutsideClick: false
            }).then(function(){
		swal({
                title: 'Cheque Number',
                input: 'text',
                showCancelButton: true,
                confirmButtonText: 'Submit',
                showLoaderOnConfirm: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
		allowOutsideClick: false,
		inputValidator: function (text) {
		    return new Promise(function (resolve, reject) {
		      if (text == '') {
			reject('Enter Valid Cheque Number :)')
		      }else {
			resolve()
		      }
		    })
		  }
            }).then(function (text) {
		window.location.href='payment.php?cn='+result+'&ch='+text;
                    }, function (dismiss) {
                if (dismiss === 'cancel') {
		swal.closeModal();
                }
            });
	    });
	    }
	    
</script>
	<!-- Required datatable js -->
         <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
         <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
         <!-- Buttons examples -->
         <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
	<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
         <script src="assets/plugins/datatables/jszip.min.js"></script>
         <script src="assets/plugins/datatables/pdfmake.min.js"></script>
         <script src="assets/plugins/datatables/vfs_fonts.js"></script>
         <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
         <script src="assets/plugins/datatables/buttons.print.min.js"></script>
       <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
  <!-- Sweet-Alert  -->
         <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
         <script src="assets/pages/sweet-alert.init.js"></script>

	<script src="assets/plugins/alertify/js/alertify.js"></script>
        <script src="assets/pages/alertify-init.js"></script>
         <!-- Datatable init js -->
         <script src="assets/pages/datatables.init.js"></script>
	 <!-- Bootstrap inputmask js -->
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
    </body>
</html>