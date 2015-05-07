<?php

$product = new ProductModel($db);
$stmt = $product->readAll();
$num = $stmt->rowCount();
?>

<div class='page-header'>
<h1>Products List</h1>
</div>

<?php

// display the products if there are any
if($num>0){

    $category = new CategoryModel($db);

    echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Product</th>";
            echo "<th>Price</th>";
            echo "<th>Description</th>";
            echo "<th>Created</th>";
            echo "<th>Updated</th>";
            echo "<th>Category</th>";
            echo "<th>Actions</th>";
        echo "</tr>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            extract($row);

            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td>{$price}</td>";
                echo "<td>{$description}</td>";
                echo "<td>{$created}</td>";
                echo "<td>{$modified}</td>";
                echo "<td>";
                    $category->id = $category_id;
                    $category->readName();
                    echo $category->name;
                echo "</td>";

echo "<td>";

    echo "<a href='edit/{$id}' class='btn btn-default left-margin'>Edit</a>";
    echo "<a delete-id='{$id}' class='delete-object btn btn-default'>Delete</a>";
echo "</td>";

            echo "</tr>";

        }

    echo "</table>";

    // paging buttons will be here
}

// tell the user there are no products
else{
    echo "<div>No products found.</div>";
}

?>



<script>
$(document).on('click', '.delete-object', function(){

    var id = $(this).attr('delete-id');
    var q = confirm("Are you sure?");

    if (q == true){

        $.post('./', {
            object_id: id
        }, function(data){
            location.reload();
        }).fail(function() {
            alert('Unable to delete.');
        });

    }

    return false;
});
</script>