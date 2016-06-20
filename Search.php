<?php
if (isset($_POST['searchname'])){
	if(empty($_POST['searchname'])){
		echo "Enter something";
}
else{
if ($_POST(['searchoption']) ==Character){
$search = $_POST['searchname'];
$connect = mysqli_connect("localhost","root","fgtdodo","informatica site");
$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
while($karRow = mysqli_fetch_assoc($result))
 {
  echo '<div class="card">',  $karRow['Account'], " " , $karRow['Displayname'], " " ,$karRow['Karaktertype'],'</div>';
}
}
if ($_POST(['searchoption']) == Inventory) {
$search = $_POST['searchname'];
$connect = mysqli_connect("localhost","root","fgtdodo","informatica site");
$result = mysqli_query($connect, "SELECT * FROM tas WHERE Displayname ='" .$search ."'");
while($karRow = mysqli_fetch_assoc($result))
 {
  echo '<div class="card">',  $karRow['Displayname'], " " , $karRow['Levens'], " " ,$karRow['Gold'], " " , $karRow['Levens'], '</div>';
} 
}
if ($_POST(['searchoption']) == Items) {
$search = $_POST['searchname'];
$connect = mysqli_connect("localhost","root","fgtdodo","informatica site");
$result = mysqli_query($connect, "SELECT * FROM voorwerpen WHERE Account ='" .$search ."'");
while($karRow = mysqli_fetch_assoc($result))
 {
  echo '<div class="card">',  $karRow['Account'], " " , $karRow['Items'], '</div>';
}
}
if (isset($_POST['searchoption']) == false) {
echo "No results.";
}
}
?>