$( document ).ready(function () {
    let lockingCustomer = 0;
    let lockModalLabel = '';

    $('.quick-lock').on('click', function (e) {
        e.preventDefault();
        lockingCustomer = $(e.target).data('customer');
        if ($(e.target).data('status')) {
            lockModalLabel = 'Khoá tài khoản này???';
        }else {
            lockModalLabel = 'Mở khoá tài khoản này???';
        }
        $('#lockModalLabel').text(lockModalLabel);
        $('#lock-modal').modal();
    });

    $('#btn-lock').on('click', function (e) {
        e.preventDefault();
        $.ajax({
            method: 'POST',
            url: '/admin/accountCustomer/lock',
            data: {
                '_token': $('meta[name = "csrf-token"]').attr('content'),
                'id': lockingCustomer,
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
    }
);
