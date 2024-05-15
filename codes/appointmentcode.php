<?php
	require "DBManager.php";

	$Name=$_POST["Name"];
	$Email=$_POST["Email"];
    $Subject=$_POST["Subject"];
	$Messages=$_POST["Messages"];

$db=new DBManager();
$cmd="insert into appointment values('$Name','$Email','$Subject','$Messages')";
$x=$db->ExecuteQuery($cmd);
if($x==true)
{
    echo "<script>alert('We will call you soon!');window.location.href='../appointment.php'</script>";  
}
else
{
	echo "<script>alert('Your Request is not completed');window.location.href='../appointment.php'</script>"; 
}
	
	
?>