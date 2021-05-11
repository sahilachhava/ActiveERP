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
	$sql1 = "select * from sales_radio where id=".$_GET["sid"];
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $id;
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
		$manc = $manch;
		$ma = $man;
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
	$sql1 = "select * from sales_radio where id = (select max(id) from sales_radio)";
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$in = $id;
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
		$manc = $manch;
		$ma = $man;
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
	
	<title>Tax Invoice - Active Media</title>
	<link rel='stylesheet' type='text/css' href='assets/style.css' />
	<link rel='stylesheet' type='text/css' href='assets/print.css' media="print" />
	<script type='text/javascript' src='assets/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='assets/example.js'></script>
</head>

<body>
	<div id="page-wrap">

		<a href="sale_radio.php"><div id="back"></div></a>
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
$sql = "select * from customer_details where name='$client'";
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
                    <td  align="center"><?php 
			$ins = "select id from invoice where type='radio' and type_id=".$in;
			$resu = mysqli_query($conn,$ins);
			$rrw = mysqli_fetch_array($resu);
			$in_id = $rrw[0];
		    echo "T/0$in_id/2018-19"; ?></td>
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
		   $manc = explode(",",$manc);
		   $ma = explode(",",$ma);
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
				echo "<tr class='item-row'>";
				echo "<td class='item-name'  align='center'><div class='delete-wpr'>Management Charges</div></td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'>$ma[$i]%</td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'>-</td>";
				echo "<td align='center'><span class='price'>".number_format($manc[$i],2)."</span></td>";
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
			<td colspan="2" align="center"><?php $tal = array_sum($aa) + array_sum($manc); echo number_format($tal,2); ?></td>
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
		  <tr></tr>
		  <tr rowspan="3">
			<td colspan="5" class="bl"><small>Amount Chargeable (in words)</small><br><b><?php  $num = array_sum($gg); echo amt($num); ?> Only</b></td>
			<td class="blank2"><sup><i>E. &amp; O.E</i></sup></td>
		</tr>
		<tr>
		<td class="blan2"><br><br><br><br><small><b>BANK DETAILS</b><br>
					KOTAK MAHINDRA BANK<br>
					BRANCH - CHANDAN HOUSE,<br>
					A/C NO - 7811314371,<br>
					IFSC: KKBK000812,<br>
					AHMEDABAD - GUJARAT</small></td>
		<td align="right" colspan="5" class="blan1"><br><br><br><br><br><table><tr><td style="padding-right:10em;border-bottom:0; border-right:0; "></td><td style="border-left: 0; border-bottom:0; border-right:0; text-align:right;">For, ACTIVE MEDIA<br><br><br>Authorised Signatory</td></tr></table></td>
		</tr>
		
		
		</table>
		<center> SUBJECT TO AHMEDABAD JURISDICTION</center>
		<center><big>This is a Computer Generated Invoice.</big></center>
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
</html>