<?php
$degree =$_REQUEST['Degree']; 

if($degree == "") {
	// code...
	echo "Null value";
}
else{
	echo "your Date of birth is :".$degree;
}
?>
<html>
   <form method="post">
   	<fieldset>
   		<legend>Degree</legend>
     Degree :<input type="checkbox" name="Degree"  value="">Msc
     <input type="checkbox" name="Degree"  value="">BSc
     <input type="checkbox" name="Degree"  value="">HSC
     <input type="checkbox" name="Degree"  value="">SSC

      <input type="submit" name="submit" value="submit">
  </fieldset>
   </form>
</html>