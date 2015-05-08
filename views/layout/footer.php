     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<script>
$( document ).on('click', '.delete-object', function(){

    var id = $(this).attr('delete-id');
    var q = confirm("Are you sure?");

    if (q == true){

        $.post('delete', {
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

     </body>
	</html>