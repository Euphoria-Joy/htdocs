<?php
$connection = mysqli_connect ('localhost', 'root', 'fgtdodo', 'informatica site');
if(isset($_POST['change'])){
$Uold = $_SESSION['login_user']
$Uchange = "UPDATE accountgegevens SET Gebruikersnaam=$_POST['Username'] WHERE Gebruikersnaam=$Uold";
$Pchange = "UPDATE accountgegevens SET Wachtwoord=$_POST['Password'] WHERE Gebruikersnaam=$Uold";
$Echange = "UPDATE extrainfo SET Email=$_POST['Email'] WHERE Gebruikersnaam=$Uold";
$Schange = "UPDATE accountgegevens SET Profiel=$_POST['Profiel'] WHERE Gebruikersnaam=$Uold";
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