<?php
if(empty($_POST['searchname1'])){
		echo "Enter a Account ID";
}
elseif(isset($_POST['searchkar'])){
	$connect = mysqli_connect("localhost","root","usbw","informatica");	

	if ($_POST['searchkar'] == 'a'){
		$search = $_POST['searchname1'];
		$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Displayname'],'</div>';
		}
	}

	elseif ($_POST['searchkar'] == 'b') {
		$search = $_POST['searchname1'];
		$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Karaktertype'],'</div>';
		} 
	}
	elseif ($_POST['searchkar'] == 'c') {
		$search = $_POST['searchname1'];
		$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Displayname'], $karRow['Karaktertype'],'</div>';
		}
	}
}
?>