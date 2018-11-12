<?php
 
 if (isset($_POST['submit'])) 
   {
    include_once 'dbh.inc.php';

    $productname = mysqli_real_escape_string($conn,$_POST['productname']);
    $capitalprice = mysqli_real_escape_string($conn,$_POST['capitalprice']);      
    $sellprice = mysqli_real_escape_string($conn,$_POST['sellprice']);
    $sql = "INSERT INTO products (product_name,product_price,product_sellingprice) VALUES ('$productname','$capitalprice','$sellprice');";
    $result = mysqli_query($conn,$sql);
    $result_res = mysqli_query($conn,"SELECT max(product_id) FROM products");
    $row=mysqli_fetch_row($result_res);
    $result = $row[0];
    $sql = "CREATE TABLE productid_$result (
             registration_id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
             DATE DATE NOT NULL,
             product_sold int NOT NULL);";
    $result = mysqli_query($conn,$sql);         
    
  header("Location: ../index.php?success");
  exit();    
  }
  else 
  {
    header("Location: ../index.php");
    exit();    
  }
