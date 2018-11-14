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
</body>
</html>