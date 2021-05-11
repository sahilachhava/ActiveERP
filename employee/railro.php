<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
if(isset($_GET['sid']))
{
	$sql1 = "select * from ro_rail where id=".$_GET["sid"];
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $id;
		$date = $dt;
		$ccc = $client;
		$request = $rono;
		$gsty = $gst_type;
		$ten = $tender;
		$tdt = $ten_dt;
		$pn = $p_name;
		$pd = $p_des;
		$pl = $pl_no;
		$dem = $dc;
		$case = $cc;
		$al = $aloc;
		$grt = $grate;
		$despac = $desp;
		$desti = $dest;
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
	$sql1 = "select * from ro_rail where id = (select max(id) from ro_rail)";
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $id;
		$date = $dt;
		$ccc = $client;
		$request = $rono;
		$gsty = $gst_type;
		$ten = $tender;
		$tdt = $ten_dt;
		$pn = $p_name;
		$pd = $p_des;
		$pl = $pl_no;
		$dem = $dc;
		$case = $cc;
		$al = $aloc;
		$despac = $desp;
		$desti = $dest;
		$qu = $quan;
		$grt = $grate;
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
	
	<title>Client's Release Order - Active Media</title>
	<link rel='stylesheet' type='text/css' href='assets/style.css' />
	<link rel='stylesheet' type='text/css' href='assets/print.css' media="print" />
	<script type='text/javascript' src='assets/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='assets/example.js'></script>
</head>

<body>
	<div id="page-wrap">

		<a href="rail_ro_details.php"><div id="back"></div></a>
		<div id="header">Client's Release Order</div>
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
$sql = "select * from customer_details where name='$ccc'";
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
                    <td  align="center" class="meta-head">Client's RO No</td>
                    <td  align="center"><?php echo $request; ?></td>
                </tr>
                <tr>

                    <td  align="center" class="meta-head">Client's RO Date</td>
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
		      <th colspan="2">Description of Goods</th>
		      <th>Rate per sec (Rs.)</th>
		      <th>Quantity / Set</th>
		      <th>Discount (%)</th>
		      <th>Amount (Rs.)</th>
		  </tr>
		  <?php
		  $item = explode("~",$pn);
		  $pdd = explode("~",$pd);
		   $pl_no = explode(",",$pl);
		    $dc = explode(",",$dem);
		     $cas = explode(",",$case);
		      $aloc = explode(",",$al);
		       $desp = explode("~",$despac);
		       $dest = explode("~",$desti);
		       $quan = explode(",",$qu);
		       $hsn = explode(",",$hs);
		       
		       $dd = explode(",",$dd);
		  $aa = explode(",",$aa);
		   $manc = explode(",",$manc);
		   $ma = explode(",",$ma);
		       $rr = explode(",",$rr);
		        $ig = explode(",",$ig);
		       $c = explode(",",$c);
		        $s = explode(",",$s);
			 $gg = explode(",",$gg);
			$le = count($item);
			for($i=0; $i<$le; $i++)
			{
				echo "<tr class='item-row'>";
				echo "<td colspan='2' class='item-name'  align='center'><div class='delete-wpr'><b>$item[$i]</b><br><br>$pdd[$i]<br><b>PL Number: $pl_no[$i]</b></td>";
				echo "<td align='center'>$rr[$i]</td>";
				echo "<td align='center'>$quan[$i] set</td>";
				echo "<td align='center'>$dd[$i] %</td>";
				echo "<td align='center'><span class='price'>".number_format($aa[$i],2)."</span></td>";
				echo "</tr>";
				echo "<tr class='item-row'>";
				echo "<td colspan='2' class='item-name'  align='center'><div class='delete-wpr'>Management Charges</div></td>";
				echo "<td align='center'>$ma[$i]%</td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'><span class='price'>".number_format($manc[$i],2)."</span></td>";
				echo "</tr>";
	
				echo "<tr class='item-row'>";
				echo "<td> &nbsp; </td>";
				echo "<td colspan='6'>Demand covered: $dc[$i], &nbsp; Case Covered: $cas[$i], &nbsp; Allocation: $aloc[$i], &nbsp; HSN/SAC: $hsn[$i]<br> Despatched through: $desp[$i], &nbsp; Destination: $dest[$i]</td>";
				echo "</tr>";
			}
		  ?>
		<tr>
		      <td rowspan="8" align="center">
		      <?php
				$date_array = explode("/",$tdt); // split the array
				$var_day = $date_array[0]; //day seqment
				$var_month = $date_array[1]; //month segment
				$var_year = $date_array[2]; //year segment
				$nd = "$var_year-$var_month-$var_day";
				
				echo "For Office Purpose Only";
				echo "<br>Tender No: $ten";
				echo "<br>Tender Date: $nd";
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
				$grt1 = $grt / 2; 
				if($gsty==$tax2)
				{
					echo "<tr>
					<td colspan='3' class='blank'></td>
					<td  align='center'>SGST $grt1% (Rs.)</td>
					<td colspan='2' align='center'>".number_format(array_sum($c),2)."</td>
					</tr>";
					echo "<tr>
					<td colspan='3' class='blank'></td>
					<td  align='center'>CGST $grt1% (Rs.)</td>
					<td colspan='2' align='center'>".number_format(array_sum($s),2)."</td>
					</tr>";
				}
				else
				{
					echo "<tr>
					<td colspan='3' class='blank'></td>
					<td  align='center'>IGST $grt% (Rs.)</td>
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