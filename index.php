<?php
//require the general classes
require("controllers/loader.php");
require("controllers/BaseController.php");

//require the model classes
require("models/base.php");
require("models/product.php");
require("models/category.php");

//require the controller classes
require("controllers/ProductController.php");
require("controllers/CategoryController.php");


//create the controller and execute the action
$loader = new Loader($_GET);
$controller = $loader->CreateController();
$controller->ExecuteAction();
?>