<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
if(isset($_GET['sid']))
{
	$sql1 = "select * from aff_booking where id=".$_GET["sid"];
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $id;
		$date = $dt;
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
		$booking = $bamt;
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
	$sql1 = "select * from aff_booking where id = (select max(id) from aff_booking)";
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $id;
		$date = $dt;
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
		$booking = $bamt;
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
	
	<title>AFF Booking Confirmation - Active Media</title>
	<link rel='stylesheet' type='text/css' href='assets/style.css' />
	<link rel='stylesheet' type='text/css' href='assets/print.css' media="print" />
	<script type='text/javascript' src='assets/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='assets/example.js'></script>
</head>

<body>
	<div id="page-wrap">

		<a href="aff_booking_details.php"><div id="back"></div></a>
		<div id="header">AFF Booking Confirmation</div>
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
                    <td  align="center" class="meta-head">Booking Form No</td>
                    <td  align="center"><?php echo "AFF/0$in"; ?></td>
                </tr>
                <tr>

                    <td  align="center" class="meta-head">Booking Date</td>
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
                    <td><div class="due"><?php echo "$by"; ?></div></td>
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
		      <td rowspan="10" align="center">
		      <?php
				echo "Food Stall Branding / Promotion";
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
			<td colspan="3" class="blank"></td>
			<td  align="center">Total (Rs.)</td>
			<td colspan="2" align="center"><?php echo number_format(array_sum($gg),2); ?></td>
			</tr>
			<tr>
			<td colspan="3" class="blank"></td>
			<td  align="center">(-) Booking Amount (Rs.)</td>
			<td colspan="2" align="center"><?php echo "(-) ".number_format($booking,2); ?></td>
			</tr>
			<tr>
			<td colspan="3" class="blan"></td>
			<td  align="center">Remaining Total (Rs.)</td>
			<td colspan="2" align="center"><?php $ramt = array_sum($gg) - $booking; echo number_format($ramt,2); ?></td>
			</tr>
		  </tr>
		  <!--<tr>
		      <td colspan="2" class="blank"></td>
		      <td colspan="2" class="total-line">Subtotal (Rs.)</td>
		      <td class="total-value"><div id="subtotal"><?php echo "$aa"; ?></div></td>
		  </tr>-->
		  
		  
		  <tr>
		  
		   <!--<tr>
		      <td colspan="3" class="blank"> </td>
		      <td  align="center" colspan="1" class="total-line">CGST (Rs.)</td>
		      <td  align="center" class="total-value"><?php echo "$s"; ?></td>
		  </tr>-->
		  <!--<tr>
		      <td colspan="3" class="blank"> </td>
		      <td  align="center" colspan="1" class="total-line balance"><b>Total (Rs.)</b></td>
		      <td  align="center" class="total-value balance"><div id="total"><?php echo "$gg"; ?></div></td>
		  </tr>-->
		  <!--<tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid (Rs.)</td>

		      <td class="total-value"><textarea id="paid">0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due (Rs.)</td>
		      <td class="total-value balance"><div class="due">0.00</div></td>
		  </tr>-->
		
		</table>
	
	</div>
	
</body>
<br><br>
</html>