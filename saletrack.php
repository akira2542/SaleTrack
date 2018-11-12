<!DOCTYPE html>
<html>
<head>
	<title>SaleTrack</title>
	<meta charset='UTF-8'/>
	<link href='styles.css' rel='stylesheet'/>
</head>
<body>
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
    <div class="insert-panel">
    	<h1>New Product</h1>
    	<form action="includes/createnewprod.inc.php" method="POST">
            <div class="inserbox-container">
                 <div class="insertbox" id="pn">Product Name <input type="text" name="ProductName" value="">
                 </div>
                 <div class="insertbox" id="cp">Capital Price <input type="text" name="CapitalPrice" value="">
                 </div>
                 <div class="insertbox" id="sp">Sell Price <input type="text" name="SellPrice" value="">
                 </div>                      
           </div>
           <input class="addlist-button" id="submit-bot"type="submit" value="Submit">
        </form>
    </div>
</body>
</html>