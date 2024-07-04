$(document).ready(function() {
    // let button = document.getElementsByClassName('edit-byn');
    // button.addeventlistner('click',()={

    // })
    $(".edit-btn").click(function() {
        // alert('asdasd')

        var id = $(this).data("id");
        $.ajax({
            url: 'edit.php?id='+id,
            type: 'GET',
            success: function(response) {
                console.log(response)
                $("#edit_category").modal('show');
                $("#editFormContainer").html(response);
            }
        });
    });

    $(document).on('click', '#closePopup', function() {
        $("#editPopup").hide();
    });
});