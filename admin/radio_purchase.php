<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
if(isset($_GET['sid']))
{
	$sql1 = "select * from purchase_radio where id=".$_GET["sid"];
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $sup_in;
		$date = $dt;
		$supp = $sup;
		$item = $radio;
		$cc = $client;
		$start = $sd;
		$end = $ed;
		$comm = $ct;
		$dura = $dur;
		$sp = $spot;
		$rr = $rate;
		$dd = $dis;
		$aa = $amt;
		$s = $c = $sgst;
		$gg = $gtotal;
		$hs = $hsn;
		$rrr = $ro_no;
		$by = $emp_name;
	}
}
elseif(isset($_GET['supu']))
{
	$sql1 = "select * from purchase_radio where sup_in=".$_GET["supu"];
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $sup_in;
		$date = $dt;
		$supp = $sup;
		$item = $radio;
		$cc = $client;
		$start = $sd;
		$end = $ed;
		$comm = $ct;
		$dura = $dur;
		$sp = $spot;
		$rr = $rate;
		$dd = $dis;
		$aa = $amt;
		$s = $c = $sgst;
		$gg = $gtotal;
		$hs = $hsn;
		$rrr = $ro_no;
		$by = $emp_name;
	}
}
else
{
	$sql1 = "select * from purchase_radio where id = (select max(id) from purchase_radio)";
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $sup_in;
		$date = $dt;
		$supp = $sup;
		$item = $radio;
		$cc = $client;
		$start = $sd;
		$end = $ed;
		$comm = $ct;
		$dura = $dur;
		$sp = $spot;
		$rr = $rate;
		$dd = $dis;
		$aa = $amt;
		$s = $c = $sgst;
		$hs = $hsn;
		$gg = $gtotal;
		$rrr = $ro_no;
		$by = $emp_name;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Purchase - Active Media</title>
	<link rel='stylesheet' type='text/css' href='assets/style.css' />
	<link rel='stylesheet' type='text/css' href='assets/print.css' media="print" />
	<script type='text/javascript' src='assets/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='assets/example.js'></script>
</head>

<body>
	<div id="page-wrap">

		<a href="purchase_radio.php"><div id="back"></div></a>
		<div id="header">Purchase</div>
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
$sql = "select * from supplier_details where name='$sup'";
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
                    <td  align="center" class="meta-head">Supplier Invoice No</td>
                    <td  align="center"><?php echo "$in"; ?></td>
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
                    <td><div class="due"><?php echo "$by - 0$rrr"; ?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items" >
		
		  <tr>
		      <th>Description of Goods</th>
		      <th>HSN/SAC</th>
		      <th>Unit Cost (Rs.)</th>
		      <th>Duration</th>
		      <th>Discount (%)</th>
		      <th>Amount (Rs.)</th>
		  </tr>
		   <?php
		  $item = explode(",",$item);
		  $rr = explode(",",$rr);
		  $dura = explode(",",$dura);
		  $dd = explode(",",$dd);
		  $aa = explode(",",$aa);
		   $end = explode(",",$end);
		    $start = explode(",",$start);
		     $comm = explode(",",$comm);
		      $sp = explode(",",$sp);
		       $c = explode(",",$c);
		        $s = explode(",",$s);
			 $gg = explode(",",$gg);
		  $le = count($item);
			for($i=0; $i<$le; $i++)
			{
				echo "<tr class='item-row'>";
				echo "<td class='item-name'  align='center'><div class='delete-wpr'>$item[$i]</div></td>";
				echo "<td align='center'>$hs</td>";
				echo "<td align='center'>$rr[$i]</td>";
				echo "<td align='center'>$dura[$i]</td>";
				echo "<td align='center'>$dd[$i] %</td>";
				echo "<td align='center'><span class='price'>".number_format($aa[$i],2)."</span></td>";
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
				echo "<tr class='item-row'>";
				echo "<td> &nbsp; </td>";
				echo "<td colspan='6'>Start Dt. $nd, &nbsp; End Date: $edd, &nbsp; Total Spots: $sp[$i], &nbsp; Commercial Type: $comm[$i]</td>";
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
		  <h5><b>Total Spots Details</h5>
		  <table border="1">
		  <tr>
		  <td>Days</td>
		  <td>01</td><td> 02</td>  <td> 03</td><td> 04</td><td> 05</td>
		  <td> 06</td> <td> 07</td><td> 08</td><td> 09</td><td>10</td>
		  <td>11</td><td>12</td><td>13</td><td>14</td><td>15</td>
		    <td>16</td> <td>17</td><td>18</td> <td>19</td> <td>20</td>
		    <td>21</td> <td>22</td><td>23</td> <td>24</td><td>25</td>
		  <td>26</td> <td>27</td> <td>28</td> <td>29</td><td>30</td>
		  <td>31</td>
		  </tr>
		  <tr>
		  <td>Spots</b></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td><td><textarea>0</textarea></td>
		  <td><textarea>0</textarea></td>
		  </tr>
		  </table>
		</div>
	
	</div>
	<!--<button onclick="printDiv('page-wrap')">Print</button>-->
	
</body>
<br><br><br>
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