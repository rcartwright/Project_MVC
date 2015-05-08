<div class='page-header'>
<h1>Edit Category</h1>
</div>

<?php
// get ID of the category to be edited
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
// prepare category object
$category = new CategoryModel($db);

// set ID property of category to be edited
$category->id = $id;

// read the details of category to be edited
$category->readOne();

?>

<form action='./<?php echo $id; ?>' method='post'>

    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Name</td>
            <td><input type='text' name='name' value='<?php echo $category->name; ?>' class='form-control' required></td>
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

    // set category property values
    $category->name = $_POST['name'];

    // update the category
    if($category->update()){
        echo "<div class=\"alert alert-success alert-dismissable\">";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo "category was updated.";
        echo "</div>";
    }

    // if unable to update the category, tell the user
    else{
        echo "<div class=\"alert alert-danger alert-dismissable\">";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo "Unable to update category.";
        echo "</div>";
    }
}
?>