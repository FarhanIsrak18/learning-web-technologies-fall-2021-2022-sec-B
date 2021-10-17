<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body>
<form method="post">
 <fieldset>
 	<legend>Registration</legend>
    ID<br><input type="text" name="id" value=""><br>
    Password<br><input type="password" name="password" value=""><br>
    Confirm Password<br><input type="password" name="confirmPass" value=""><br>
    Name<br><input type="text" name="name" value=""><br>
    <u>User Type</u><br>
    <input type="radio" name="user" value=""> Admin
    <input type="radio" name="user" value=""> User<br>
    <button type="submit" name="submit" value="submit">Sign Up</button>
    <a href="login.php"><u>Sign In</u></a>
 </fieldset>
</form>
</body>
</html>

<?php 
	if(isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];		
		$password = $_REQUEST['password'];
		$confirmPass = $_REQUEST['confirmPass'];
		$name = $_REQUEST['name'];
		$utype = $_REQUEST['user'];

		if($id != ""){
		 if($password != ""){
		  if($confirmPass != ""){
		  	if($name != ""){
				if($utype != ""){

					$myfile = fopen('Data.txt', 'w');
					$data = $id."|".$password."|".$confirmPass."|".$name."|".$utype."\r\n";
					fwrite($myfile, $Data);
					fclose($myfile);

					header('location: login.php');
				}else{
					echo "input user type";
				}
			 }else{
					echo "invalid name...";
				}
			}else{
				echo "invalid retype password...";
			}
		}else{
			echo "invalid  password....";
		}
	}else{
		echo "invalid  id....";
	}	
}
?>