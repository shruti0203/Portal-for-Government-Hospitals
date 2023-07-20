<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
 session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>New Clinic a Medical Category Bootstrap Responsive Web Template | Appointment :: W3layouts </title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="New Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<?php include "header.php" ?>
	<!-- banner -->
<div class="banner_inner_content_agile_w3l">
	
</div>
	<?php
		 include 'Connection.php';
	    
		if (!isset($_SESSION['session_user'])) 
		{ 
			echo "<script>alert('please login');</script>";
			echo "<script>window.location ='login.php';</script>";
		
		}
	


	?>
	
	<?php
		$eop = $_SESSION['session_user'];
		$query = "select l_id from login_table where email_id ='$eop' or phone_no = '$eop'";
		$res = mysqli_query($con,$query);
		while($value = mysqli_fetch_array($res))
		{
			$lid = $value['l_id'];
							
		}
		$query1 = "Select * from user_detail where l_id = $lid";
		$res1 = mysqli_query($con,$query1);
		while($value = mysqli_fetch_array($res1))
		{
			
		
	?>
	
	<!--//banner -->
	<div class="w3ls-banner">
	<div class="heading">
		<h1>History</h1>
	</div>
		<div class = "container">
		
		<table  width="100%" height="100%">
			<tr>
				<td><b>Name :</b> &ensp;<?php echo $value['u_name']; ?></td>
				<td><b>Gender :</b>&ensp;<?php echo $value['gender']; ?></td>
				<td><b>Age :</b>&ensp;<?php echo $value['age']; ?></td>
				<td rowspan="2"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($value['u_profile']);  ?>" width="50%" height="100%" align="right"></td>
			
			</tr>
			<tr>
				<td colspan="3"><b>Address :</b>&ensp;<?php echo $value['address']; ?></td>
				
				
			
			</tr>
		<?php
			}
			$query1 = "Select * from patient_detail_table where l_id = $lid limit 1";
			$res1 = mysqli_query($con,$query1);
			while($value = mysqli_fetch_array($res1))
			{
				$hid = $value['h_id'];
				$dis = $value['disease'];
				$case = $value['case_no'];
				$query2 = "Select * from hospital_details_table where h_id=$hid";
				$res2 = mysqli_query($con,$query2);
				while($value = mysqli_fetch_array($res2))
				{
					$hname = $value['h_name'];
		?>
			<tr>
				<td colspan="2"><b>Hospital Name :</b>&ensp;<?php echo $hname; ?></td>
				<td colspan="2"><b>Disease :</b>&ensp;<?php echo $dis; ?></td>

			</tr>
		<?php
				}
				$query2 = "Select * from appointment_table where case_no=$case";
				$res2 = mysqli_query($con,$query2);
				while($value = mysqli_fetch_array($res2))
				{
					$date = $value['a_date'];
					$timeid = $value['a_time'];
					$query3 = "Select * from time_table where time_id=$timeid";
					$res3= mysqli_query($con,$query3);
					while($value = mysqli_fetch_array($res3))
					{
						$time = $value['time'];
				
			
		?>
			<tr>
				<td colspan="2"><b>Appointment Date :</b>&ensp;<?php echo $date; ?></td>
				<td colspan="2"><b>Appointment Time :</b>&ensp;<?php echo $time; ?></td>
			
			</tr>
		<?php
					}
				}
			}
		?>
		</table>
		
	</div>
</div>
	<!-- footer -->
	<?php include "footer.php" ?>

	<!-- //footer -->
	<!-- bootstrap-modal-pop-up -->

<!-- //bootstrap-modal-pop-up --> 
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>