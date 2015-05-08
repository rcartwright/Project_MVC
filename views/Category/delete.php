<?php
// check if value was posted
if($_POST){

    // prepare category object
    $category = new CategoryModel($db);

    // set category id to be deleted
    $category->id = $_POST['object_id'];

    // delete the category
    if($category->delete()){
        echo "category was deleted.";
    }

    // if unable to delete the category
    else{
        echo "Unable to delete object.";

    }
}
?>