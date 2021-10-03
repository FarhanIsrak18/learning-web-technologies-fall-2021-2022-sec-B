<?php
$email =$_REQUEST['Email']; 

if($email == "") {
	// code...
	echo "Null value";
}
else{
	echo "your email is :".$email;
}
?>
<html>
   <form method="post">
   	<fieldset>
   		<legend>Email</legend>
     Email :<input type="email" name="Email"  value="">
      <input type="submit" name="submit" value="submit">
  </fieldset>
   </form>
</html>