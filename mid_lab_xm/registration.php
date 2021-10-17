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
    Confirm Password<br><input type="password" name="password" value=""><br>
    Name<br><input type="text" name="name" value=""><br>
    <u>User Type</u><br>
    <input type="radio" name="user" value=""> Admin
    <input type="radio" name="user" value=""> User<br>
    <button type="submit">Sign Up</button>
    <a href="login.php"><u>Sign In</u></a>
 </fieldset>
</form>
</body>
</html>