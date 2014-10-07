<?php
require_once 'connection.php';
require 'secure.php';
$error='';
$success='';

//if (isset($_SESSION['user']))

if (isset($_POST['submit'])) {
	
	if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['cpassword']) || empty($_POST['home'])) {
		$error = "Please fill out all input forms";
	} else {
		$uname = $_POST['username'];
		$passwd = $_POST['password'];
		$cpasswd = $_POST['cpassword'];
		$home = $_POST['home'];

		$res = mysqli_query($con, "select * from taken_usernames where username='$uname'");
		
		if ($passwd != $cpasswd) {
			$error = "Passwords does not match";
		} elseif (mysqli_num_rows($res) >= 1) {
			$error = "Username is already taken";
		} else {
			$hpasswd = encrypt_password($passwd);
			$query = mysqli_query($con, "insert into `members` values(NULL, '$uname', '$hpasswd', '$home')");

			if ($query) {
				$success = 'You have successfully created an account, please log in to shop';
				// register the username
				$query = mysqli_query($con, "insert into `taken_usernames` values('$uname')");
			} else {
				$error = 'Something went wrong, please contact our support';
			}
		}
	}
}

?>
