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
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Appointment</li>
            </ol>
			
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Appointment</h2>
					    <table id="table">
						<thead>
						  <tr>
							<th>Sr No</th>
							<th>Name</th>
							<th>Hospital Name</th>
							<th>Appointment Date</th>
							<th>Appointment Time</th>
							<th>Action</th>
						  </tr>
						</thead>
					<?php
						include "Connection.php";
						$query="SELECT * FROM appointment_table WHERE a_status=1 ORDER BY case_no DESC";
						$seq=0;
						$result=mysqli_query($con,$query);
						while($value=mysqli_fetch_array($result))
						{
							$lgid=$value['l_id'];
							$qry="SELECT * FROM user_detail WHERE l_id='$lgid'";
							$res=mysqli_query($con,$qry);
							$val=mysqli_fetch_array($res);
							$hid=$value['h_id'];
							$qry1="SELECT * FROM hospital_details_table WHERE h_id='$hid'";
							$res1=mysqli_query($con,$qry1);
							$val1=mysqli_fetch_array($res1);
							$tid=$value['a_time'];
							$qry2="SELECT * FROM time_table WHERE time_id='$tid'";
							$res2=mysqli_query($con,$qry2);
							$val2=mysqli_fetch_array($res2);
							
                	?>
			<tbody>
				<tr>
					<td><?php echo ++$seq; ?></td>
					<td><?php echo $val['u_name']; ?></td>
					<td><?php echo $val1['h_name']; ?></td>
					<td><?php echo $value['a_date']; ?></td>
					
					<td><?php echo $val2['time']; ?></td>
					<td><a href="?del=<?php echo $value['case_no'];?>" onclick="return confirm('Are you sure you want to delete ?')">DELETE</a></td>
					
				
				</tr>
				<?php
				}
					if(isset($_GET['del']))
					{
						$sql="UPDATE appointment_table SET a_status=0 WHERE case_no=".$_GET['del']."";
						$resultt=mysqli_query($con,$sql);
						if($resultt)
						{
							echo "<script LANGUAGE='JavaScript'>
								window.alert('Deleted Successfully!!');
								window.location.href='appointment.php';
								</script>";
						}
							
						
					}
				?>

					</tbody>
					  </table>
	
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