<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password'])){
	$user=$_POST['email'];
	$password=$_POST['password'];
	$sql = "SELECT * FROM credentials where email='$txtEmail' AND password='$txtPassword' ;";

	if($conn->query($sql)){
		$result=$con->query($sql);
		$res=$result->fetch_array();
		if($res!=NULL){
			$_SESSION['is_user']=1;
			$_SESSION['email']=$res['email'];
			echo $_SESSION['email'];
			header('location: ../index.php');
		}
		else{
			echo "<script>window.location.href= ../login.php';window.alert('email or passowrd is incorrect');</script>";
		}
	}
}

?>