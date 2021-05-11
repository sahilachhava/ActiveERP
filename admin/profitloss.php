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
        <title>Profit &amp; Loss Statement :: Active ERP</title>
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
                                                <li class="breadcrumb-item active">Profit &amp; Loss Statement</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Profit &amp; Loss Statement</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			     <form action="profitloss.php" method="post">
			<div class="form-group row">
				<label for="example-month-input" class="col-sm-1 col-form-label">Employee</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control emp" name="emp">
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
                                                    <select class="form-control month" name="month">
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
                                                    <div class="col-sm-2">
                                                        <button type="submit" id="submit" class="btn btn-primary waves-effect waves-light">Show Reports</button>
                                                    </div>
						      <div class="col-sm-1">
						    <a href="profitloss.php"><button type="button" class="btn btn-secondary waves-effect m-l-5">Reset</button></a>
						    </div>
                                            </div> </form>
			    <!-- dashboard content write below-->
			    <?php
				$query =  "";
				$coun = $coun1 = $total = 0;
				if(!isset($_REQUEST['month']) or !isset($_REQUEST['emp']))
				{
					$sql2 = "select * from income";
					$result2 = mysqli_query($conn,$sql2);
					while($row=mysqli_fetch_array($result2))
					{
						extract($row);
						$coun += $amt;
					}
					
					$sql3 = "select * from expense";
					$result3 = mysqli_query($conn,$sql3);
					while($row1=mysqli_fetch_array($result3))
					{
						extract($row1);
						$coun1 += $amt;
					}
					$total = $coun - $coun1;
				}
				else
				{
					$s = $_REQUEST["emp"];
					$mon = $_REQUEST["month"];
					if($_REQUEST["month"] != ""){
						$query = "SELECT * FROM `income` WHERE `dt` BETWEEN '2018/$mon/01' AND '2018/$mon/31'";
					}
					if($_REQUEST["emp"] != ""){
						if($query == ""){
							$query = "SELECT * FROM `income` WHERE `emp` like '$s%'";
						}else{
							$query .= " AND `emp` like '$s%'";
						}
					}
					$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
					while($row=mysqli_fetch_array($result))
					{
						extract($row);
						$coun += $amt;
					}
					
					$sql1 = "SELECT * FROM `expense`";
					$mon = $_REQUEST["month"];
					if($_REQUEST["month"] != ""){
						$sql1 .= " WHERE `dt` BETWEEN '2018/$mon/01' AND '2018/$mon/31'";
					}
					$result1 = mysqli_query($conn,$sql1) or die(mysqli_query($conn));
					while($row1=mysqli_fetch_array($result1))
					{
						extract($row1);
						$coun1 += $amt;
					}
					$total = $coun - $coun1;
				}
			?>
			 <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title"><?php 
												if(isset($_REQUEST['emp']))
												{
													$emp = $_REQUEST['emp'];
													if($emp=="")
													{
														if($total<0)
														{
															$tot = str_replace('-','',$total);
															echo "<font color='#CC0000'>NET Loss (Rs) : "." &nbsp; &nbsp;".number_format($tot,2)."</font>"; 
														}
														else
														{
															echo "<font color='#27CD16'>NET Profit (Rs) : "." &nbsp; &nbsp;".number_format($total,2)."</font>"; 
														}
													}
													else
													{
														echo "<font color='#00008b'>NET Income by ".$_REQUEST['emp']." (Rs.): "."&nbsp; &nbsp;".number_format($coun,2)."</font>";
													}
												}
												else
												{
													if($total<0)
													{
														$tot = str_replace('-','',$total);
														echo "<font color='#CC0000'>NET Loss (Rs) : "." &nbsp; &nbsp;".number_format($tot,2)."</font>"; 
													}
													else
													{
														echo "<font color='#27CD16'>NET Profit (Rs) : "." &nbsp; &nbsp;".number_format($total,2)."</font>"; 
													}
												}
											?></h4> <br>
					    <div  style="width: 50%;float: left;">
                                            <table class="table table-striped table-bordered" cellspacing="0">
                                                <thead>
                                                <tr>
					<th>Income Details</th>
					<th>Amount (Rs) </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                include("../connection.php");
						$query = "";
						if(!isset($_REQUEST['month']) or !isset($_REQUEST['emp']))
						{
							$query = "select * from income";
							$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($result))
							{
								extract($row);
								echo "<tr>";
								echo "<td>T/0$in_no - $emp - <small>".strtoupper($type)."</small></td>";
								echo "<td>Rs.".number_format($amt,2)."</td>";
								echo "</tr>";
							}
						}
						else
						{
							$mon = $_REQUEST["month"];
							$s = $_REQUEST["emp"];
							if($_REQUEST["month"] != ""){
								$query = "SELECT * FROM `income` WHERE `dt` BETWEEN '2018/$mon/01' AND '2018/$mon/31'";
							}
							if($_REQUEST["emp"] != ""){
							if($query == ""){
								$query = "SELECT * FROM `income` WHERE `emp` like '$s%'";
							}else{
								$query .= " AND `emp` like '$s%'";
							}
							}
							$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($result))
							{
								extract($row);
								echo "<tr>";
								echo "<td>T/0$in_no - $emp - <small>".strtoupper($type)."</small></td>";
								echo "<td>Rs.".number_format($amt,2)."</td>";
								echo "</tr>";
							}
						}
					?>
                                                </tbody>
					<tfoot align="center">
						<tr>
						<td> <b>Total Income </b></td>
						<?php echo "<td><b>Rs. ".number_format($coun,2)."</b></td>"; ?> 
						</tr>
					</tfoot>
                                            </table></div>
					    <div  style="width: 50%;float: right;">
					    <table class="table table-striped table-bordered" cellspacing="0">
                                                <thead>
                                                <tr>
					<th>Expense Details</th>
					<th>Amount (Rs)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                include("../connection.php");
						if(!isset($_REQUEST['month']))
						{
							$sql1 = "SELECT * FROM `expense`";
							$result1 = mysqli_query($conn,$sql1) or die(mysqli_query($conn));
							while($row1=mysqli_fetch_array($result1))
							{
								extract($row1);
								echo "<tr>";
								echo "<td> $pur - <small>$type</small></td>";
								echo "<td> Rs. ".number_format($amt,2)."</td>";
								echo "</tr>";
							}
						}
						else
						{
							$sql1 = "SELECT * FROM `expense`";
							$mon = $_REQUEST["month"];
							if($_REQUEST["month"] != ""){
								$sql1 .= " WHERE `dt` BETWEEN '2018/$mon/01' AND '2018/$mon/31'";
							}
							$result1 = mysqli_query($conn,$sql1) or die(mysqli_query($conn));
							while($row1=mysqli_fetch_array($result1))
							{
								extract($row1);
								echo "<tr>";
								echo "<td> $pur - <small>$type</small></td>";
								echo "<td> Rs. ".number_format($amt,2)."</td>";
								echo "</tr>";
							}
						}
					?>
                                                </tbody>
					<tfoot align="center">
						<center><tr>
						<td><b> Total Expense </b></td>
						<?php echo "<td><b>Rs. ".number_format($coun1,2)."</b></td>"; ?> 
						</tr>
					</tfoot>
                                            </table>
					</div>
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
	<script>
	    $(document).ready(function () {
		$("#submit").click(function () {

		    var mn = $('.month');
		    var emp = $('.emp');
		    if (mn.val()==='' && emp.val()==='') 
		    {
			    swal({
				title: 'Wrong Action (Value needed)',
				text: 'Please select employee or month for reports, this box will be close in 5 seconds',
				timer: 5000
			    }).then(
				function () {
				},
				function (dismiss) {
				    if (dismiss === 'timer') {
					console.log('I was closed by the timer')
				    }
				}
			    )
			return false;
		    }
		    else return;
		});
	});
</script>
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