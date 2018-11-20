<?php 
 include_once 'header.php';
?>
<body>
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