<?php

$email=$_POST['email'];

$pswd=$_POST['password'];

$securep = md5($pswd);


$conn = new mysqli('localhost','root','','ldata');
if($conn->connect_error){



	die('Connection Failed')

}else{


	$query=$conn->prepare("insert into loginform(email,password) values(?,?)");
	$query->bind_param("ss",$email,$securep);
	$query->execute();
	echo "Registration Successfull..";
	$query->close();
	$conn->close();
}



?>