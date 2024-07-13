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

    $('.btn-toggle-status').click(function() {
        var button = $(this);
        var id = button.data('id');
        var currentStatus = button.data('status');
        var newStatus = currentStatus == 0 ? 1 : 0;
        
        $.ajax({
            url: 'update_status.php',
            type: 'POST',
            data: {
                id: id,
                status: newStatus
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    button.text(newStatus == 0 ? "Activate" : "Deactivate");
                    button.data('status', newStatus);
                    alert('Status updated successfully!');
                } else {
                    alert('Failed to update status.');
                }
            }
        });
    });
});