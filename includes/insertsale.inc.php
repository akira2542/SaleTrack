<?php 
   if (isset($_POST['submit'])) {
   	include_once 'dbh.inc.php';
   	$saleDate = mysqli_real_escape_string($conn,$_POST['date']);
    $saleAmount = mysqli_real_escape_string($conn,$_POST['amount']);      
    $procID = mysqli_real_escape_string($conn,$_POST['productid']);
    $table = 'productid_'.$procID;
    $result = mysqli_query($conn,"SELECT `DATE` FROM `$table` WHERE `DATE`= date('$saleDate')");
    $resultCheck = mysqli_num_rows($result);
     if ($resultCheck > 0) {
     	header("Location: ../index.php?DATE_already_exist");
     	exit();
     }
     else {
        $sql = "INSERT INTO `$table` (`DATE`,product_sold) VALUES (date('$saleDate'),'$saleAmount')";
        $result = mysqli_query($conn,$sql);
        header("Location: ../productpage.php?id=$procID&add=success");
    exit();
     }
   }
   else {
   	header("Location: ../productpage.php?invalid");
    exit();    
   }