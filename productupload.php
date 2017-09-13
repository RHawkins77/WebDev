<?php
  require_once "../Dao.php";
  $dao = new Dao();

  // save a product, including name, description, and an image path
  $name = (isset($_POST["name"])) ? $_POST["name"] : "";
  $description = (isset($_POST["description"])) ? $_POST["description"] : "";

  $imagePath = "";
  if (count($_FILES) > 0) {
    if ($_FILES["file"]["error"] > 0) {
      throw new Exception("Error: " . $_FILES["file"]["error"]);
    } else {
      $basePath = "/Users/crk/projects/cs497/src/www";
      $imagePath = "/product/images/" . $_FILES["file"]["name"];
      if (!move_uploaded_file($_FILES["file"]["tmp_name"], $basePath . $imagePath)) {
        throw new Exception("File move failed");
      }
    }
  }
  $dao->saveProduct($name, $description, $imagePath);
  header("location:http://cs497/products.php");
  ?>