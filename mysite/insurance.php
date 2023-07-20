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
	<link href="css/divstyle.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<?php 
		include "header.php" ;
			include 'Connection.php';
	?>
	<!-- banner -->
<div class="banner_inner_content_agile_w3l">
	
</div>
	<!--//banner -->
	
	<?php
		 
	    
		if (!isset($_SESSION['session_user'])) 
		{ 
			echo "<script>alert('please login');</script>";
			echo "<script>window.location ='login.php';</script>";
		
		}
		
	?>
<div class="container">
	<div class="w3ls-banner">
	<div class="heading">
		<h1>Insurance</h1>
	</div>

	

	
	<div class="inner_sec_info_agileits_w3">
			<?php 
					
					
					$query = "Select * from insurance_table";
					$res = mysqli_query($con,$query);
					while($value = mysqli_fetch_array($res))
					{
						
			?>
			
				<div class="col-md-4 grid_info">
					<div class="icon_info">
						<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($value['i_logo']); ?>" width="100%" height="100%" alt=" " class="img-responsive">
						<h5><?php echo $value['i_operator']?></h5>
						<p >Insurance Policy No. <?php echo $value['i_policyno']; ?></p>
						<p >Insurance Price. <?php echo $value['i_price']; ?></p>
						<form method="POST">
						<input type="submit" class="read-agileits"  name="buy" value="Buy Now">
						</form>
					</div>

				</div>
			
			<?php
				
			
				if(isset($_POST['buy']))
				{
					$eop = $_SESSION['session_user'];
					$query = "select l_id from login_table where email_id ='$eop' or phone_no = '$eop'";
					$res = mysqli_query($con,$query);
					$val = mysqli_fetch_array($res);
					$lid = $val['l_id'];
					$i_id = $value['i_id'];
					$query = "insert into insurance_buy_table(i_id,l_id,status) values($i_id,$lid,1)";
					$res = mysqli_query($con,$query);
					if($res)
					{
						echo " <script>alert('Thankyou!! Successfully get your Insurance.');</script>";
					}
					
				}
			
		
			}	
				
					
			?>
		
		</div>
		<div class="clearfix"></div>
	</div>
		</div>
	

	<!-- footer -->
	<?php include "footer.php" ?>

	<!-- //footer -->
	<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					New Clinic
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/g7.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
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