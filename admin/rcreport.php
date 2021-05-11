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
        <title>Radio Combo Reports :: Active ERP</title>
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
                                                <li class="breadcrumb-item active">Radio Combo Reports</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Radio Combo Reports</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard content write below-->
			    <form action="rcreport.php" method="post">
			<div class="form-group row">
			<label for="example-month-input" class="col-sm-1 col-form-label">Employee</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control" name="emp" required>
                                                        <option value="0">Select</option>
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
                                                        <option value="0">Select</option>
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
            
                                            <h4 class="mt-0 header-title">Overall Profit :   <?php $sql2 = "select profit from rcombo";
												$result2 = mysqli_query($conn,$sql2);
												$pro = 0;
												while($row1=mysqli_fetch_array($result2))
												{
													$rsas = explode(",",$row1['profit']);
													$pro = $pro + array_sum($rsas);
												}
												echo "Rs. $pro"; ?></h4> <br>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                 <thead>
                                                <tr>
					<th>Employee</th>
					<th>RO No</th>
					<th>Ro Date</th>
                                                    <th>Supplier</th>
						<th>Supplier Bill No</th>
						<th>Supplier Bill Date</th>
                                                    <th>Purchase Value</th>
                                                    <th>ITC GST</th>
					<th>Purchase Bill Value</th>
					<th>Our Invoice No</th>
					<th>Our Invoice Date</th>
                                                    <th>Sale Value</th>
					<th>OTC GST</th>
					<th> Sale Bill Value</th>
					<th>Our Profit</th>
					<th>Payable GST</th>
					<th>Purchase</th>
					<th>Sales</th>
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
							if($_REQUEST["emp"] != "0"){
								$query = "SELECT * FROM `rcombo` WHERE `emp_name` like '$s%'";
							}
							if($_REQUEST["month"] != "0"){
								if($query == ""){
									$query = "SELECT * FROM `rcombo` WHERE `ro_dt` BETWEEN '2018/$dd/01' AND '2018/$dd/31'";
								}else{
									$query .= " AND `ro_dt` BETWEEN '2018/$dd/01' AND '2018/$dd/31'";
								}
							}
							$result = mysqli_query($conn,$query) or die(mysqli_error($conn)) ;
							while($row=mysqli_fetch_array($result))
							{
								extract($row);
								$pam = explode(",",$p_amt);
								$pgs = explode(",",$p_gst);
								$pgt = explode(",",$p_total);
								$sam = explode(",",$sale_amt);
								$sgs = explode(",",$sale_gst);
								$sgt = explode(",",$sale_total);
								$pf = explode(",",$profit);
								$gs = explode(",",$gst);
								$pf = number_format(array_sum($pf),2);
								$gs = number_format(array_sum($gs),2);
								$pam = number_format(array_sum($pam),2);
								$pgs = number_format(array_sum($pgs),2);
								$pgt = number_format(array_sum($pgt),2);
								$sam = number_format(array_sum($sam),2);
								$sgs = number_format(array_sum($sgs),2);
								$sgt = number_format(array_sum($sgt),2);
								echo "<tr>";
								echo "<td> $emp_name </td>";
								echo "<td> R/0$ro_no </td>";
								echo "<td> $ro_dt </td>";
								echo "<td> $sup </td>";
								echo "<td> $sup_in </td>";
								echo "<td> $sup_dt </td>";
								echo "<td> $pam </td>";
								echo "<td> $pgs </td>";
								echo "<td> $pgt </td>";
								echo "<td> T/0$sale_in </td>";
								echo "<td> $sale_dt </td>";
								echo "<td> $sam </td>";
								echo "<td> $sgs </td>";
								echo "<td> $sgt </td>";
								echo "<td> $pf </td>";
								echo "<td> $gs </td>";
								echo "<td><a href='radio_purchase.php?supu=".$sup_in."'><button class='btn btn-primary waves-effect waves-light dro'>View</button></a></td>";
								echo "<td><a href='radio_invoice.php?sid=".$sale_in."'><button class='btn btn-primary waves-effect waves-light dro'>View</button></a></td>";
								echo "</tr>";
							}
						}
						else
						{
							include("../connection.php");
							$sql = "select * from rcombo";
							$result = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result))
							{
								extract($row);
								$pam = explode(",",$p_amt);
								$pgs = explode(",",$p_gst);
								$pgt = explode(",",$p_total);
								$sam = explode(",",$sale_amt);
								$sgs = explode(",",$sale_gst);
								$sgt = explode(",",$sale_total);
								$pf = explode(",",$profit);
								$gs = explode(",",$gst);
								$pf = number_format(array_sum($pf),2);
								$gs = number_format(array_sum($gs),2);
								$pam = number_format(array_sum($pam),2);
								$pgs = number_format(array_sum($pgs),2);
								$pgt = number_format(array_sum($pgt),2);
								$sam = number_format(array_sum($sam),2);
								$sgs = number_format(array_sum($sgs),2);
								$sgt = number_format(array_sum($sgt),2);
								echo "<tr>";
								echo "<td> $emp_name </td>";
								echo "<td> R/0$ro_no </td>";
								echo "<td> $ro_dt </td>";
								echo "<td> $sup </td>";
								echo "<td> $sup_in </td>";
								echo "<td> $sup_dt </td>";
								echo "<td> $pam </td>";
								echo "<td> $pgs </td>";
								echo "<td> $pgt </td>";
								echo "<td> T/0$sale_in </td>";
								echo "<td> $sale_dt </td>";
								echo "<td> $sam </td>";
								echo "<td> $sgs </td>";
								echo "<td> $sgt </td>";
								echo "<td> $pf </td>";
								echo "<td> $gs </td>";
								echo "<td><a href='radio_purchase.php?supu=".$sup_in."'><button class='btn btn-primary waves-effect waves-light dro'>View</button></a></td>";
								echo "<td><a href='radio_invoice.php?sid=".$sale_in."'><button class='btn btn-primary waves-effect waves-light dro'>View</button></a></td>";
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