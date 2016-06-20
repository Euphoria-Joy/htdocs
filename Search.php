<?php
if (isset($_POST['searchname'])){
$search = $_POST['searchname'];
$connect = mysqli_connect("localhost","root","fgtdodo","informatica site");
$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
while($karRow = mysqli_fetch_assoc($result))
 {
  echo '<div class="card">',  $karRow['Account'], " " , $karRow['Displayname'], " " ,$karRow['Karaktertype'],'</div>';

	if(mysqli_num_rows($result) > 0){
		$_SESSION['search']=$search;
		$_SESSION['searchresult'] = false;
		echo "No results found.";
		exit;
}
}
} 
?>