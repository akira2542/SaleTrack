<?php 
 include_once 'header.php';
?>
<body>
	this is a product page of id 
	<?php 
  if (isset($_GET['id']))
  { $id = $_GET['id'];
  	echo "$id";
  }
	?>
 <div class="bigcontainer">
 	<h1>Fried Chicken Noodle</h1>
  <div class="product-display-container">
    <div class="line-1-container">
 	 <div class="text-block line-1">COST 20</div>
 	 <div class="text-block line-1">PRICE 40</div>
 	 <div class="text-block line-1">CHANGE</div>

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
	<form action="index.php" method="GET" required>
		 <div id="dt" class="insertbox">Date
			<input type="date" name="date">
		 </div>
		<div id="am" class="insertbox" required>Amount
		    <input type="number" name="amount">
	    </div>   
   </div>
     <input class="addlist-button-amount" id="add-bot" type="submit" name="submit" value="Add">	
	</form>
   </div>
</body>
</html>