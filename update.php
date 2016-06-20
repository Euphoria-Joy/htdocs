<?php
if(isset($_POST['change'])){
$connection = new mysqli('localhost', 'root', 'fgtdodo', 'informatica site');
$Uchange = "UPDATE accountgegevens SET Gebruikersnaam=$_POST['Username'] WHERE Gebruikersnaam=$Uold";
$Pchange = "UPDATE accountgegevens SET Wachtwoord=$_POST['Password'] WHERE Wachtwoord=$Pold";
$Echange = "UPDATE extrainfo SET Email=$_POST['Email'] WHERE Email=$Eold";
$Schange = "UPDATE accountgegevens SET Profiel=$_ WHERE Profiel=$Sold";
if ($connection->query($Uchange) === TRUE) {
    echo "Username changed";
} else {
    echo "Fail";
}
if ($connection->query($Pchange) === TRUE) {
    echo "Password changed";
} else {
    echo "Fail";
}
if ($connection->query($Echange) === TRUE) {
    echo "Email changed";
} else {
    echo "Fail";
}
if ($connection->query($Schange) === TRUE) {
    echo "Profile changed";
} else {
    echo "Fail";
}

$connection->close();
?>