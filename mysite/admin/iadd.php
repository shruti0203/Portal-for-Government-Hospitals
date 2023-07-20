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
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Insurance <i class="fa fa-angle-right"></i>Add</li>
            </ol>
<div class="agile3-grids">	
				<!-- buttons -->
				
				<!-- Color-variations -->
				<div class="panel1 variations-panel">
					<h3 id="forms-horizontal">Add Insurance</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label  class="col-sm-2 control-label">Insurance Operator</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Enter Operator(Company)" name="operator">
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Logo</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" id="disabledinput" name="logo">
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Policy No</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Enter Policy no" name="pno">
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Price</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Enter Insurance Price" name="price">
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Duration</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Enter Duration" name="duration">
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Renew Date</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1 input-lg" id="largeinput"  name="rdate">
									</div>
								</div>
								
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Expiry Date</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1 input-lg" id="largeinput"  name="exdate">
									</div>
								</div>
								
							
								<div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button class="btn-primary btn" name="submit">Add</button>
											
											<button class="btn-inverse btn">Reset</button>
										</div>
									</div>
								 </div>
							</form>
						</div>
					</div>
				</div>
				<?php
					include "Connection.php";
					if(isset($_POST['submit']))
					{
						$name = $_POST['operator'];
						if(!empty($_FILES["logo"]["name"]))
						{
							$fileName = basename($_FILES["logo"]["name"]);
							$fileType = pathinfo($fileName,PATHINFO_EXTENSION);
							$allowTypes = array('jpg','png','jpeg');
							if(in_array($fileType,$allowTypes))
							{
								$image = $_FILES['logo']['tmp_name'];
								$imgContent = addslashes(file_get_contents($image));

								$pno = $_POST['pno'];
								$price = $_POST['price'];
								$dur = $_POST['duration'];
								$rdate = $_POST['rdate'];
								$exdate = $_POST['exdate'];
								
								$query = "INSERT INTO insurance_table(i_logo,i_operator,i_policyno,i_price,i_duration,i_renew_date,i_exp_date,status) VALUES('$imgContent','$name',$pno,$price,'$dur','$rdate','$exdate',1)";
								
								
								$res = mysqli_query($con,$query);
								if($res)
								{
									echo "<script>
										window.location = 'insuranceManage.php';
										</script>";
								}
								else
								{
									echo "not inserted".mysqli_error($con);
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