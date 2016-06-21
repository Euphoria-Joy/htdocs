<?php
if(empty($_POST['searchname'])){
		echo "Enter something";
}
elseif(isset($_POST['searchoption'])){
	$connect = mysqli_connect("localhost","root","usbw","informatica");	

if ($_POST['searchoption'] == 'a'){
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
		var_dump($search, $result);
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

if (isset($_POST['searchoption1'])){
	$connect = mysqli_connect("localhost","root","usbw","informatica");	

	if ($_POST['searchkar'] == 'a'){
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Karaktertype'],'</div>';
		}
	}

	elseif ($_POST['searchoption'] == 'b') {
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Displayname'],'</div>';
		}
	}
	elseif ($_POST['searchoption'] == 'c') {
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM kar WHERE Account ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Karaktertype'], " ", $karRow['Displayname'],'</div>';
		} 
	}
}

if (isset($_POST['searchoption2'])){
	$connect = mysqli_connect("localhost","root","usbw","informatica");	

	if ($_POST['searchtas'] == 'a'){
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM tas WHERE Displayname ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Levens'],'</div>';
		}
	}

	elseif ($_POST['searchtas'] == 'b') {
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM tas WHERE Displayname ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Gold'],'</div>';
		} 
	}
	elseif ($_POST['searchtas'] == 'c') {
		$search = $_POST['searchname'];
		$result = mysqli_query($connect, "SELECT * FROM tas WHERE Displayname ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Kaarten'],'</div>';
		}
	}
}
?>