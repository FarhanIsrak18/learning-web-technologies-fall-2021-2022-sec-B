<?php
$dob =$_REQUEST['DOB']; 

if($dob == "") {
	// code...
	echo "Null value";
}
else{
	echo "your Date of birth is :".$dob;
}
?>
<html>
   <form method="post">
   	<fieldset>
   		<legend>Email</legend>
     DOB :<input type="date" name="DOB"  value="">
      <input type="submit" name="submit" value="submit">
  </fieldset>
   </form>
</html>