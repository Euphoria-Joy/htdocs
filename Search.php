<?php
if(empty($_POST['searchname'])){
		echo "Enter Account ID for Character info or Items.</br> Enter Displayname for Inventory";
}
elseif(isset($_POST['searchoption'])){
	$connect = mysqli_connect("localhost","root","usbw","informatica");	

if ($_POST['searchoption'] == 'a'){
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Account'], " " , $karRow['Displayname'], " " ,$karRow['Karaktertype'],'</div>';
		}
	}

	elseif ($_POST['searchoption'] == 'b') {
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM tas WHERE Displayname ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Displayname'], " " , $karRow['Levens'], " levens " ,$karRow['Gold'], " gold " , $karRow['Levens'], " leven(s) ", '</div>';
		} 
	}

	elseif ($_POST['searchoption'] == 'c') {
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM voorwerpen WHERE Account ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Account'], " " , $karRow['Items'], '</div>';
		}
	}
if ($_POST['searchoption'] == 'd'){
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Account'], " " , $karRow['Displayname'], " " ,$karRow['Karaktertype'],'</div>';
		}
	}	

	if (!isset($_POST['searchname'])) {
	echo "No results.";
	}
}
?>