<?php
$name =$_REQUEST['Myname']; 

if($name == "") {
	// code...
	echo "Null value";
}
else{
	echo "your name is :".$name;
}
?>
<html>
   <form method="post">
   	<fieldset>
   		<legend>Name</legend>
     Name :<input type="text" name="Myname"  value="">
      <input type="submit" name="submit" value="submit">
  </fieldset>
   </form>
</html>