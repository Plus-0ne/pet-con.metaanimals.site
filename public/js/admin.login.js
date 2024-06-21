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
    $('#submitLoginCred').on('click', function (e) {

        const fd = new FormData();

        fd.append('email_address',$('#email_address').val());
        fd.append('password',$('#password').val());

        $.ajax({
            url: window.urlBase + '/admin/validate',
            type: 'post',
            data: fd,
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

                }

            },
            error: function (error) {
                let messageText = JSON.parse(error.responseText);
                let messageIcon = 'error';
                sweetAlertStatusMessage(messageText, messageIcon);
            }
        });
    });
});
