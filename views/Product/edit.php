<div class='page-header'>
<h1>Edit Product</h1>
</div>

<?php
// get ID of the product to be edited
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
// prepare product object
$product = new ProductModel($db);

// set ID property of product to be edited
$product->id = $id;

// read the details of product to be edited
$product->readOne();

?>

<form action='./<?php echo $id; ?>' method='post'>

    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Name</td>
            <td><input type='text' name='name' value='<?php echo $product->name; ?>' class='form-control' required></td>
        </tr>

        <tr>
            <td>Price</td>
            <td><input type='text' name='price' value='<?php echo $product->price; ?>' class='form-control' required></td>
        </tr>

        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control'><?php echo $product->description; ?></textarea></td>
        </tr>


               <tr>
    <td>Category</td>
    <td>
        <?php
        // read the product categories from the database

        $category = new CategoryModel($db);
        $stmt = $category->readAll();

        // put them in a select drop-down
        echo "<select class='form-control' name='category_id'>";

            echo "<option>Please select...</option>";
            while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row_category);

                // current category of the product must be selected
                if($product->category_id==$id){
                    echo "<option value='$id' selected>";
                }else{
                    echo "<option value='$id'>";
                }

                echo "$name</option>";
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
                <button type="submit" class="btn btn-primary">Update</button>
            </td>
        </tr>

    </table>
</form>


<?php
// if the form was submitted
if($_POST){

    // set product property values
    $product->name = $_POST['name'];
    $product->price = $_POST['price'];
    $product->description = $_POST['description'];
    $product->category_id = $_POST['category_id'];

    // update the product
    if($product->update()){
        echo "<div class=\"alert alert-success alert-dismissable\">";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo "Product was updated.";
        echo "</div>";
    }

    // if unable to update the product, tell the user
    else{
        echo "<div class=\"alert alert-danger alert-dismissable\">";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo "Unable to update product.";
        echo "</div>";
    }
}
?>