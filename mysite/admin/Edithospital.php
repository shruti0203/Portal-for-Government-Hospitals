
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
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Hospitals <i class="fa fa-angle-right"></i>Update</li>
            </ol>

				<!-- buttons -->
				
				<!-- Color-variations -->
				<?php
					include "Connection.php";
					$id =$_GET['id'];

						$getresult = mysqli_query($con,"SELECT * FROM hospital_details_table WHERE h_id = '$id'");
						
										
						while($viewdata=mysqli_fetch_array($getresult))
						{
							$name= $viewdata['h_name'];
							$profile = $viewdata['h_image'];
							$loc = $viewdata['h_location'];
							$eno=$viewdata['emergency_no'];
														
						}
					
					if(isset($_POST['update']))
					{
							
							$eno = $_POST['eno'];
							
							if(empty($_FILES["dpfile"]["name"]))
							{	
								$query = "UPDATE hospital_details_table SET emergency_no = $eno WHERE h_id=".$_GET['id']."";			
								$res = mysqli_query($con,$query);
								
								if($res)
								{		
										echo "<script>
											window.location = 'hospitalManage.php';
										</script>";	
								}
								else
								{
									echo 'not updated'.mysqli_error($con);
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
									
									$query = "UPDATE hospital_details_table SET h_image='$imgContent', emergency_no = $eno WHERE h_id=".$_GET['id']."";
										$res = mysqli_query($con,$query);
										if($res)
										{
											echo "<script>
												window.location = 'hospitalManage.php';
												</script>";
													
										}
										else
										{
											echo 'not updated'.mysqli_error($con);
										}
											
										
								}
								else
								{
									echo '<script>alert("seems it is not image file");</script>';
								}
							}	
						
						
					}

						

					?>
				<div class="grid-form1">
						<h3 id="forms-horizontal">Update Hospitals</h3>
						<form class="form-horizontal" method="POST" enctype="multipart/form-data">
						  <div class="form-group">
							<label for="hname" class="col-sm-2 control-label hor-form">Hospital Name</label>
							<div class="col-sm-7">
							  <input type="text" class="form-control" id="hname" placeholder="Enter Hospital Name" name="hname" value='<?php echo $name ;?>'readonly>
							</div>
						  </div>
						  <div class="form-group">
							<label  class="col-sm-2 control-label">Your Current Profile</label>
								<div class="col-sm-8">
									<img height="100" width="135" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($profile); ?>" />
										
								</div>
						</div>
								
						  <div class="form-group">
							<label for="Hospitalimage" class="col-sm-2 control-label hor-form">Do you want to change Image?</label>
							<div class="col-sm-7">
							  <input type="file" class="form-control" id="Hospitalimage" name="dpfile">
							</div>
						  </div>
						   <div class="form-group">
							<label for="eno" class="col-sm-2 control-label hor-form">Location</label>
							<div class="col-sm-7">
							  <input type="text" class="form-control" id="eno" name="eno" value='<?php echo $loc; ?>' readonly>
							</div>
						  </div>
						  <div class="form-group">
							<label for="eno" class="col-sm-2 control-label hor-form">Emergency No</label>
							<div class="col-sm-7">
							  <input type="text" class="form-control" id="eno" name="eno" value='<?php echo $eno; ?>' >
							</div>
						  </div>
						 
						  <div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button class="btn-primary btn" name=
											"update">Update</button>

										</div>
									</div>
								 </div>
							</form>
					
						</div>
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