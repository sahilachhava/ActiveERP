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
        <title>Balance Sheet :: Active ERP</title>
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
                                                <li class="breadcrumb-item active">Balance Sheet</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Balance Sheet</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			     <form action="balancesheet.php" method="post">
			<div class="form-group row">
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
                                                        <button type="submit" id="submit" class="btn btn-primary waves-effect waves-light">Show Balance Sheet</button>
                                                    </div>
						      <div class="col-sm-1">
						    <a href="balancesheet.php"><button type="button" class="btn btn-secondary waves-effect m-l-5">Reset</button></a>
						    </div>
                                            </div> </form>
			    <!-- dashboard content write below-->
			 <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title"><?php if(!isset($_REQUEST['month']))
												{
													echo "Active Media Balance Sheet as of Current Year";
												}
												else
												{
													$mn = $_REQUEST['month'];
													echo "Active Media Balance Sheet as of month <font color='#ff0000'>$mn/2018</font>";
												}?></h4> <br>
					    <div  style="width: 50%;float: left;">
                                            <table class="table table-striped table-bordered" cellspacing="0">
                                                <thead align="center">
                                                <tr>
					<th>Income Details</th>
					<th>Amount (Rs) </th>
                                                </tr>
                                                </thead>
                                                <tbody align="center">
                                                <?php
                                                include("../connection.php");
						$query = "";
						$coun = $coun1 = 0;
						if(!isset($_REQUEST['month']))
						{
							$aff = $led = $rail = $hoa = $rad = $new = 0;
							
							$af = "select * from income where type='aff'";
							$afr = mysqli_query($conn,$af) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($afr))
							{
								extract($row);
								$aff += $amt;
							}
							
							$le = "select * from income where type='led'";
							$ler = mysqli_query($conn,$le) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($ler))
							{
								extract($row);
								$led += $amt;
							}
							
							$ra = "select * from income where type='rail'";
							$rar = mysqli_query($conn,$ra) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($rar))
							{
								extract($row);
								$rail += $amt;
							}
							
							$ho = "select * from income where type='hoarding'";
							$hor = mysqli_query($conn,$ho) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($hor))
							{
								extract($row);
								$hoa += $amt;
							}
							
							$r = "select * from income where type='radio'";
							$rr = mysqli_query($conn,$r) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($rr))
							{
								extract($row);
								$rad += $amt;
							}
							
							$ne = "select * from income where type='newspaper'";
							$ner = mysqli_query($conn,$ne) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($ner))
							{
								extract($row);
								$new += $amt;
							}
							
							echo "<tr>";
							echo "<td> Ahmedabad Food Fest </td>";
							echo "<td>Rs. ".number_format($aff,2)."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td> IRIS 360 LED Screen </td>";
							echo "<td>Rs. ".number_format($led,2)."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td> Railway Products </td>";
							echo "<td>Rs. ".number_format($rail,2)."</td>";
							echo "</tr>";
							echo "<td> Hoardings Advertising </td>";
							echo "<td>Rs. ".number_format($hoa,2)."</td>";
							echo "</tr>";
							echo "<td> Radio Advertising </td>";
							echo "<td>Rs. ".number_format($rad,2)."</td>";
							echo "</tr>";
							echo "<td> Newspaper Advertising </td>";
							echo "<td>Rs. ".number_format($new,2)."</td>";
							echo "</tr>";
							
							$coun = $aff + $led + $rail + $hoa + $rad + $new;
						}
						else
						{
							$aff = $led = $rail = $hoa = $rad = $new = 0;
							
							$mon = $_REQUEST["month"];
							if($_REQUEST["month"] != ""){
								$query = " `dt` BETWEEN '2018/$mon/01' AND '2018/$mon/31'";
							}
							
							$af = "select * from income where type='aff' AND $query";
							$afr = mysqli_query($conn,$af) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($afr))
							{
								extract($row);
								$aff += $amt;
							}
							
							$le = "select * from income where type='led' AND $query";
							$ler = mysqli_query($conn,$le) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($ler))
							{
								extract($row);
								$led += $amt;
							}
							
							$ra = "select * from income where type='rail' AND $query";
							$rar = mysqli_query($conn,$ra) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($rar))
							{
								extract($row);
								$rail += $amt;
							}
							
							$ho = "select * from income where type='hoarding' AND $query";
							$hor = mysqli_query($conn,$ho) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($hor))
							{
								extract($row);
								$hoa += $amt;
							}
							
							$r = "select * from income where type='radio' AND $query";
							$rr = mysqli_query($conn,$r) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($rr))
							{
								extract($row);
								$rad += $amt;
							}
							
							$ne = "select * from income where type='newspaper' AND $query";
							$ner = mysqli_query($conn,$ne) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($ner))
							{
								extract($row);
								$new += $amt;
							}
							
							echo "<tr>";
							echo "<td> Ahmedabad Food Fest </td>";
							echo "<td>Rs. ".number_format($aff,2)."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td> IRIS 360 LED Screen </td>";
							echo "<td>Rs. ".number_format($led,2)."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td> Railway Products </td>";
							echo "<td>Rs. ".number_format($rail,2)."</td>";
							echo "</tr>";
							echo "<td> Hoardings Advertising </td>";
							echo "<td>Rs. ".number_format($hoa,2)."</td>";
							echo "</tr>";
							echo "<td> Radio Advertising </td>";
							echo "<td>Rs. ".number_format($rad,2)."</td>";
							echo "</tr>";
							echo "<td> Newspaper Advertising </td>";
							echo "<td>Rs. ".number_format($new,2)."</td>";
							echo "</tr>";
							
							$coun = $aff + $led + $rail + $hoa + $rad + $new;
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
							$aff = $led = $rail = $hoa = $rad = $new = 0;
							
							$af = "select * from expense where type='Ahmedabad Food Fest'";
							$afr = mysqli_query($conn,$af) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($afr))
							{
								extract($row);
								$aff += $amt;
							}
							
							$le = "select * from expense where type='IRIS 360 LED Screen'";
							$ler = mysqli_query($conn,$le) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($ler))
							{
								extract($row);
								$led += $amt;
							}
							
							$ra = "select * from expense where type='Railway Expense'";
							$rar = mysqli_query($conn,$ra) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($rar))
							{
								extract($row);
								$rail += $amt;
							}
							
							$ho = "select * from expense where type='Office Expenses'";
							$hor = mysqli_query($conn,$ho) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($hor))
							{
								extract($row);
								$hoa += $amt;
							}
							
							$r = "select * from expense where type='Salary'";
							$rr = mysqli_query($conn,$r) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($rr))
							{
								extract($row);
								$rad += $amt;
							}
							
							echo "<tr>";
							echo "<td> Ahmedabad Food Fest </td>";
							echo "<td>Rs. ".number_format($aff,2)."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td> IRIS 360 LED Screen </td>";
							echo "<td>Rs. ".number_format($led,2)."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td> Railway Products </td>";
							echo "<td>Rs. ".number_format($rail,2)."</td>";
							echo "</tr>";
							echo "<td> Office Expenses </td>";
							echo "<td>Rs. ".number_format($hoa,2)."</td>";
							echo "</tr>";
							echo "<td> Salary Accounts </td>";
							echo "<td>Rs. ".number_format($rad,2)."</td>";
							echo "</tr>";
							$coun1 = $aff + $led + $rail + $hoa + $rad;
							$toal = $coun - $coun1;
							if($toal<0)
							{
								$ttt = str_replace('-','',$toal);
								echo "<tr>";
								echo "<td><strong><font color='#FF0000'> NET Loss (-) </font></strong></td>";
								echo "<td><strong><font color='#FF0000'>Rs. ".number_format($ttt,2)."</font></strong></td>";
								echo "</tr>";
							}
							else
							{
								echo "<tr>";
								echo "<td><strong><font color='#27CD16'> NET Profit (+) </font></strong></td>";
								echo "<td><strong><font color='#27CD16'>Rs. ".number_format($toal,2)."</font></strong></td>";
								echo "</tr>";
							}
						}
						else
						{
							$aff = $led = $rail = $hoa = $rad = $new = 0;
							
							$mon = $_REQUEST["month"];
							if($_REQUEST["month"] != ""){
								$query = " `dt` BETWEEN '2018/$mon/01' AND '2018/$mon/31'";
							}
							
							$af = "select * from expense where type='Ahmedabad Food Fest' AND $query";
							$afr = mysqli_query($conn,$af) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($afr))
							{
								extract($row);
								$aff += $amt;
							}
							
							$le = "select * from expense where type='IRIS 360 LED Screen' AND $query";
							$ler = mysqli_query($conn,$le) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($ler))
							{
								extract($row);
								$led += $amt;
							}
							
							$ra = "select * from expense where type='Railway Expense' AND $query";
							$rar = mysqli_query($conn,$ra) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($rar))
							{
								extract($row);
								$rail += $amt;
							}
							
							$ho = "select * from expense where type='Office Expenses' AND $query";
							$hor = mysqli_query($conn,$ho) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($hor))
							{
								extract($row);
								$hoa += $amt;
							}
							
							$r = "select * from expense where type='Salary' AND $query";
							$rr = mysqli_query($conn,$r) or die(mysqli_error($conn));
							while($row=mysqli_fetch_array($rr))
							{
								extract($row);
								$rad += $amt;
							}
							
							echo "<tr>";
							echo "<td> Ahmedabad Food Fest </td>";
							echo "<td>Rs. ".number_format($aff,2)."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td> IRIS 360 LED Screen </td>";
							echo "<td>Rs. ".number_format($led,2)."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td> Railway Products </td>";
							echo "<td>Rs. ".number_format($rail,2)."</td>";
							echo "</tr>";
							echo "<td> Office Expenses </td>";
							echo "<td>Rs. ".number_format($hoa,2)."</td>";
							echo "</tr>";
							echo "<td> Salary Accounts </td>";
							echo "<td>Rs. ".number_format($rad,2)."</td>";
							echo "</tr>";
							$coun1 = $aff + $led + $rail + $hoa + $rad;
							$toal = $coun - $coun1;
							if($toal<0)
							{
								$ttt = str_replace('-','',$toal);
								echo "<tr>";
								echo "<td><strong><font color='#FF0000'> NET Loss (-) </font></strong></td>";
								echo "<td><strong><font color='#FF0000'>Rs. ".number_format($ttt,2)."</font></strong></td>";
								echo "</tr>";
							}
							else
							{
								echo "<tr>";
								echo "<td><strong><font color='#27CD16'> NET Profit (+) </font></strong></td>";
								echo "<td><strong><font color='#27CD16'>Rs. ".number_format($toal,2)."</font></strong></td>";
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