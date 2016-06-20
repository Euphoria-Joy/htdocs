<?php
$connection = mysqli_connect("localhost", "root", "fgtdodo", "informatica site");

session_start();

$user_check = $_SESSION['login_user'];
$ses_sql = mysqli_query($connection, "select Gebruikersnaam from accountgegevens where Gebruikersnaam ='" . $user_check ."'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['Gebruikersnaam'];

if(!isset($login_session)){
	mysql_close($connection);
	header('Location: index.php');
}
$connection2 = mysqli_connect("localhost", "root", "fgtdodo", "informatica site");
$search_result = $_SESSION['search'];
$search_sql = mysqli_query($connection, "select Account from kar where Account ='" . $search ."'");
$row = mysqli_fetch_assoc($search_sql);
$search_session = $row['Account'];

if(!isset($search_session)){
	mysql_close($connection);
}

?>

?>