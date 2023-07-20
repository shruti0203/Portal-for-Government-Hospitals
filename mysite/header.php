<!-- header -->
	<div class="header" id="home">
		<div class="top_menu_w3layouts">
<div class="container">
			<div class="header_left">
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> Navrangpura,India</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:108"> Call an Ambulance</a> </li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">newclinic@gmail.com</a></li>
				</ul>
			</div>
			<div class="header_right">
				<ul class="forms_right">
				<?php
				 include 'Connection.php';
				
				if (!isset($_SESSION['session_user'])) 
				{ 
				?>
					&ensp;&ensp;<li><a href="login.php">Login</a> </li>
				<?php
				}
				else
				{
				?>
					&ensp;&ensp;<li><a href="logout.php">LogOut</a> </li>
				<?php
				}
				?>
				</ul>

			</div>
			
			<div class="header_right">
				<ul class="forms_right">
					&ensp;&ensp;<li><a href="register.php">Register</a> </li>
				</ul>

			</div>
			<div class="header_right">
				<ul class="forms_right">
					<li><a href="appointment.php"> Make an Appointment</a> </li>
				</ul>

			</div>
			<div class="clearfix"> </div>
			</div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.php">
							<h1><span class="fa fa-stethoscope" aria-hidden="true"></span>New Clinic </h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.php">About</a></li>
								
								<li><a href="departments.php">Hospital</a></li>
								<li><a href="insurance.php">Insurance</a></li>
								<!--<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="codes.php">Code</a></li>
										<li class="divider"></li>
										<li><a href="icons.php">Icon</a></li>
										<li class="divider"></li>
										
									</ul>
								</li>-->
								<li><a href="mail.php">Contact us</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
						</div>
			</nav>
		</div>
	</div>