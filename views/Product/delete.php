<?php
// check if value was posted
if($_POST){

    // prepare product object
    $product = new ProductModel($db);

    // set product id to be deleted
    $product->id = $_POST['object_id'];

    // delete the product
    if($product->delete()){
        echo "Product was deleted.";
    }

    // if unable to delete the product
    else{
        echo "Unable to delete object.";

    }
}
?>