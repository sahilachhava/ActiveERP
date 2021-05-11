<?php
include("../connection.php");

if(isset($_GET['sn']))
{
	$ch = $_GET['ch'];
	$sql = "update purchase_newspaper set pay=1, cheque='$ch' where id=".$_GET['sn'];
	$result = mysqli_query($conn,$sql);
	header('Location:snpay.php');
}

if(isset($_GET['sr']))
{
	$ch = $_GET['ch'];
	$sql = "update purchase_radio set pay=1, cheque='$ch' where id=".$_GET['sr'];
	$result = mysqli_query($conn,$sql);
	header('Location:srpay.php');
}

if(isset($_GET['sh']))
{
	$ch = $_GET['ch'];
	$sql = "update purchase_hoarding set pay=1, cheque='$ch' where id=".$_GET['sh'];
	$result = mysqli_query($conn,$sql);
	header('Location:shpay.php');
}

if(isset($_GET['cn']))
{
	$ch = $_GET['ch'];
	$sql = "update sales_newspaper set pay=1, cheque='$ch' where id=".$_GET['cn'];
	$result = mysqli_query($conn,$sql);
	$sql1 = "update income set mode_p='$ch' where sale_id=".$_GET['cn'];
	$result1 = mysqli_query($conn,$sql1);
	header('Location:cnpay.php');
}

if(isset($_GET['cr']))
{
	$ch = $_GET['ch'];
	$sql = "update sales_radio set pay=1, cheque='$ch' where id=".$_GET['cr'];
	$result = mysqli_query($conn,$sql);
	$sql1 = "update income set mode_p='$ch' where sale_id=".$_GET['cr'];
	$result1 = mysqli_query($conn,$sql1);
	header('Location:crpay.php');
}

if(isset($_GET['cho']))
{
	$ch = $_GET['ch'];
	$sql = "update sales_hoarding set pay=1, cheque='$ch' where id=".$_GET['cho'];
	$result = mysqli_query($conn,$sql);
	$sql1 = "update income set mode_p='$ch' where sale_id=".$_GET['cho'];
	$result1 = mysqli_query($conn,$sql1);
	header('Location:chpay.php');
}

if(isset($_GET['led']))
{
	$ch = $_GET['ch'];
	$sql = "update sales_led set pay=1, cheque='$ch' where id=".$_GET['led'];
	$result = mysqli_query($conn,$sql);
	$sql1 = "update income set mode_p='$ch' where sale_id=".$_GET['led'];
	$result1 = mysqli_query($conn,$sql1);
	header('Location:ledpay.php');
}

if(isset($_GET['aff']))
{
	$ch = $_GET['ch'];
	$sql = "update aff_sales set pay=1, cheque='$ch' where id=".$_GET['aff'];
	$result = mysqli_query($conn,$sql);
	$sql1 = "update income set mode_p='$ch' where sale_id=".$_GET['aff'];
	$result1 = mysqli_query($conn,$sql1);
	header('Location:aff_debtors.php');
}

if(isset($_GET['rail']))
{
	$ch = $_GET['ch'];
	$sql = "update sales_rail set pay=1, cheque='$ch' where id=".$_GET['rail'];
	$result = mysqli_query($conn,$sql);
	$sql1 = "update income set mode_p='$ch' where sale_id=".$_GET['rail'];
	$result1 = mysqli_query($conn,$sql1);
	header('Location:railpay.php');
}
?>