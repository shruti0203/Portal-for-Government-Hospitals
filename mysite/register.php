<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
		<h1>Register Your Self</h1>
	</div>
		<div class="container_1">
			<div class="heading">
				<h2>Please Enter Details</h2>
				<p>Fill the form below and submit to access all the things.</p>
			</div>
			<div class="agile-form">
				<form  method="post" enctype="multipart/form-data">
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								Full Name 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="uname" placeholder="Enter Name" required >
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Profile 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="file" name="profile" required >
							</div>
						</li>
						
						<li> 
							<label class="form-label">
							   Mobile Number
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="mno" placeholder="Mobile Number" required >
							</div>
						</li>
						<li> 
							<label class="form-label">
							   E-Mail Address
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="email" name="email" placeholder="Enter Email" required>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Password
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="password" name="pass" placeholder="Enter Password" required>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Confirm Password
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="password" name="repass" placeholder="Confirm Your Password" required>
							</div>
						</li>
						
						<li class="last-type"> 
							<label class="form-label">
								Gender
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="radio" name="gender" value=
								"male"> &ensp;Male &ensp;&ensp;&ensp;&ensp; &ensp;
								<input type="radio" name="gender" value=
								"female"> &ensp;Female&ensp;&ensp;&ensp;&ensp; &ensp;
								<input type="radio" name="gender" value=
								"other"> &ensp;Others
								
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Age
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="number" name="age" placeholder="Select Age" min="1" max="110" required>
							</div>
						</li>
						<li> 
							<label class="form-label">
								Address
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<textarea rows="5" cols="15" name="address"></textarea>
							
							</div>
						</li>
						
					</ul>
					<input type="submit" name="reg" value="Register">
				</form>	
				<?php
						include "Connection.php";
						if(isset($_POST['reg']))
						{
							
							$name = $_POST['uname'];
							if(!empty($_FILES["profile"]["name"]))
							{
								$fileName = basename($_FILES["profile"]["name"]);
								$fileType = pathinfo($fileName,PATHINFO_EXTENSION);
								$allowTypes = array('jpg','png','jpeg');
								if(in_array($fileType,$allowTypes))
								{
									$image = $_FILES['profile']['tmp_name'];
									$imgContent = addslashes(file_get_contents($image));
									
									$email = $_POST['email'];
									
									$query2 ="Select  * from login_table where email_id = '$email'";
									$res3 = mysqli_query($con,$query2);
									$count = mysqli_num_rows($res3);
									if($count>=1)
									{
										echo "<script>alert('This email id already exist');</script>";
									}
									else
									{
										$pass = $_POST['pass'];
										$rpass = $_POST['repass'];
										
										if($pass != $rpass)
										{
											echo "<script>alert('Please enter correct retype password');</script>";
										}
										else
										{
											
											$phoneno = $_POST['mno'];
											$gender = $_POST['gender'];
											$age = $_POST['age'];
											$add = $_POST['address'];
											
											$query = "INSERT INTO login_table(email_id,phone_no,password,role,status) VALUES('$email','$phoneno','$pass',3,1)";
											$res = mysqli_query($con,$query);
											if(isset($res))
											{
												$id = mysqli_insert_id($con);
												$query1 = "INSERT INTO user_detail(l_id,u_name,u_profile,gender,age,address) VALUES('$id','$name','$imgContent','$gender','$age','$add')";
											
												$res1 = mysqli_query($con,$query1);
												if($res1)
												{
													echo "<script>
														window.location = 'index.php';
													</script>";
												}
												else
												{
													echo "Not inserted".mysqli_error($con);
												}
												
											}
											
								
										}
									}
								}
								else
								{
									echo '<script>alert("seems it is not image file");</script>';
								}
							}
							else
							{
								echo "<script>alert('Image Not selected');</script>";
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