<!DOCTYPE html>
<html lang="en">

<head>
    @include('sections.meta')
    <title>
        {{ $title }}
    </title>
    @include('sections.styles')
    <link rel="stylesheet" href="{{ asset('css/style.v1.css?v=1') }}">
</head>

<body>
    <div class="wrapper striped-bg">
        <div class="container-fluid bg-container-pet">
            <div class="row">
                <div class="col-12 py-5">
                    <div class="container-fluid px-4 py-5 my-5 text-center">
                        <div class="lc-block mb-4">
                            <div editable="rich">
                                <h2 class="display-2 fw-bold text-outlined text-brutal-yellow">
                                    Registration
                                </h2>
                            </div>
                        </div>

                        <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                            <a class="btn brutal-btn bg-brutal-yellow btn-lg px-4 gap-3" href="{{ route('landing') }}" role="button" style="width: 225px; height: 52px;">
                                Go Back
                            </a>
                        </div>
                        {{-- <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <img class="img-fluid"
                                src="https://lclibrary.b-cdn.net/starters/wp-content/uploads/sites/15/2021/10/undraw_going_up_ttm5.svg"
                                width="" height="783" srcset="" sizes="" alt="">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div id="firstContainer" class="container">
            <div class="row pt-5">
                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name</label>
                        <input id="first_name" type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your given name</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last name <span class="text-danger"> *</span></label>
                        <input id="last_name" type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your family name</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="middle_name" class="form-label">Middle name <span class="text-danger"> *</span></label>
                        <input id="middle_name" type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your middle name</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="job_title" class="form-label">Job Title <span class="text-danger"> *</span></label>
                        <input id="job_title" type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your job title or others</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="email_address" class="form-label">Email address <span class="text-danger"> *</span></label>
                        <input id="email_address" type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your email address</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number <span class="text-danger"> *</span></label>
                        <input id="contact_number" type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your Mobile/Telephone number</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password <span class="text-danger"> *</span></label>
                        <input id="password" type="password" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your password</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="verify_password" class="form-label">Verify Password <span class="text-danger"> *</span></label>
                        <input id="verify_password" type="password" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please verify your password</small>
                    </div>
                </div>


            </div>
            <div class="row pb-5">
                <div class="col-12">
                    <button id="submitRegistrationForm" type="button" class="btn btn-primary btn-lg">
                        Register
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                {{-- <div class="col-12 col-lg-6 py-5">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sunt a, porro commodi aliquid beatae
                    dolorem. Accusamus dolores temporibus alias unde quae voluptas optio minus cupiditate illo fugiat,
                    voluptatem soluta?
                </div>
                <div class="col-12 col-lg-6 py-5">

                    <ul class="list-group list-group-numbered">
                        <li class="list-group-item active">Active item</li>
                        <li class="list-group-item">Item</li>
                        <li class="list-group-item disabled">Disabled item</li>
                    </ul>


                </div> --}}
                <div class="col-12 text-center py-5">
                    <small>
                        Copyright @2024
                    </small>
                </div>
            </div>
        </div>
    </div>
    @include('sections.scripts')
    <script src="{{ asset('js/registration.js') }}"></script>
</body>

</html>
