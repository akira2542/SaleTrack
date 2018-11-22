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
    $registernumber = 0;
  }else {
    while ($row = $result -> fetch_assoc()) {
    $solditemsPerRow = $row['product_sold'];
    $totalsold = $totalsold+$solditemsPerRow;
  }
  $registernumber = $resultCheck;
  $overallSale = $totalsold*$sellingprice;
  $averageSale = $overallSale/$resultCheck;
  $averageSale = round($averageSale,2);
  $overallprofit = $totalsold*$profit;
  $averageprofit = $overallprofit/$resultCheck;
  $averageprofit = round($averageprofit,2);
  $sql = "SELECT * FROM `$table` WHERE `DATE`=date('$currentDATE')";
  $result = $conn-> query($sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck<1) {
  }else{
    $row = mysqli_fetch_row($result);
    $todaysold = $row[2];
  }
  $arrayDATE = array();
  $arraySOLD = array();
  $sql = "SELECT * FROM `$table` ORDER BY `DATE` DESC";
  $result = $conn-> query($sql);
  while ($row = $result -> fetch_assoc()) {
    array_push($arrayDATE,$row['DATE']);
    array_push($arraySOLD,$row['product_sold']);
  }
  if (!isset($arrayDATE[0])) {
    $date_1 = 'none';
    $sold_1 = 0;
  }else {
    $date_1=$arrayDATE[0];
    $sold_1=$arraySOLD[0];
  }
  if (!isset($arrayDATE[1])) {
    $date_2 = 'none';
    $sold_2 = 0;
  }else {
    $date_2=$arrayDATE[1];
    $sold_2=$arraySOLD[1];
  }
  if (!isset($arrayDATE[2])) {
    $date_3 = 'none';
    $sold_3 = 0;
  }else {
    $date_3=$arrayDATE[2];
    $sold_3=$arraySOLD[2];
  }
  if (!isset($arrayDATE[3])) {
    $date_4 = 'none';
    $sold_4 = 0;
  }else {
    $date_4=$arrayDATE[3];
    $sold_4=$arraySOLD[3];
  }
  if (!isset($arrayDATE[4])) {
    $date_5 = 'none';
    $sold_5 = 0;
  }else {
    $date_5=$arrayDATE[4];
    $sold_5=$arraySOLD[4];
  }
  if (!isset($arrayDATE[5])) {
    $date_6 = 'none';
    $sold_6 = 0;
  }else {
    $date_6=$arrayDATE[5];
    $sold_6=$arraySOLD[5];
  }
}
