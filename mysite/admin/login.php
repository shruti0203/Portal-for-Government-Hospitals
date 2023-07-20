<!DOCTYPE html>
	<head>
	
	</head>
	
	<body>
		<form method="POST">
		
			Email id <input type="text" name="email" > <br/><br/>
			Password <input type="password" name="pass" ><br/><br/>
			<input type="submit" name="submit" value="Login">
		</form>
		<?php
			
			if(isset($_POST['submit']))
			{
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				
				
			}
		
		?>
</html>