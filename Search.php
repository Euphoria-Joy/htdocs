<?php
if(empty($_POST['searchname'])){
		echo "Enter something";
}
if (isset($_POST['searchname'])){
	$connect = mysqli_connect("localhost","root","fgtdodo","informatica site");	

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
  			echo '<div class="card">',  $karRow['Displayname'], " " , $karRow['Levens'], " " ,$karRow['Gold'], " " , $karRow['Levens'], '</div>';
		} 
	}

	elseif ($_POST['searchoption'] == 'c') {
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM voorwerpen WHERE Account ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Account'], " " , $karRow['Items'], '</div>';
		}
	}

	if (!isset($_POST['searchoption'])) {
	echo "No results.";
	}
}
?>