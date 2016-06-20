<?php
if (isset($_POST['searchname'])){
	if(empty($_POST['searchname'])){
		echo "Enter something";
}
else{
$search = $_POST['searchname'];
$connect = mysqli_connect("localhost","root","fgtdodo","informatica site");
$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
while($karRow = mysqli_fetch_assoc($result))
 {
  echo '<div class="card">',  $karRow['Account'], " " , $karRow['Displayname'], " " ,$karRow['Karaktertype'],'</div>';

}
} 
}
?>