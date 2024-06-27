$(function() {
    /**
     * Sweet alert confirmation template
     * @returns {any}
     */
    function sweatAlertConfirmation(messageText,messageIcon,messageBtnText,messageBtnStyle,messageCancelStyle) {
        return Swal.fire({
            text: `${messageText}`,
            icon: `${messageIcon}`,
            buttonsStyling: false,
            showCancelButton: true,
            confirmButtonText: `${messageBtnText}`,
            focusConfirm: true,
            cancelButtonText: `<span class="mdi mdi-cancel"></span> Cancel`,
            customClass: {
                confirmButton: `${messageBtnStyle}`,
                cancelButton: `${messageCancelStyle}`,
            },
        });
    }

    /**
     * The function `sweetAlertStatusMessage` displays a SweetAlert popup with a custom message and
     * icon.
     * @param {any} messageText
     * @param {any} messageIcon
     * @returns {any}
     */
    function sweetAlertStatusMessage(messageText, messageIcon) {
        return Swal.fire({
            text: `${messageText}`,
            icon: `${messageIcon}`,
            heightAuto: false,
            buttonsStyling: false,
            customClass: {
                confirmButton: "btn btn-primary me-2",
            },
            confirmButtonText: `Ok`,
        });
    }

    $('.toggle-walk_in-btn').on('click', function() {
        _this = $(this);
        const active = $(_this).data('active');

        if (!active) {
            _this.css('background-color', 'var(--brutal-green)');
            _this.data('active', true).attr('data-active', true);
            _this.removeClass('selected_day');
            _this.removeClass('bg-brutal-yellow').addClass('bg-brutal-green');
            _this.find('.toggle-walk_in-icon').removeClass('bi-square').addClass('bi-check2-square');
        } else {
            _this.css('background-color', 'var(--brutal-yellow)');
            _this.data('active', false).attr('data-active', false);
            _this.addClass('selected_day');
            _this.removeClass('bg-brutal-green').addClass('bg-brutal-yellow');
            _this.find('.toggle-walk_in-icon').removeClass('bi-check2-square').addClass('bi-square');
        }
    });

    $('.attendee-save-btn').on('click', function (e) {
        const _this = $(this);
        _this.attr('disabled', true);
        _this.html('<i class="spinner-border spinner-border-sm" style="font-size: 32px; width: 64px; height: 64px;></i>');

        const attendee_name = $('#attendee_name').val();

        $.ajax({
            url: window.urlBase + '/admin/attendee/register',
            type: 'post',
            data: {
                'attendee_name': attendee_name
            },
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                const res = response;
                console.log(res);

                if (res.status !== undefined) {

                    let messageText = res.message;
                    let messageIcon = res.status;
                    sweetAlertStatusMessage(messageText, messageIcon);
                    setTimeout(function() {
                        window.location.href = urlBase + '/admin/dashboard';
                    }, 500);
                }

            },
            error: function (error) {
                let messageText = JSON.parse(error.responseText);
                let messageIcon = 'error';
                sweetAlertStatusMessage(messageText, messageIcon);

                setTimeout(function() {
                    
                }, 1500);
                _this.attr('disabled', false);
                _this.html('<i class="bi bi-check2-circle" style="vertical-align: 0;"></i> Punch In');
            }
        });
    });
});
