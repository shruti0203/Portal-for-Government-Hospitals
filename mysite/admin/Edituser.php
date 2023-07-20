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
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Admin<i class="fa fa-angle-right"></i>Edit</li>
            </ol>
		<div class="agile3-grids">	
				<!-- buttons -->
				
				<!-- Color-variations -->
				<?php
						include "connection.php";
					
						$id =$_GET['id'];
						
						
						$getresult = mysqli_query($con,"SELECT l.* , a.* FROM login_table l,admin_details a WHERE l.l_id=a.l_id AND l.l_id = '$id'");
						
							
						while($viewdata=mysqli_fetch_array($getresult))
						{
							$name= $viewdata['a_name'];
							$profile = $viewdata['a_profile'];
							$email = $viewdata['email_id'];
							$pass=$viewdata['password'];
							$phone = $viewdata['phone_no'];
							$dob = $viewdata['dob'];
							$gender = $viewdata['gender'];
							
						}
			
					if(isset($_POST['update']))
					{
							
							$name = $_POST['aname'];
							$pass = $_POST['apass'];
							$rpass = $_POST['arepass'];
							$phoneno = $_POST['ano'];
							

						if($pass != $rpass)
						{
							echo "<script>alert('Please enter correct retype password');</script>";
						}
						
						else
						{
							
							if(empty($_FILES["dpfile"]["name"]))
							{	
								$query = "UPDATE login_table SET phone_no=$phoneno, password='$pass' WHERE l_id=".$_GET['id']."";			
								$res = mysqli_query($con,$query);
								
								if($res)
								{
											
									$query1 = "update admin_details set a_name = '$name' where l_id=".$_GET['id']."";
											
									$res1 = mysqli_query($con,$query1);
									 if ($res1) 
									 {
										echo "<script type='text/javascript'>
											window.location = 'adminManage.php';
										</script>";
													
									}		
											
								}
							}
							else
							{
								$fileName = basename($_FILES["dpfile"]["name"]);
								$fileType = pathinfo($fileName,PATHINFO_EXTENSION);
								$allowTypes = array('jpg','png','jpeg');
								if(in_array($fileType,$allowTypes))
								{
									$image = $_FILES['dpfile']['tmp_name'];
									$imgContent = addslashes(file_get_contents($image));
									
									$query = "UPDATE login_table SET phone_no=$phoneno, password='$pass' WHERE l_id=".$_GET['id']."";
										$res = mysqli_query($con,$query);
										if($res)
										{
											
											$query1 = "update admin_details set a_name = '$name' , a_profile='$imgContent' where l_id=".$_GET['id']."";
											
											$res1 = mysqli_query($con,$query1);
											   if ($res1) {
													echo "<script>
														window.location = 'adminManage.php';
													</script>";
															
												}
											
										}
								}
								else
								{
									echo '<script>alert("seems it is not image file");</script>';
								}
							}	
						}
						
					}
							
					
				?>
				<div class="panel1 variations-panel">
					<h3 id="forms-horizontal">Update Admin</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label  class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Enter Name" name="aname" value= "<?php echo $name;?>"required>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Your Current Profile</label>
									<div class="col-sm-8">
										<img height="100" width="135" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($profile); ?>" /><br/>
										
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Do you want to Change your Profile?</label>
									<div class="col-sm-8">
										
										<input type="file" class="form-control1" id="disabledinput" name="dpfile"  >
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control1 input-lg" id="largeinput" placeholder="Enter Email Id" name="aemail"  value="<?php echo $email;?>"required readonly>
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1 input-lg" id="largeinput" placeholder="Enter Password" name="apass" value="<?php echo $pass;?>"required>
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Confirm Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1 input-lg" id="largeinput" placeholder="Retype Password" name="arepass" value= "<?php echo $pass;?>" required>
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Phone No</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Enter Phone No" name="ano" value= "<?php echo $phone;?>" required>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Date of Birth</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" id="inputPassword" name="dob" value= "<?php echo $dob;?>" required readonly>
									</div>
								</div>
								
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Gender</label>
									<div class="col-sm-8">
										<div class="checkbox-inline"><label><input type="radio" name="gender" value= "male" <?php echo ($gender =='male')? 'checked':'' ?> disabled> Male</label></div>
										<div class="checkbox-inline"><label><input type="radio" name="gender" value= "female" <?php echo ($gender =='female')? 'checked':'' ?> disabled> Female</label></div>
										<div class="checkbox-inline"><label><input type="radio" name="gender" value= "others"<?php echo ($gender =='others')? 'checked':'' ?> disabled> Others</label></div>
									</div>
								</div>
								
								

								<div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button class="btn-primary btn" name="update">Update</button>
											
											
										</div>
									</div>
								 </div>
							</form>
						</div>
					</div>
					
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