<?php
$error = "Username or Password is invalid";
	if(isset($_POST['Login'])){
		if(empty($_POST['Username']) || empty($_POST['Password'])){
			echo $error;
		}
	
		else
		{
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$connection = mysqli_connect('localhost', 'root', 'usbw', 'informatica');
	
	$username = mysqli_real_escape_string($connection, $username);
	$password = mysqli_real_escape_string($connection, $password);

	$result = mysqli_query($connection, "SELECT Gebruikersnaam, Wachtwoord FROM `accountgegevens` WHERE Wachtwoord = '" . $password . "' AND Gebruikersnaam = '" . $username . "'");
	

	if(mysqli_num_rows($result) > 0){
		$_SESSION['login_user']=$username;

		header("Location:home.php");
		exit;
	}
	else {
		echo $error;
	}
	
}	
}
?>