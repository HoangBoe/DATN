$(document).ready(function () {
        $('#dataTables-example2').DataTable({
            responsive: true,
            bDestroy: true,
            order: [[0, "desc"]]
        });

        let lockingComment = 0;
        let lockModalLabel = '';

        $('.quick-lock').on('click', function (e) {
            e.preventDefault();
            lockingComment = $(e.target).data('comment');
            console.log($(e.target));
            if ($(e.target).data('status')) {
                lockModalLabel = 'Khoá Comment này??';
            } else {
                lockModalLabel = 'Duyệt Comment này??';
            }
            $('#lockModalLabel').text(lockModalLabel);
            $('#lock-modal').modal();
        });

        $('#btn-lock').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                method: 'POST',
                url: 'list_comment/lock',
                data: {
                    '_token': $('meta[name = "csrf-token"]').attr('content'),
                    'id': lockingComment,
                },
                success: function (resp) {
                    if (resp.success) {
                        window.location.reload(false);
                    } else {
                        alert('error');
                    }
                },
                error: function () {
                    alert('error');
                }
            });
        });

        $(document).on('click', '.fa-trash', function () {
            var deleteId = this.id;
            if (confirm("Are you sure?")) {
                $.ajax({
                    method: 'DELETE',
                    url: '/admin/news/list_comment/delete/' + deleteId,
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (resp) {
                        swal({
                                title: 'Deleted',
                                text: 'This Comment has been deleted',
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
    }
);