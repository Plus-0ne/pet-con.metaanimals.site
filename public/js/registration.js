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
            buttonsStyling: false,
            customClass: {
                confirmButton: "btn btn-primary me-2",
            },
            confirmButtonText: `Ok`,
        });
    }


    /**
     * Description
     * @param {any} "#submitRegistrationForm"
     * @returns {any}
     */
    $("#submitRegistrationForm").on("click", function () {
        let messageText = 'Do you want to register ?';
        let messageIcon = 'info';
        let messageBtnText = '<span class="mdi mdi-check"></span> Yes';
        let messageBtnStyle = 'btn brutal-btn bg-brutal-orange btn-lg px-4';
        let messageCancelStyle = 'btn brutal-btn bg-brutal-red btn-lg px-4 ms-2';
        sweatAlertConfirmation(messageText,messageIcon,messageBtnText,messageBtnStyle,messageCancelStyle).then((result) => {
            if (result.isConfirmed) {
                const fd = new FormData();

                fd.append('first_name',$('#first_name').val());
                fd.append('last_name',$('#last_name').val());
                fd.append('middle_name',$('#middle_name').val());
                fd.append('job_title',$('#job_title').val());
                fd.append('email_address',$('#email_address').val());
                fd.append('contact_number',$('#contact_number').val());
                fd.append('password',$('#password').val());
                fd.append('verify_password',$('#verify_password').val());

                $.ajax({
                    url: window.urlBase + '/register/create',
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
                    }
                });
            }
        });
    });

});
