<?php
require_once('db.php');

 function viewProducts(){

         $con = getConnection();          
         $sql = "select * from products";
         $result = mysqli_query($con, $sql);
         return $result;


}

function insertProducts($user){
      $con = getConnection();
      $sql = "insert into products values ('', '{$products['name']}', '{$products['buyingPrice']}', '{$products['sellingPrice']}')";

      if(mysqli_query($con, $sql)){
         return true;
      }else{
         return false;
      }

?> 