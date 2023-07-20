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
	<title>New Clinic a Medical Category Bootstrap Responsive Web Template | About :: W3layouts </title>
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
	<link href="css/b1.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!--Header-->
	<?php include "header.php" ?>
	<!-- banner -->
<div class="banner_inner_content_agile_w3l">
	
</div>
	<?php
		include 'Connection.php';
		$id = $_GET['id'];
		$query = "SELECT * FROM hospital_details_table WHERE h_id =".$id;
		$res = mysqli_query($con , $query);
		while($value = mysqli_fetch_array($res))
		{
	?>
	<!--//banner -->
	<!-- about -->
	
	<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo"><?php echo $value['h_name'];?><span>We offer extensive medical procedures to outbound and inbound patients.</span></h3>
			<div class="col-md-6 about-w3right">
				<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($value['h_image']); ?>" width="100%" height="100%" />
			</div>
			<div class="col-md-6 about-w3left">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<h3 class ="read-agileits"><i class="fa fa-dot-circle-o" aria-hidden="true" ></i> &ensp;<?php echo $value['h_location']; ?></h3><br/>
					<h3 class ="read-agileits"><i class="fa fa-phone" aria-hidden="true" ></i><a href="tel: <?php echo $value['emergency_no']; ?>" style="color:black;" > &ensp;<?php echo $value['emergency_no']; ?></a></h3><br/>
					<div >
					<?php echo $value['Map']; ?>
					
					</div>
					
					
					
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //about -->
<!-- emergency_cases -->

<!-- //emergency_cases -->
<!-- team -->
<div class="team">
	<div class="container">
		<h3 class="heading-agileinfo"><?php echo $value['h_name'];?> &nbsp; Specialists<span>We offer extensive medical procedures to outbound and inbound patients.</span></h3>
		<div class="teamgrids">
			<?php
					
		}

				$query = "SELECT l.* , d.* FROM login_table l , doctors_detail_table d WHERE l.l_id=d.l_id AND d.h_id = ".$id;
				$res = mysqli_query($con,$query);
				if(!$res)
				{	
					echo "Not Fetched".mysqli_error($con);
				}
				while($value = mysqli_fetch_array($res))
				{
					
			?>
			
			<div class="col-md-3 teamgrid1">
				<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($value['d_picture']); ?>"  width="100%"    class="img-responsive" alt="" />
				<div class="teaminfo">
					<h3><?php echo $value['d_name']; ?></h3>
					
					<div class="team-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
					<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i><?php echo $value['specialization']; ?></p>
					<p><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $value['phone_no']; ?></p>
					<p><i class="fa fa-envelope" aria-hidden="true"></i><a href=""> <?php echo $value['email_id']; ?></a></p>
				</div><br/>
			</div>
			
			<?php
				}
				
			?>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //team -->
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