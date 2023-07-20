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
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
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
	<!--//banner -->
	<div class="w3ls-banner">
	<div class="heading">
		<h1>Login</h1>
	</div>
		<div class="container_1">
			<div class="heading">
				<h2>Please Enter  Details</h2>
				<p>Fill the form below and submit.</p>
			</div>
			<div class="agile-form">
					<form  method="post">
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								Email/Phone 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="eop" placeholder="Enter Your Email/Phone" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Password
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="password" name="pass" placeholder="Enter Password" required >
							</div>
						</li>
						<li>
						<input type="submit" name="login" value="Login">
				</form>	
				<?php
				
			include 'Connection.php';
			
			if(isset($_POST['login']))
			{
				
				if(!empty($_POST['eop']) && !empty($_POST['pass']) )
				{
					$eop = $_POST['eop'];
					$pass = $_POST['pass'];
				
					$query= ("SELECT * FROM login_table WHERE (email_id = '".$eop."' OR phone_no = '".$eop."') AND ( password = '".$pass."' AND role = 3)");
					$res = mysqli_query($con,$query);
					$count = mysqli_num_rows($res);
					
					if($count==1)
					{
						
						$_SESSION['session_user'] = $eop;
						//echo $_SESSION['session_user'];
						echo "<script>
							window.location = 'index.php';
							</script>";
					}
					else
					{
						echo "<script>alert('Invalid email/phone and Password');</script>";
					}
						
				}
				else
				{
					echo "<script>alert('Both the fields are empty please enter details');</script>";
				}
				
				
			}
		
		?>
			
			</div>
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