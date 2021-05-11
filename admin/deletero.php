<?php
include("../connection.php");

if(isset($_GET['nro']))
{
	$ch = $_GET['nro'];
	$sql5 = "select s from ro_newspaper where r_no=".$ch;
	$result5 = mysqli_query($conn,$sql5);
	$row = mysqli_fetch_array($result5);
	if($row[0] != 1)
	{
		$sql = "delete from ro_newspaper where r_no=".$ch;
		$result = mysqli_query($conn,$sql);
		
		$sql1 = "delete from ncombo where ro_no=".$ch;
		$result1 = mysqli_query($conn,$sql1);
		
		$sql2 = "delete from combo where ro_no=".$ch;
		$result2 = mysqli_query($conn,$sql2);
		
		$sql3 = "delete from ro where id=".$ch;
		$result3 = mysqli_query($conn,$sql3);
		
		$sql4 = "insert into ro_delete(ro_no,type) values('$ch','Newspaper')";
		$result4 = mysqli_query($conn,$sql4);
		
		header('Location:newspaper.php?success=true');
	}
	else
	{
		header('Location:newspaper.php?success=false');
	}
}

if(isset($_GET['rro']))
{
	$ch = $_GET['rro'];
	$sql5 = "select s from ro_newspaper where r_no=".$ch;
	$result5 = mysqli_query($conn,$sql5);
	$row = mysqli_fetch_array($result5);
	if($row[0] != 1)
	{
		$sql = "delete from ro_radio where r_no=".$ch;
		$result = mysqli_query($conn,$sql);
		
		$sql1 = "delete from rcombo where ro_no=".$ch;
		$result1 = mysqli_query($conn,$sql1);
		
		$sql2 = "delete from combo where ro_no=".$ch;
		$result2 = mysqli_query($conn,$sql2);
		
		$sql3 = "delete from ro where id=".$ch;
		$result3 = mysqli_query($conn,$sql3);
		
		$sql4 = "insert into ro_delete(ro_no,type) values('$ch','Radio')";
		$result4 = mysqli_query($conn,$sql4);
		
		header('Location:radio.php?success=true');
	}
	else
	{
		header('Location:hoarding.php?success=false');
	}
}

if(isset($_GET['hro']))
{
	$ch = $_GET['hro'];
	$sql5 = "select s from ro_newspaper where r_no=".$ch;
	$result5 = mysqli_query($conn,$sql5);
	$row = mysqli_fetch_array($result5);
	if($row[0] != 1)
	{
		$sql = "delete from ro_hoarding where r_no=".$ch;
		$result = mysqli_query($conn,$sql);
		
		$sql1 = "delete from hcombo where ro_no=".$ch;
		$result1 = mysqli_query($conn,$sql1);
		
		$sql2 = "delete from combo where ro_no=".$ch;
		$result2 = mysqli_query($conn,$sql2);
		
		$sql3 = "delete from ro where id=".$ch;
		$result3 = mysqli_query($conn,$sql3);
		
		$sql4 = "insert into ro_delete(ro_no,type) values('$ch','Hoarding')";
		$result4 = mysqli_query($conn,$sql4);
		
		header('Location:hoarding.php?success=true');
	}
	else
	{
		header('Location:hoarding.php?success=false');
	}
}

if(isset($_GET['lro']))
{
	$ch = $_GET['lro'];
	$sql5 = "select s from ro_led where rono=".$ch;
	$result5 = mysqli_query($conn,$sql5);
	$row = mysqli_fetch_array($result5);
	if($row[0] != 1)
	{
		$sql = "delete from ro_led where rono=".$ch;
		$result = mysqli_query($conn,$sql);
		
		$sql4 = "insert into ro_delete(ro_no,type) values('$ch','LED')";
		$result4 = mysqli_query($conn,$sql4);
		
		header('Location:led_ro_details.php?success=true');
	}
	else
	{
		header('Location:led_ro_details.php?success=false');
	}
}

if(isset($_GET['railro']))
{
	$ch = $_GET['railro'];
	$sql5 = "select s from ro_rail where rono=".$ch;
	$result5 = mysqli_query($conn,$sql5);
	$row = mysqli_fetch_array($result5);
	if($row[0] != 1)
	{
		$sql = "delete from ro_rail where rono=".$ch;
		$result = mysqli_query($conn,$sql);
		
		$sql4 = "insert into ro_delete(ro_no,type) values('$ch','Railway')";
		$result4 = mysqli_query($conn,$sql4);
		
		header('Location:rail_ro_details.php?success=true');
	}
	else
	{
		header('Location:rail_ro_details.php?success=false');
	}
}

?>