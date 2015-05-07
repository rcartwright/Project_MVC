
<?php // if the form was submitted
if($_POST){

    // instantiate category object
    $category = new CategoryModel($db);

    // set category property values
    $category->name = $_POST['name'];

    // create the category
    if($category->create()){ ?>
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        category was created.
        </div>
    <?php }

    else { ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Unable to create category.
        </div>
    <?php }
}

?>

<div class='page-header'>
<h1>Create Product</h1>
</div>

<!-- HTML form for creating a category -->
<form action='create' method='post'>

    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' required></td>
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