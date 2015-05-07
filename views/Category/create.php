
<?php // if the form was submitted
if($_POST){

    // instantiate product object
    $product = new ProductModel($db);

    // set product property values
    $product->name = $_POST['name'];
    $product->price = $_POST['price'];
    $product->description = $_POST['description'];
    $product->category_id = $_POST['category_id'];

    // create the product
    if($product->create()){ ?>
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Product was created.
        </div>
    <?php }

    else { ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Unable to create product.
        </div>
    <?php }
}

?>



<!-- HTML form for creating a product -->
<form action='create' method='post'>

    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' required></td>
        </tr>

        <tr>
            <td>Price</td>
            <td><input type='text' name='price' class='form-control' required></td>
        </tr>

        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control'></textarea></td>
        </tr>

        <tr>
            <td>Category</td>
            <td>


<tr>
    <td>Category</td>
    <td>
    <?php
    // read the product categories from the database

    $category = new CategoryModel($db);
    $stmt = $category->read();

    // put them in a select drop-down
    echo "<select class='form-control' name='category_id'>";
        echo "<option>Select category...</option>";

        while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row_category);
            echo "<option value='{$id}'>{$name}</option>";
        }

    echo "</select>";
    ?>
    </td>
</tr>



            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>

    </table>
</form>