<!DOCTYPE html>
<head>
	<title>Informatica</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body id="draw">
	<div id="toast">
		<div><a href="#">&#215;</a> Bericht</div>
	</div>
	<div id="navbar">
		<div>
			<a href="#draw"><div>=</div></a>
			<a href="#navbar"><div>Extend</div></a>
		</div>
		<div>
			<a href="#toast"><div>Popup</div></a>
			<a href="#"><div>Stuff</div></a>
		</div>
		<div>
			<a href="#"><div>Moar</div></a>
			<a href="#"><div>Stuff</div></a>
			<a href="#"><div>Moar</div></a>
			<a href="#"><div>Stuff</div></a>
			<a href="#"><div>Moar</div></a>
			<a href="#"><div>Stuff</div></a>
		</div>
		<div>
			<a href="#"><div>Close</div></a>
		</div>
	</div>
	<div id="header">
		<a href="#"><div id="button">&#215;</div></a>
	</div>
	<div id="content">
		<div id="nav">
			<a href="#a" style="color: #fff"><div style="background: #512DA8">Navigation</div></a>
			<a href="index.php"><div>Log out</div></a>
			<a href="home.php"><div>Home</div></a>
			<a href="profile.php"><div>Profile</div></a>
			<a href="#a"><div>Main</div></a>
			<a href="#b"><div>Test 1</div></a>
			<a href="#c"><div>Test 2</div></a>
			<a href="#d"><div>Test 3</div></a>
			<a href="#a"><div>Main</div></a>
			<a href="#b"><div>Test 1</div></a>
			<a href="#c"><div>Test 2</div></a>
			<a href="#d"><div>Test 3</div></a>
		</div>
		<div id="cards">
			<div class="column">			
			<div class="card">
				<form action="Index.php" method="post">
					<div><input type="text" name="Username" placeholder="Username" /></div>
					<div><input type="password" name="Password" placeholder="Password" /></div>
					<div><textarea placeholder="Comment"></textarea></div>
					<div><select><option>Test</option><option>Kek</option></select></div>
					<div><input type="submit" name ="Login" value="Login" /><a href="home.php" class="button"><div>Cancel</div></a></div>
				</form>
				<div class="clearfix"></div>
	<form action="Index.php" method="post">
		<div><input type="text" name="searchname" placeholder="Search" /></div>
		<div>
			<select name="searchoption">
				<option disabled selected>Choose an option</option>
				<option value="a">Character info</option>
				<option value="b">Inventory</option>
				<option value "c">Items</option>
			</select>
		</div>
	
		<div><input type="submit" value="Search" /></div>
	</form>
	<div class="clearfix"></div>

<?php

include('Search.php');
include('Inloggen.php');

?>




			</div>

			<div class="card"><center>Updates</center><br/><br/>There haven't been any updates yet.
			</div>
			
<div class="card">
	<center>Character info</center>
	<form action="Index.php" method="post">
		<div>
			<input type="text" name="searchname" placeholder="Search" />
		</div>
		<div>
			<select name="searchdisplay">
				<option disabled selected>Choose a Displayoption</option>
				<option value="a">Character info</option>
				<option value="b">Inventory</option>
				<option value "c">Items</option>
			</select>
		</div>
		<div><input type="submit" value="Search" /></div>
	</form>
</div>

			
<div class="card">
	<center>Inventory</center>
	<form action="Index.php" method="post">
		<div>
			<input type="text" name="searchname" placeholder="Search" />
		</div>
		<div>
			<select name="searchdisplay">
				<option disabled selected>Choose a Displayoption</option>
				<option value="a">Character info</option>
				<option value="b">Inventory</option>
				<option value "c">Items</option>
			</select>
		</div>
		<div><input type="submit" value="Search" /></div>
	</form>
</div>

<div class="card">
	<center>Items</center>
	<form action="Index.php" method="post">
		<div>
			<input type="text" name="searchname" placeholder="Search" />
		</div>
		<div>
			<select name="searchdisplay">
				<option disabled selected>Choose a Displayoption</option>
				<option value="a">Character info</option>
				<option value="b">Inventory</option>
				<option value "c">Items</option>
			</select>
		</div>
		<div><input type="submit" value="Search" /></div>
	</form>
</div>

</div>

			<div class="column">
			<div class="card">kekz<br/><br/>kekz<br/><br/>kekz<br/><br/>kekz<br/><br/>kekz
			</div>
			
			<div class="card">kekz<br/><br/>kekz<br/><br/>kekz<br/><br/>kekz<br/><br/>kekz
			</div>

			<div class="card">kekz<br/><br/>kekz<br/>kekz<br/><br/>kekz<br/><br/>kekz
			</div>
			</div>

			<div class="card" id="clearfix" style="text-align: center">Footnote
			</div>
		</div>
	</div>
</body>
</html>