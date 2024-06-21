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
                const _button = $("#submitRegistrationForm");

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

                        _button.attr('disabled', false);
                        _button.html('<i class="bi bi-check2-circle"></i>');

                        setTimeout(function() {
                            window.location.href = window.urlBase;
                        }, 750);
                    }
                });
            }
        });
    });

    $('.availment-days-btn').on('click', function() {
        _this = $(this);
        const date = $(_this).data('date');
        const active = $(_this).data('active');

        if (!active) {
            _this.css('background-color', 'var(--brutal-green)');
            _this.data('active', true).attr('data-active', true);
            _this.removeClass('bg-brutal-yellow').addClass('bg-brutal-green');
            _this.find('.availment-days-icon').removeClass('bi-square').addClass('bi-check2-square');
        } else {
            _this.css('background-color', 'var(--brutal-yellow)');
            _this.data('active', false).attr('data-active', false);
            _this.removeClass('bg-brutal-green').addClass('bg-brutal-yellow');
            _this.find('.availment-days-icon').removeClass('bi-check2-square').addClass('bi-square');
        }
    });

    let exhibitor_item_counters = {
        'services':   0,
        'requests':   0,
        'equipments': 0
    };
    $('.exhibitor-add-new-btn').on('click', function() {
        const group = $(this).data('group');
        exhibitor_item_counters[group]++;
        const template = `
            <input type="text" class="exhibitor-list-${group}-input brutal-form-input" data-id="${exhibitor_item_counters[group]}">
        `;

        const new_row = $(`.exhibitor-list-${group}-container`).append(template);

        $(`.exhibitor-list-${group}-input[data-id="${exhibitor_item_counters[group]}"]`).focus();
    });
    $('.payment-gateways-btn').on('click', function() {
        const group = $(this).data('group');

        $('.payment-gateways-btn').removeClass('bg-brutal-blue bg-brutal-red bg-brutal-green').addClass('bg-brutal-grey');
        $('.payment-gateways-btn').css('background-color', 'var(--brutal-grey)');
        $(this).removeClass('bg-brutal-grey').addClass('bg-brutal-green');
        $(this).css('background-color', 'var(--brutal-green)');

        $('.payment-gateways-container').hide();
        $(`.payment-gateways-container[data-group="${group}"]`).fadeIn('fast');
    });
    $('.payment-receipt-upload-btn').on('click', function() {
        $('#fileInput').trigger('click');
    });
    $("#fileInput").on("change", function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.payment-receipt-preview').attr("src", e.target.result);
                $('.payment-receipt-preview').fadeIn('fast');
                $('.submit-btn').attr('disabled', false);
                $('.submit-btn').removeClass('bg-brutal-grey').addClass('bg-brutal-green');
                $('.submit-btn').html('<i class="bi bi-check2-square" style="vertical-align: 0;"></i> I agree, register');
            };
            reader.readAsDataURL(file);
        }
    });
    $('.submit-btn').on('click', function() {
        $(this).html('Sorry, not done yet! :)');
    });
});
