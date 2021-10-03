<?php
$gender =$_REQUEST['Gender']; 

if($gender == "") {
	// code...
	echo "Null value";
}
else{
	echo "gender".$gender;
}
?>
<html>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">>
   	<fieldset>
   		<legend>Gender</legend>
Gender :<input type="radio" name="Gender"  value=""> Male
     <input type="radio" name="Gender"  value=""> Female
     <input type="radio" name="Gender"  value=""> others
<span class="error">* <?php echo $genderErr;?></span>
  <br><br>
     <input type="submit" name="submit" value="submit">
  </fieldset>
   </form>
</html>