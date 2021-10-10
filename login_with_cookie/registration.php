<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend>Registration</legend>
 Username: <input type="text" name="myname" value=""><br>
  Email: <input type="email" name="email" value=""><br>
 password: <input type="password" name="password" value=""><br>
 Confirm Password:<input type="password" name="confirmPass" value=""><br>

  <fieldset>
    <legend>Gender</legend>
   Gender: <input type="radio" name="Gender" value=""> male
           <input type="radio" name="Gender" value=""> Female
           <input type="radio" name="Gender" value=""> others <br>
  </fieldset> 
 
<fieldset>
    <legend>Date of Birth</legend> 
    DOB  : <input type="date" name="dob" value=""><br>
  </fieldset>
           <input type="submit" name="submit" value="submit">
           <input type="reset" name="reset" value="reset">
</fieldset>
</form>
</body>
</html>

<?php

$name=$_REQUEST['myname'];
$password=$_REQUEST['password'];
$confirmpass=$_REQUEST['confirmPass'];
$email=$_REQUEST['email'];
$dob=$_REQUEST['dob'];

if (empty($name)) { 
  echo "Input a name ";
   echo "<br>";
 }elseif (strlen($name)<2) {
  echo "name should be more than 2 words";
    echo "<br>";
}elseif (empty($password)) { 
   echo "Input a password ";
   echo "<br>";
 }elseif ($password !== $confirmpass=$_REQUEST['confirmPass']) {
   // code...
  echo "password does not match";
  echo "<br>";
 }elseif (empty($email)) { 
  echo "Input an email ";
   echo "<br>";
 }elseif (empty($dob)) { 
   echo "input your date of Birth ";
   echo "<br>";
 }

else{
   header('location:login.php');
}
session_start();

  if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];

    if($username != ""){
      if($password != ""){
        if($email != ""){
          setcookie('username', $username, time()+3600, '/');
          setcookie('password', $password, time()+3600, '/');
          setcookie('email', $email, time()+3600, '/');

          header('location: login.html');
        }else{
          echo "invalid email...";
        }
      }else{
        echo "invalid password...";
      }
    }else{
      echo "invalid username...";
    }
  }
  
?>