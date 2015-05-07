<?php

$category = new CategoryModel($db);
$stmt = $category->readAll();
$num = $stmt->rowCount();
?>
<div class='page-header'>
<h1>Categories List</h1>
</div>
<a href="create" class='btn btn-default'>Create Category</a>
<p>&nbsp;</p>
<?php
// display the categorys if there are any
if($num>0){


    echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>category</th>";
            echo "<th>Actions</th>";
        echo "</tr>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            extract($row);

            echo "<tr>";
                echo "<td>{$name}</td>";


echo "<td>";

    echo "<a delete-id='{$id}' class='btn btn-default delete-object'>Delete</a>";
echo "</td>";

            echo "</tr>";

        }

    echo "</table>";

    // paging buttons will be here
}

// tell the user there are no categorys
else{
    echo "<div>No categorys found.</div>";
}

?>



<script>
$(document).on('click', '.delete-object', function(){

    var id = $(this).attr('delete-id');
    var q = confirm("Are you sure?");

    if (q == true){

        $.post('category', {
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