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
		</div>
		<div id="cards">
			<div class="column">			
			<div class="card">
				<form action="create.php" method="post">
					<div><input type="text" name="Username" placeholder="Username" /></div>
					<div><input type="password" name="Password" placeholder="Password" /></div>
					<div><input type="text" name="Displayname" placeholder="Displayname" /></div>
					<div><input type="email" name="email" placeholder="Email" /></div>
					<div><textarea placeholder="Profile"></textarea></div>
					<div><input type="submit" name ="change" value="Change" /><a href="profile.php" class="button"><div>Cancel</div></a></div>
				</form>
				<div class="clearfix"></div>

	<br/>
	<br/>
<?php

include('Search.php');
include('Inloggen.php');

?>




			</div>

			<div class="card"><div class="card">Updates</div><br/><br/>There haven't been any updates yet.
			</div>
			
			<div class="card">kekzkekz<br/><br/>kekz<br/><br/>kekz<br/><br/>kekz
			</div>

			<div class="card">kekz<br/><br/>kekz<br/><br/>kekz<br/><br/>kekz<br/><br/>kekz
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