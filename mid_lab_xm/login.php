<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
<form>
<fieldset>
	<legend>LOGIN</legend>
	User Id<br><input type="text" name="userId" value=""><br>
    Password<br><input type="password" name="password" value=""><br>
    <button type="submit">Login</button>
    <a href="registration.php"><u>Register</u></a>

</fieldset>
</form>
</body>
</html>

<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];
		$password = $_REQUEST['password'];

		if($id != ""){
			if($password != ""){

				$myfile = fopen('Data.txt', 'r');

				while(!feof($myfile)){
					$data = fgets($myfile);
					$myuser = explode('|', $data);
					if(trim($myuser[0]) == $id && trim($myuser[1]) == $password){
						setcookie('flag', 'true', time()+3600, '/');
						if ($utype==admin) {
							// code...
							header('location: adminHome.php');
						}else
						{
							header('location: usersHome.php');
						}
						
					}
				}

				echo "invalid username/password...";


			}else{
				echo "invalid password...";
			}
		}else{
			echo "invalid username...";
		}
	}

?>