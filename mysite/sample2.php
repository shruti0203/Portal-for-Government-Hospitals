<?php
	session_start();
	echo $_SESSION['name'];

?>
<?php
include "Connection.php";
echo "Tomorrow date :";
$date = date("Y-m-d",strtotime("tomorrow"));
echo $date;
$query ="update appointment_table set a_date ='$date' where case_no =7";
$res = mysqli_query($con,$query);
if(!$res)
{
	echo "Not Updated".mysqli_error($con);
}

?>