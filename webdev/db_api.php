<?php 
$emailid=$_post['emailid'];
$conn=new mysqli('localhost','root','',test1);
if($conn->connect_error)
{
	die('connection failed :'.$conn->connect_error);
}else
{
	$stmt=$conn->prepare("insert into registration(email)
		values(?)");
	$stmt->bind_param("s",$email);
	$stmt->execute();
	echo "registration successfully...";
	$stmt->close();
	$conn->close();
}