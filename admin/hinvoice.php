<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
if(isset($_GET['sid']))
{
	$sql1 = "select * from ro_hoarding where id=".$_GET["sid"];
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $id;
		$date = $dt;
		$supp = $sup;
		//$item = $hoarding;
		$cc = $client;
		$location = $loc;
		$start = $sd;
		$end = $ed;
		$bill = $bdt;
		$rr = $rate;
		$qq = $quan;
		$dd = $dis;
		$aa = $amt;
		$s = $c = $sgst;
		$gg = $gtotal;
		$by = $emp_name;
		$printrate = $prate;
		$mountrate = $mrate;
		$sze = $size;
		$printamt = $pamt;
		$hs = $hsn;
		$mountamt = $mamt;
	}
}
else
{
	$sql1 = "select * from ro_hoarding where id = (select max(id) from ro_hoarding)";
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $id;
		$date = $dt;
		$supp = $sup;
		//$item = $hoarding;
		$sze = $size;
		$cc = $client;
		$hs = $hsn;
		$location = $loc;
		$bill = $bdt;
		$start = $sd;
		$end = $ed;
		$rr = $rate;
		$qq = $quan;
		$dd = $dis;
		$aa = $amt;
		$s = $c = $sgst;
		$gg = $gtotal;
		$by = $emp_name;
		$printrate = $prate;
		$mountrate = $mrate;
		$printamt = $pamt;
		$mountamt = $mamt;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Release Order - Active Media</title>
	<link rel='stylesheet' type='text/css' href='assets/style.css' />
	<link rel='stylesheet' type='text/css' href='assets/print.css' media="print" />
	<script type='text/javascript' src='assets/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='assets/example.js'></script>
</head>

<body>
	<div id="page-wrap">

		<a href="hoarding.php"><div id="back"></div></a>
		<div id="header">Release Order</div>
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
To Supplier:<br>
<?php
$sql = "select * from supplier_details where name='$supp'";
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
                    <td  align="center" class="meta-head">Release Order No</td>
                    <td  align="center"><?php 
			$ins = "select id from ro where type='hoarding' and type_id=".$in;
			$resu = mysqli_query($conn,$ins);
			$rrw = mysqli_fetch_array($resu);
			$in_id = $rrw[0];
		    echo "R/0$in_id/2018-19"; ?></td>
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
                    <td><div class="due"><?php echo "$by"; ?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items" >
		
		  <tr>
		      <th>Description of Goods</th>
		      <th>HSN/SAC</th>
		      <th>Unit Cost (Rs.)</th>
		      <th>Number of Days</th>
		      <th>Size</th>
		      <th>Discount (%)</th>
		      <th>Amount (Rs.)</th>
		  </tr>
		  <?php
			$location = explode("~",$location);
			$end = explode(",",$end);
			$sze = explode(",",$sze);
			$start = explode(",",$start);
			$printrate = explode(",",$printrate);
			$printamt = explode(",",$printamt);
			$mountrate = explode(",",$mountrate);
			$mountamt = explode(",",$mountamt);
			$rr = explode(",",$rr);
			$qq = explode(",",$qq);
			$dd = explode(",",$dd);
			$aa = explode(",",$aa);
			$c = explode(",",$c);
			$s = explode(",",$s);
			$gg = explode(",",$gg);
			$le = count($location);
			for($i=0; $i<$le; $i++)
			{
				echo "<tr class='item-row'>";
				echo "<td class='item-name'  align='center'><div class='delete-wpr'>$location[$i]</div></td>";
				echo "<td align='center'>$hs</td>";
				echo "<td align='center'>$rr[$i]</td>";
				echo "<td align='center'>$qq[$i]</td>";
				echo "<td align='center'>$sze[$i]</td>";
				echo "<td align='center'>$dd[$i] %</td>";
				echo "<td align='center'><span class='price'>".number_format($aa[$i],2)."</span></td>";
				echo "</tr>";
				echo "<tr class='item-row'>";
				echo "<td class='item-name'  align='center'><div class='delete-wpr'>Printing Charges</div></td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'>$printrate[$i]</td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'>$sze[$i]</td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'><span class='price'>".number_format($printamt[$i],2)."</span></td>";
				echo "</tr>";
				echo "<tr class='item-row'>";
				echo "<td class='item-name'  align='center'><div class='delete-wpr'>Mounting Charges</div></td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'>$mountrate[$i]</td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'>$sze[$i]</td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'><span class='price'>".number_format($mountamt[$i],2)."</span></td>";
				echo "</tr>";
				$date_array = explode("/",$start[$i]); // split the array
				$var_day = $date_array[0]; //day seqment
				$var_month = $date_array[1]; //month segment
				$var_year = $date_array[2]; //year segment
				$nd = "$var_year-$var_month-$var_day";
				$date_arra = explode("/",$end[$i]); // split the array
				$var_da = $date_arra[0]; //day seqment
				$var_mont = $date_arra[1]; //month segment
				$var_yea = $date_arra[2]; //year segment
				$edd = "$var_yea-$var_mont-$var_da";
				$date_a = explode("x",$sze[$i]); // split the array
				$var_da = $date_a[0]; //day seqment
				$var_m = $date_a[1]; //month segment
				$sqft = $var_da * $var_m;
				echo "<tr class='item-row'>";
				echo "<td> &nbsp; </td>";
				echo "<td colspan='6'>Start Dt. $nd, &nbsp; End Dt: $edd, &nbsp; Sqft: $sqft</td>";
				echo "</tr>";
			}
		  ?>
		<tr>
		      <td rowspan="8" align="center">
		      <?php
			echo "Reg:- $cc";
			echo "<br>HSN/SAC: $hs";
			?>
			</td>
			<tr>
			<td colspan="6" class="blank1">
			</td>
			</tr>
			<tr>
			<td colspan="6" class="blank1">
			</td>
			</tr>
			<tr>
			<td colspan="6" class="blank1">
			</td>
			</tr>
			<tr>
			<td colspan="3" class="blank"></td>
			<td  align="center">Taxable Amount (Rs.)</td>
			<td colspan="2" align="center"><?php $famt = array_sum($aa) + array_sum($printamt) + array_sum($mountamt); echo number_format($famt,2); ?></td>
			</tr>
			<tr>
			<td colspan="3" class="blank"></td>
			<td  align="center">SGST 9% (Rs.)</td>
			<td colspan="2" align="center"><?php echo number_format(array_sum($c),2); ?></td>
			</tr>
			<tr>
			<td colspan="3" class="blank"></td>
			<td  align="center">CGST 9% (Rs.)</td>
			<td colspan="2" align="center"><?php echo number_format(array_sum($s),2); ?></td>
			</tr>
			<tr>
			<td colspan="3" class="blan"></td>
			<td  align="center">Total (Rs.)</td>
			<td colspan="2" align="center"><?php echo number_format(array_sum($gg),2); ?></td>
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
		<div id="terms">
		  <h2>Please Issue Your Tax Invoice Before Date  - <?php 
			$date_arra = explode("/",$bill); // split the array
				$var_da = $date_arra[0]; //day seqment
				$var_mont = $date_arra[1]; //month segment
				$var_yea = $date_arra[2]; //year segment
				$bts = "$var_yea/$var_mont/$var_da"; 
		  echo $bts; ?></h2>
		</div>
	
	</div>
	<!--<button onclick="printDiv('page-wrap')">Print</button>-->
	
</body>
<br><br>
<script type="text/javascript">
function printDiv(divName) {
 var printContents = document.getElementById(divName).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
</script>
</html>