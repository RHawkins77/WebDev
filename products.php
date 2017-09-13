<?php
require_once "Dao.php";
$dao = new Dao();
$products = $dao->getProducts();

?>

<html>
	<body>
		<ul>
		<?php foreach ($products as $product) {
			echo "<li><a href='productdetails.php?id=" . $product["id"] . "'>" .
				$product["name"] . "</a></li>";
		} ?>
		</ul>
		<a href="/product/add.html">Add a product</a>
	</body>

	<?php include_once('footer.php')?>

	
	
	</html>
		}