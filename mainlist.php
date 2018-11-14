

      <?php 
include 'includes/dbh.inc.php';
$sql = "SELECT * FROM products";
$result = $conn-> query($sql);
$resultCheck = mysqli_num_rows($result);
     echo "    <div class='main-list'>
      <h1>Your Product List ($resultCheck items)</h1>
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
   echo "<div class='product-list'><a href='productpage.php?id=$id'>
            <p>$productname<span class='floatright'>Price : $capitalprice SellingPrice  : $sellingprice </span></p>
          </a></div>";
  }
   }                      
      ?>        
    	</div>
  	    <button class='addlist-button'>
  	    	Add List
  	    </button>
    </div>