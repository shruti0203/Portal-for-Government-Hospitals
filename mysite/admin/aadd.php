<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Buttons :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 

<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
				<?php
					include 'header.php';
				?>
			<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Admin<i class="fa fa-angle-right"></i>Add</li>
            </ol>
<div class="agile3-grids">	
				<!-- buttons -->
				
				<!-- Color-variations -->
				<div class="panel1 variations-panel">
					<h3 id="forms-horizontal">Add Admin</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label  class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Enter Name" name="aname" required>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Profile</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" id="disabledinput" name="dpfile" >
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control1 input-lg" id="largeinput" placeholder="Enter Email Id" name="aemail" required>
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1 input-lg" id="largeinput" placeholder="Enter Password" name="apass" required>
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Confirm Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1 input-lg" id="largeinput" placeholder="Retype Password" name="arepass" required>
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Phone No</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Enter Phone No" name="ano" required>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Date of Birth</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" id="inputPassword" name="dob" required>
									</div>
								</div>
								
								
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Gender</label>
									<div class="col-sm-8">
										<div class="checkbox-inline"><label><input type="radio" name="gender" value="male"> Male</label></div>
										<div class="checkbox-inline"><label><input type="radio" name="gender" value="female"> Female</label></div>
										<div class="checkbox-inline"><label><input type="radio" name="gender" value="Others"> Others</label></div>
										
									</div>
								</div>
								
								

								<div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button class="btn-primary btn" name="insert">Add</button>
											
											<button class="btn-inverse btn">Reset</button>
										</div>
									</div>
								 </div>
							</form>
						</div>
					</div>
					<?php
						include "connection.php";
						if(isset($_POST['insert']))
						{
							
							$name = $_POST['aname'];
							if(!empty($_FILES["dpfile"]["name"]))
							{
								$fileName = basename($_FILES["dpfile"]["name"]);
								$fileType = pathinfo($fileName,PATHINFO_EXTENSION);
								$allowTypes = array('jpg','png','jpeg');
								if(in_array($fileType,$allowTypes))
								{
									$image = $_FILES['dpfile']['tmp_name'];
									$imgContent = addslashes(file_get_contents($image));
									
									$email = $_POST['aemail'];
									
									$query2 ="Select  * from login_table where email_id = '$email'";
									$res3 = mysqli_query($con,$query2);
									$count = mysqli_num_rows($res3);
									if($count>=1)
									{
										echo "<script>alert('This email id already exist');</script>";
									}
									else
									{
										$pass = $_POST['apass'];
										$rpass = $_POST['arepass'];
										
										if($pass != $rpass)
										{
											echo "<script>alert('Please enter correct retype password');</script>";
										}
										else
										{
											
											$phoneno = $_POST['ano'];
											$dob = $_POST['dob'];
											$gender = $_POST['gender'];
											
											$query = "INSERT INTO login_table(email_id,phone_no,password,role,status) VALUES('$email','$phoneno','$pass',1,1)";
											$res = mysqli_query($con,$query);
											if(isset($res))
											{
												$id = mysqli_insert_id($con);
												$query1 = "INSERT INTO admin_details(l_id,a_name,a_profile,gender,dob) VALUES('$id','$name','$imgContent','$gender','$dob')";
											
												$res1 = mysqli_query($con,$query1);
												if($res1)
												{
													echo "<script>
														window.location = 'adminManage.php';
													</script>";
												}
												else
												{
													echo "NOt inserted".mysqli_error($con);
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
					<!-- //icon-hover-effects -->
					<div class="clearfix"> </div>
				</div>
				<!-- //buttons -->
			</div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<?php
					include 'navigation.php';
				?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>