<?php
session_start();
include("../connection.php");
include("../numtoword.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
if(isset($_GET['sid']))
{
	$sql1 = "select * from aff_sales where id=".$_GET["sid"];
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $in_no;
		$date = $dt;
		$bdate = $b_dt;
		$bno = $b_id;
		$cc = $client;
		$t = $title;
		$sea = $season;
		$y = $year;
		$b = $sd;
		$e = $ed;
		$l = $loc;
		$gsty = $gst_type;
		$stal = $stall;
		$staln = $stallno;
		$qu = $quan;
		$rr = $rate;
		$dd = $dis;
		$manc = $manch;
		$ma = $man;
		$aa = $amt;
		$s = $c = $sgst;
		$ig = $igst;
		$gg = $gtotal;
		$hs = $hsn;
		$by = $emp_name;
	}
}
else
{
	$sql1 = "select * from aff_sales where id = (select max(id) from aff_sales)";
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $in_no;
		$date = $dt;
		$bdate = $b_dt;
		$bno = $b_id;
		$cc = $client;
		$t = $title;
		$sea = $season;
		$y = $year;
		$b = $sd;
		$e = $ed;
		$l = $loc;
		$gsty = $gst_type;
		$stal = $stall;
		$staln = $stallno;
		$qu = $quan;
		$rr = $rate;
		$dd = $dis;
		$manc = $manch;
		$ma = $man;
		$aa = $amt;
		$s = $c = $sgst;
		$ig = $igst;
		$gg = $gtotal;
		$hs = $hsn;
		$by = $emp_name;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Tax Invoice - Active Media</title>
	<link rel='stylesheet' type='text/css' href='assets/style.css' />
	<link rel='stylesheet' type='text/css' href='assets/print.css' media="print" />
	<script type='text/javascript' src='assets/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='assets/example.js'></script>
</head>

<body>
	<div id="page-wrap">

		<a href="aff_sales_details.php"><div id="back"></div></a>
		<div id="header">Tax Invoice</div>
		<div id="identity">
		
<div id="address">
Issued By:<br>
<b>Active Media</b><br>
806-807, Sakar-1,<br>
Opp. Ghandhigram Railway Station,<br>
Ashram Road, Ahmedabad, INDIA<br>
GSTIN/UIN: 24ACAPK8091R1Z1
<br>
  </div>
            <div id="logo">

              <!--<div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>-->

              <!-- <div id="logohelp">
               <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>-->
              <img id="image" src="assets/logojpg.jpg" height="150px" width="300px" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">
		
<div id="customer-title">
To Customer:<br>
<?php
$sql = "select * from customer_details where name='$cc'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	extract($row);
	$s_name = $name;
	$s_st = $street;
	$s_a = $area;
	$s_c = $city;
	$s_p = $pincode;
	$gsn = $gst;
}
echo "<b>$s_name</b><br>
$s_st <br>
$s_a <br>
$s_c  <br>
GSTIN/UIN: $gsn";
?>
</div>
            <!--<textarea id="customer-title">
	    GLS University
	    </textarea>-->

            <table id="meta">
                <tr>
                    <td  align="center" class="meta-head">Tax Invoice No</td>
                    <td  align="center"><?php echo "T/0$in/2018-19"; ?></td>
                </tr>
                <tr>

                    <td  align="center" class="meta-head">Date</td>
                    <td  align="center">
		    <?php    $date_array = explode("/",$date); // split the array
				$var_day = $date_array[0]; //day seqment
				$var_month = $date_array[1]; //month segment
				$var_year = $date_array[2]; //year segment
				$ndd = "$var_year-$var_month-$var_day";
				echo "$ndd"; 
			?>
		    </td>
                </tr>
                <tr>
                    <td class="meta-head">From Employee</td>
                    <td><div class="due"><?php echo "$by - AFF/0$bno"; ?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items" >
		
		  <tr>
		      <th>Description of Goods</th>
		      <th>HSN/SAC</th>
		      <th>Rate per stall (Rs.)</th>
		      <th>Quantity</th>
		      <th>Discount (%)</th>
		      <th>Amount (Rs.)</th>
		  </tr>
		  <?php
		  $item = explode(",",$stal);
		  $qu = explode(",",$qu);
		   $staln = explode(",",$staln);
		       $manc = explode(",",$manc);
		   $ma = explode(",",$ma);
		    $rr = explode(",",$rr);
		     $dd = explode(",",$dd);
		  $aa = explode(",",$aa);
		        $ig = explode(",",$ig);
		       $c = explode(",",$c);
		        $s = explode(",",$s);
			 $gg = explode(",",$gg);
			$le = count($item);
			for($i=0; $i<$le; $i++)
			{
				echo "<tr class='item-row'>";
				echo "<td class='item-name'  align='center'><div class='delete-wpr'>Stall Display Charges - AFF$sea<br> $t <br> Season $sea - $y <br> Stall Type: <b>$item[$i]</b></div></td>";
				echo "<td align='center'>$hs</td>";
				echo "<td align='center'>$rr[$i]</td>";
				echo "<td align='center'>$qu[$i]</td>";
				echo "<td align='center'>$dd[$i] %</td>";
				echo "<td align='center'><span class='price'>".number_format($aa[$i],2)."</span></td>";
				echo "</tr>";
				echo "<tr class='item-row'>";
				echo "<td class='item-name'  align='center'><div class='delete-wpr'>Management Charges</div></td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'>$ma[$i]%</td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'><span class='price'>".number_format($manc[$i],2)."</span></td>";
				echo "</tr>";
				$date_array = explode("/",$b); // split the array
				$var_day = $date_array[0]; //day seqment
				$var_month = $date_array[1]; //month segment
				$var_year = $date_array[2]; //year segment
				$nd = "$var_year-$var_month-$var_day";
				$date_arra = explode("/",$e); // split the array
				$var_da = $date_arra[0]; //day seqment
				$var_mont = $date_arra[1]; //month segment
				$var_yea = $date_arra[2]; //year segment
				$edd = "$var_yea-$var_mont-$var_da";
				echo "<tr class='item-row'>";
				echo "<td> &nbsp; </td>";
				echo "<td colspan='6'>Dated / Period From Dt. $nd TO Dt. $edd, &nbsp; Stall No: $staln[$i]</td>";
				echo "</tr>";
			}
		  ?>
		<tr>
		      <td rowspan="8" align="center">
		      <?php
				echo "Food Stall Branding / Promotion";
				echo "<br>Booking Date: $bdate";
				echo "<br>HSN/SAC: $hs";
			?>
			</td>
			<tr>
			<td colspan="5" class="blank1">
			</td>
			</tr>
			<tr>
			<td colspan="5" class="blank1">
			</td>
			</tr>
			<tr>
			<td colspan="5" class="blank1">
			</td>
			</tr>
			<tr>
			<td colspan="3" class="blank"></td>
			<td  align="center">Taxable Amount (Rs.)</td>
			<td colspan="2" align="center"><?php $tal = array_sum($aa) + array_sum($manc); echo number_format($tal,2); ?></td>
			</tr>
			<?php
				$tax1 = "IGST";
				$tax2 = "SGST & CGST";
				if($gsty==$tax2)
				{
					echo "<tr>
					<td colspan='3' class='blank'></td>
					<td  align='center'>SGST 9% (Rs.)</td>
					<td colspan='2' align='center'>".number_format(array_sum($c),2)."</td>
					</tr>";
					echo "<tr>
					<td colspan='3' class='blank'></td>
					<td  align='center'>CGST 9% (Rs.)</td>
					<td colspan='2' align='center'>".number_format(array_sum($s),2)."</td>
					</tr>";
				}
				else
				{
					echo "<tr>
					<td colspan='3' class='blank'></td>
					<td  align='center'>IGST 18% (Rs.)</td>
					<td colspan='2' align='center'>".number_format(array_sum($ig),2)."</td>
					</tr>";
				}
			?>
			<tr>
			<td colspan="3" class="blan"></td>
			<td  align="center">Total (Rs.)</td>
			<td colspan="2" align="center"><?php echo number_format(array_sum($gg),2); ?></td>
			</tr>
		  </tr>
		  <tr></tr>
		<tr rowspan="3">
			<td colspan="5" class="bl"><small>Amount Chargeable (in words)</small><br><b><?php  $num = array_sum($gg); echo amt($num); ?> Only</b></td>
			<td class="blank2"><sup><i>E. &amp; O.E</i></sup></td>
		</tr>
		<tr>
		<td class="blan2"><br><br><br><br><small><b>BANK DETAILS</b><br>
					BANK - VIJAYA BANK<br>
					BRANCH - NAVRANGPURA,<br>
					A/C NO - 730606211000008,<br>
					IFSC: VIJB0007306,<br>
					AHMEDABAD - GUJARAT</small></td>
		<td align="right" colspan="5" class="blan1"><br><br><br><br><br><table><tr><td style="padding-right:10em;border-bottom:0; border-right:0; "></td><td style="border-left: 0; border-bottom:0; border-right:0; text-align:right;">For, ACTIVE MEDIA<br><br><br>Authorised Signatory</td></tr></table></td>
		</tr>
		
		
		</table>
		<center> SUBJECT TO AHMEDABAD JURISDICTION</center>
		<center><big>This is a Computer Generated Invoice.</big></center>
	</div>
	
</body>
<br><br>
</html>