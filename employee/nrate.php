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
        <title>Active ERP :  Change Rates</title>
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
                                                <li class="breadcrumb-item active">Change Rates</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Newspaper RO New Rate</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard content write below-->
			      <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title"><center><b>Note: If Rate &amp; Discount is Not Changed then type the old rate for that item.</b></center></h4>
					<br>			
					<form action="<?php $_PHP_SELF ?>" method="post">
                                             <?php
						include("../connection.php");
						$s = $_GET['rno'];
						$sql1 = "select * from ro_newspaper where r_no=".$s;
						$result1 = mysqli_query($conn,$sql1);
						while($row1=mysqli_fetch_array($result1))
						{
							extract($row1);
							$j = 0;
							$new = explode(",",$news);
							$rt = explode(",",$rate);
							$di = explode(",",$dis);
							$quan1 = explode(",",$quan);
							$amt1 = explode(",",$amt);
							$size1 = explode(",",$size);
							$le = count($new);
							for($i=0; $i<$le; $i++)
							{
								$j++;
								echo "<div class='form-group row'>";
								echo "<label for='example-time-input' class='col-sm-2 col-form-label'>Item $j Details</label>";
								echo "<div class='col-sm-10'>";
								echo "<input class='form-control' type='text' value='$new[$i], Size:  $size1[$i],  Amount: $amt1[$i]' id='example-time-input' disabled> 
								</div>
							    </div>";
								echo "<div class='form-group row'>";
								echo "<label for='example-time-input' class='col-sm-2 col-form-label'>Item $j New Rate</label>";
								echo "<div class='col-sm-10'>";
								echo "<input class='form-control' type='text' value='$rt[$i]' placeholder='New/Old Rate per item or cms' name='rate[]' id='example-time-input' required> 
								</div>
							    </div>";
							    echo "<div class='form-group row'>";
								echo "<label for='example-time-input' class='col-sm-2 col-form-label'>Item $j New Dis</label>";
								echo "<div class='col-sm-10'>";
								echo "<input class='form-control' type='number' value='$di[$i]' placeholder='New/Old Discount in (%)' name='dis[]' id='example-time-input' required> 
								</div>
							    </div><br><br>";
							}
						}
					?>
					
					<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Change Rates</button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">Reset Form</button>
                                                    </div>
                                                </div>
						</form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
			   
                                <!-- dashboard content end -->
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
             /* BEGIN SVG WEATHER ICON */
             if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };

        // scroll

        $(document).ready(function() {
        
        $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
        $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
        
        });
        </script>

    </body>
</html>
<?php
	if(isset($_POST['rate']))
	{
		include("../connection.php");
		$rs = $_GET['rno'];
		$rate = "";
		if(isset($_POST["rate"]) && is_array($_POST["rate"])){
			$rate = implode(",", $_POST["rate"]); 
		}
		$dis = "";
		if(isset($_POST["dis"]) && is_array($_POST["dis"])){
			$dis = implode(",", $_POST["dis"]); 
		}
		
		$sub = $discount = $amt = $tax = $cgst = $sgst = $gtotal = "";
		$rate1 = explode(",",$rate);
		$dis1 = explode(",",$dis);
		$le = count($quan1);
		for($i=0; $i<$le; $i++)
		{
			$sub[$i] = $rate1[$i] * $quan1[$i];
			$discount[$i] = $sub[$i] * $dis1[$i] / 100;
			$amt[$i] = $sub[$i] - $discount[$i];
			
			$tax[$i] = $amt[$i] * 5 /100;
			$sgst[$i] = $tax[$i] / 2;
			$cgst[$i] = $sgst[$i];
			
			$gtotal[$i] = $amt[$i] + $tax[$i];
		}
		$sub = implode(",", $sub); 
		$discount = implode(",", $discount); 
		$amt = implode(",", $amt); 
		$tax = implode(",", $tax); 
		$cgst = implode(",", $cgst); 
		$sgst = implode(",", $sgst); 
		$gtotal = implode(",", $gtotal); 
		
		$sql = "update ro_newspaper set rate='$rate', dis = '$dis', amt = '$amt', sgst = '$sgst', cgst = '$cgst', gtotal = '$gtotal' where r_no=".$rs;
		$result = mysqli_query($conn,$sql);
		echo "<script type='text/javascript'>window.location.href='p_newspaper.php?disabled=1'</script>";
	}
	
?>