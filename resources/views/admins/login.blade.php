<!DOCTYPE html>
<html lang="en">

<head>
    @include('admins.sections.meta')
    <title>
        {{ $title }}
    </title>

    @include('admins.sections.links')

</head>

<body class="striped-bg">
    <div class="wrapper d-flex flex-column justify-content-center align-items-center">
        <div class="login-container">
            <div class="brutal-card-body">
                <div class="brutal-card-input">
                    <label for="" class="form-label">
                        Email (@)
                    </label>
                    <input id="email_address" type="text"/>
                </div>
                <div class="brutal-card-input mt-5 mb-3">
                    <label for="" class="form-label">
                        Password
                    </label>
                    <input id="password" type="password"/>
                </div>
                <div class="">
                    <button id="submitLoginCred" type="button" class="btn brutal-btn bg-brutal-yellow w-100" style="height: 55px;">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="l-footer">

    </div>
    @include('jsVars')
    @include('admins.sections.scripts')
    <script src="{{ asset('js/admin.login.js') }}"></script>
</body>

</html>
