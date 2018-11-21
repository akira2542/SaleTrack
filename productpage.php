<?php 
 include_once 'header.php';
?>
<body> 
	<?php 
  if (isset($_GET['id'])) { 
  include 'includes/productpage_display.inc.php' ;
  }
	?>
 <div class="bigcontainer">
 	<h1><?php echo $productname;?></h1>
  <div class="product-display-container">
    <div class="line-1-container">
 	 <div class="text-block line-1">COST <?php echo $capitalprice;?></div>
 	 <div class="text-block line-1">PRICE <?php echo $sellingprice;?></div>
 	 <div class="text-block line-1"><a href="index.php">CHANGE</a></div>

    </div>
      <div class="line-2-container">
 	 <div class="text-block line-2">TOTAL SOLD<br><span class="big">20</span></div>
 	 <div class="text-block line-2">TODAY SOLD<br><span class="big">5</div>
 	 <div class="text-block line-2">ADD SALE<br><span class="big">+</div>	
    </div>
  </div>
 </div>



 <div class="insert-amountpanel">
 	<h1>Today's Sale</h1>
   <div class="insertbox-container">
	<form action="includes/insertsale.inc.php" method="POST" required>
		 <div id="dt" class="insertbox">Date
			<input type="date" name="date">
		 </div>
		<div id="am" class="insertbox" required>Amount
		    <input type="number" name="amount">
	    </div>
	        <input type="hidden" name="productid" value="<?php 
echo "$id";
?>" required>   
   </div>
     <input class="addlist-button-amount" id="add-bot" type="submit" name="submit" value="Add">	
	</form>
   </div>
</body>
</html>