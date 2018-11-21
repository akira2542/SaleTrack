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
  $totalsold = 0;
  $todaysold = 0;
  $overallSale = 0;
  $averageSale = 0;
  $profit = $sellingprice-$capitalprice;
  $overallprofit = 0;
  $averageprofit = 0;
/*product sales calculation*/
  $sql = "SELECT `product_sold` FROM `$table`";
  $result = $conn-> query($sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck<1) {
  }else {
    while ($row = $result -> fetch_assoc()) {
    $solditemsPerRow = $row['product_sold'];
    $totalsold = $totalsold+$solditemsPerRow;
  }
  $overallSale = $totalsold*$sellingprice;
  $averageSale = $overallSale/$resultCheck;
  $overallprofit = $totalsold*$profit;
  $averageprofit = $overallprofit/$resultCheck;
  $sql = "SELECT * FROM `$table` WHERE `DATE`=date('$currentDATE')";
  $result = $conn-> query($sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck<1) {
  }else{
    $row = mysqli_fetch_row($result);
    $todaysold = $row[2];
  }
}
