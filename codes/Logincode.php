<?php

session_start();
$uid=$_POST["uid"];
$passwd=$_POST["passwd"];
//$cmd="select userid,password from login where userid='$uid' and passwd='$passwd'";
$cmd="select * from login";
$conn=mysqli_connect("localhost","root","","lawdb");
if($conn==true)
{

 //if(mysqli_num_rows($x)>0)
 if( $x=mysqli_query($conn,$cmd))
 {
	$row=mysqli_fetch_assoc($x);
    $email=$row["userid"];
 	$p=$row["passwd"];
	if($email==$uid && $p==$passwd)
	{
		//set value into  session
		$_SESSION["aid"]=$email;
		echo "<script>alert('Welcome to Admin Zone');window.location.href='../admin/dashboard.php'</script>";
	}
	else
	{
	echo "<script>alert('Invalid UserId or Password1');window.location.href='../login.php'</script>";	
	}
 }
 else
 {
	echo "<script>alert('Invalid UserId or Password2');window.location.href='../login.php'</script>"; 
	
 }

}

?>
