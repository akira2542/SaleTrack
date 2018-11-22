<?php
 include_once 'header.php';
?>
<body>
  <div class='logocontainer'>
  <h1>SALETRACK</h1>
  </div>
  <div class="info-container">
    <div class="infoimg">
      <img src="img/market.png">
    </div>
    <div class="info">
      <h1>Welcome to SaleTrack!</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
  </div>
<?php
 include_once 'mainlist.php';
?>
    <div class="insert-panel">
    	<h1>New Product</h1>
    	<form action="includes/createprod.inc.php" method="POST">
            <div class=".insertbox-container">
                 <div class="insertbox" id="pn">Product Name <input type="text" name="productname" required>
                 </div>
                 <div class="insertbox" id="cp">Capital Price <input type="number" name="capitalprice" required>
                 </div>
                 <div class="insertbox" id="sp">Sell Price <input type="number" name="sellprice" required>
                 </div>
           </div>
           <input class="addlist-button" id="submit-bot"type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>
