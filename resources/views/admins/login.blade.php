<!DOCTYPE html>
<html lang="en">

<head>
    @include('admins.sections.meta')
    <title>
        {{ $title }}
    </title>

    @include('admins.sections.links')

</head>

<body>
    <div class="l-wrapper d-flex flex-column justify-content-center align-items-center">
        <div class="login-container">
            <div class="lead mb-3">
                Pet Fair 2024 | Administrator
            </div>
            <div class="mb-3">
                <label for="" class="form-label">
                    Email address
                </label>
                <input id="email_address" type="text" class="form-control"/>
                <small id="helpId" class="form-text text-muted">Enter your email address</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">
                    Password
                </label>
                <input id="password" type="password" class="form-control"/>
                <small id="helpId" class="form-text text-muted">Enter your password</small>
            </div>
            <div class="">
                <button id="submitLoginCred" type="button" class="btn btn-primary">
                    Login
                </button>

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
