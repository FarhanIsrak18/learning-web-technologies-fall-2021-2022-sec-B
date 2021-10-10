<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
 <form method="post">
 Username:<input type="text" name="myname" value=""><br>
 password:<input type="password" name="password" value=""><br>
 <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php 

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['myname'];
		$password = $_REQUEST['password'];
	
		if($username != ""){
			if($password != ""){
				
           
				if($_COOKIE['username'] == $username && $_COOKIE['password'] == $password){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: dashboard.php');
				}else{
					echo "invalid username/password...";
				}

			}else{
				echo "invalid password...";
			}
		}else{
			echo "invalid username...";
		}
	}

?>