

      <?php
include 'includes/dbh.inc.php';
$sql = "SELECT * FROM products";
$result = $conn-> query($sql);
$resultCheck = mysqli_num_rows($result);
     echo "    <div class='main-list fade-in fade-in-delayed2'>
      <h1>Your Product (<span class='italic'>$resultCheck</span>)</h1>
      <div class='product-list-container'>";
if ($resultCheck < 1) {
      echo "No Items";
            }
else {
  while ($row = $result -> fetch_assoc()) {
   $id = $row['product_id'];
   $productname = $row['product_name'];
   $capitalprice = $row['product_price'];
   $sellingprice = $row['product_sellingprice'];
   echo "<div class='product-list hvr-forward'><a href='productpage.php?id=$id'>
            <p>$productname<span class='floatright'>Cost $capitalprice Price $sellingprice </span></p>
          </a></div>";
  }
   }
      ?>
    	</div>
  	    <div class="button-container">
          <button class='addlist-button' id='mainlist-button'>Add List</button>
      </div>
    </div>
