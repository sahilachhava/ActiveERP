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
        <title>Hoarding Sales Reports :: Active ERP</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/sdap.png">

        <link href="assets/plugins/morris/morris.css" rel="stylesheet">

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
                                                <li class="breadcrumb-item active">Hoarding Sales Reports</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Hoarding Sales Reports</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard content write below-->
			    <form action="hsreport.php" method="post">
			<div class="form-group row">
			<label for="example-month-input" class="col-sm-1 col-form-label">Employee</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control" name="emp" required>
                                                        <option value="">Select</option>
						<?php
							$sql2 = "select DISTINCT name from admin_detail";
							$re1 = mysqli_query($conn,$sql2);
							while($row=mysqli_fetch_array($re1))
							{
								extract($row);
								echo "<option value=".$name.">".$name."</option>";
							}
							$sql1= "select DISTINCT name from employee_details";
							$re = mysqli_query($conn,$sql1);
							while($row=mysqli_fetch_array($re))
							{
								extract($row);
								echo "<option value=".$name.">".$name."</option>";
							}
						?>
                                                    </select>
                                                </div>
                                                <label for="example-month-input" class="col-sm-1 col-form-label">Month</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control" name="month">
                                                        <option value="">Select</option>
						<option value="01">January</option>
						<option value="02">February</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
                                                    </select>
                                                </div>
						<label for="example-time-input" class="col-sm-1 col-form-label" ></label>
                                                    <div class="col-sm-2">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Show Reports</button>
                                                    </div>
						      <div class="col-sm-1">
						    <button type="reset" onclick="window.location.reload();" class="btn btn-secondary waves-effect m-l-5">Reset</button>
						    </div>
                                            </div> </form>
			<div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Hoarding Sales Reports</h4> <br>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                 <thead>
                                                <tr>
					<th>In. No.</th>
					<th>In. Date</th>
                                                    <th>Supplier</th>
                                                    <th>Customer</th>
					<th>Total</th>
					<th> Buy Price</th>
					<th>Our Profit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
						if(isset($_REQUEST['emp']) or isset($_REQUEST['month']))
						{
							include("../connection.php");
							$query = "";
							$s = $_REQUEST["emp"];
							$dd = $_REQUEST["month"];
							if($_REQUEST["emp"] != ""){
								$query = "SELECT * FROM `sales_hoarding` WHERE `emp_name` like '$s%'";
							}
							if($_REQUEST["month"] != ""){
								if($query == ""){
									$query = "SELECT * FROM `sales_hoarding` WHERE `dt` BETWEEN '2018/$dd/01' AND '2018/$dd/31'";
								}else{
									$query .= " AND `dt` BETWEEN '2018/$dd/01' AND '2018/$dd/31'";
								}
							}
							$result = mysqli_query($conn,$query) or die(mysqli_error($conn)) ;
							while($row=mysqli_fetch_array($result))
							{
								extract($row);
								$amt1 = explode(",",$amt);
								$pamt1 = explode(",",$pamt);
								$mamt1 = explode(",",$mamt);
								$famt = array_sum($amt1) + array_sum($pamt1) + array_sum($mamt1);
								$gs = explode(",",$p_total);
								$pf = explode(",",$profit);
								$pf = number_format(array_sum($pf),2);
								$gs = number_format(array_sum($gs),2);
								echo "<tr>";
								echo "<td> T/0$in_no </td>";
								echo "<td> $dt </td>";
								echo "<td> $sup </td>";
								echo "<td> $client </td>";
								echo "<td> $famt </td>";
								echo "<td> $gs </td>";
								echo "<td> $pf </td>";
								echo "</tr>";
							}
						}
						else
						{
							include("../connection.php");
							$sql = "select * from sales_hoarding";
							$result = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result))
							{
								extract($row);
								$amt1 = explode(",",$amt);
								$pamt1 = explode(",",$pamt);
								$mamt1 = explode(",",$mamt);
								$famt = array_sum($amt1) + array_sum($pamt1) + array_sum($mamt1);
								$gs = explode(",",$p_total);
								$pf = explode(",",$profit);
								$pf = number_format(array_sum($pf),2);
								$gs = number_format(array_sum($gs),2);
								echo "<tr>";
								echo "<td> T/0$in_no </td>";
								echo "<td> $dt </td>";
								echo "<td> $sup </td>";
								echo "<td> $client </td>";
								echo "<td> $famt </td>";
								echo "<td> $gs </td>";
								echo "<td> $pf </td>";
								echo "</tr>";
							}
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
        
        <script src="assets/pages/dashborad.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
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
 
         <!-- Datatable init js -->
         <script src="assets/pages/datatables.init.js"></script>


    </body>
</html>