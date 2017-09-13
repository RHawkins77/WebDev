<?php

  require_once "../Dao.php";
  $dao = new Dao();

  $id = $_GET["id"];
  $product = $dao->getProduct($id);

  echo "<h2>Details for " . $product["name"] . ": " . $product["description"] .
    "</h2>";?>
    <img src="<?php echo $product["image_path"]; ?>" />
    <div>
      <a href="/products.php">Back to Product List</a>
    </div>
	</img>
?>