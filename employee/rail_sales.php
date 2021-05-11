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
        <title>Add Railway Sales :: Active ERP</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

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
                                                <li class="breadcrumb-item active">Add Railway Sales</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add Railway Sales</h4>
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
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Sale Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="YYYY/MM/DD" data-mask="****/**/**" name="dt" value="<?php echo date("Y/m/d"); ?>" id="example-month-input" required>
                                                </div>
                                            </div>
                                           <?php
						include("../connection.php");
						if(isset($_GET))
						{
							$s = count($_GET);
							$rde = "";
							for($i=0;$i<$s;$i++)
							{
								$rde[$i] = $_GET['ro'.$i];
								echo "<center><b>RO No ".$_GET['ro'.$i]." Items</b></center><br>";
								$sql1 = "select * from ro_rail where rono='$rde[$i]'";
								$result1 = mysqli_query($conn,$sql1);
								while($row1=mysqli_fetch_array($result1))
								{
									
									$j = 0;
									$new = explode(",",$row1['p_name']);
									$rt = explode(",",$row1['rate']);
									$di = explode(",",$row1['dis']);
									$quan1 = explode(",",$row1['quan']);
									$amt1 = explode(",",$row1['amt']);
									$te1 = $row1['tender'];
									$le = count($new);
									for($k=0; $k<$le; $k++)
									{
										$j++;
										echo "<div class='form-group row'>";
										echo "<label for='example-time-input' class='col-sm-2 col-form-label'>Item $j Details</label>";
										echo "<div class='col-sm-10'>";
										echo "<input class='form-control' type='text' value='$new[$k], Tender No:  $te1,  Rate: $rt[$k], Dis: $di[$k]%,  Amount: $amt1[$k]' id='example-time-input' disabled> 
										</div>
									    </div>";
										echo "<div class='form-group row'>";
										echo "<label for='example-time-input' class='col-sm-2 col-form-label'>Client's Rate</label>";
										echo "<div class='col-sm-10'>";
										echo "<input class='form-control' type='text' value='' placeholder='Rate per set' name='rate[]' id='example-time-input' required> 
										</div>
									    </div>";
									    echo "<div class='form-group row'>";
										echo "<label for='example-time-input' class='col-sm-2 col-form-label'>M. Charge's Rate</label>";
										echo "<div class='col-sm-10'>";
										echo "<input class='form-control' type='text' value='' placeholder='Management Charges Rate' name='mcrate[]' id='example-time-input' required> 
										</div>
									    </div>";
									    echo "<div class='form-group row'>";
										echo "<label for='example-time-input' class='col-sm-2 col-form-label'>Client's Discount</label>";
										echo "<div class='col-sm-10'>";
										echo "<input class='form-control' type='text' value='' placeholder='Discount in (%)' name='dis[]' id='example-time-input' required> 
										</div>
									    </div>";
									}
								}
							}
						}
					?>
					<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Add Sales</button>
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

	<!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/alertify/css/alertify.css" rel="stylesheet" type="text/css">
	 <!-- Sweet-Alert  -->
         <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
	<!-- Bootstrap inputmask js -->
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
	
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
<?php
	if(isset($_POST['save']))
	{
		include("../connection.php");
		$dt = $_POST['dt'];
		$rate = "";
			if(isset($_POST["rate"]) && is_array($_POST["rate"])){
				$rate = implode(",", $_POST["rate"]); 
			}
		$mcrate = "";
			if(isset($_POST["mcrate"]) && is_array($_POST["mcrate"])){
				$mcrate = implode(",", $_POST["mcrate"]); 
			}
			$dis = "";
			if(isset($_POST["dis"]) && is_array($_POST["dis"])){
				$dis = implode(",", $_POST["dis"]); 
			}	
		$ron = $supp = $news = $cus = $edition = $rel = $sze = $pg = $pri = $qu = $hs = $pt = $ttt = $ttt1 = $famt = $manch = "";
		$sub = $discount = $amt = $tax = $cgst = $sgst = $gtotal = $profit = $mgst = $gss = $le = $temp = $temp1 = $new1 =  "";
		$j = $k = 0;
		$new2[]  = $ttt3[] = $ttt5[] = $ttt7[] = $ttt9[] = $ttt11[] =  NULL;
		$rate1 = explode(",",$rate);
		$mcrate1 = explode(",",$mcrate);
		$dis1 = explode(",",$dis);
		for($i=0;$i<$s;$i++)
		{
			$ron[$i] = $_GET['ro'.$i];
			$sql1 = "select * from ro_rail where rono=".$ron[$i];
			$result1 = mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($result1))
			{
				$hs[$i] = $row['hsn'];
				$ten = $row['tender'];
				$tdt = $row['ten_dt'];
				$cus = $row['client'];
				$gsty = $row['gst_type'];
				$new[$i] = $row['p_name'];
				$pd[$i] = $row['p_des'];
				$pl[$i] = $row['pl_no'];
				$dc[$i] = $row['dc'];
				$cc[$i] = $row['cc'];
				$al[$i] = $row['aloc'];
				$desp[$i] = $row['desp'];
				$grt = $grate;
				$dest[$i] = $row['dest'];
				$qu[$i] = $row['quan'];
				$pt[$i] = $row['amt'];
				$ttt[$i] = $row['cgst'];
				$ttt1[$i] = $row['sgst'];
				$emp = $row['emp_name'];
			}
			$pt1 = explode(",",$pt[$i]);
			$cgs = explode(",",$ttt[$i]);
			$sgs = explode(",",$ttt1[$i]);
			$qu1 = explode(",",$qu[$i]);
			$new1 = explode("~",$new[$i]);
			$le = count($qu1);
			if($i==0)
			{
				$j= $k = $l = 0;
				$ttt4 = $ttt2 = $ttt6 = $ttt8 = $ttt10 = "";
				for(; $j<$le; $j++)
				{
					$sub[$j] = $rate1[$k] * $qu1[$l];
					$discount[$j] = $sub[$j] * $dis1[$k] / 100;
					$amt[$j] = $sub[$j] - $discount[$j];
					$manch[$j] = $amt[$j] * $mcrate1[$k] / 100;
					$famt[$j] = $amt[$j] + $manch[$j];
					
					if($ttt4=="")
					{
						$d=0;
						$d = $amt[$j] + $manch[$j];
						$ttt4 = $d;
					}
					else
					{
						$d=0;
						$d = $amt[$j] + $manch[$j];
						$ttt4 .= ",".$d;
					}
					
					$tax[$j] = $famt[$j] * $grt /100;
					$sgst[$j] = $tax[$j] / 2;
					$cgst[$j] = $sgst[$j];
					if($ttt10=="")
					{
						$d=0;
						$d = $famt[$j] * $grt /100;
						$ttt10 = $d;
					}
					else
					{
						$d=0;
						$d = $famt[$j] * $grt /100;
						$ttt10 .= ",".$d;
					}
					
					$gtotal[$j] = $famt[$j] + $tax[$j];
					if($ttt8=="")
					{
						$d=0;
						$d = $famt[$j] + $tax[$j];
						$ttt8 = $d;
					}
					else
					{
						$d=0;
						$d = $famt[$j] + $tax[$j];
						$ttt8 .= ",".$d;
					}
					$profit[$j] = $famt[$j] - $pt1[$l];
					if($ttt2=="")
					{
						$d=0;
						$d = $famt[$j] - $pt1[$l];
						$ttt2 = $d;
					}
					else
					{
						$d=0;
						$d = $famt[$j] - $pt1[$l];
						$ttt2 .= ",".$d;
					}
					$gss[$j] = $cgs[$l] + $sgs[$l];
					$mgst[$j] = $tax[$j] - $gss[$j];
					if($ttt6=="")
					{
						$d=0;
						$d = $tax[$j] - $gss[$j];
						$ttt6 = $d;
					}
					else
					{
						$d=0;
						$d = $tax[$j] - $gss[$j];
						$ttt6 .= ",".$d;
					}
					$k++;
					$l++;
				}
				$ttt3[$i] = $ttt2;
				$ttt5[$i] = $ttt4;
				$ttt7[$i] = $ttt6;
				$ttt9[$i] = $ttt8;
				$ttt11[$i] = $ttt10;
			}
			else
			{
				$j = $temp;
				$le += $j;
				$k = $temp1;
				$l = 0;
				$ttt4 = $ttt2 = $ttt6 = $ttt8 = $ttt10 = "";
				for(; $j<$le; $j++)
				{
					$sub[$j] = $rate1[$k] * $qu1[$l];
					$discount[$j] = $sub[$j] * $dis1[$k] / 100;
					$amt[$j] = $sub[$j] - $discount[$j];
					$manch[$j] = $amt[$j] * $mcrate1[$k] / 100;
					$famt[$j] = $amt[$j] + $manch[$j];
					
					if($ttt4=="")
					{
						$d=0;
						$d = $amt[$j] + $manch[$j];
						$ttt4 = $d;
					}
					else
					{
						$d=0;
						$d = $amt[$j] + $manch[$j];
						$ttt4 .= ",".$d;
					}
					
					$tax[$j] = $famt[$j] * $grt /100;
					$sgst[$j] = $tax[$j] / 2;
					$cgst[$j] = $sgst[$j];
					if($ttt10=="")
					{
						$d=0;
						$d = $famt[$j] * $grt /100;
						$ttt10 = $d;
					}
					else
					{
						$d=0;
						$d = $famt[$j] * $grt /100;
						$ttt10 .= ",".$d;
					}
					
					$gtotal[$j] = $famt[$j] + $tax[$j];
					if($ttt8=="")
					{
						$d=0;
						$d = $famt[$j] + $tax[$j];
						$ttt8 = $d;
					}
					else
					{
						$d=0;
						$d = $famt[$j] + $tax[$j];
						$ttt8 .= ",".$d;
					}
					$profit[$j] = $famt[$j] - $pt1[$l];
					if($ttt2=="")
					{
						$d=0;
						$d = $famt[$j] - $pt1[$l];
						$ttt2 = $d;
					}
					else
					{
						$d=0;
						$d = $famt[$j] - $pt1[$l];
						$ttt2 .= ",".$d;
					}
					$gss[$j] = $cgs[$l] + $sgs[$l];
					$mgst[$j] = $tax[$j] - $gss[$j];
					if($ttt6=="")
					{
						$d=0;
						$d = $tax[$j] - $gss[$j];
						$ttt6 = $d;
					}
					else
					{
						$d=0;
						$d = $tax[$j] - $gss[$j];
						$ttt6 .= ",".$d;
					}
					$k++;
					$l++;
				}
				$ttt3[$i] = $ttt2;
				$ttt5[$i] = $ttt4;
				$ttt7[$i] = $ttt6;
				$ttt9[$i] = $ttt8;
				$ttt11[$i] = $ttt10;
			}
			$temp = $j;
			$temp1 = $k;
			array_push($new2,$new1);
			unset($new2[0]);
		}
			$sub = implode(",", $sub); 
			$discount = implode(",", $discount); 
			$amt = implode(",", $amt); 
			$tax = implode(",", $tax); 
			$cgst = implode(",", $cgst); 
			$sgst = implode(",", $sgst); 
			$gtotal = implode(",", $gtotal);
			$manch = implode(",", $manch); 
			$profit = implode(",", $profit); 
			$mgst = implode(",", $mgst); 
			$new4 = "";
			foreach($new2 as $item)
			{
				$new3 = "";
				$new3 = implode("~",$item);
				if($new4=="")
				{
					$new4 .= $new3;
				}
				else
				{
					$new4 .= "~".$new3;
				}
			}
			$pn = $new4;
			$pd = implode("~", $pd); 
			$hsn = implode(",", $hs); 
			$pl = implode(",", $pl); 
			$dc = implode(",", $dc); 
			$cc = implode(",", $cc); 
			$al = implode(",", $al);
			$desp = implode("~", $desp); 
			$dest = implode("~", $dest);
			$qu = implode(",", $qu); 
			$rono = implode(",", $ron); 
			$pt = implode(",", $pt); 
			
			$sql = "insert into sales_rail(dt,hsn,tender,ten_dt,client,gst_type,rono,p_name,p_des,pl_no,dc,cc,aloc,desp,dest,quan,rate,grate,dis,man,manch,amt,sgst,cgst,igst,gtotal,p_total,profit,emp_name) 
			values('$dt','$hsn','$ten','$tdt','$cus','$gsty','$rono','$pn','$pd','$pl','$dc','$cc','$al','$desp','$dest','$qu','$rate','$grt','$dis','$mcrate','$manch','$amt','$sgst','$cgst','$tax','$gtotal','$pt','$profit','$emp')";
			$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		
			$proft = "";
			$lk = count($ttt3);
			for($l=0;$l<$lk;$l++)
			{
				$tete = "";
				$tete = $ttt3[$l];
				$proft[$l] = $tete;
			}
			
			$sta = "";
			$lk1 = count($ttt5);
			for($l=0;$l<$lk1;$l++)
			{
				$tete = "";
				$tete = $ttt5[$l];
				$sta[$l] = $tete;
			}
			
			for($i=0;$i<$s;$i++)
			{
				$sql1 = "update ro_rail set s_total= '$sta[$i]', profit='$proft[$i]', s=1 where rono=".$_GET['ro'.$i];
				$result1 = mysqli_query($conn,$sql1);
			}
		$sql4 = "select id from sales_rail where id=(select max(id) from sales_rail)";
		$result4 = mysqli_query($conn,$sql4);
		$row = mysqli_fetch_array($result4);
		$son = $row[0];
		
		$sql6 = "insert into invoice(type,type_id) values('rail','$son')";
		$result6 = mysqli_query($conn,$sql6);
		
		$sql7 = "select id from invoice where id=(select max(id) from invoice)";
		$result7 = mysqli_query($conn,$sql7);
		$row1 = mysqli_fetch_array($result7);
		$inn = $row1[0];
		
		$sql8 = "update sales_rail set in_no='$inn' where id=".$son;
		$result8 = mysqli_query($conn,$sql8);
		
		$pof = array_sum(explode(",",$manch)) + array_sum(explode(",",$amt));
		
		$sql9 = "insert into income(dt,pur,amt,des,emp,sale_id,type,in_no) values('$dt','Tax Invoice No - T/0$inn','$pof','Client: $cus,  Release Order No: $rono, Tender No: $ten, Tender Date: $tdt','$emp','$son','rail','$inn')";
		$result9 = mysqli_query($conn,$sql9) or die(mysqli_error($conn));
		
		echo "<script type='text/javascript'>window.location.href = 'rail_invoice.php';</script>";
	}
?>