<?php
	session_start();
	unset($_SESSION['session_admin']);
	session_destroy();
	header("Location:index.php");
?>