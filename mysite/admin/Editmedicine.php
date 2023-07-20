
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
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Medicine <i class="fa fa-angle-right"></i>Add</li>
            </ol>

				<?php
						include 'Connection.php';
						$id =$_GET['id'];

						$getresult = mysqli_query($con,"SELECT * FROM medicine_table WHERE m_id = '$id'");
						
										
						while($viewdata=mysqli_fetch_array($getresult))
						{
							$id= $viewdata['m_id'];
							$name = $viewdata['m_name'];
							$quan = $viewdata['m_quantity'];
							$price=$viewdata['m_price'];
							
							
						}
						if(isset($_POST['update']))
						{
							$quan = $_POST['mquan'];
							$price = $_POST['mprice'];
							$query1 = "update medicine_table  set m_quantity='$quan',m_price=$price where m_id=".$_GET['id']."";
										
							$res1 = mysqli_query($con,$query1);
							if($res1)
							{
								echo "<script>
								window.location = 'medicinemanage.php';
								</script>";
							}
							
						}
					
					
					
					?>
				<div class="grid-form1">
						<h3 id="forms-horizontal">Update Medicine</h3>
						<form class="form-horizontal" method="POST">
						  <div class="form-group">
							<label for="mname" class="col-sm-2 control-label hor-form">Medicine Name</label>
							<div class="col-sm-7">
							  <input type="text" class="form-control" id="mname" placeholder="Enter Medicine Name" name="mname" value="<?php echo $name;?>" readonly>
							</div>
						  </div>
						  <div class="form-group">
							<label for="mprice" class="col-sm-2 control-label hor-form">Medicine Quantity</label>
							<div class="col-sm-7">
							  <input type="number" class="form-control" id="mprice" placeholder="Enter no of tablet" name="mquan" value="<?php echo $quan;?>">
							</div>
						  </div>
						  <div class="form-group">
							<label for="mprice" class="col-sm-2 control-label hor-form">Medicine Price</label>
							<div class="col-sm-7">
							  <input type="text" class="form-control" id="mprice" placeholder="Enter Medicine Price" name="mprice" value="<?php echo $price;?>">
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