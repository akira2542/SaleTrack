<?php 
  include_once 'dbh.inc.php';
  $id = $_GET['id'];
  $sql = "SELECT * FROM `products` WHERE `product_id` = $id";
  $result = $conn-> query($sql);
  $row = $result -> fetch_assoc();
  $id = $row['product_id'];
  $productname = $row['product_name'];
  $capitalprice = $row['product_price'];
  $sellingprice = $row['product_sellingprice'];
  $currentDATE = date('Y-m-d', time());
  $table = 'productid_'.$id;