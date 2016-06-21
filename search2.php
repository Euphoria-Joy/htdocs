<?php
if(empty($_POST['searchname2'])){
		echo "Enter an Displayname";
}
elseif (isset($_POST['searchtas'])){
	$connect = mysqli_connect("localhost","root","usbw","informatica");	

	if ($_POST['searchtas'] == 'a'){
		$search = $_POST['searchname2'];
		$result = mysqli_query($connect, "SELECT * FROM tas WHERE Displayname ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Levens'],'</div>';
		}
	}

	elseif ($_POST['searchtas'] == 'b') {
		$search = $_POST['searchname2'];
		$result = mysqli_query($connect, "SELECT * FROM tas WHERE Displayname ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Gold'],'</div>';
		}
	}
	elseif ($_POST['searchtas'] == 'c') {
		$search = $_POST['searchname2'];
		$result = mysqli_query($connect, "SELECT * FROM tas WHERE Displayname ='" .$search ."'");
		while($karRow = mysqli_fetch_assoc($result)) {
  			echo '<div class="card">',  $karRow['Kaarten'], " Kaarten", '</div>';
		}
	}

}
?>