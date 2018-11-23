<?php
 include_once 'header.php';
?>
<body>
  <div class='logocontainer fade-in'>
  <h1>SALETRACK</h1>
  </div>
  <div class="overlay" id="overlay">Hey This is Overlay</div>
  <div class="info-container fade-in-delayed fade-in">
    <div class="infoimg">
      <img src="img/market.png">
    </div>
    <div class="info">
      <h1>Welcome to SaleTrack!</h1>
      <p>This handy web-app is made for small enterprenuer who want an easy way to keep track of the products they're selling. Me,the creator of this website,my self also once was a petty enterprenuer selling cheap products in small quantities find it pretty hard to keep track of everything I sell. I hope this site will be someone's life a littlebit easier!</p>
    </div>
  </div>
<?php
 include_once 'mainlist.php';
?>
    <div class="insert-panel" id="insert-panel-main">
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
    <script type="text/javascript">
      $( "#mainlist-button" ).click(function() {
          $("#overlay").slideDown(500);
          $("#insert-panel-main").show(300);
  })
      $( "#overlay" ).click(function() {
          $("#insert-panel-main").hide(300).delay(300);
          $("#overlay").slideUp(500);
  });
    </script>
</body>
</html>
