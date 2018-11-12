      <?php 
include 'includes/dbh.inc.php';
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck < 1) {
      echo "No Items";
            }
else {
  echo "shit there is items";
}                      
      ?>
      <div class="main-list">
  	 <h1>Your Product List</h1>
  	  <div class="product-list-container">
  	    <div class="product-list">
  		    <p>Product number one</p>
  	        </div>
  	  	    <div class="product-list">
  		    <p>Product number two</p>
  	        </div>
  	  	    <div class="product-list">
  		    <p>Product number three</p>
  	        </div>
  	    </div>
  	    <button class="addlist-button">
  	    	Add List
  	    </button>
    </div>