<?php 
session_start();
require('../../models/Blogger_info.php');

if(isset($_REQUEST['submit'])){
	
	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
	$email = $_REQUEST['email'];
	$gender = $_REQUEST['gender'];
	$phone = $_REQUEST['phone'];

	// $photo = $_REQUEST['file'];

	if($name != null && $username != null && $password != null &&  $email != null && $gender != null && $phone != null)
	{

		/*$user =$name."|".$email."|".$username."|".$pasword."|".$phoneNumber."|".$gen."\r\n";
		$file = fopen('../../models/farmerlogin.txt', 'w');
		fwrite($file, $user);
		
		header('location: ../../views/farmerViews/login.php');*/

		$status = create ($name,$username,$password,$email,$gender,$phone);
		if($status)
		{
			header('location: ../../views/BloogerViews/Login.php?msg=success');
		}
		else
		{
			header('location: ../../views/BloogerViews/CreateAccount.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>