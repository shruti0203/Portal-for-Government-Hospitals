<?php
	include "connection.php";
?>
<!DOCTYPE html>
	<head>
	
	</head>
	
	<body>
		<form method="POST" enctype="multipart/form-data">
			<input type ="file" name= "dpfile" ><br/>
			<input type ="submit" name= "submit">
		
		</form>
		<?php
			if(isset($_POST['submit']))
			{
				header("Location:adminManage.php");
			}
				
		?>

	</body>
</html>



