<?php 
require_once('usersModel.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Display</title>
</head>
<body>
   <form method="post">
   <fieldset>
   	  <legend>Display</legend>
   	 <table border="1" width="400px">
        <tr>
          <th>Name</th> 
          <th>Profit</th> 
          <th></th> 
          <th></th> 
        </tr> 
         <?php 
                                          
                   
               $result = viewProducts();                 
               $count=mysqli_num_rows($result);

                while($data= mysqli_fetch_assoc($result)) {
                                
         ?>
          <tr>
           <td><?php echo $data['name'];?></td> 
           <td><?php echo $data['profit'];?></td> 
           <td><a href="edit.php">edit</a></td> 
           <td><a href="delete.php">delete<a></td> 
        </tr> 
        <?php }?>  
       </table>
   	 
   </fieldset>
   </form>
</body>
</html>