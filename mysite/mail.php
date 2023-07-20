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
	<title>New Clinic a Medical Category Bootstrap Responsive Web Template | Mail :: W3layouts </title>
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
	<!--//banner -->
		<!-- /inner_content -->
	<div class="banner-bottom">
		<div class="container">
			<div class="inner_sec_info_agileits_w3">
              <h2 class="heading-agileinfo">Contact Us<span>We offer extensive medical procedures to outbound and inbound patients.</span></h2>
				<div class="contact-form">
					     <form method="post" action="#">
							 <div class="left_form">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="userName" type="text" class="textbox" required=""></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox" required=""></span>
						    </div>
						    <div>
						     	<span><label>Phone No</label></span>
						    	<span><input name="userPhone" type="text" class="textbox" required=""></span>
						    </div>
					    </div>
					    <div class="right_form">
								<div>					    	
									<span><label>Message</label></span>
									<span><textarea name="Message" required=""> </textarea></span>
								</div>
							   <div>
									<span><input type="submit" name="submit" value="Submit" class="myButton"></span>
							  </div>
					    </div>
					    <div class="clearfix"></div>
						</form>
				  </div>
				 <?php
				 include "Connection.php";
				 if(isset($_POST['submit']))
				 {
					
					$name = $_POST['userName'];
					$email = $_POST['userEmail'];
					$phone = $_POST['userPhone'];
					$msg = $_POST['Message'];
					
					date_default_timezone_set('Asia/Calcutta');
					$createdate = date('Y-m-d H:i:s');
					
					$query = "INSERT INTO contact_us_table(name,email_id,phone_id,message,timestamp) VALUES('$name','$email','$phone','$msg','$createdate')";
					$res = mysqli_query($con,$query);
					if(!$res)
						echo 'Not Inserted'.mysqli_error($con);
				 }
				 
				 ?>
			</div>
		

		</div>
	</div>
		<!-- /map -->
			<div class="map_w3layouts_agile">
				<iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=23.035310620870426,%2072.54387809999734+(Our%20location)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

			</div>
		<!-- //map -->

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