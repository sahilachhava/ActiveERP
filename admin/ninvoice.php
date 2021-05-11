<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
if(isset($_GET['sid']))
{
	$sql1 = "select * from ro_newspaper where id=".$_GET["sid"];
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $id;
		$date = $dt;
		$supp = $sup;
		$bill = $bdt;
		$item = $news;
		$cc = $client;
		$ed = $edi;
		$rdate = $rdt;
		$ss = $size;
		$pp = $page;
		$p = $print;
		$rr = $rate;
		$qq = $quan;
		$dd = $dis;
		$aa = $amt;
		$s = $c = $sgst;
		$gg = $gtotal;
		$by = $emp_name;
		$hs = $hsn;
	}
}
else
{
	$sql1 = "select * from ro_newspaper where id = (select max(id) from ro_newspaper)";
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $id;
		$date = $dt;
		$supp = $sup;
		$bill = $bdt;
		$item = $news;
		$cc = $client;
		$ed = $edi;
		$rdate = $rdt;
		$ss = $size;
		$pp = $page;
		$p = $print;
		$rr = $rate;
		$qq = $quan;
		$dd = $dis;
		$aa = $amt;
		$s = $c = $sgst;
		$gg = $gtotal;
		$by = $emp_name;
		$hs = $hsn;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<link rel='stylesheet' type='text/css' href='assets/style.css' />
	<link rel='stylesheet' type='text/css' href='assets/print.css' media="print" />
	<script type='text/javascript' src='assets/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='assets/example.js'></script>
	<title>Release Order - Active Media</title>
</head>

<body>

	<div id="page-wrap">

		<a href="newspaper.php"><div id="back"></div></a>
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
			$ins = "select id from ro where type='newspaper' and type_id=".$in;
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
		      <th>Quantity</th>
		      <th>Discount (%)</th>
		      <th>Amount (Rs.)</th>
		  </tr>
		  <?php
		  $item = explode(",",$item);
		  $rr = explode(",",$rr);
		  $qq = explode(",",$qq);
		  $dd = explode(",",$dd);
		  $aa = explode(",",$aa);
		   $ed = explode(",",$ed);
		    $ss = explode(",",$ss);
		     $pp = explode(",",$pp);
		      $p = explode(",",$p);
		       $c = explode(",",$c);
		        $s = explode(",",$s);
			 $gg = explode(",",$gg);
		   $rdate = explode(",",$rdate);
		  $le = count($item);
			for($i=0; $i<$le; $i++)
			{
				echo "<tr class='item-row'>";
				echo "<td class='item-name'  align='center'><div class='delete-wpr'>$item[$i]</div></td>";
				echo "<td align='center'>$hs</td>";
				echo "<td align='center'>$rr[$i]</td>";
				echo "<td align='center'>$qq[$i]</td>";
				echo "<td align='center'>$dd[$i] %</td>";
				echo "<td align='center'><span class='price'>".number_format($aa[$i],2)."</span></td>";
				echo "</tr>";
				$date_array = explode("/",$rdate[$i]); // split the array
				$var_day = $date_array[0]; //day seqment
				$var_month = $date_array[1]; //month segment
				$var_year = $date_array[2]; //year segment
				$nd = "$var_year-$var_month-$var_day";
				echo "<tr class='item-row'>";
				echo "<td>Edition: $ed[$i] <br> &nbsp; </td>";
				echo "<td colspan='6'>Release Dt. $nd, &nbsp; Size: $ss[$i], &nbsp; Page: $pp[$i], &nbsp; Print: $p[$i]</td>";
				echo "</tr>";
			}
		  ?>
		<tr>
		      <td rowspan="9" align="center">
			<?php
				echo "Reg: $cc<br>"; 
				echo "HSN/SAC: $hs";
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
			<td colspan="2" align="center"><?php echo number_format(array_sum($aa),2); ?></td>
			</tr>
			<tr>
			<td colspan="3" class="blank"></td>
			<td  align="center">SGST 2.5% (Rs.)</td>
			<td colspan="2" align="center"><?php echo number_format(array_sum($c),2); ?></td>
			</tr>
			<tr>
			<td colspan="3" class="blank"></td>
			<td  align="center">CGST 2.5% (Rs.)</td>
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
<!--<button onclick="printDiv('main-con')">Save to PDF</button>
<script type="text/javascript">
function printDiv(divName) {
 var printContents = document.getElementById(divName).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
</script>-->

</body>
<br><br>
</html>