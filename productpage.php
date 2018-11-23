<?php
 include_once 'header.php';
?>
<body>
	<?php
  if (isset($_GET['id'])) {
  include 'includes/productpage_display.inc.php' ;
  }
	?>
 <script src="js/chart.js"></script>
 <div class='logocontainer fade-in'>
  <a href="index.php"><h1>SALETRACK</h1></a>
  </div>
  <div class="left-overlay" id="overlay">This is an Overlay</div>
 <div class="bigcontainer fade-in fade-in-delayed">
  <h2>Product Name</h2>
 	<h1><?php echo $productname;?></h1>
  <div class="product-display-container">
    <div class="line-1-container">
 	 <div class="text-block line-1">COST <?php echo $capitalprice;?></div>
 	 <div class="text-block line-1">PRICE <?php echo $sellingprice;?></div>
 	 <div class="text-block line-1">CHANGE</div>

    </div>
      <div class="line-2-container">
 	 <div class="text-block line-2">TOTAL SOLD<br><span class="big"><?php echo $totalsold;?></span></div>
 	 <div class="text-block line-2">TODAY SOLD<br><span class="big"><?php echo $todaysold;?></div>
   <div class="text-block line-2">Registered Days<br><span class="big"><?php echo $registernumber;?></div>
 	 <div class="text-block line-2 gradcolor" id="addsale-button">ADD SALE<br><span class="big">+</div>
    </div>
    <div class="line-3-container">
      <div class="text-block line-3">OVERALL SALE<br><span class="lessbig"><?php echo $overallSale;?></span>Bath</div>
      <div class="text-block line-3">AVERAGE SALE<br><span class="lessbig"><?php echo $averageSale;?></span>Bath/day</div>
      <div class="text-block line-3">OVERALL PROFIT<br><span class="lessbig"><?php echo $overallprofit;?></span>Bath</div>
      <div class="text-block line-3">AVERAGE PROFIT<br><span class="lessbig"><?php echo $averageprofit;?></span>Bath/day</div>
    </div>
  </div>

        <div class="chartsize fade-in fade-in-delayed2">
        <canvas id="myChart" width="" height=""></canvas>
        </div>
 </div>
 <script type="text/javascript">
 var globalVariable={
 label: '# of <?php echo $productname;?> sold',
 date1:'<?php echo $date_1;?>',
 date2:'<?php echo $date_2;?>',
 date3:'<?php echo $date_3;?>',
 date4:'<?php echo $date_4;?>',
 date5:'<?php echo $date_5;?>',
 date6:'<?php echo $date_6;?>',
 sold1:'<?php echo $sold_1;?>',
 sold2:'<?php echo $sold_2;?>',
 sold3:'<?php echo $sold_3;?>',
 sold4:'<?php echo $sold_4;?>',
 sold5:'<?php echo $sold_5;?>',
 sold6:'<?php echo $sold_6;?>'
};
 </script>
<script type="text/javascript" src="js/mygraph.js"></script>

 <div class="insert-amountpanel" id="insert-panel-add">
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
   <script type="text/javascript">
      $( "#addsale-button" ).click(function() {
          $("#overlay").slideDown(500);
          $("#insert-panel-add").show(300);
  })
      $( "#overlay" ).click(function() {
          $("#insert-panel-add").hide(300).delay(300);
          $("#overlay").slideUp(500);
  });
    </script>
</body>
</html>
