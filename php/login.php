<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	session_start();

	if ($username && $password) {
		$connect = mysql_connect("localhost", "root", "root") or die("Couldn't connect!");
		mysql_select_db('database') or die("Couldn't find db");

		$query  = mysql_query("SELECT * FROM users WHERE username='$username'");
		$numrows = mysql_num_rows($query);

		if ($numrows != 0) {
			while ($row = mysql_fetch_assoc($query)) {
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
			}

			if ($username == $dbusername && $password == $dbpassword) {
				echo "You have succesfully logged in! <br /> <a href='member.php'>Click here to enter the member area.</a>";
				$url = 'member.php';
				$_SESSION['username']=$username;
			} else {
				echo "Incorrect password!";
			}
		} else {
			die("That user doesn't exist! <br /> <a href='../index.html'>Click here to return home.</a>");
		}

	} else {
		die("Please enter a username and a password");
	}
?>