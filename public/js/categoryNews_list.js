$(".fa-trash").click(function () {
    var deleteId = this.id;
    if (confirm("Are you sure?")) {
        $.ajax({
            method: 'DELETE',
            url: '/admin/categoryNews/' + deleteId,
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (resp) {
                swal({
                        title: 'Deleted',
                        text: 'This category has been deleted',
                        type: 'success',
                        allowOutsideClick: true,
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            $("#row-item" + deleteId).remove();
                            window.location.reload();
                        }
                    });
            },
            error: function (resp) {
                swal("Error", "Delete Failed", "error");
            }
        })
    }
});

$(".btn-quick-edit").click(function () {
    var editId = $(this).closest('.row-item').attr('id').replace('row-item-', '');
    $.ajax({
        method: 'GET',
        url: '/admin/categoryNews/' + editId + '/quickEdit',
        data: {
            '_token': $('meta[name = "csrf-token"]').attr('content')
        },
        success: function (resp) {
            $('form[name = "quick_edit_form"] input[name = "quick-update-id"]').val(resp.obj.id);
            $('form[name = "quick_edit_form"] input[name = "name"]').val(resp.obj.name);

        },
        error: function () {
            alert('error');
        }
    });
    $('#edit-modal').modal();
    $('#edit-modal').on('hide.bs.modal', function () {
        $('.preview_images').empty();
    });
    return false;
});

$(function () {
    if ($(".alert-success")[0]) {
        swal({
                title: 'Updated',
                text: 'Category information updated into dababase',
                type: 'success',
                allowOutsideClick: true,
            },
            function (isConfirm) {
                if (isConfirm) {
                    window.location.href = '/admin/categoryNews';
                }
            });
    }
});