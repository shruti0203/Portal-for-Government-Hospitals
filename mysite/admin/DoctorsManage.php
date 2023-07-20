<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Tabels :: w3layouts</title>
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
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
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
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Manage</li>
            </ol>
			
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					
					  <h2>Manage</h2>
					  <div class="table-responsive">
					    <table id="table">
						<thead>
						  <tr >
							<th> ID </th>
							<th> Name</th>
							<th> Profile</th>							
							<th> Email</th>
							<th>Phone no </th>
							<th>Password</th>	
							<th> Gender</th>
							<th> Date Of Birth</th>	
							<th> Specialization</th>	
							<th>Department</th>	
							<th>Experience</th>	
							<th>Hospital Name</th>
							<th>Hospital Profile</th>
							<th>Hospital Location</th>
							<th>Edit</th>
							<th>Delete</th>
							
						  </tr>
						</thead>
						<?php
							include "Connection.php";
							$query = "SELECT l.* , d.* , h.* FROM login_table l,doctors_detail_table d , hospital_details_table h  WHERE l.l_id=d.l_id AND d.h_id = h.h_id";
							$result =mysqli_query($con,$query);
						
							while($value = mysqli_fetch_array($result))
							{
						?>
						<tbody>
						<tr>
							<td><?php echo $value['d_id']; ?></td>
							<td><?php echo $value['d_name']; ?></td>
							<td><img height="100" width="135" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($value['d_picture']); ?>" /></td>
							<td><?php echo $value['email_id']; ?></td>
							<td><?php echo $value['phone_no']; ?></td>
							<td><?php echo $value['password']; ?></td>
							<td><?php echo $value['gender']; ?></td>
							<td><?php echo $value['dob']; ?></td>
							<td><?php echo $value['specialization']; ?></td>
							<td><?php echo $value['department']; ?></td>
							<td><?php echo $value['experience']; ?></td>
							<td><?php echo $value['h_name']; ?></td>
							<td><img height="100" width="135" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($value['h_image']); ?>" /></td>
							<td><?php echo $value['h_location']; ?></td>
							
							<td><a href="Editdoctor.php?id=<?php echo $value['l_id'];?>" >EDIT</a></td>
							<td><a href="?del=<?php echo $value['l_id'];?>" onclick="return confirm('Are you sure you want to delete ?')">DELETE</a></td>
						</tr>
						<?php
						}
							if(isset($_GET['del']))
							{
								$query1 = "DELETE FROM login_table WHERE l_id = ".$_GET['del']. "";
								$result1 = mysqli_query($con,$query1);
								
								if(!$result1)
								{
									$query2 = "DELETE FROM doctors_detail_table WHERE l_id = ".$_GET['del']. "";
									$result1 = mysqli_query($con,$query2);
								}
								
							}
						?>

					</tbody>
					  </table>
					</div>
					</div>
				<!-- //tables -->
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